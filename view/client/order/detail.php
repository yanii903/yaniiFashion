<?php if (isset($_SESSION['userName'])) { ?>
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

            <!-- page-title -->
            <div class="tf-page-title">
                <div class="container-full">
                    <div class="heading text-center">Thanh Toán</div>
                </div>
            </div>
            <!-- /page-title -->

            <!-- page-cart -->
            <section class="flat-spacing-11">
                <div class="container">
                    <div class="tf-page-cart-wrap layout-2">
                        <div class="tf-page-cart-item">
                            <div class="d-flex gap-10">
                                <h5 class="fw-5 mb_20">Điền Thông Tin Thanh Toán</h5>
                            </div>
                            <form class="form-checkout" method="POST">
                                <div class="box grid-2">
                                    <fieldset class="fieldset">
                                        <label for="first-name">Tên</label>
                                        <input type="text" id="first-name" name="first-name" placeholder="Nhập Tên" value="<?php echo $load_current_address['ten'] ?? ''; ?>">

                                        <?php if (!empty($messFirstName)): ?>
                                            <i style="color: red;"><?php echo $messFirstName; ?></i>
                                        <?php endif; ?>
                                    </fieldset>
                                    <fieldset class="fieldset">
                                        <label for="last-name">Họ</label>
                                        <input type="text" id="last-name" name="last-name" placeholder="Nhập Họ" value="<?php echo $load_current_address['ho'] ?? ''; ?>">

                                        <?php if (!empty($messLastName)): ?>
                                            <i style="color: red;"><?php echo $messLastName; ?></i>
                                        <?php endif; ?>
                                    </fieldset>
                                </div>
                                <fieldset class="box fieldset">
                                    <label for="country">Quốc gia/Khu vực</label>
                                    <div class="select-custom">
                                        <select class="tf-select w-100" id="country" name="country" data-default="" value="<?php echo $load_current_address['quoc_gia'] ?? ''; ?>">
                                            <option value="0" data-provinces="[]">---</option>
                                            <option value="Australia" data-provinces="[['Australian Capital Territory','Australian Capital Territory'],['New South Wales','New South Wales'],['Northern Territory','Northern Territory'],['Queensland','Queensland'],['South Australia','South Australia'],['Tasmania','Tasmania'],['Victoria','Victoria'],['Western Australia','Western Australia']]" <?php if ($load_current_address['quoc_gia'] === "australia") echo "selected"; ?>>Australia</option>
                                            <option value="Austria" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "austria") echo "selected"; ?>>Austria</option>
                                            <option value="Belgium" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "belgium") echo "selected"; ?>>Belgium</option>
                                            <option value="Canada" data-provinces="[['Alberta','Alberta'],['British Columbia','British Columbia'],['Manitoba','Manitoba'],['New Brunswick','New Brunswick'],['Newfoundland and Labrador','Newfoundland and Labrador'],['Northwest Territories','Northwest Territories'],['Nova Scotia','Nova Scotia'],['Nunavut','Nunavut'],['Ontario','Ontario'],['Prince Edward Island','Prince Edward Island'],['Quebec','Quebec'],['Saskatchewan','Saskatchewan'],['Yukon','Yukon']]" <?php if ($load_current_address['quoc_gia'] === "canada") echo "selected"; ?>>Canada</option>
                                            <option value="Czech Republic" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "czech republic") echo "selected"; ?>>Czechia</option>
                                            <option value="Denmark" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "denmark") echo "selected"; ?>>Denmark</option>
                                            <option value="Finland" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "finland") echo "selected"; ?>>Finland</option>
                                            <option value="France" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "france") echo "selected"; ?>>France</option>
                                            <option value="Germany" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "germany") echo "selected"; ?>>Germany</option>
                                            <option value="Hong Kong" data-provinces="[['Hong Kong Island','Hong Kong Island'],['Kowloon','Kowloon'],['New Territories','New Territories']]" <?php if ($load_current_address['quoc_gia'] === "hong kong") echo "selected"; ?>>Hong Kong SAR</option>
                                            <option value="Ireland" data-provinces="[['Carlow','Carlow'],['Cavan','Cavan'],['Clare','Clare'],['Cork','Cork'],['Donegal','Donegal'],['Dublin','Dublin'],['Galway','Galway'],['Kerry','Kerry'],['Kildare','Kildare'],['Kilkenny','Kilkenny'],['Laois','Laois'],['Leitrim','Leitrim'],['Limerick','Limerick'],['Longford','Longford'],['Louth','Louth'],['Mayo','Mayo'],['Meath','Meath'],['Monaghan','Monaghan'],['Offaly','Offaly'],['Roscommon','Roscommon'],['Sligo','Sligo'],['Tipperary','Tipperary'],['Waterford','Waterford'],['Westmeath','Westmeath'],['Wexford','Wexford'],['Wicklow','Wicklow']]" <?php if ($load_current_address['quoc_gia'] === "ireland") echo "selected"; ?>>Ireland</option>
                                            <option value="Israel" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "israel") echo "selected"; ?>>Israel</option>
                                            <option value="Italy" data-provinces="[['Agrigento','Agrigento'],['Alessandria','Alessandria'],['Ancona','Ancona'],['Aosta','Aosta Valley'],['Arezzo','Arezzo'],['Ascoli Piceno','Ascoli Piceno'],['Asti','Asti'],['Avellino','Avellino'],['Bari','Bari'],['Barletta-Andria-Trani','Barletta-Andria-Trani'],['Belluno','Belluno'],['Benevento','Benevento'],['Bergamo','Bergamo'],['Biella','Biella'],['Bologna','Bologna'],['Bolzano','South Tyrol'],['Brescia','Brescia'],['Brindisi','Brindisi'],['Cagliari','Cagliari'],['Caltanissetta','Caltanissetta'],['Campobasso','Campobasso'],['Carbonia-Iglesias','Carbonia-Iglesias'],['Caserta','Caserta'],['Catania','Catania'],['Catanzaro','Catanzaro'],['Chieti','Chieti'],['Como','Como'],['Cosenza','Cosenza'],['Cremona','Cremona'],['Crotone','Crotone'],['Cuneo','Cuneo'],['Enna','Enna'],['Fermo','Fermo'],['Ferrara','Ferrara'],['Firenze','Florence'],['Foggia','Foggia'],['Forlì-Cesena','Forlì-Cesena'],['Frosinone','Frosinone'],['Genova','Genoa'],['Gorizia','Gorizia'],['Grosseto','Grosseto'],['Imperia','Imperia'],['Isernia','Isernia'],['L'Aquila','L’Aquila'],['La Spezia','La Spezia'],['Latina','Latina'],['Lecce','Lecce'],['Lecco','Lecco'],['Livorno','Livorno'],['Lodi','Lodi'],['Lucca','Lucca'],['Macerata','Macerata'],['Mantova','Mantua'],['Massa-Carrara','Massa and Carrara'],['Matera','Matera'],['Medio Campidano','Medio Campidano'],['Messina','Messina'],['Milano','Milan'],['Modena','Modena'],['Monza e Brianza','Monza and Brianza'],['Napoli','Naples'],['Novara','Novara'],['Nuoro','Nuoro'],['Ogliastra','Ogliastra'],['Olbia-Tempio','Olbia-Tempio'],['Oristano','Oristano'],['Padova','Padua'],['Palermo','Palermo'],['Parma','Parma'],['Pavia','Pavia'],['Perugia','Perugia'],['Pesaro e Urbino','Pesaro and Urbino'],['Pescara','Pescara'],['Piacenza','Piacenza'],['Pisa','Pisa'],['Pistoia','Pistoia'],['Pordenone','Pordenone'],['Potenza','Potenza'],['Prato','Prato'],['Ragusa','Ragusa'],['Ravenna','Ravenna'],['Reggio Calabria','Reggio Calabria'],['Reggio Emilia','Reggio Emilia'],['Rieti','Rieti'],['Rimini','Rimini'],['Roma','Rome'],['Rovigo','Rovigo'],['Salerno','Salerno'],['Sassari','Sassari'],['Savona','Savona'],['Siena','Siena'],['Siracusa','Syracuse'],['Sondrio','Sondrio'],['Taranto','Taranto'],['Teramo','Teramo'],['Terni','Terni'],['Torino','Turin'],['Trapani','Trapani'],['Trento','Trentino'],['Treviso','Treviso'],['Trieste','Trieste'],['Udine','Udine'],['Varese','Varese'],['Venezia','Venice'],['Verbano-Cusio-Ossola','Verbano-Cusio-Ossola'],['Vercelli','Vercelli'],['Verona','Verona'],['Vibo Valentia','Vibo Valentia'],['Vicenza','Vicenza'],['Viterbo','Viterbo']]" <?php if ($load_current_address['quoc_gia'] === "italy") echo "selected"; ?>>Italy</option>
                                            <option value="Japan" data-provinces="[['Aichi','Aichi'],['Akita','Akita'],['Aomori','Aomori'],['Chiba','Chiba'],['Ehime','Ehime'],['Fukui','Fukui'],['Fukuoka','Fukuoka'],['Fukushima','Fukushima'],['Gifu','Gifu'],['Gunma','Gunma'],['Hiroshima','Hiroshima'],['Hokkaidō','Hokkaido'],['Hyōgo','Hyogo'],['Ibaraki','Ibaraki'],['Ishikawa','Ishikawa'],['Iwate','Iwate'],['Kagawa','Kagawa'],['Kagoshima','Kagoshima'],['Kanagawa','Kanagawa'],['Kumamoto','Kumamoto'],['Kyōto','Kyoto'],['Kōchi','Kochi'],['Mie','Mie'],['Miyagi','Miyagi'],['Miyazaki','Miyazaki'],['Nagano','Nagano'],['Nagasaki','Nagasaki'],['Nara','Nara'],['Niigata','Niigata'],['Okayama','Okayama'],['Okinawa','Okinawa'],['Saga','Saga'],['Saitama','Saitama'],['Shiga','Shiga'],['Shimane','Shimane'],['Shizuoka','Shizuoka'],['Tochigi','Tochigi'],['Tokushima','Tokushima'],['Tottori','Tottori'],['Toyama','Toyama'],['Tōkyō','Tokyo'],['Wakayama','Wakayama'],['Yamagata','Yamagata'],['Yamaguchi','Yamaguchi'],['Yamanashi','Yamanashi'],['Ōita','Oita'],['Ōsaka','Osaka']]" <?php if ($load_current_address['quoc_gia'] === "japan") echo "selected"; ?>>Japan</option>
                                            <option value="Malaysia" data-provinces="[['Johor','Johor'],['Kedah','Kedah'],['Kelantan','Kelantan'],['Kuala Lumpur','Kuala Lumpur'],['Labuan','Labuan'],['Melaka','Malacca'],['Negeri Sembilan','Negeri Sembilan'],['Pahang','Pahang'],['Penang','Penang'],['Perak','Perak'],['Perlis','Perlis'],['Putrajaya','Putrajaya'],['Sabah','Sabah'],['Sarawak','Sarawak'],['Selangor','Selangor'],['Terengganu','Terengganu']]" <?php if ($load_current_address['quoc_gia'] === "malaysia") echo "selected"; ?>>Malaysia</option>
                                            <option value="Netherlands" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "netherlands") echo "selected"; ?>>Netherlands</option>
                                            <option value="New Zealand" data-provinces="[['Auckland','Auckland'],['Bay of Plenty','Bay of Plenty'],['Canterbury','Canterbury'],['Chatham Islands','Chatham Islands'],['Gisborne','Gisborne'],['Hawke's Bay','Hawke’s Bay'],['Manawatu-Wanganui','Manawatū-Whanganui'],['Marlborough','Marlborough'],['Nelson','Nelson'],['Northland','Northland'],['Otago','Otago'],['Southland','Southland'],['Taranaki','Taranaki'],['Tasman','Tasman'],['Waikato','Waikato'],['Wellington','Wellington'],['West Coast','West Coast']]" <?php if ($load_current_address['quoc_gia'] === "new zealand") echo "selected"; ?>>New Zealand</option>
                                            <option value="Norway" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "norway") echo "selected"; ?>>Norway</option>
                                            <option value="Poland" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "poland") echo "selected"; ?>>Poland</option>
                                            <option value="Portugal" data-provinces="[['Aveiro','Aveiro'],['Açores','Azores'],['Beja','Beja'],['Braga','Braga'],['Bragança','Bragança'],['Castelo Branco','Castelo Branco'],['Coimbra','Coimbra'],['Faro','Faro'],['Guarda','Guarda'],['Leiria','Leiria'],['Lisboa','Lisbon'],['Madeira','Madeira'],['Portalegre','Portalegre'],['Porto','Porto'],['Santarém','Santarém'],['Setúbal','Setúbal'],['Viana do Castelo','Viana do Castelo'],['Vila Real','Vila Real'],['Viseu','Viseu'],['Évora','Évora']]" <?php if ($load_current_address['quoc_gia'] === "portugal") echo "selected"; ?>>Portugal</option>
                                            <option value="Singapore" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "singapore") echo "selected"; ?>>Singapore</option>
                                            <option value="South Korea" data-provinces="[['Busan','Busan'],['Chungbuk','North Chungcheong'],['Chungnam','South Chungcheong'],['Daegu','Daegu'],['Daejeon','Daejeon'],['Gangwon','Gangwon'],['Gwangju','Gwangju City'],['Gyeongbuk','North Gyeongsang'],['Gyeonggi','Gyeonggi'],['Gyeongnam','South Gyeongsang'],['Incheon','Incheon'],['Jeju','Jeju'],['Jeonbuk','North Jeolla'],['Jeonnam','South Jeolla'],['Sejong','Sejong'],['Seoul','Seoul'],['Ulsan','Ulsan']]" <?php if ($load_current_address['quoc_gia'] === "south korea") echo "selected"; ?>>South Korea</option>
                                            <option value="Spain" data-provinces="[['A Coruña','A Coruña'],['Albacete','Albacete'],['Alicante','Alicante'],['Almería','Almería'],['Asturias','Asturias Province'],['Badajoz','Badajoz'],['Balears','Balears Province'],['Barcelona','Barcelona'],['Burgos','Burgos'],['Cantabria','Cantabria Province'],['Castellón','Castellón'],['Ceuta','Ceuta'],['Ciudad Real','Ciudad Real'],['Cuenca','Cuenca'],['Cáceres','Cáceres'],['Cádiz','Cádiz'],['Córdoba','Córdoba'],['Girona','Girona'],['Granada','Granada'],['Guadalajara','Guadalajara'],['Guipúzcoa','Gipuzkoa'],['Huelva','Huelva'],['Huesca','Huesca'],['Jaén','Jaén'],['La Rioja','La Rioja Province'],['Las Palmas','Las Palmas'],['León','León'],['Lleida','Lleida'],['Lugo','Lugo'],['Madrid','Madrid Province'],['Melilla','Melilla'],['Murcia','Murcia'],['Málaga','Málaga'],['Navarra','Navarra'],['Ourense','Ourense'],['Palencia','Palencia'],['Pontevedra','Pontevedra'],['Salamanca','Salamanca'],['Santa Cruz de Tenerife','Santa Cruz de Tenerife'],['Segovia','Segovia'],['Sevilla','Seville'],['Soria','Soria'],['Tarragona','Tarragona'],['Teruel','Teruel'],['Toledo','Toledo'],['Valencia','Valencia'],['Valladolid','Valladolid'],['Vizcaya','Biscay'],['Zamora','Zamora'],['Zaragoza','Zaragoza'],['Álava','Álava'],['Ávila','Ávila']]" <?php if ($load_current_address['quoc_gia'] === "spain") echo "selected"; ?>>Spain</option>
                                            <option value="Sweden" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "sweden") echo "selected"; ?>>Sweden</option>
                                            <option value="Switzerland" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "switzerland") echo "selected"; ?>>Switzerland</option>
                                            <option value="United Arab Emirates" data-provinces="[['Abu Dhabi','Abu Dhabi'],['Ajman','Ajman'],['Dubai','Dubai'],['Fujairah','Fujairah'],['Ras al-Khaimah','Ras al-Khaimah'],['Sharjah','Sharjah'],['Umm al-Quwain','Umm al-Quwain']]" <?php if ($load_current_address['quoc_gia'] === "united arab emirates") echo "selected"; ?>>United Arab Emirates</option>
                                            <option value="United Kingdom" data-provinces="[['British Forces','British Forces'],['England','England'],['Northern Ireland','Northern Ireland'],['Scotland','Scotland'],['Wales','Wales']]" <?php if ($load_current_address['quoc_gia'] === "united kingdom") echo "selected"; ?>>United Kingdom</option>
                                            <option value="United States" data-provinces="[['Alabama','Alabama'],['Alaska','Alaska'],['American Samoa','American Samoa'],['Arizona','Arizona'],['Arkansas','Arkansas'],['Armed Forces Americas','Armed Forces Americas'],['Armed Forces Europe','Armed Forces Europe'],['Armed Forces Pacific','Armed Forces Pacific'],['California','California'],['Colorado','Colorado'],['Connecticut','Connecticut'],['Delaware','Delaware'],['District of Columbia','Washington DC'],['Federated States of Micronesia','Micronesia'],['Florida','Florida'],['Georgia','Georgia'],['Guam','Guam'],['Hawaii','Hawaii'],['Idaho','Idaho'],['Illinois','Illinois'],['Indiana','Indiana'],['Iowa','Iowa'],['Kansas','Kansas'],['Kentucky','Kentucky'],['Louisiana','Louisiana'],['Maine','Maine'],['Marshall Islands','Marshall Islands'],['Maryland','Maryland'],['Massachusetts','Massachusetts'],['Michigan','Michigan'],['Minnesota','Minnesota'],['Mississippi','Mississippi'],['Missouri','Missouri'],['Montana','Montana'],['Nebraska','Nebraska'],['Nevada','Nevada'],['New Hampshire','New Hampshire'],['New Jersey','New Jersey'],['New Mexico','New Mexico'],['New York','New York'],['North Carolina','North Carolina'],['North Dakota','North Dakota'],['Northern Mariana Islands','Northern Mariana Islands'],['Ohio','Ohio'],['Oklahoma','Oklahoma'],['Oregon','Oregon'],['Palau','Palau'],['Pennsylvania','Pennsylvania'],['Puerto Rico','Puerto Rico'],['Rhode Island','Rhode Island'],['South Carolina','South Carolina'],['South Dakota','South Dakota'],['Tennessee','Tennessee'],['Texas','Texas'],['Utah','Utah'],['Vermont','Vermont'],['Virgin Islands','U.S. Virgin Islands'],['Virginia','Virginia'],['Washington','Washington'],['West Virginia','West Virginia'],['Wisconsin','Wisconsin'],['Wyoming','Wyoming']]" <?php if ($load_current_address['quoc_gia'] === "united states") echo "selected"; ?>>United States</option>
                                            <option value="Vietnam" data-provinces="[]" <?php if ($load_current_address['quoc_gia'] === "vietnam") echo "selected"; ?>>Vietnam</option>
                                        </select>
                                    </div>

                                    <?php if (!empty($messCountry)): ?>
                                        <i style="color: red;"><?php echo $messCountry; ?></i>
                                    <?php endif; ?>
                                </fieldset>
                                <fieldset class="box fieldset">
                                    <label for="city">Thị trấn/Thành phố</label>
                                    <input type="text" id="city" name="city" placeholder="Nhập Tên Thị Trấn Hoặc Thành Phố" value="<?php echo $load_current_address['thanh_pho'] ?? ''; ?>">

                                    <?php if (!empty($messCity)): ?>
                                        <i style="color: red;"><?php echo $messCity; ?></i>
                                    <?php endif; ?>
                                </fieldset>
                                <fieldset class="box fieldset">
                                    <label for="address">Địa Chỉ</label>
                                    <input type="text" id="address" name="address" placeholder="Nhập Địa Chỉ" value="<?php echo $load_current_address['dia_chi'] ?? ''; ?>">

                                    <?php if (!empty($messAddress)): ?>
                                        <i style="color: red;"><?php echo $messAddress; ?></i>
                                    <?php endif; ?>
                                </fieldset>
                                <fieldset class="box fieldset">
                                    <label for="phone">Số Điện Thoại</label>
                                    <input type="number" id="phone" name="phone" placeholder="Nhập Số Điện Thoại" value="<?php echo $load_current_address['so_dien_thoai'] ?? ''; ?>">

                                    <?php if (!empty($messPhone)): ?>
                                        <i style="color: red;"><?php echo $messPhone; ?></i>
                                    <?php endif; ?>
                                </fieldset>
                                <fieldset class="box fieldset">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Nhập Email" value="<?php echo $load_current_address['email'] ?? ''; ?>">

                                    <?php if (!empty($messEmail)): ?>
                                        <i style="color: red;"><?php echo $messEmail; ?></i>
                                    <?php endif; ?>
                                </fieldset>
                                <fieldset class="box fieldset">
                                    <label for="note">Ghi chú đặt hàng (Có Thể Bỏ Trống)</label>
                                    <textarea name="note" id="note"><?php if (isset($note) && !empty($note)) echo $note; ?></textarea>
                                </fieldset>

                                <!-- Checkbox đồng ý với điều khoản -->
                                <div class="box-checkbox fieldset-radio mb_20">
                                    <input type="checkbox" id="check-agree" class="tf-check">
                                    <label for="check-agree" class="text_black-2">Tôi đã đọc và đồng ý với <a href="terms-conditions.html" class="text-decoration-underline">Điều khoản và điều kiện</a>.</label>
                                </div>

                                <?php if (isset($_SESSION['userName'])) { ?>
                                    <!-- Nút Thanh Toán nếu đã đăng nhập -->
                                    <button type="submit" id="checkout-button" class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center disabled" style="pointer-events: none; opacity: 0.5;">
                                        <span>Đặt Hàng</span>
                                    </button>
                                <?php } else { ?>
                                    <!-- Nút Thanh Toán khi chưa đăng nhập -->
                                    <a href="?client=login" id="checkout-button" class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center disabled" style="pointer-events: none; opacity: 0.5;">
                                        <span>Đăng Nhập để Đặt Hàng</span>
                                    </a>
                                <?php } ?>

                                <input type="hidden" id="payment-hidden" name="payment" value="0">

                                <!-- Script kiểm soát nút -->
                                <script>
                                    // Select checkbox và nút checkout
                                    const checkbox = document.getElementById('check-agree');
                                    const checkoutButton = document.getElementById('checkout-button');

                                    // Vô hiệu hóa nút đặt hàng ban đầu
                                    checkoutButton.classList.add('disabled');
                                    checkoutButton.style.pointerEvents = 'none';
                                    checkoutButton.style.opacity = '0.5';

                                    // Lắng nghe sự kiện thay đổi checkbox
                                    checkbox.addEventListener('change', function() {
                                        if (checkbox.checked) {
                                            // Kích hoạt nút đặt hàng
                                            checkoutButton.classList.remove('disabled');
                                            checkoutButton.style.pointerEvents = 'auto';
                                            checkoutButton.style.opacity = '1';
                                        } else {
                                            // Vô hiệu hóa nút đặt hàng
                                            checkoutButton.classList.add('disabled');
                                            checkoutButton.style.pointerEvents = 'none';
                                            checkoutButton.style.opacity = '0.5';
                                        }
                                    });
                                </script>
                            </form>
                        </div>
                        <div class="tf-page-cart-footer">
                            <div class="tf-cart-footer-inner">
                                <h5 class="fw-5 mb_20">Sản Phẩm Bạn Đã Thêm</h5>
                                <form class="tf-page-cart-checkout widget-wrap-checkout">
                                    <ul class="wrap-checkout-product">
                                        <?php foreach ($load_one_cart_user as $order) {
                                            extract($order);
                                        ?>
                                            <li class="checkout-product-item">
                                                <figure class="img-product">
                                                    <img src="/myProject/view/assets/be/images/products/<?= $hinh_anh; ?>" alt="product">
                                                    <span class="quantity"><?= $so_luong; ?></span>
                                                </figure>
                                                <div class="content">
                                                    <div class="info">
                                                        <p class="name"><?= $ten_san_pham; ?></p>
                                                        <span class="variant"><?= $mau_sac; ?> / <?= $kich_co; ?></span>
                                                    </div>
                                                    <span class="price text-danger"><?= number_format($so_luong * $gia_giam, 0, ',', '.'); ?>đ</span>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <div class="d-flex justify-content-between line pb_20">
                                        <h6 class="fw-5">Tổng Cộng</h6>
                                        <h6 class="total fw-5 text-danger">
                                            <?php
                                            if (isset($total_price)) {
                                                extract($total_price);
                                                echo number_format($tong_gia_tat_ca, 0, ',', '.');
                                            }
                                            ?>đ
                                        </h6>
                                    </div>
                                    <div class="wd-check-payment">
                                        <!-- Phương thức thanh toán khi nhận hàng -->
                                        <div class="fieldset-radio mb_20">
                                            <input type="radio" name="payment" id="delivery" value="0" class="tf-check" checked>
                                            <label for="delivery">Thanh Toán Khi Nhận Hàng</label>
                                        </div>

                                        <!-- Phương thức thanh toán trực tiếp -->
                                        <div class="fieldset-radio mb_20">
                                            <input type="radio" name="payment" id="bank" value="1" class="tf-check">
                                            <label for="bank">Thanh Toán Trực Tiếp</label>
                                        </div>

                                        <!-- Mã QR, sẽ ẩn từ đầu và chỉ hiển thị khi chọn phương thức thanh toán trực tiếp -->
                                        <img id="qr-code" class="card mb-2" src="/myProject/view/assets/fe/images/QR/myQR.jpg" alt="QR Code Techcombank" width="200px" style="display: none;">
                                        <p id="text-qr-code" width="200px" class="mb-2" style="color: red; display: none;">Nếu bạn chọn thanh toán trực tiếp!<br>Vui lòng chuyển tiền và đợi trong vòng 5-10p để được kiểm tra.</p>
                                        <p class="line"></p>
                                        <!-- Chính sách bảo mật -->
                                        <p class="text_black-2 mb_20 mt-3">Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng của bạn, hỗ trợ trải nghiệm của bạn trên toàn bộ trang web này và cho các mục đích khác được mô tả trong <a href="privacy-policy.html" class="text-decoration-underline">Chính sách bảo mật</a>.</p>
                                    </div>


                                    <script>
                                        // Lắng nghe sự kiện thay đổi trên các lựa chọn thanh toán
                                        document.querySelectorAll('input[name="payment"]').forEach(function(paymentOption) {
                                            paymentOption.addEventListener('change', function() {
                                                const qrCode = document.getElementById('qr-code'); // Thẻ img chứa QR code
                                                const textQrCode = document.getElementById('text-qr-code'); // Thẻ img chứa QR code
                                                const paymentHidden = document.getElementById('payment-hidden'); // Lấy input hidden

                                                // Cập nhật giá trị của input hidden khi người dùng chọn phương thức thanh toán
                                                if (document.getElementById('bank').checked) {
                                                    paymentHidden.value = '1'; // Cập nhật giá trị hidden khi chọn Thanh Toán Trực Tiếp
                                                    qrCode.style.display = 'block'; // Hiển thị QR Code khi chọn phương thức thanh toán trực tiếp
                                                    textQrCode.style.display = 'block'; // Hiển thị QR Code khi chọn phương thức thanh toán trực tiếp
                                                } else {
                                                    paymentHidden.value = '0'; // Cập nhật giá trị hidden khi chọn Thanh Toán Khi Nhận Hàng
                                                    qrCode.style.display = 'none'; // Ẩn QR Code khi chọn phương thức thanh toán khác
                                                    textQrCode.style.display = 'none'; // Ẩn QR Code khi chọn phương thức thanh toán khác
                                                }
                                            });
                                        });
                                    </script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- page-cart -->

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
<?php } else {
    header("Location: ?client=login");
    exit();
} ?>