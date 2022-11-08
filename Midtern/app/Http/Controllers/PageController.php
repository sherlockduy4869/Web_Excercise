<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Products;
use App\Models\Type_products;

class PageController extends Controller
{

    public function getLoaiSp($type){
        $type_product = Type_Products::all();
        $sp_theoloai = Products::where('id_type', $type)->get();
        $sp_khac = Products::where('id_type','<>',$type)->paginate(3);
        return view('page.loai_sanpham', compact('sp_theoloai','type_product','sp_khac'));
    }

    public function getChiTiet(){
        return view('page.chitiet_sanpham');
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


}
