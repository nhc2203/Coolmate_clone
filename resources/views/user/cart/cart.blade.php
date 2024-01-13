@extends('user.main')
@section('content')
<section class="cart-section">
    <div class="container">
        <div class="cart-header">
            <p>Giỏ Hàng</p>
        </div>
        <div class="row-grid">
            <div class="cart-section-left">
                <h2 class="main-h2">Chi Tiết Đơn Hàng</h2>
                <div class="cart-section-left-detail">
                    <table>
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Sản Phẩm</th>
                                <th>Thành Tiền</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td><img src="{{/*secure_*/asset($product -> image)}}" style="width: 70px;"></td>
                                <td>
                                    <div class="cart-detail-right-infor">
                                        <h2 class="cart-detail-title">{{$product -> name}}</h2>
                                        <p>{{$product -> material}}</p>
                                        <div class="cart-item-price">
                                            <p>{{$product -> price_sale}}đ <span> {{$product -> price_normal}}đ </span> </p>
                                        </div>
                                        
                                    </div>
                                    <div class="cart-detail-right-actions">
                                        <div class="cart-quantity">
                                            <a href="#" class="quantity-reduce">-</a>
                                            <input class="quantity-input" type="number" value="{{Session::get('cart')[$product -> id]}}" onKeyDown="return false">
                                            <a href="#" class="quantity-augure">+</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>{{$product -> price_sale}}đ</p>
                                </td>
                                <td>Xóa</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2" style="text-align: center; font-weight: bold">Tổng</td>
                                <td colspan="2" style="text-align: center; font-weight: bold">299999999đ</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <button class="cart-update-btn">Cập nhập giỏ hàng</button>
                   >> <a href="/" style="font-style: italic;">Tiếp tục mua hàng</a>
                </div>
            </div>
            <div class="cart-section-right">
                <h2 class="main-h2">Thông Tin Giỏ Hàng</h2>
                <div class="cart-section-right-input-name-phone">
                    <input type="text" placeholder="Tên" name="" id="">
                    <input type="text" placeholder="Điện thoại" name="" id="">
                  </div>
                  <div class="cart-section-right-input-email">
                    <input type="text" placeholder="Email" name="" id="">
                  </div>
                  <div class="cart-section-right-select">
                    <select name="city" id="city">
                      <option value="">Tỉnh/Tp</option>
                    </select>
                    <select name="district" id="district">
                      <option value="">Quận/Huyện</option>
                    </select>
                    <select name="ward" id="ward">
                      <option value="">Phường/Xã</option>
                    </select>
                  </div>
                  <div class="cart-section-right-input-address">
                    <input type="text" placeholder="Địa chỉ" name="" id="">
                  </div>
                  <div class="cart-section-right-input-note">
                    <input type="text" placeholder="Ghi chú" name="" id="">
                  </div>
                  <button class="cart-buy-btn">Cập nhập giỏ hàng</button>
            </div>
        </div>
    </div>
<script src="{{secure_asset('frontend/assets/js/apiprovince.js')}}"></script>
</section>
@endsection