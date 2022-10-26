<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopee</title>
        <link rel="stylesheet" href="style.css">

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>

        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <!-- JS file -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    </head>
    <body class="antialiased">
    <section class="header">
        <div class="top">
            <div class="top-left">
                <span>Khênh Người Bán | Trở thành Người bán Shopee | Tải ứng dụng | Kết nối <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i></span>
            </div>
            <div class="top-right">
                <span><i class="fa-solid fa-bell"></i> Thông báo | <i class="fa-solid fa-question"></i> Câu hỏi | <i class="fa-solid fa-earth-americas"></i> Tiếng Việt | Đăng Ký | Đăng Nhập</span>
            </div>
        </div>
        <div class="middle">
            <div class="logo">
                <img src="./image/logo.PNG" alt="">
            </div>
            <div class="search-menu">
                <div class="search">
                    <input type="text" placeholder="Đăng ký để nhận voucher bạn mới lên đến 70k!">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="icons">
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>
        <div class="bottom">
            <ul>
                <li>
                    Áo Khoác
                </li>
                <li>
                    Dép
                </li>
                <li>
                    Túi Xách Nữ
                </li>
                <li>
                    Áo Croptop
                </li>

                <li>
                    Ốp Phone
                </li>
                <li>
                    Váy
                </li>
                <li>
                    Tai nghe Bluetooth
                </li>
                <li>
                    Bánh tráng phơi sương
                </li>
            </ul>
        </div>  
    </section>
    <p class="title">DANH MỤC</p>
    <section class="main">
        <div class="item-list">
            <div class="item">
                <img src="./image/men-clothes.jpg" alt="">
                <h5><a href="{{route('hehe')}}">Thời trang nam</a></h5>
            </div>
            <div class="item">
                <img src="./image/2.PNG" alt="">
                <h5>Điện thoại và phụ kiện</h5>
            </div>
            <div class="item">
                <img src="./image/3.PNG" alt="">
                <h5>Thiết bị điện tử</h5>
            </div>
            <div class="item">
                <img src="./image/4.PNG" alt="">
                <h5>Máy tính & Laptop</h5>
            </div>
            <div class="item">
                <img src="./image/5.PNG" alt="">
                <h5>Máy ảnh & máy quay phim</h5>
            </div>
            <div class="item">
                <img src="./image/6.PNG" alt="">
                <h5>Đồng hồ</h5>
            </div>
            <div class="item">
                <img src="./image/7.PNG" alt="">
                <h5>Giày dép nam</h5>
            </div>
            <div class="item">
                <img src="./image/8.PNG" alt="">
                <h5>Thiết bị điện gia dụng</h5>
            </div><div class="item">
                <img src="./image/9.PNG" alt="">
                <h5>Thể thao & du lịch</h5>
            </div>
            <div class="item">
                <img src="./image/10.PNG" alt="">
                <h5>Ô tô & Xe máy & Xe đạp</h5>
            </div>
        </div>

        <div class="item-list">
            <div id="list-2" class="item">
                <img src="./image/11.PNG" alt="">
                <h5>Thời trang nữ</h5>
            </div>
            <div class="item">
                <img src="./image/12.PNG" alt="">
                <h5>Mẹ & Bé</h5>
            </div>
            <div class="item">
                <img src="./image/13.PNG" alt="">
                <h5>Nhà cửa & Đời sống</h5>
            </div>
            <div class="item">
                <img src="./image/14.PNG" alt="">
                <h5>Sắc đẹp</h5>
            </div>
            <div class="item">
                <img src="./image/15.PNG" alt="">
                <h5>Sức khỏe</h5>
            </div>
            <div class="item">
                <img src="./image/16.PNG" alt="">
                <h5>Giày dép nữ</h5>
            </div>
            <div class="item">
                <img src="./image/17.PNG" alt="">
                <h5>Túi ví nữ</h5>
            </div>
            <div class="item">
                <img src="./image/18.PNG" alt="">
                <h5>Phụ kiện & Trang sức nữ</h5>
            </div><div class="item">
                <img src="./image/19.PNG" alt="">
                <h5>Bách hóa Online</h5>
            </div>
            <div class="item">
                <img src="./image/20.PNG" alt="">
                <h5>Nhà sách Online</h5>
            </div>
        </div>
        
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
