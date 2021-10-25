<?php
    include("lib_db.php");
    $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 1;
    $q = isset($_REQUEST["q"]) ? trim($_REQUEST["q"]) : "";
    if ($id <  0) return ;   
    $sql = "select * from dbbaitaplon where id=" . $id ;    
    $result = select_one($sql);
    // print_r($result);die('ok');
    if (!$result) return ;   
    $sql = "select * from dbbaitaplon where cid={$result['cid']} limit 6";      
    $resultOther = exec_select($sql);
    //print_r($resultOther);exit();
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Bài tập Lớn</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://kit.fontawesome.com/a76384134c.js" crossorigin="anonymous"></script>  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet" >
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap/js/bootstrap.js"></script>
</head>

<body>
    <div class="weblazada">
        <!-- Phan dau -->
        <div class="header">
            <div class="grid">
                <nav class="header_navbar navbar-expand-sm">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon">a</span>
                 </button>
                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="header_navbar-list navbar-nav">
                          <li class="header_navbar-item nav-item">
                            <a href="#" class="header_navbar-link header_navbar-link-active">
                              TIẾT KIỆM HƠN VỚI ỨNG DỤNG
                            </a>
                            <li class="header_navbar-item nav-item">
                              <a href="#" class="header_navbar-link header_navbar-link-active"
                              >
                                BÁN HÀNG CÙNG LAZADA
                              </a>
                            </li>
                            <li class="header_navbar-item nav-item">
                              <a href="#" class="header_navbar-link ">
                                CHĂM SÓC KHÁCH HÀNG
                              </a>
                            </li>
                            <li class="header_navbar-item nav-item">
                              <a href="#" class="header_navbar-link">
                                KIỂM TRA ĐƠN HÀNG
                              </a>
                            </li>
                            <li class="header_navbar-item nav-item">
                              <a href="#" class="header_navbar-link">
                                ĐĂNG NHẬP
                              </a>
                            </li>
                            <li class="header_navbar-item nav-item">
                              <a href="#" class="header_navbar-link">
                                ĐĂNG KÝ
                              </a>
                            </li>
                            <li class="header_navbar-item nav-item">
                              <a href="#" class="header_navbar-link">
                                CHANGE LANGUAGE
                              </a>
                            </li>
                        </li>
                    </ul>
                  </div>
                </nav>
                              
             </div>
             <div class="header-body ">
              <div class="header_search">
                   <div class="header_search-logo">
                       <a href="#"><img class="header_search-logo-img" src="images/logo.png" alt="logo"/></a>
                     </div>
                   <div class="header_search-action">
                       <input class="search-action_input" placeholder="Tìm kiếm trên Lazada" type="text"/>
                       <div class="search-action_icon">
                           <i class="fas fa-search"></i>
                       </div>
                   
                         <i class="header_search-cart fas fa-shopping-cart"></i>
                         <a href="" class="header_search-advertisenment"><img src="images/logo-momo-sale.jpg" alt="Advertisenment"/></a>
                     </div>
                 </div>
           </div>
          </div>
            
        <!-- Phan than -->
        <div class="container ">
            <div class="container_header-bgc">
                <div class="grid container_header">
                    <div class="container_header-menu">
                        <ul class="header-menu_list">
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Thiết Bị Điện Tử</a>
                            <i class="fas fa-angle-right"></i>
                            <ul class="header-menu_list-two">
                              <li class="header-menu_item_two">
                                <a href="#">Điện thoại di đống</a>
                                <ul class="header-menu_list-phone">
                                  <li>Iphone</li>
                                  <li>SamSung</li>
                                  <li>Oppo</li>
                                </ul>
                              </li>
                              <li class="header-menu_list-two">
                                <a href="#">laptop</a>
                              </li>
                              <li class="header-menu_list-two">
                                <a href="#">Máy tính bảng</a>
                              </li>
                            </ul>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Phụ Kiện Điện Tử</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">TV & Thiết Bị Điện Gia Dụng</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Sức Khỏe & Làm Đẹp</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Hàng Mẹ, Bé & Đồ Chơi</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Siêu Thị Tạp Hóa</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link"
                            >Hàng Gia dụng & Đời sống</a
                            >
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Thời Trang Nữ</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Thời Trang Nam</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Phụ Kiện Thời Trang</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Thể Thao & Du Lịch</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        <li class="header-menu_item">
                            <a href="#" class="header-menu_link">Thể Thao & Du Lịch</a>
                            <i class="fas fa-angle-right"></i>
                        </li>
                        </ul>
                    </div>
                    <div class="container_header-slide">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner slider-height">
                          <div class="carousel-item active">
                            <img src="images/banner-sale.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/banner-sale-3.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="images/banner-sale-5.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                </div>
            </div>
          <!-- Phan than chung -->
            <div class="grid container_content">
                <!-- lazmail ...... -->
                <div class="content_menu">
                    <ul class="content_menu-list">
                        <li class="content_menu-item">
                            <a href="#" class="content_menu-link" style="--text-color-hover:#ff426e">
                            <img src="images/lazzmail.png" alt="lazadamail">
                            <span>LazMail</span>
                            </a>
                        </li>
                        <li class="content_menu-item">
                            <a href="#" class="content_menu-link" style="--text-color-hover:#ff426e">
                                <img src="images/mgg.png" alt="lazadamail">
                                <span>Mã Giảm Giá</span>
                            </a>
                        </li>
                        <li class="content_menu-item">
                            <a href="#" class="content_menu-link" style="--text-color-hover:#ff426e">
                                <img src="images/napthe-voucher.png" alt="lazadamail">
                                <span>Nạp Thẻ & eVoucher</span>
                            </a>
                        </li>
                        <li class="content_menu-item">
                            <a href="#" class="content_menu-link" style="--text-color-hover:#ff426e">
                                <img src="images/global.png" alt="lazadamail">
                                <span>LazGlobal</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Phan Deal -->
                <section class="grid">
                    <div class="content_deal ">
                      <span class="content_deal-title">Deal Chớp Nhoáng</span>
                      <div class="content-header">
                        <div class="content-header_status">
                          <div class="status">Đang bán</div>
                          <div class="timesale">Kết thúc trong</div>
                          <a href="#" class="content-deal-button-all">
                            MUA SẮM TOÀN BỘ SẢN PHẨM
                          </a>
                        </div>
                      </div>
                      <div class="deal-content row ">
                      <!-- ap dung php -->

                        <?php foreach($resultOther as $item) {?>
                          <div class="col-lg-2 col-md-4 col-sm-6">
                          <div href="#" class="deal-content_card col">
                            <img class=" imgdeal" src="<?php echo $item["img"] ?>" alt="canhga">
                            <div class="card-name">
                              <?php echo $item["cardname"] ?>
                            </div>
                            <div class="card-price"><?php echo $item["cardprice"] ?></div>
                            <div class="card-price-current">
                              <span class="current-price"><?php echo $item["current-price"] ?></span>
                              <span class="current-safeoff"><?php echo $item["current-safeoff"] ?></span>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
                        

                       <!--  -->
                      </div>
                    </div>
                  </section>
                <!-- Phan tim kiem pho bien -->
                <div class="content_topsearch">
                    <div class="content_topsearch-title">Tìm kiếm phổ biến</div>
                    <div class="grid topsearch-content ">
                      <div class="topsearch-content_col">
                        <div class="topsearch-main_item ">
                          <div class="topsearch-main_item-img">
                            <img
                              src="images/maychoigame-topserach.webp"
                              alt=""
                            />
                          </div>
                          <div class="topsearch-main_item-desc">
                            <div class="desc_name">Máy chơi game</div>
                            <div class="desc_quatity">165,521 Sản phẩm</div>
                          </div>
                        </div>
                      </div>
                      <div class="topsearch-content_col-list">
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        <div class="col-list_item">
                          <div class="col-list_img">
                            <img
                              src="images/iphone-topsearch.webp"
                              alt=""
                            />
                          </div>
                          <div class="col-list_desc">
                            <div class="col-list_desc-name">Điện Thoại</div>
                            <div class="col-list_desc-quantity">997,156 Sản phẩm</div>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>

            </div>
        </div>

        
        <!-- Phan cuoi -->
        <div class="footer">
            <div class="footer-first">
                <div class="grid">
                    <div class="footer-card">
                        <div class="footer-card-list row">
                            <img
                                class="footer-card-img col-sm-7 col-lg-4"
                                src="images/img-ad-footer-1.png"
                                alt=""
                            />
                            <img
                                class="footer-card-img col-sm-7 col-lg-4"
                                src="images/img-ad-footer-2.png"
                                alt=""
                            />
                            <img
                                class="footer-card-img col-sm-7 col-lg-4"
                                src="images/img-ad-footer-3.png"
                                alt=""
                            />
                        </div>
                    </div>
                    <div class="footer-contact">
                        <div class="footer-contact_1">
                            <div class="footer-contact_1-1">
                                <span>LIÊN HỆ VỚI LAZADA</span>
                                <ul class="contact_1-1-list">
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Thứ 2 đến CN: 9h - 18h (Hotline), 7h - 22h (chat trực
                                    tuyến)
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Trung tâm hỗ trợ
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Hướng dẫn đặt hàng
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Giao hàng & Nhận hàng
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Chính sách hàng nhập khẩu
                                    </a>
                                </li>
                                <li class="contact_1-1-item">
                                    <a href="" class="contact_1-1-link">
                                    Hướng dẫn đổi trả hàng
                                    </a>
                                </li>
                                </ul>
                            </div>
                            <div class="footer-contact_1-1">
                                <span>LAZADA VIỆT NAM</span>
                                <ul class="contact_1-1-list">
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Về Lazada Việt Nam
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Bán hàng cùng Lazada
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Chương trình Lazada Afﬁliate
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Tuyển dụng
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Điều khoản mua bán hàng hóa
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Chính sách bảo mật
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Báo chí
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Bảo vệ quyền sở hữu trí tuệ
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Quy chế hoạt động sàn Lazada
                                        </a>
                                    </li>
                                    <li class="contact_1-1-item">
                                        <a href="" class="contact_1-1-link">
                                        Điều Khoản Công Cụ Tương Tác
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-contact_2">
                            <div class="footer-contact_2-header">
                                <div class="footer-contact_2-info-img logo-small-footer"></div>
                                <div class="footer-contact_2-info-contact">
                                <span style="color: var(--primary-color);"
                                    >Go where your heart beats</span
                                >
                                <span style="color: #0e136e;">Tải App Lazada</span>
                                </div><img class="footer-contact_2-info-download"src="images/img-app-1.png"alt=""/>
                                      <img class="footer-contact_2-info-download" src="images/img-app-2.png" alt=""/>
                                  </div>
                            <div class="footer-contact_2-info">
                                <div>CÔNG TY TNHH RECESS</div>
                                <div>
                                Giấy CNĐKDN: 0308808576 – Ngày cấp: 06/5/2009, được sửa đổi
                                lần thứ 19 ngày 15/8/2019.
                                </div>
                                <div>
                                Cơ quan cấp: Phòng Đăng ký kinh doanh – Sở kế hoạch và Đầu
                                tư TP.HCM
                                </div>
                                <div>
                                Địa chỉ đăng ký kinh doanh: Tầng 19, Tòa nhà Saigon Centre –
                                Tháp 2, 67 Lê Lợi, Phường Bến Nghé, Quận 1, Tp. Hồ Chí Minh,
                                Việt Nam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-second">
                <div class="grid footer-second-content">
                    <div class="footer-second-1">
                        <div class="footer-second-1-title">CÁCH THỨC THANH TOÁN</div>
                        <div class="footer-second-1-icon payment-visa"></div>
                        <div class="footer-second-1-icon payment-mastercard"></div>
                        <div class="footer-second-1-icon payment-jcb" ></div>
                        <div class="footer-second-1-icon payment-cash-on"></div>
                        <div class="footer-second-1-icon payment-napas" ></div>
                        <div class="footer-second-1-icon payment-logo"></div>
                        <div class="footer-second-1-icon payment-zalo"></div>
                        <div class="footer-second-1-icon payment-momo"></div>
                    </div>
                    <div class="footer-second-2">
                        <div class="footer-second-2-1">
                        <div class="footer-second-2-1-title">DỊCH VỤ GIAO HÀNG</div>
                        <div class="footer-second-2-1-list">
                            <span class="footer-second-2-1-item"></span>
                            <span class="footer-second-2-1-item"></span>
                            <span class="footer-second-2-1-item"></span>
                            <span class="footer-second-2-1-item"></span>
                            <img class="footer-second-2-1-img" src="images/best-express.png" alt="" >
                            <img class="footer-second-2-1-img" src="images/ahamove.png" alt="">
                        </div>
                        </div>
                        <div class="footer-second-2-1">
                            <div class="footer-second-2-1-title">CHỨNG NHẬN</div>
                            <div class="footer-second-2-1-1-a">
                                <img class="footer-second-2-1-1-img logo-pci" src="images/pcidss.png" alt="">
                                <img class="footer-second-2-1-1-img logo-fake" src="images/noikhonghanggia.png" alt="">
                                <img class="footer-second-2-1-1-img logo-iso" src="images/iso.png" alt="">
                            </div>
                            <div class="footer-second-2-1-1-b">
                                <img class="footer-second-2-1-1-img" src="images/dangky-bocongthuong.png" alt="">
                                <img class="footer-second-2-1-1-img" src="images/dathongbao-bocongthuong.png" alt="">
                                <img class="footer-second-2-1-1-img" src="images/dangky-bocongthuong.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-third">
                <div class="grid">
                    <div class="footer-third-title">
                        <div class="footer-third-title-1">
                            <span style="display: block;">Lazada Southeast Asia</span>
                            <a class="footer-third-title-1-link laz-southeast-1" href="#"></a>
                            <a class="footer-third-title-1-link laz-southeast-2" href="#"></a>
                            <a class="footer-third-title-1-link laz-southeast-3" href="#"></a>
                            <a class="footer-third-title-1-link laz-southeast-4" href="#"></a>
                            <a class="footer-third-title-1-link laz-southeast-5" href="#"></a>
                            <a class="footer-third-title-1-link laz-southeast-6" href="#"></a>
                        </div>
                        <div class="footer-third-title-2">
                            <span style="display: block;">Kết nối với chúng tôi</span>
                            <a class="footer-third-title-1-link connection-1" href="#"></a>
                            <a class="footer-third-title-1-link connection-2" href="#"></a>
                            <a class="footer-third-title-1-link connection-3" href="#"></a>
                            <a class="footer-third-title-1-link connection-4" href="#"></a>
                            <a class="footer-third-title-1-link connection-5" href="#"></a>
                            <a class="footer-third-title-1-link connection-6" href="#"></a>
                        </div>
                        <div class="footer-third-title-2 c-lazada">© Lazada 2020</div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
  </body>
</html>