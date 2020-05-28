@extends('frontend.layout.layout')
@section('title','Danh sách sản phẩm')
@section('main')
@include('frontend.layout.include.block-title-image')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate fadeInUp ftco-animated">
                <a href="images/product-1.jpg" class="image-popup"><img src="images/product-1.jpg" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate fadeInUp ftco-animated">
                <h3>Ớt chuông</h3>
                <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>
                <p class="price"><span>$120.00</span></p>
                <p>Bằng bí quyết chọn lọc những hạt đậu xanh chất lượng cao, những trái sầu riêng thơm ngon chín tự nhiên, kết hợp với kinh nghiệm quản lý chất lượng, công ty Phúc An Phát đã cho ra đời những sản phẩm bánh pía giữ lại trọn vẹn hương vị tự nhiên vốn có.

Bánh Phúc An cam kết không dùng đường hóa học, không dùng hương liệu sầu riêng, không dùng bột pha chế, đây là những tiêu chí mà sản phẩm khác không có được.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                 {{-- <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                      <option value="">Nhỏ</option>
                    <option value="">Trung bình</option>
                    <option value="">Lớn</option>
                    <option value="">Rất lớn</option>
                  </select>
                </div>  --}}
                </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
                 <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                   <i class="ion-ios-remove"></i>
                    </button>
                    </span>
                 <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                 <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                     <i class="ion-ios-add"></i>
                 </button>
                 </span>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12">
                  <p style="color: #000;">600 kg trong kho</p>
              </div>
          </div>
          <p><a href="cart.html" class="btn btn-black py-3 px-5">Thêm vào giỏ</a></p>
            </div>
        </div>
    </div>
</section>

@include('frontend.layout.include.block-related-product')
@include('frontend.layout.include.block-subscribe')

@stop