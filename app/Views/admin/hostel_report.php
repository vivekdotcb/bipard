<?= view('admin/header.php'); ?>
           

                    <div class="pcoded-content">
                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5> <?= $page_title; ?></h5>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="<?= base_url() ?>admin"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

                                        <div class="row">

                                            <?php 
                                            $variable = allData('db_admin', ['type' => 9]);
                                            foreach ($variable as $value): ?>
                                            
                                            <div class="col-xl-3 col-md-6">
                                                <a href="<?= base_url('hostel_daily_report/'.$value['id'])?>">       
                                                    <div class="card prod-p-card card-green">
                                                        <div class="card-body">
                                                            <div class="row align-items-center m-b-30">
                                                                <div class="col">
                                                                    <h6 class="m-b-5 text-white"> <?= $value['name'] ?></h6>
                                                                    <h3 class="m-b-0 f-w-700 text-white"></h3>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-money-bill-alt text-c-green f-18"></i>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </a>        
                                            </div>

                                            <?php endforeach ?>
                                            
                                            

                                           

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelector">
                    </div>

                </div>
            </div>
       




   

<?= view('admin/footer.php'); ?>
