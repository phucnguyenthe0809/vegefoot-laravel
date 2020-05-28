@extends('frontend.layout.layout')
@section('title','Danh sách sản phẩm')
@section('main')
@include('frontend.layout.include.block-title-image')
<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 ftco-animate fadeInUp ftco-animated">
                      <form action="#" class="billing-form">
                          <h3 class="mb-4 billing-heading">Thông tin thanh toán</h3>
                <div class="row align-items-end">
                    <div class="col-md-12">
                  <div class="form-group">
                      <label for="firstname">Họ và tên</label>
                    <input type="text" class="form-control" placeholder="VD:Nguyễn Thế Phúc">
                  </div>
                </div>
              <div class="w-100"></div> 
                  <div class="col-md-12">
                      <div class="form-group">
                      <label for="streetaddress">Địa chỉ</label>
                    <input type="text" class="form-control" placeholder="VD: Dũng tiến - Thường Tín - Hà Nội">
                  </div>
                  </div> 
      
                  <div class="w-100"></div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label for="phone">Phone</label>
                    <input type="text" class="form-control" placeholder="VD:0356653300">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="emailaddress">Email Address</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
              </div>

              </div>
            </form><!-- END -->
                  </div>
                  <div class="col-xl-5">
            <div class="row mt-5 pt-3">
                <div class="col-md-12 d-flex mb-5">
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Cart Total</h3>
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
                      <p><a href="#" class="btn btn-primary py-3 px-4">Place an order</a></p>
                              </div>
                              
                </div>
           
            </div>
        </div> <!-- .col-md-8 -->
      </div>
    </div>
  </section>
  @stop