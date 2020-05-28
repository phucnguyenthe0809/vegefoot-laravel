@extends('frontend.layout.layout')
@section('title','Thông tin')
@section('main')
@include('frontend.layout.include.block-title-image')
<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
                <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
      <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Chào mừng các bạn đến với UcanCode</h2>
        </div>
      </div>
      <div class="pb-md-5">
          <p>Với mong muốn đem đến cho mọi gia đình Việt những loại hoa quả sạch – tươi - ngon – dinh dưỡng nhất. Đồng thời là cầu nối để các vườn cây ăn quả sạch trên khắp cả nước của những người nông dân tâm huyết được tiếp cận gần hơn với người tiêu dùng. UcanCode.edu.vn đã được thành lập với hệ thống cửa hàng bán lẻ, cửa hàng trực tuyến sẵn sàng phục vụ cho mọi khách hàng.

        Shop hoa quả chúng tôi cung cấp đầy đủ các loại hoa quả sạch 3 miền, hoa quả nhập khẩu từ nước ngoài, cam kết tuyệt đối về chất lượng và bình ổn giá. Không chỉ bán lẻ trái cây thông thường, chúng tôi còn cung cấp giỏ hoa quả, mâm trái cây đi chùa, hoa quả gọt sẵn, ship hoa quả tận nơi nhanh chóng với mọi giá trị đơn hàng.</p>

                    <p><a href="#" class="btn btn-primary">Mua ngay</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.layout.include.block-subscribe')
@include('frontend.layout.include.block-data-review')

@include('frontend.layout.include.block-review')

<hr>

@include('frontend.layout.include.block-partner')
@include('frontend.layout.include.block-service')
@stop