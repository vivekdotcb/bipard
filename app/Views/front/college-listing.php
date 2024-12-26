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
    <section class="container-fluid container-xl mt-4 mt-sm-5">
        <div class="row co_p">
            <div class="col-12">
                <h1 class="co-tie1">Top <?= $page_title; ?> Colleges in India: Ranking 2024, Fees, Admissions, Courses, Placements</h1>
            </div>
            <div class="col-12 mt-4">
                <div class="pre_col_gg2">
                    <?php foreach($college as $coll){?>

                    <div class="pr-co text-center">
                        <img src="<?= base_url($coll['logo'])?>">
                        <div class="pr_cc_cc">
                            <p class="pr-tt"><?= $coll['short_name']?></p>
                            <p class="font_14 fw-600"><?= $coll['name']?></p>
                            <div class="mt-2">
                                <p class="font_14"><?=  substr($coll['short_description'], 0, 100);?>.

                                </p>
                            </div>
                            <ul>
                                <li><a href="#">Admissions
                                    </a></li>

                                <li><a href="#">Fees</a></li>

                                <li><a href="#">Placements</a></li>

                                <li><a href="#">Cutoff</a></li>
                            </ul>
                            <a href="<?= base_url('college-details/'.$coll['id']);?>" class="kno_b">Know
                                More About College</a>
                        </div>
                    </div>

                    <?php }?>
                </div>

            </div>
            <!-- <div class="col-12 mt-5">
                <h1 class="co-tie1"> Top Engineering Colleges in India: NIRF Ranking 2024, Fees, Courses, Admission,
                    Placements</h1>
                
            </div>
            <div class="col-12 mt-4">
                <div class="pre_col_gg2">

                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/iit-mad.png">
                        <div class="pr_cc_cc">
                            <p class="pr-tt">Engineering Course</p>
                            <p class="font_14 fw-600">IIT Madras - Indian Institute of Technology</p>
                            <div class="mt-2">
                                <p class="font_14">NIRF 2024 Rankings are out. As per the latest NIRF 2024 rankings,
                                    IIT Madras ranks #1 under the category 'Engineering'.

                                </p>
                            </div>
                            <ul>
                                <li><a href="#">Admissions
                                    </a></li>

                                <li><a href="#">Fees</a></li>

                                <li><a href="#">Placements</a></li>

                                <li><a href="#">Cutoff</a></li>
                            </ul>
                            <a href="iit-madras-indian-institute-of-technology-adyar-chennai.html"
                                class="kno_b">Know More About College</a>
                        </div>
                    </div>

                </div>

            </div>
            
            
            
            <div class="col-12 mt-5">
                <h1 class="co-tie1">Top Medical Colleges in India: Ranking 2024, Admissions, Fees, NEET Cutoff, Placements</h1>
                
            </div>
            <div class="col-12 mt-4">
                <div class="pre_col_gg2">

                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/med-1.png">
                        <div class="pr_cc_cc">
                            <p class="pr-tt">Medical Course</p>
                            <p class="font_14 fw-600">All India Institute of Medical Sciences, Delhi</p>
                            <div class="mt-2">
                                <p class="font_14">NIRF 2024 Rankings are out. As per the latest NIRF 2024 rankings, AIIMS Delhi ranks #7 under the category 'Overall'.

                                </p>
                            </div>
                            <ul>
                                <li><a href="#">Admissions
                                    </a></li>

                                <li><a href="#">Fees</a></li>

                                <li><a href="#">Placements</a></li>

                                <li><a href="#">Cutoff</a></li>
                            </ul>
                            <a href="all-india-institute-of-medical-sciences-delhi-gautam-nagar.html"
                                class="kno_b">Know More About College</a>
                        </div>
                    </div>
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/med-i.png">
                        <div class="pr_cc_cc">
                            <p class="pr-tt">Medical Course</p>
                            <p class="font_14 fw-600">Christian Medical College, Vellore</p>
                            <div class="mt-2">
                                <p class="font_14">INI CET 2025 Jan session Basic and Final registrations are open for PGIMER Chandigarh admission to MD/MS/MDS/DM and MCh courses; the last date 

                                </p>
                            </div>
                            <ul>
                                <li><a href="#">Admissions
                                    </a></li>

                                <li><a href="#">Fees</a></li>

                                <li><a href="#">Placements</a></li>

                                <li><a href="#">Cutoff</a></li>
                            </ul>
                            <a href="postgraduate-institute-of-medical-education-and-research-chandigarh.html"
                                class="kno_b">Know More About College</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 mt-5">
                <h1 class="co-tie1">Top Fashion Design Colleges in India 2024: Rank, Courses, Fees, Admission</h1>
                
            </div>
            <div class="col-12 mt-4">
                <div class="pre_col_gg2">

                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/design-i.png">
                        <div class="pr_cc_cc">
                            <p class="pr-tt">Fashion Design Course</p>
                            <p class="font_14 fw-600">National Institute of Fashion Technology, Delhi</p>
                            <div class="mt-2">
                                <p class="font_14">NIFT 2024 has been concluded for NIFT Delhi admission to the B.Des, M.Des, B.F.Tech, M.F.Tech, and M.F.M courses. For the next academic session, the NIFT dates are yet to be announced.

                                </p>
                            </div>
                            <ul>
                                <li><a href="#">Admissions
                                    </a></li>

                                <li><a href="#">Fees</a></li>

                                <li><a href="#">Placements</a></li>

                                <li><a href="#">Cutoff</a></li>
                            </ul>
                            <a href="national-institute-of-fashion-technology-delhi.html"
                                class="kno_b">Know More About College</a>
                        </div>
                    </div>
                    <div class="pr-co text-center">
                        <img src="<?= base_url()?>/public/front/imgs/design-i1.png">
                        <div class="pr_cc_cc">
                            <p class="pr-tt">Fashion Design Course</p>
                            <p class="font_14 fw-600">Symbiosis Institute of Design, Symbiosis International, Pune</p>
                            <div class="mt-2">
                                <p class="font_14">The Symbiosis Institute of Design (SID) registration 2025 is open for BDes and MDes. Students seeking admission to the institute must visit the official website of Symbiosis Institute of Design.

                                </p>
                            </div>
                            <ul>
                                <li><a href="#">Admissions
                                    </a></li>

                                <li><a href="#">Fees</a></li>

                                <li><a href="#">Placements</a></li>

                                <li><a href="#">Cutoff</a></li>
                            </ul>
                            <a href="symbiosis-institute-of-design-symbiosis-international-pune-viman-nagar.html"
                                class="kno_b">Know More About College</a>
                        </div>
                    </div>
                </div>

            </div> -->
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