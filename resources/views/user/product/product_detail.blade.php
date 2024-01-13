@extends('user.main')
@section('content')
    <section class="product-detail">
        <form action="/cart/add" method="POST">
            <div class="container">
                <div class="breadcrumb">
                    <ul class="heading-text-product">
                        <li><a href="#">Sản Phẩm</a></li>
                        <li><a href="#">{{$product -> name}}</a></li>
                    </ul>
                </div>
                <div class="row-grid">
                    <div class="product-detail-left">
                        
                        <div class="product-detail-items">
                            @php
                            $image_children = explode('*', $product -> image_children)   
                            @endphp
                            @foreach ($image_children as $item)
                                <img src="{{$item}}" alt="">
                            @endforeach
                            {{-- <img class="active" src="./assets/images/productDetail1.jpg" alt="">
                            <img src="./assets/images/productDetail2.jpg" alt="">
                            <img src="./assets/images/productDetail3.jpg" alt="">
                            <img src="./assets/images/productDetail4.jpg" alt=""> --}}
                        </div>
                        <div class="main-image-container">
                            <img class="main-image" src="{{asset($product -> image)}}" alt="">
                        </div>
                        
                    </div>
                    <div class="product-detail-right">
                        <div class="product-detail-right-infor">
                            <h2 class="product-detail-title">{{$product -> name}}</h2>
                            <p>{{$product -> material}}</p>
                            <div class="hot-product-item-price">
                                <p>{{$product -> price_sale}}đ <span> {{$product -> price_normal}}đ </span> </p>
                            </div>
                            
                        </div>
                        <div class="product-detail-right-actions">
                            <div class="product-quantity">
                                <a href="#" class="quantity-reduce">-</a>
                                <input class="quantity-input" type="number" value="0" onKeyDown="return false" name="product_qty">
                                <input type="hidden" value="{{$product -> id}}" name="product_id">
                                <a href="#" class="quantity-augure">+</a>
                            </div>
                            <div class="product-buy-btn">
                                <button type="submit" class="btn">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                        <div class="product-detail-right-policy">
                            <div class="product-policy">
                                <div class="product-policy-item">
                                    <div class="produc-policy-icon">
                                        <img src="https://static.coolmate.me/images/icons/icon3.svg" alt="Đổi trả với số điện thoại">
                                    </div>
                                    <span class="product-policy-title">
                                        "Đổi trả cực dễ"
                                        <br>
                                        "chỉ cần số điện thoại"
                                    </span>
                                </div>
                                <div class="product-policy-item">
                                    <div class="produc-policy-icon">
                                        <img src="https://static.coolmate.me/images/icons/icon4.svg" alt="Đổi trả với số điện thoại">
                                    </div>
                                    <span class="product-policy-title">
                                        "Miễn phí vận chuyển"
                                        <br>
                                        "cho đơn hàng trên 200k"
                                    </span>
                                </div>
                                <div class="product-policy-item">
                                    <div class="produc-policy-icon">
                                        <img src="https://static.coolmate.me/images/icons/icon5.svg" alt="Đổi trả với số điện thoại">
                                    </div>
                                    <span class="product-policy-title">
                                        "60 ngày đổi trả"
                                        <br>
                                        "vì bất kỳ lý do gì"
                                    </span>
                                </div>
                                <div class="product-policy-item">
                                    <div class="produc-policy-icon">
                                        <img src="https://static.coolmate.me/images/icons/icon2.svg" alt="Đổi trả với số điện thoại">
                                    </div>
                                    <span class="product-policy-title">
                                        "Hotline 1900.27.27.37"
                                        <br>
                                        "hỗ trợ từ 8h30 - 22h"
                                        <br>
                                        "mỗi ngày"
                                    </span>
                                </div>
                                <div class="product-policy-item">
                                    <div class="produc-policy-icon">
                                        <img src="https://static.coolmate.me/images/icons/icon1.svg" alt="Đổi trả với số điện thoại">
                                    </div>
                                    <span class="product-policy-title">
                                        "Đến tận nơi nhận hàng trả,"
                                        <br>
                                        "hoàn tiền trong 24h"
                                    </span>
                                </div>
                                <div class="product-policy-item">
                                    <div class="produc-policy-icon">
                                        <img src="https://static.coolmate.me/images/icons/icon3.svg" alt="Đổi trả với số điện thoại">
                                    </div>
                                    <span class="product-policy-title">
                                        "Giao hàng nhanh"
                                        <br>
                                        "toàn quốc"
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail-right-des">
                            <div class="product-des">
                                <a href="#" class="product-des-heading">Đặc điểm nổi bật</a>
                                <div class="des-list">
                                    <ul class="des-list-items">
                                        {{-- <li>Thành phần: 100% Polyester, định lượng 40gsm</li>
                                        <li>Kiểu dệt: Teffeta Ripstop Woven</li>
                                        <li>Vải có tính năng trượt nước, chịu được các cơn mưa nhỏ</li>
                                        <li>Vải xử lí hoàn thiện tính năng Nhanh khô (Quick-Dry)</li>
                                        <li>Trọng lượng áo siêu nhẹ chỉ 130 gam (cỡ 3XL)</li>
                                        <li>Áo mỏng giúp việc thoát hơi và làm khô nhanh hơn</li>
                                        <li>Tự hào sản xuất tại Việt Nam</li>
                                        <li>Người mẫu: 182 cm - 77kg, mặc áo 2XL, quần 2XL</li> --}}
                                        {!!$product -> desc!!}
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-content">
                    <div class="product-detail-content">
                        <h3>Chi Tiết Sản Phẩm</h3>
                        {{-- <img src="./assets/images/detail-des.jpg" alt="">
                        <p>
                            Áo khoác chạy bộ là một trong những món đồ thể thao được tìm kiếm rất nhiều gần đây bên cạnh những món đồ quen thuộc như quần short, áo ba lỗ, giày chạy bộ… Áo khoác chạy bộ có mũ Fast & Free siêu nhẹ thoáng mát đến từ thương hiệu CoolMate là lựa chọn tuyệt vời cho mọi đối tượng. Tham khảo ngay nhé!
                        </p> --}}
                        {!!$product -> content!!}
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </section>
</body>
</html>
@endsection