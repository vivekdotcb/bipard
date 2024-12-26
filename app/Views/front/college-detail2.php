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
    <section class="container mt-4">
        <div class="row">
            <div class="col-12">
                <p>Home / Engineering Course / <?=$college['name']?></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 white cr_bg">
                <img src="<?= base_url($college['cover_image'])?>">
            </div>
            
           
        </div>
    </section>
    <section class="container min_ccc">
        <div class="row align-items-center">
        <div class="col-5">
            <div class="col_img">
                <img src="<?= base_url($college['logo'])?>">
            </div>
          
        </div>
        <div class="col-7 ps-5">
            <h3><?=$college['name']?></h3> 
            <div class="mt-3">
                <?=$college['short_description']?>
                <div class="mt-3 d-flex align-items-center gap-4">
                    <h5>Follow Us On:</h5>
                    <ul class="dd_f links_f">
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
        <div class="col-12 col-lg-7 mt-4">
            <h1 class="co-tie1">Predict Colleges based on exams you have taken</h1>
        </div>
        <div class="col-12 mt-4 swiper pre-col">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/bb-img.png">
                        <p class="pr-tt mt-2">B. Tech Course</p>
                        <p class="font_14">58 Exams Pending...</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/mba-i.png">
                        <p class="pr-tt mt-2">MBA Course</p>
                        <p class="font_14">58 Exams Pending...</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/med.png">
                        <p class="pr-tt mt-2">Medical Course</p>
                        <p class="font_14">58 Exams Pending...</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/m-t.png">
                        <p class="pr-tt mt-2">M. Tech Course</p>
                        <p class="font_14">58 Exams Pending...</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/design.png">
                        <p class="pr-tt mt-2">Design Course</p>
                        <p class="font_14">58 Exams Pending...</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/law-i.png">
                        <p class="pr-tt mt-2">Law Course</p>
                        <p class="font_14">58 Exams Pending...</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/hos.png">
                        <p class="pr-tt mt-2">Hospitality Course</p>
                        <p class="font_14">58 Exams Pending...</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next ar-b"></div>
            <div class="swiper-button-prev ar-b"></div>
        </div>
        
        <div class="col-12 mt-4 m_p_s">
              <?=$college['description']?>
        </div>
        <hr class = "my-4">
           <div class="col-12 col-lg-7">
            <h1 class="co-tie1">More College Suggestions</h1>
        </div>
         <div class="swiper col-slider mt-4">
                <div class="swiper-wrapper w-100">
                    <div class="swiper-slide">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/lov-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">Lovely Professional University</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/jain-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">
                                Jain Deemed Faculty of Engineering...</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/amity-img.png">
                            <div class="rank-c">
                                UG & PG ADMISSIONS OPEN 2024
                            </div>
                            <p class="mt-2">Amity University</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/hk-img.png">
                            <div class="rank-c">
                                Ranked Among Top Engg Colleges in India
                            </div>
                            <p class="mt-2"> HKBK College of Engineering
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/par-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">Parul University</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="uni-cont text-center relative">
                            <img src="<?= base_url()?>/public/front/imgs/par-img.png">
                            <div class="rank-c">
                                RANKED AMONGST THE TOP 3% UNIVERSITIES GLOBALLY
                            </div>
                            <p class="mt-2">Parul University</p>
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
    <footer class="container-fluid pt-3 pt-sm-4 pb-2 pb-sm-3 white mt-5">
        <div class="container-fluid container-xl">
            <div class="row co_p">
                <div class="col-12 col-lg-4 pe-0 pe-lg-3">
                    <p class="footer_title">Address</p>
                    <p>
                        7 Temasek Boulevard Level 32, Suntec Tower One Singapore 038987
                    </p>

                    <p class="footer_title  mt-1 mt-sm-2">Email At</p>
                    <a href="mailto:demo@gmail.com" class="white">demo@gmail.com</a>
                    <p class="footer_title  mt-1 mt-sm-2">Call Us At</p>
                    <ul class="flex_prop flex-column align-items-start gap-1">
                        <li>
                            <a href="tel:(+91) 99-199-9852" class="white">
                                <b>Phone Number</b> : 99-99-999
                            </a>
                        </li>

                    </ul>

                    <hr class="footer_hr">
                    <ul class="dd_f links_f">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                    </ul>
                    <p class="mt-3 font_14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit error quam
                        optio eveniet dolor. Inventore explicabo harum quo delectus pariatur.</p>
                </div>
                <div class="col-12 col-lg-8 ps-0 ps-lg-3 mt-2 mt-lg-0">
                    <div class="row">
                        <div class="col-12">
                            <p class="footer_title">About Us</p>
                            <p class="mt-0 mt-sm-1 font_14">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magnam commodi,
                                ducimus numquam culpa, deleniti illo quod est expedita, fugiat at nobis? Ex nemo ea
                                molestiae voluptates animi maxime ipsum?
                            </p>
                        </div>
                        <hr class="footer_hr">
                        <div class="col-12">
                            <div class="row justify-content-between">
                                <div class="col-5 col-sm-3">
                                    <p class="footer_title">Important links</p>
                                    <ul class="mt-1 footer_ul">
                                        <li><a href="#">Mba</a></li>
                                        <li><a href="#">Engineering</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <p class="footer_title">Predict Colleges</p>
                                    <ul class="mt-1 footer_ul">
                                        <li><a href="#">B. Tech Course</a></li>
                                        <li><a href="#">MBA Course</a></li>
                                        <li><a href="#">Medical Course</a></li>
                                        <li><a href="#">M. Tech Course</a></li>
                                        <li><a href="#">Design Course</a></li>

                                    </ul>
                                </div>
                                <div class="col-12 col-sm-4 mt-2 mt-sm-0">
                                    <p class="footer_title">Trending Colleges & Universities</p>
                                    <ul class="mt-1 footer_ul">
                                        <li><a href="#"> Delhi University</a></li>
                                        <li><a href="#">BITS Pilani</a></li>
                                        <li><a href="#"> VIT Pune</a></li>
                                        <li><a href="#"> KIET Ghaziabad</a></li>
                                        <li><a href="#">Christ University Bangalore</a></li>
                                        <li><a href="#">Sinhgad College of Engineering</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="footer_hr">
            <div class="row common_padding">
                <div class="col-12 col-sm-12 text-center text-sm-center">
                    <p class="f_res">
                        Copyright© 2024.All rights reserved by Edu360 India
                    </p>
                </div>

            </div>
        </div>
    </footer>
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