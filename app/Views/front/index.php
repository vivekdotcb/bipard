<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edu360 India</title>
   <?php echo  view('front/include/link');?>

   <style>
    #search_input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
        }

   </style>
</head>

<body>
    <?php echo  view('front/include/header');?>
    
    <section class="container-fluid h-s dd_f justify-content-center mt-1 pt-5">
        <div class="w-100">
            <div class="container-fluid container-xl">
                <div class="row co_p">
                    <div class="col-12 col-xl-7 m-auto">
                        <div class="content-b">
                            <h1 class="co-tie">Find Colleges, Courses & Exams that are Best for You</h1>
                            <div class="keys-word dd_f gap-2 gap-lg-3 justify-content-center mt-3">
                                <a href="#">62,000+ Colleges</a>
                                <span>|</span>
                                <a href="#">4,25,000+ Courses</a>
                                <span>|</span>
                                <a href="#">5,75,000+ Reviews</a>
                                <span>|</span>
                                <a href="#">950+ Exams</a>
                            </div>
                            <div class="searc-bar mt-4">
                                <input type="text" id="search_input"name="search_input"
                                    placeholder="Search Colleges, Courses, Exams, Questions and Articles">
                                <button>Search <img src="<?= base_url()?>/public/front/imgs/search-i.png"></button>
                            </div>
                            <div class="header-option" >
                                <ul class="bg-light px-3" id='serchdata' style="max-height: 40vh; overflow: auto;">
                                    
                                    <!-- <div class="option-group"><input type="text" placeholder="City"></div>
                                    <div class="option-group"><input type="text" placeholder="State"></div>
                                    <div class="option-group"><input type="text" placeholder="Min Price"></div>
                                    <div class="option-group"><input type="text" placeholder="Max Price"></div> -->
                                    <!-- <button type="submit"><i class="fas fa-search"></i><span>Search</span></button> -->
                                </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper col-slider">
                <div class="swiper-wrapper mt-5 w-100">
                    <?php 
                          
                    foreach (limitData('db_college',10) as $key): ?>
                    
	                    <div class="swiper-slide">
	                        <a href="<?= base_url('college-details/'.$key['id']);?>">
	                        <div class="uni-cont text-center relative">
	                            <img src="<?= base_url($key['thumbnail'])?>">
	                            <div class="rank-c">
	                                <?= $key['address']?>
	                            </div>
	                            <p class="mt-2"><?= $key['name']?></p>
	                        </div>
	                        </a> 
	                    </div>
                        
                     <?php endforeach ?> 
                    
                    
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container-fluid container-xl">
            <div class="row co_p">
                <div class="col-12 col-lg-7 text-center m-auto">
                    <h1 class="co-tie1">Exams that are Best for You</h1>
                </div>
                <div class="col-12 col-lg-9 m-auto mt-3 mt-md-4">
                    <nav class="nav-tbbs">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">MBA</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">B.TECH</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">MEDICAL</button>
                            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled"
                                aria-selected="false">DESIGN</button>
                            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled"
                                aria-selected="false" disabled>More</button>
                            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled"
                                aria-selected="false" disabled>Top 10 Best Courses</button>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="tab-content mt-4 co_p" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="pro_grid">
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA RANKINGS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/call-i.png">
                                <p class="mt-2 p-tite">IIM & Non IIM CALL</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/find.png">
                                <p class="mt-2 p-tite">FIND MBA COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/graduated.png">
                                <p class="mt-2 p-tite">MBA STUDENT</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">ALUMNI SALARY DATA</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/scales.png">
                                <p class="mt-2 p-tite">COMPARE COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    <div class="pro_grid">
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA RANKINGS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/call-i.png">
                                <p class="mt-2 p-tite">IIM & Non IIM CALL</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/find.png">
                                <p class="mt-2 p-tite">FIND MBA COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/graduated.png">
                                <p class="mt-2 p-tite">MBA STUDENT</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">ALUMNI SALARY DATA</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/scales.png">
                                <p class="mt-2 p-tite">COMPARE COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                    tabindex="0">
                    <div class="pro_grid">
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA RANKINGS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/call-i.png">
                                <p class="mt-2 p-tite">IIM & Non IIM CALL</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/find.png">
                                <p class="mt-2 p-tite">FIND MBA COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/graduated.png">
                                <p class="mt-2 p-tite">MBA STUDENT</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">ALUMNI SALARY DATA</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/scales.png">
                                <p class="mt-2 p-tite">COMPARE COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                    tabindex="0">
                    <div class="pro_grid">
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA RANKINGS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/call-i.png">
                                <p class="mt-2 p-tite">IIM & Non IIM CALL</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/find.png">
                                <p class="mt-2 p-tite">FIND MBA COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/graduated.png">
                                <p class="mt-2 p-tite">MBA STUDENT</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">ALUMNI SALARY DATA</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/scales.png">
                                <p class="mt-2 p-tite">COMPARE COLLEGES</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/high-quality.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/exam.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                        <div class="pro_cont text-center">
                            <div class="p-img d-flex gap-2 align-items-end justify-content-center">
                                <img src="<?= base_url()?>/public/front/imgs/data-science.png">
                                <p class="mt-2 p-tite">MBA EXAMS</p>
                            </div>

                            <p class="font_14 mt-2">50 + MBA exams. Do you know enough about them?</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="container-fluid container-xl mt-5">
        <div class="row co_p">
            <div class="col-12 col-lg-7">
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
        </div>
    </section>
    <section class="container-fluid container-xl mt-5">
        <div class="row co_p">
            <div class="col-12 col-lg-7 m-auto text-center">
                <h1 class="co-tie1">Trending Colleges & Universities</h1>
            </div>
            <div class="col-12 mt-4">
                <div class="tabs-g">
                    <ul>
                         <?php 
                          
                    foreach (limitData('db_college', 50) as $key): ?>
                        <li><a href="<?= base_url('college-details/'.$key['id']);?>">
                                <button class="button-1" role="button">
                                    <span class="button-1-shadow"></span>
                                    <span class="button-1-edge"></span>
                                    <span class="button-1-front text">
                                        <?= $key['short_name'];?>
                                    </span>
                                </button>
                            </a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid container-xl mt-5">
        <div class="row co_p">
            <div class="col-12 col-lg-7">
                <h1 class="co-tie1">Featured Articles</h1>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="latest-c">
                            <img src="<?= base_url()?>/public/front/imgs/med.png">
                            <p class="lat-tt mt-2">Medical Course Latest Updates For Students</p>
                            <div class="text-end">
                                <a href="#" class="read-btn">Read More<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                        <div class="latest-c mt-4">
                            <img src="<?= base_url()?>/public/front/imgs/law-i.png">
                            <p class="lat-tt mt-2">Law Course Latest Updates For Students</p>
                            <div class="text-end">
                                <a href="#" class="read-btn">Read More<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8 px-0 px-md-5 mt-3 mt-md-0">
                        <div class="big-latt">
                            <img src="<?= base_url()?>/public/front/imgs/rank.png">
                            <div class="big-content mt-2 text-center">
                                <p class="big-t">Karnataka PGCET Marks vs Rank: Get Expected Cutoffs, Inter-se-merit</p>
                                <p class="mt-2 font_14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
                                    deserunt cumque aliquid quae magnam quia alias dignissimos, sint eaque. Animi,
                                    itaque ea eveniet totam iste non corporis reprehenderit excepturi laborum.</p>
                                <div class="text-end mt-2">
                                    <a href="#" class="read-btn">Read More<i class="fa-solid fa-angles-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2 mt-3 mt-md-0">
                        <div class="latest-c">
                            <img src="<?= base_url()?>/public/front/imgs/mba-i.png">
                            <p class="lat-tt mt-2">MBA Course Latest Updates For Students</p>
                            <div class="text-end">
                                <a href="#" class="read-btn">Read More<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                        <div class="latest-c mt-4">
                            <img src="<?= base_url()?>/public/front/imgs/design.png">
                            <p class="lat-tt mt-2">Designs Course Latest Updates For Students</p>
                            <div class="text-end">
                                <a href="#" class="read-btn">Read More<i class="fa-solid fa-angles-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container map_f mt-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203031.2723536994!2d77.23701245987459!3d28.522404035544067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1724178494030!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <a href="#" class="whatsapp_icon">
        <img src="<?= base_url()?>/public/front/imgs/whatsapp-icon.png">
    </a>

    
   <?php echo  view('front/include/footer');?>
   <?php echo  view('front/include/script');?>
   </style><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

 <script>
        $(document).ready(function() {
            $("#search_input").autocomplete({
                source: function(request, response) {
                    if ( $("#search_input").val() !="") {

                    $.ajax({
                        url: "<?php echo base_url('autocomplete'); ?>",
                        dataType: "json",
                        data: {
                            term: request.term
                        },
                        success: function(data) {
                           if (data == '') {
                            $('#serchdata').html('');
                           }else{
                            $('#serchdata').html(data);

                           }

                        // alert(data);

                           
                        }
                    });
                    }else{
                            $('#serchdata').html('');

                           }
                },
                minLength: 0 // Minimum characters before triggering autocomplete
            });
        });
    

  </script>
   
</body>

</html>