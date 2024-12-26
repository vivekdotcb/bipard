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
</head>

<body>
    <?php echo  view('front/include/header');?>
      <section class="container-fluid container-xl mt-4">
        <div class="row co_p">
            <div class="col-12 big_bb">
                <p>Home / Courses / B. Tech Course</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 white cr_bg">
                <img src="<?= base_url($college['cover_image'])?>">
            </div>
         
            
        </div>
    </section>
    <section class="container-fluid container-xl min_ccc min_ccc2">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8 d-flex gap-4 align-items-center gap_cc">
                <div class="col_grd">
                    <div class="col_img2">
                        <img src="<?= base_url($college['logo'])?>">
                    </div>
                    </div>
                    <div class="col_gr_2">
                        <div class="col_img2">
                            <img src="<?= base_url()?>/public/front/imgs/me-1.png">
                        </div>
                        <div class="col_img2">
                            <img src="<?= base_url()?>/public/front/imgs/me-2.png">
                        </div>
                        <div class="col_img2">
                            <img src="<?= base_url()?>/public/front/imgs/me-3.png">
                        </div>
                        <div class="col_img2">
                            <img src="<?= base_url()?>/public/front/imgs/me-4.png">
                        </div>
                        <div class="col_img2">
                            <img src="<?= base_url()?>/public/front/imgs/me-5.png">
                        </div>
                        <div class="col_img2">
                            <img src="<?= base_url()?>/public/front/imgs/hk-img.png">
                        </div>
                    </div>
                
            </div>
            <div class="col-12 col-lg-4 ps-0 ps-lg-4 bg mt-3 mt-lg-0">
              <div class="bg_gr">
                <h4><?= $college['name']?></h4>
                <p class="mt-2"><?= $college['short_description']?></p>
             
                    
                    <div class="mt-3 d-flex align-items-center gap-4 justify-content-between">
                        <h5>Follow Us On:</h5>
                        <ul class="dd_f links_f links_f2">
                            <li>
                                <a href="#"><svg class="svg-inline--fa fa-facebook-f" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"></path></svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li>
                                <a href="#"><svg class="svg-inline--fa fa-twitter" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fa-brands fa-twitter"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li>
                                <a href="#"><svg class="svg-inline--fa fa-linkedin-in" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg><!-- <i class="fa-brands fa-linkedin-in"></i> Font Awesome fontawesome.com --></a>
                            </li>
                            <li>
                                <a href="#"><svg class="svg-inline--fa fa-youtube" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg><!-- <i class="fa-brands fa-youtube"></i> Font Awesome fontawesome.com --></a>
                            </li>
                        </ul>
                    </div>
              
              </div>
            </div>
            
       
            <div class="col-12 mt-2 m_p_s">
               <?= $college['description']?>
            </div>
            <div class="container-fluid container-xl mt-4">
            <h1 class="co-tie1">Related Colleges based on your search...</h1>
            </div>
            <div class=" mt-3"> 
                <div class="swiper_grd">
                    <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/all-in.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">All India Institute of Medical Sciences, Delhi</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/postgraduate-in.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">
                                Postgraduate Institute of Medical Education and Research, Chandigarh</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/christian-in.png">
                            <div class="rank-c">
                                UG & PG ADMISSIONS OPEN 2024
                            </div>
                            <p class="mt-2">Christian Medical College, Vellore</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/hk-img.png">
                            <div class="rank-c">
                                Ranked Among Top Engg Colleges in India
                            </div>
                            <p class="mt-2"> HKBK College of Engineering
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/par-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">Parul University</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/bana-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">Banaras Hindu University</p>
                        </div>
                    </div>
                     <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/bana-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">Banaras Hindu University</p>
                        </div>
                    </div>
                     <div class="">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/lov-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">Sanjay Gandhi Postgraduate Institute of Medical Sciences</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    </section>
    <section class="container-fluid container-xl">
        <div class="row co_p">
            <div class="col-12 col-lg-7 m-auto text-center">
                <h1 class="co-tie1">Trending Colleges &amp; Universities</h1>
            </div>
            <div class="col-12 mt-4">
                <div class="tabs-g">
                    <ul>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="2uunck">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Bachelor of Technology (B.Tech) in Computer Science and Engineering
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="af8p2s">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Business Administration (BBA)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="3op01d">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Medicine, Bachelor of Surgery (MBBS)
                                    </span>
                                </button>

                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="kz1k4h">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Science (B.Sc) in Physics
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="kjr8j">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Arts (BA) in Economics
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="yqlxxf">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Commerce (B.Com) in Finance and Accounting
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="cnj0cd">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Engineering (B.E) in Mechanical Engineering
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="6qixd4">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Architecture (B.Arch)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="82wjo">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Science (B.Sc) in Biotechnology
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="zlsk7">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Bachelor of Design (B.Des) in Fashion Design
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="9aoc7">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Business Administration (MBA)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="3alu9e">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Technology (M.Tech) in Computer Science
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="gsh5y">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Master of Science (M.Sc) in Data Science
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="c2x9u">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Master of Arts (M.A) in Economics
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="cjsjk9">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Computer Applications (MCA)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="wc7ohm">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Science (M.Sc) in Artificial Intelligence
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="kxaszt">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Master of Social Work (MSW)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="e1mik">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Design (M.Des) in Industrial Design
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="qfk2m">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Laws (LLM)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="zeqone">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                     Master of Public Health (MPH)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="wzqykq">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Science (M.Sc) in Biotechnology
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="8lst06">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        NIET Gr Noida
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="s70sm">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Master of Pharmacy (M.Pharm)
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="13x15h">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Master of Arts (M.A) in English Literature
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="4oochm">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        Master of Science (M.Sc) in Environmental Science
                                    </span>
                                </button>
                            </a></li>
                        <li><a href="#">
                                <button class="button-1" role="button" fdprocessedid="nb4onr">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                       Master of Journalism and Mass Communication (MJMC)
                                    </span>
                                </button>
                            </a></li>
                     
                    </ul>
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
                    slidesPerView: 5,
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
                    slidesPerView: 4,
                    spaceBetween: 30
                }
            }
        });
    </script>
</body>

</html>