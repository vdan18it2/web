@extends('layouts.be')
 @section('navbar')
     
                
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="/blog/public">Trang chủ</a>
                      </li>
                      <li><a href="/blog/public/sukien">Sự kiện</a></li>
                      <li><a href="/blog/public/datphong">Đặt phòng</a></li>
                      <li><a href="/blog/public/contact">Liên hệ</a></li>
                    </ul>
                  </div>  

                  @endsection 


    @section('body')
        
 
    
  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Danh sách phòng</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="/blog/public/phong" class="d-block mb-0 thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="/blog/public/phong">Phòng Twin Deluxe</a></h3>
                <strong class="price">50.000đ / một đêm</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Phòng Suite Twin</a></h3>
                <strong class="price">500.000đ / một đêm</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Phòng SJunior Suite đôi</a></h3>
                <strong class="price">250.000đ / một đêm</strong>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Phòng Grand Suite đôi</a></h3>
                <strong class="price">300.000đ / một đêm</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="#" class="d-block mb-0 thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">Phòng Superior Đôi</a></h3>
                <strong class="price">800.000đ / một đêm</strong>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
              <div class="img-border">
                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="images/img_2.jpg" alt="" class="img-fluid">
                </a>
              </div>

              <img src="images/img_1.jpg" alt="Image" class="img-fluid image-absolute">
            
          </div>
          <div class="col-md-5 ml-auto">
            

            <div class="section-heading text-left">
              <h2 class="mb-5">Thông tin</h2>
            </div>
            <p class="mb-4">Khách sạn Hoàng Hôn luôn mang vẻ đẹp hiện đại xen lẫn nét cổ kính. Đặt khách sạn sớm nhất để hưởng trọn ưu đãi, hứa hẹn một kì nghỉ với những ...</p>
            <p><a href="https://vimeo.com/28959265" class="popup-vimeo text-uppercase">Xem Video <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">TÍNH NĂNG HIỆN CÓ</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-pool display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Hồ bơi</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-desk display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Gọi thức ăn nhanh</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-exit display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Thoát hiểm an toàn</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-parking display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Bãi đổ xe</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Tạo mẫu tóc</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-minibar display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Quầy bar</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Thức uống</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-cab display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Thuê ô tô</h2>
            </div>
          </div>

          

          

          

        </div>
      </div>
    </div>
    


    @endsection 