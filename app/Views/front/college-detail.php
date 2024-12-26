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

    <section class="container-fluid container-xl mt-5">
        <div class="row co_p">
     
        <div class="col-12">
           <div class="col_img col_img22">
            <img src="<?= base_url($college['cover_image'])?>">
           </div>
           <div class="coll_cc">
            <div class="incc_pro">
               <div class="incc_pp">
                <img src="<?= base_url($college['logo'])?>">
               </div>
            </div>
          <div class="col_br">
            <h4 class="mt-3"><?= $college['name']?></h4>
            <div class="d-flex align-items-center gap-3 mt-2 gap_gg2">
                <div class="cc_ss d-flex gap-1 align-items-center">
                    <img src="<?= base_url()?>/public/front/imgs/location-pin.png">
                    <p><?= $college['city']?> </p>
                </div>
                |
                <div class="cc_ss d-flex gap-1 align-items-center">
                    <img src="<?= base_url()?>/public/front/imgs/star.png">
                    <p>4.6/5 <a href="#">(37 Reviews)</a></p>
                </div>
                |
                <div class="cc_ss d-flex gap-1 align-items-center">
                    <img src="<?= base_url()?>/public/front/imgs/chati.png">
                    <p>66 Student Q&A</p>
                </div>
            </div>
           <div class="d-flex justify-content-between mt-3 align-items-center gap_gg">
            <div class="tb_c d-flex gap-3">
                <button>Public/Government Institute</button>
                <button>Estd. <?= $college['estd']?></button>
            </div>
            <div class="save_cc d-flex gap-3">
                <button>Save</button>
                <button>Compare</button>
            </div>
           </div>
          </div>
           <div class="m_p_s mt-5">
              <?= $college['short_description']?>
              
              
            <?= $college['description']?>
            </div>
           </div>
        </div>
       <div class="col-6 mt-5">
         
                <h1 class="co-tie1">Related Courses as per your search...</h1>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nostrum pariatur ipsum quas dolorum non, cum nam adipisci est neque.</p>
            </div>
        <div class="col-12 mt-4">
            <div class="rel_cc">
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/all-in.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">All India Institute of Medical Sciences, Delhi</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/postgraduate-in.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">Postgraduate Institute of Medical Education and Research, Chandigarh</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/christian-in.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">Christian Medical College, Vellore</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/national-in.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">National Institute of Mental Health and Neurosciences</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/jawaharlal-in.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">JIPMER Puducherry - Jawaharlal Institute of Postgraduate Medical Education and Research</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/lov-img.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">Lovely University</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/lov-img.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">Sanjay Gandhi Postgraduate Institute of Medical Sciences</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/bana-img.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">Banaras Hindu University</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="rel_c_c">
                    <img src="<?= base_url()?>/public/front/imgs/amrita-img.png">
                    <div class="rel_c_c_c">
                        <div class="">
                            <p class="cc_tts">Amrita Center for Nanoscience and Molecular Medicine, Amrita Vishwa Vidyapeetham - Kochi Campus</p>
                        <p class="box_me mt-1">Medical Course</p>
                        </div>
                        <div class="mt-1">
                            <p class="font_14">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim!</p>
                           <div class="text-end">
                            <a href="#" class="read_bt">Read More</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="container-fluid container-xl mt-5">
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
        var swiper = new Swiper(".slide_ss", {
            slidesPerView: 2,
            spaceBetween: 20,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                992: {
                    slidesPerView: 5,
                    spaceBetween: 20
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