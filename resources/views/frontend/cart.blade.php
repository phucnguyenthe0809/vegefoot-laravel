@extends('frontend.layout.layout')
@section('title','Giỏ hàng')
@section('main')
@include('frontend.layout.include.block-title-image')
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate fadeInUp ftco-animated">
            <div class="cart-list">
                <table class="table">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
                        
                        <td class="product-name">
                            <h3>Ớt chuông</h3>
                            <p>100% Thực phẩm sạch, tập trung chủ yếu với dòng hữu cơ,,thuận tự nhiên được chọn lọc từ nguồn cung cấp uy tín</p>
                        </td>
                        
                        <td class="price">$4.90</td>
                        
                        <td class="quantity">
                            <div class="input-group mb-3">
                             <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                          </div>
                      </td>
                        
                        <td class="total">$4.90</td>
                      </tr><!-- END TR-->

                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>
                        
                        <td class="product-name">
                            <h3>Ớt chuông</h3>
                            <p>100% Thực phẩm sạch, tập trung chủ yếu với dòng hữu cơ,,thuận tự nhiên được chọn lọc từ nguồn cung cấp uy tín</p>
                        </td>
                        
                        <td class="price">$15.70</td>
                        
                        <td class="quantity">
                            <div class="input-group mb-3">
                             <input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                          </div>
                      </td>
                        
                        <td class="total">$15.70</td>
                      </tr><!-- END TR-->
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-lg-8 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
            <div class="cart-total mb-3">
                <h3>Mã giảm giá</h3>
                <p>Hãy điền mã giảm giá nếu có</p>
                  <form action="#" class="info">
          <div class="form-group">
              <label for="">Mã giảm giá</label>
            <input type="text" class="form-control text-left px-3" placeholder="">
          </div>
        </form>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Sử dụng mã</a></p>
        </div>
        <div class="col-lg-4 mt-5 cart-wrap ftco-animate fadeInUp ftco-animated">
            <div class="cart-total mb-3">
                <h3>Tính tiền</h3>
                <p class="d-flex">
                    <span>Tổng tiền</span>
                    <span>$20.60</span>
                </p>
                <p class="d-flex">
                    <span>Tiền triết khấu</span>
                    <span>$3.00</span>
                </p>
                <hr>
                <p class="d-flex total-price">
                    <span>Tổng tiền</span>
                    <span>$17.60</span>
                </p>
            </div>
            <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Hoàn tất thanh toán</a></p>
        </div>
    </div>
    </div>
</section>

@include('frontend.layout.include.block-subscribe')

@stop