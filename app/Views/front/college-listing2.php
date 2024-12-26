<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edu360 India</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url()?>/public/front/css/global.css">
    <link rel="stylesheet" href="<?= base_url()?>/public/front/css/cr.css">
      <link rel="stylesheet" href="<?= base_url()?>/public/front/css/listing.css">
</head>

<body>
     <?php echo  view('front/include/header');?>
     <section class="bg_listing d-flex">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between co_p">
            <a href="#" class="bckgo d-inline-flex align-items-center">
                <img src="<?= base_url()?>/public/front/imgs/arrows.png"> Go Back </a>
            <div class="title_t fw6 white">
                Searching College...
            </div>
        </div>
    </section>
    <section class="list_layout_main">
        <div class="container-fluid container-xl list_layout">
            <div class="row justify-content-center co_p">
                <div class="col-3 pe-3 list_ss">
                   <div class="listing_filter">
                    <div class="filter_c d-flex align-items-center justify-content-between">
                        <p>Filters</p>
                        <i class="fa-solid fa-filter"></i>
                    </div>
                    <div class="loc_1 mt-3">
                        <p class="tit_tt">Locations</p>
                        <div class="form_cont mt-1">
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Delhi / NCR
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Chennai
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    Bangalore
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2">
                                <label class="form-check-label" for="flexCheckChecked2">
                                    Kolkata
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    Pune
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4">
                                <label class="form-check-label" for="flexCheckChecked4">
                                    Hyderabad
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                <label class="form-check-label" for="flexCheckDefault5">
                                    Karnataka
                                </label>
                                </div>
                                <div class="num_sh">
                                    12
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked6">
                                <label class="form-check-label" for="flexCheckChecked6">
                                    Uttar Pradesh
                                </label>
                                </div>
                                <div class="num_sh">
                                    14
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                <label class="form-check-label" for="flexCheckDefault7">
                                    Kerala
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked8">
                                <label class="form-check-label" for="flexCheckChecked8">
                                    Maharashtra
                                </label>
                                </div>
                                <div class="num_sh">
                                    04
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="loc_1 mt-3">
                        <p class="tit_tt">Total Fees</p>
                        <div class="form_cont mt-1">
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" checked>
                                <label class="form-check-label" for="flexCheckDefault2">
                                    < 1 Lakh
                                </label>
                                </div>
                                <div class="num_sh">
                                    07
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1">
                                <label class="form-check-label" for="flexCheckChecked1">
                                    1 - 2 Lakh
                                </label>
                                </div>
                                <div class="num_sh">
                                    06
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                <label class="form-check-label" for="flexCheckDefault11">
                                    2 - 3 Lakh
                                </label>
                                </div>
                                <div class="num_sh">
                                    21
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked22">
                                <label class="form-check-label" for="flexCheckChecked22">
                                    > 5 Lakh
                                </label>
                                </div>
                                <div class="num_sh">
                                    01
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <hr>
                    <div class="loc_1 mt-3">
                        <p class="tit_tt">Ratings</p>
                        <div class="form_cont mt-1">
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault222" checked>
                                <label class="form-check-label" for="flexCheckDefault222">
                                    > 3 - 4 Star
                                </label>
                                </div>
                                <div class="num_sh">
                                    07
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked111">
                                <label class="form-check-label" for="flexCheckChecked111">
                                    > 4 - 5 Star
                                </label>
                                </div>
                                <div class="num_sh">
                                    06
                                </div>
                            </div>
                              
                        </div>
                    </div>
                    <hr>
                    <div class="loc_1 mt-3">
                        <p class="tit_tt">Exams Accepted</p>
                        <div class="form_cont mt-1">
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2224" checked>
                                <label class="form-check-label" for="flexCheckDefault2224">
                                    NEET
                                </label>
                                </div>
                                <div class="num_sh">
                                    07
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1113">
                                <label class="form-check-label" for="flexCheckChecked1113">
                                    Haryana NEET
                                </label>
                                </div>
                                <div class="num_sh">
                                    06
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1211">
                                <label class="form-check-label" for="flexCheckChecked1211">
                                    Haryana NEET
                                </label>
                                </div>
                                <div class="num_sh">
                                    06
                                </div>
                            </div>
                            <div class="form-check">
                                <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1111">
                                <label class="form-check-label" for="flexCheckChecked1111">
                                    NEET SS
                                </label>
                                </div>
                                <div class="num_sh">
                                    06
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   <button class = "close_filter">
                       <i class="fa-solid fa-xmark"></i>
                   </button>
                </div>
                <div class="col-12 col-md-9 ps-0 ps-md-3">
                    <div class = "text-end mb-0 mb-sm-3 d-block d-md-none">
                        <button class = "filt_btn filter_me">
                        Filter <i class="fa-solid fa-filter"></i>
                    </button>
                    </div>
                    <div class="coll_rang">
                        <div class="coll_head d-flex align-items-center justify-content-between">
                            <p class="tit_tt">Top <?= $page_title; ?> Colleges in India</p>
                            <div class="coll_a">
                                <a href="#">Nirf 2024</a>
                                <a href="#">India Today 2024</a>
                                <a href="#">The Week 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="pro_grdd mt-4"> 
                            <?php foreach($college as $coll){?>
                            <a href="<?= base_url('college-details/'.$coll['id']);?>">
                                 <div class="pr-co text-center">
                                    <img src="<?= base_url($coll['logo'])?>">
                                    <p class="pr-tt mt-2"><?= $coll['short_name']?></p>
                                    <p class="font_14"><?= $coll['state']?></p>
                                </div>

                            </a>
                           
                             <?php }?>
                           
                    </div>
                </div>
            </div>
        </div>
    </section>
     <?php echo  view('front/include/footer');?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        const nav_main = document.querySelector('.nav-main');
        const menu_l = document.querySelector('.menu_l');
        const close_nav = document.querySelector('.close_nav')
        menu_l.addEventListener('click', () => {
            nav_main.classList.add('nav-main_active')
        });
        close_nav.addEventListener('click', () => {
            nav_main.classList.remove('nav-main_active')
        });
        const list_ss = document.querySelector('.list_ss');
        const filterMe = document.querySelector('.filter_me');
        const close_filter = document.querySelector('.close_filter');
        if(filterMe){
            filterMe.addEventListener('click',()=>{
            list_ss.classList.add('list_ss_active');
            console.log('h')
        })
        }
       if(close_filter){
            close_filter.addEventListener('click',()=>{
            list_ss.classList.remove('list_ss_active')
        })
       }
    </script>
    <script src="<?= base_url()?>/public/front/app/font.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".pre-col", {
            slidesPerView: 2,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 30
                }
            }
        });
        var swiper = new Swiper(".col-slider", {
            slidesPerView: 2,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 5,
                    spaceBetween: 30
                }
            }
        });
    </script>
</body>

</html>