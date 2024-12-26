<header class="relative">
        <div class="container-fluid s-h relative">
            <div class="container py-2 dd_f justify-content-center justify-content-md-between s-h_semi">
                <p class="wh-us dd_f"><i class="fa-brands fa-whatsapp"></i> Ask a query on
                    (+91) 99-199-9852</p>
                <div class="dd_f gap-4">
                    <div class="soci_l dd_f">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                    <div class="l-s-b white dd_f gap-3">
                        <a href="#">Login</a>

                        <a href="#">Signin</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid nav-main py-3">
            <nav class="container-fluid container-xl na-bar dd_f justify-content-between co_p relative">
                <div class="nav-links">
                    <ul class="dd_f">
                        <?php
                        $stream = allData('db_stream');
                        $i = 0;
                        foreach ($stream as $key) {
                            if (++$i < 6) {
                        ?> 
                            <li><a href="<?= base_url('stream/'.$key['slug']); ?>"><?= $key['name'];?></a></li>
                        <?php
                        } }
                        ?>

                        <!-- More button with dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">More <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <?php
                                $i = 0;
                                    foreach ($stream as $key2) {
                                        if (++$i > 5) {
                                ?>
                                <li><a href="<?= base_url('stream/'.$key2['slug']); ?>" class="dropdown-item"><?= $key2['name'];?></a></li>
                                <?php
                                    }}
                                ?>
                                
                                <li><a href="<?= base_url('stream/'); ?>" class="dropdown-item">All College</a></li>
                            </ul>
                        </li>

                        <li><a href="<?= base_url('study_abroad'); ?>">Study Abroad</a></li>
                        <li><a href="<?= base_url('counseling'); ?>">Counseling</a></li>
                        <li><a href="<?= base_url('online_courses'); ?>">Edu-360 Online Courses</a></li> 
                    </ul>
                </div>

                <div class="app-bb dd_f gap-3">
                    <button class="b-app">Book Online Appointment</button>
                    <div class="dd_f gap-2">
                        <button class="search-b">
                            <img src="<?= base_url()?>/public/front/imgs/phone-i.png">
                        </button>
                        <button class="search-b">
                            <img src="<?= base_url()?>/public/front/imgs/search-i.png">
                        </button>
                    </div>
                </div>

                <button class="close_nav">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </nav>
        </div>

       <div class="nav_nn co_p d-flex justify-content-between align-items-center">
        <div class="logo-img">
            <a href="<?= base_url()?>"><img src="<?= base_url()?>/public/front/imgs/logo.png"></a>
            
        </div>
        <button class="menu_l">
            <img src="<?= base_url()?>/public/front/imgs/menu-icon.png">
        </button>
       </div>
    </header>

    