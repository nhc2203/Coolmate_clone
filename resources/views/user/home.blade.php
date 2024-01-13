@extends('user.main')
@section('content')
<section class="slider">
    @include('user.parts.slider')
</section>
<section class="hot-product">
    <div class="container">
        <div class="heading-product">
            <a href="#" class="heading-text active">Sản Phẩm Mới</a>
            <a href="#" class="heading-text">Bán Chạy Nhất</a>
        </div>
        <div class="row-grid">
            @foreach ($products as $product)
                <div class="hot-product-item">
                    <a href="/home/product_detail/{{$product -> id}}"><img src="{{/*secure_*/asset($product -> image)}}" alt=""></a>
                    <a href="/home/product_detail/{{$product -> id}}"><p>{{$product -> name}}</p></a>
                    <span>{{$product -> material}}</span>
                    <div class="hot-product-item-price">
                        <p>{{$product -> price_sale}}<sub>đ</sub> <span>{{$product -> price_normal}}<sub>đ</sub></span> </p>
                    </div>
                </div>
            @endforeach
            {{-- <div class="hot-product-item">
                <a href="#"><img src="./assets/images/product1.jpg" alt=""></a>
                <a href="#"><p>Quần Kaki Excool dáng Straight</p></a>
                <span>100% cotton</span>
                <div class="hot-product-item-price">
                    <p>56,000<sub>đ</sub> <span>80,000<sub>đ</sub></span> </p>
                </div>
            </div>
            <div class="hot-product-item">
                <a href="#"><img src="./assets/images/product1.jpg" alt=""></a>
                <a href="#"><p>Quần Kaki Excool dáng Straight</p></a>
                <span>100% cotton</span>
                <div class="hot-product-item-price">
                    <p>56,000<sub>đ</sub> <span>80,000<sub>đ</sub></span> </p>
                </div>
            </div>
            <div class="hot-product-item">
                <a href="#"><img src="./assets/images/product1.jpg" alt=""></a>
                <a href="#"><p>Quần Kaki Excool dáng Straight</p></a>
                <span>100% cotton</span>
                <div class="hot-product-item-price">
                    <p>56,000<sub>đ</sub> <span>80,000<sub>đ</sub></span> </p>
                </div>
            </div>
            <div class="hot-product-item">
                <a href="#"><img src="./assets/images/product1.jpg" alt=""></a>
                <a href="#"><p>Quần Kaki Excool dáng Straight</p></a>
                <span>100% cotton</span>
                <div class="hot-product-item-price">
                    <p>56,000<sub>đ</sub> <span>80,000<sub>đ</sub></span> </p>
                </div>
            </div>
            <div class="hot-product-item">
                <a href="#"><img src="./assets/images/product1.jpg" alt=""></a>
                <a href="#"><p>Quần Kaki Excool dáng Straight</p></a>
                <span>100% cotton</span>
                <div class="hot-product-item-price">
                    <p>56,000<sub>đ</sub> <span>80,000<sub>đ</sub></span> </p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection
