<footer class="footer padding-t-100 bg-off-white">
    <div class="container">
        <div class="row footer-top padding-b-100">
            <div class="col-xl-4 col-lg-6 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer-logo">
                    <div class="image">
                        <img src="assets/users/img/logo/logo.png" alt="logo" class="logo">
                        <img src="assets/users/img/logo/dark-logo.png" alt="logo" class="dark-logo">
                    </div>
                    <p>Shoe Shop là thị trường lớn nhất của các sản phẩm giày. Nhận nhu cầu hàng ngày của bạn từ cửa hàng của chúng tôi.</p>
                </div>
                <div class="cr-footer">
                    <h4 class="cr-sub-title cr-title-hidden">
                        Contact us
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li class="location-icon">
                            Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội.
                        </li>
                        <li class="mail-icon">
                            <a href="javascript:void(0)">ChillGuy@email.com</a>
                        </li>
                        <li class="phone-icon">
                            <a href="javascript:void(0)"> +84 123 4567890</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        Shop
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <li><a href="about.html">Về chúng tôi</a></li>
                        <li><a href="track-order.html">Thông tin giao hàng</a></li>
                        <li><a href="policy.html">Chính sách bảo mật</a></li>
                        <li><a href="terms.html">Điều khoản & Điều kiện</a></li>
                        <li><a href="contact-us.html">Liên hệ với chúng tôi</a></li>
                        <li><a href="faq.html">Trung tâm hỗ trợ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer">
                    <h4 class="cr-sub-title">
                        Category
                        <span class="cr-heading-res"></span>
                    </h4>
                    <ul class="cr-footer-links cr-footer-dropdown">
                        <?php foreach ($category as $value) : ?>
                            <li><a href="index.php?user=shop&id_dm=<?= $value['id_dm'] ?>"><?= $value['ten_dm'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-sm-12 col-12 cr-footer-border">
                <div class="cr-footer cr-newsletter">
                    <h4 class="cr-sub-title">
                        Đăng ký để nhận thông tin của chúng tôi
                        <span class="cr-heading-res"></span>
                    </h4>
                    <div class="cr-footer-links cr-footer-dropdown">
                        <form class="cr-search-footer">
                            <input class="search-input" type="text" placeholder="Search here...">
                            <a href="javascript:void(0)" class="search-btn">
                                <i class="ri-send-plane-fill"></i>
                            </a>
                        </form>
                    </div>
                    <div class="cr-social-media">
                        <span><a href="javascript:void(0)"><i class="ri-facebook-line"></i></a></span>
                        <span><a href="javascript:void(0)"><i class="ri-twitter-x-line"></i></a></span>
                        <span><a href="javascript:void(0)"><i class="ri-dribbble-line"></i></a></span>
                        <span><a href="javascript:void(0)"><i class="ri-instagram-line"></i></a></span>
                    </div>
                    <div class="cr-payment">
                        <div class="cr-insta-slider swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay1.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay2.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay3.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay4.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay5.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay6.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay7.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="#" class="cr-payment-image">
                                        <img src="assets/users/img/insta/giay8.jpg" height="100px" alt="insta">
                                        <div class="payment-overlay"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cr-last-footer">
            <p><span id=""></span> <a href="index.html">SHOE SHOP</a>, Xây dựng Website bán giày</p>
        </div>
    </div>
</footer>