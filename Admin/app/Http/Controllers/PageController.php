<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Slide;
use App\Models\Cart;
use App\Models\Products;
use App\Models\Type_products;
use App\Models\Comment;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Models\Wishlist;

class PageController extends Controller
{

    public function getLoaiSp($type){
        $type_product = Type_Products::all();
        $sp_theoloai = Products::where('id_type', $type)->get();
        $sp_khac = Products::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham', compact('sp_theoloai','type_product','sp_khac'));
    }

    public function getDetail(Request $request){
        $sanpham = Products::where('id', $request->id)->first();
        $splienquan = Products::where('id','<>', $sanpham->id, 'and','id_type','=', $sanpham->id_type)->paginate(3);
        $comments = Comment::where('id_product', $request->id)->get();
        return view('page.chitiet_sanpham', compact('sanpham','splienquan','comments'));
    }

    public function getLienHe(){
        return view('page.lienhe');
    }

    public function getAbout(){
        return view('page.about');
    }

    public function getIndex(){
        $slide = Slide::all();
        $new_product = Products::where('new', 1)->paginate(8);
        $sanpham_khuyenmai = Products::where('promotion_price','<>',0)->paginate(4);
        return view('page.trangchu', compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getAddToCart(Request $request, $id){
        $product  = Products::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckOut(){
        if(Session::has('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            return view('page.checkout')->with([
                'cart'=>Session::get('cart'),
                'product_cart' => $cart->items,
                'totalPrice' => $cart->totalPrice,
                'totalQty' => $cart->totalQty
            ]);
        }
        else{
            return redirect('page.trangchu');
        }
    }

    public function postCheckOut(Request $request){
        $cart = Session::get('cart');
        $customer = new Customer;
        $customer->name = $request->full_name;
        $customer->gender = $request->gender;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone_number = $request->phone;

        if(isset($request->notes)){
            $customer->note = $request->notes;
        }
        else{
            $customer->note = "Khong co ghi chu";
        }

        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $request->payment_method;

        if(isset($request->notes)){
            $bill->note = $request->notes;
        }
        else{
            $bill->note = "Khong co ghi chu";
        }

        $bill->save();

        foreach($cart->items as $key => $value){
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = $value['price'] / $value['qty'];
            $bill_detail->save();
        }

        Session::forget('cart');
        $wishlists = Wishlist::where('id_user', Session::get('user')->id)->get();
        if(isset($wishlists)){
            foreach($wishlists as $element){
                $element->delete();
            }
        }
    }

    public function getAdminAdd(){
        return view('pageadmin.formAdd');
    }

    public function getAdminEdit($id){
        $product = Products::find($id);
        return view('pageadmin.formEdit')->with('product', $product);
    }

    

    public function getIndexAdmin() {
        $products = Products::all();
        return view('pageadmin.admin') ->with(['products' => $products, 'sumSold' => count(BillDetail::all())]);
    }

    public function postAdminAdd(Request $request){
        $product = new Products();
        if($request -> hasFile('inputImage')){
            $file = $request -> file('inputImage');
            $fileName = $file -> getClientOriginalName('inputImage');
            $file -> move('source/image/product', $fileName);
        }

        $file_name = null;

        if($request->file('inputImage') != null){
            $file_name = $request -> file('inputImage')->getClientOriginalName();
        }

        $product->name = $request -> inputName;
        $product->image = $file_name;
        $product->description = $request -> inputDescription;
        $product->unit_price = $request -> inputPrice;
        $product->promotion_price = $request -> inputPromotionPrice;
        $product->unit = $request -> inputUnit;
        $product->new = $request -> inputNew;
        $product->id_type = $request -> inputType;

        $product->save();
        return $this->getIndexAdmin();
    }

    public function postAdminEdit(Request $request){

        $id = $request->editId;

        $product = new Products($id);
        if($request -> hasFile('editImage')){
            $file = $request -> file('editImage');
            $fileName = $file -> getClientOriginalName('editImage');
            $file -> move('source/image/product', $fileName);
        }

        if($request->file('editImage') != null){
            $product->image = $fileName;
        }

        $product->name = $request -> editName;
        $product->description = $request -> editDescription;
        $product->unit_price = $request -> editPrice;
        $product->promotion_price = $request -> editPromotionPrice;
        $product->unit = $request -> editUnit;
        $product->new = $request -> editNew;
        $product->id_type = $request -> editType;

        $product->save();
        return $this->getIndexAdmin();
    }

    public function postAdminDelete($id){
        $product = Products::find($id);
        $product->delete();
        return $this->getIndexAdmin();
    }
}
