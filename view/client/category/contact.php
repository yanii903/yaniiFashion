<?php include_once './view/client/home/top.php'; ?>

<body class="preload-wrapper">
    <!-- RTL -->
    <a href="javascript:void(0);" id="toggle-rtl" class="tf-btn animate-hover-btn btn-fill">RTL</a>
    <!-- /RTL  -->
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">
        <!-- Header -->
        <?php include_once "./view/client/home/header.php"; ?>
        <!-- /Header -->

        <!-- thả layout ở đây -->
        <!-- page-title -->
        <div class="tf-page-title style-2">
            <div class="container-full">
                <div class="heading text-center">Liên Hệ</div>
            </div>
        </div>
        <!-- /page-title -->
        <!-- map -->
        <div class="w-100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7890862.063856607!2d101.88492691386747!3d15.050329010757832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455305afd834b%3A0x17268e09af37081e!2sT%C3%B2a%20nh%C3%A0%20FPT%20Polytechnic.!5e0!3m2!1sen!2sus!4v1735661988485!5m2!1sen!2sus" width="100%" height="646" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- /map -->
        <!-- form -->
        <section class="flat-spacing-21">
            <div class="container">
                <div class="tf-grid-layout gap30 lg-col-2">
                    <div class="tf-content-left">
                        <h5 class="mb_20">Ghé thăm cửa hàng của chúng tôi</h5>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Địa Chỉ</strong></p>
                            <p>Tòa nhà FPT Polytechnic, P. Trịnh Văn Bô, Xuân Phương,<br>Nam Từ Liêm, Hà Nội 100000, Vietnam</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Số Điện Thoại</strong></p>
                            <p>+1 (23) 456 789</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Email</strong></p>
                            <p>quanpmph51798@gmail.com</p>
                        </div>
                        <div class="mb_36">
                            <p class="mb_15"><strong>Thời Gian Mở Cửa</strong></p>
                            <p class="mb_15">Cửa hàng của chúng tôi đã mở cửa trở lại để mua sắm, </p>
                            <p>hàng ngày 8h sáng đến 21h tối</p>
                        </div>
                        <div>
                            <ul class="tf-social-icon d-flex gap-20 style-default">
                                <li><a href="?client=contact" class="box-icon link round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                                <li><a href="?client=contact" class="box-icon link round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                <li><a href="?client=contact" class="box-icon link round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                                <li><a href="?client=contact" class="box-icon link round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                <li><a href="?client=contact" class="box-icon link round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tf-content-right">
                        <h5 class="mb_20">Liên hệ</h5>
                        <p class="mb_24">Nếu bạn có những sản phẩm tuyệt vời mà bạn tạo ra hoặc muốn làm việc với chúng tôi thì hãy gửi cho chúng tôi một lời nhắn.</p>
                        <div>
                            <form class="form-contact" id="contactform" method="POST">
                                <div class="d-flex gap-15 mb_15">
                                    <fieldset class="w-100">
                                        <input type="text" name="name" id="name" required placeholder="Họ Và Tên *" />
                                    </fieldset>
                                    <fieldset class="w-100">
                                        <input type="email" name="email" id="email" required placeholder="Email *" />
                                    </fieldset>
                                </div>
                                <div class="mb_15">
                                    <textarea placeholder="Nội Dung" name="message" id="message" required cols="30" rows="10"></textarea>
                                </div>

                                <div class="card border-0">
                                    <?php if (!empty($messContact)): ?>
                                        <i style="color: red; margin-top: -20px;" class="fs-5 text-center py-1"><?php echo $messContact; ?></i>
                                    <?php endif; ?>
                                </div>

                                <?php if (isset($_SESSION['userName'])) { ?>
                                    <div class="send-wrap">
                                        <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Gửi</button>
                                    </div>
                                <?php } else { ?>
                                    <div class="send-wrap">
                                        <a href="?client=login" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Gửi</a>
                                    </div>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /form -->
        <!-- /thả layout ở đây -->

        <!-- Footer -->
        <?php include_once "./view/client/home/footer.php"; ?>
        <!-- /Footer -->

    </div>

    <!-- gotop -->
    <?php include_once "./view/client/home/goto.php"; ?>
    <!-- /gotop -->

    <!-- ------------------------------------------------------------------------------------ -->

    <!-- toolbar-bottom -->
    <?php include_once "./view/client/home/toolbarBottom.php"; ?>
    <!-- /toolbar-bottom -->

    <!-- mobile menu -->
    <?php include_once "./view/client/home/mobileMenu.php"; ?>
    <!-- /mobile menu -->

    <!-- toolbarShopmb -->
    <?php include_once "./view/client/home/toolbarShopmb.php"; ?>
    <!-- /toolbarShopmb -->

    <!-- modal find_size -->
    <?php include_once "./view/client/home/quickFindSize.php"; ?>
    <!-- /modal find_size -->

    <!-- ------------------------------------------------------------------------------------ -->

</body>

<?php include_once './view/client/home/bot.php'; ?>

<!-- Mirrored from themesflat.co/html/ecomus/home-06.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 14:43:03 GMT -->

</html>