<?= view('admin/header.php');
$db = \Config\Database::connect();
 ?>

 <style>
    .select2-selection--single{
            height: 37px !important;
           
    }

    .select2-selection__rendered{
         background: '' !important;
    }

 </style>


<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-inbox bg-c-blue"></i>
                    <div class="d-inline">
                        <h5><?= $page_title; ?></h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url(); ?>"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href=""><?= $page_title; ?></a>
                        </li>
                                   
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <form  class="all-form"  action="" method="post" enctype="multipart/form-data">
                        <div class="card-body py-3">
                          
                            <div class="px-7 py-2">
                                <?php   
                                if (empty($date)){
                                    $date = date('Y-m-d');
                                } ?>

                                
                                <div class="mb-10 row"> 
                                    <div class="col-md-12 mb-2"> 
                                        <?php 
                                        $question = allDataA('db_question', ['type' => 2, 'type2'=> 3]);
                                        $i = 0;
                                        foreach ($question as $key): ?>

                                            <?php $single = singleData('db_daily_night_watch_report', ['question' => $key['id'], 'DATE(created_at)' => $date]); ?>
                                        <div class="row" >
                                            <div class="col-6">
                                              <?= ++$i.'. ' ?>  <label class="form-label fw-semibold"><?= $key['question']; ?></label>
                                            </div>
                                            <div class="col-2">
                                                <?php if (!empty($single)){
                                                    if ($single['ans'] == 0 ) { ?>
                                                    <a  href="" class="<?php if ($date == date('Y-m-d')) {
                                                    echo $key['input_type'];
                                                    } ; ?>" qus="<?= $key['id']; ?>" id="" page_name="daily_night_watch_report"><i class='fas fa-exclamation-circle' style='font-size:36px;color:#ffc107;'></i></a>
                                                <?php    } elseif  ($single['ans'] == 1) { ?>
                                                    <a  href="" class="<?php if ($date == date('Y-m-d')) {
                                                    echo $key['input_type'];
                                                    } ; ?>" qus="<?= $key['id']; ?>" id="<?= $single['id'] ?>" page_name="daily_night_watch_report"><i class='fa fa-check-circle' style='font-size:36px;color:#4099ff'></i></a>

                                                <?php  } elseif  ($single['ans'] == 2) { ?>
                                                    <a  href="" class="<?php if ($date == date('Y-m-d')) {
                                                    echo $key['input_type'];
                                                    } ; ?>" qus="<?= $key['id']; ?>" id="<?= $single['id'] ?>" page_name="daily_night_watch_report"><i class='fa fa-close' style='font-size:36px;color:red'></i></a>
                                                <?php } ?>
                                                
                                                <?php } else { ?>
                                                    <a  href="" class="<?php if ($date == date('Y-m-d')) {
                                                    echo $key['input_type'];
                                                    } ; ?>" qus="<?= $key['id']; ?>" id="" page_name="daily_night_watch_report"><i class='fas fa-exclamation-circle' style='font-size:36px;color:#ffc107;'></i></a>

                                                <?php } ?>
                                            </div>
                                            <div class="col-4 border border-primary">
                                                <?php if (!empty($single)){
                                                    echo $single['remark'];
                                                 } ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <?php endforeach ?>
                                        
                                        
                                        <span class="text-danger" id=""></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

        

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    

 



<?= view('admin/footer.php'); ?>


