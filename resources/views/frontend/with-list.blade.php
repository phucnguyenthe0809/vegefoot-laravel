@extends('frontend.layout.layout')
@section('title','Danh sách sản phẩm')
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
                        <th>Product List</th>
                        <th>&nbsp;</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/product-1.jpg);"></div></td>
                        
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
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/product-2.jpg);"></div></td>
                        
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

                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>
                        
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

                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/product-5.jpg);"></div></td>
                        
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

                      <tr class="text-center">
                        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
                        
                        <td class="image-prod"><div class="img" style="background-image:url(images/product-6.jpg);"></div></td>
                        
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
    </div>
</section>

@include('frontend.layout.include.block-subscribe')

@stop