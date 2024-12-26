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
                <?php   $singleRecord = singleData('db_hostel_admin_profile', ['userId' =>  $_SESSION['user']['id']]); ?>
    <div class="pcoded-inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <form  class="all-form"  action="<?= base_url('admin/'.$page_name.'/update')?>" method="post" enctype="multipart/form-data">
                        <div class="card-body py-3">
                            <div class="px-7 py-2">
                                <div class="row">
                                    <input type="hidden"  name="id" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['id'];}?>">
                                    <input type="hidden"  name="userId" class="form-control" value="<?= $_SESSION['user']['id']?>">
                                    <input type="hidden" name="page_name" value="<?= $page_name;?>">
                                    <div class="col-md-6 mb-2"> 

                                        <label class="form-label fw-semibold">Hostel Name</label>
                                        <input type="text" name="name" class="form-control" value="<?= $_SESSION['user']['name']?>" readonly >
                                        <span class="text-danger" id="name"></span>
                                    </div>
                                    <div class="col-md-6 mb-2"> 
                                        <label class="form-label fw-semibold">Admin Name</label>
                                        <input type="text" name="admin_name" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['admin_name'];}?>">
                                        <span class="text-danger" id="admin_name"></span>
                                    </div>
                                    
                                </div>
                                <div class="mt-4 col-md-12 text-right"> 
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">submit</button>
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


