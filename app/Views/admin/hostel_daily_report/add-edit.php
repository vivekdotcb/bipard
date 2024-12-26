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
    <?php  
     // $singleRecord = singleData('db_hostel_daily_report', ['created_by' =>  $_SESSION['user']['id']]);
     $singleRecord = ""; 

     ?>
    <div class="pcoded-inner-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-xl-stretch mb-5 mb-xl-8">
                    <form  class="all-form"  action="<?= base_url('admin/'.$page_name.'/update')?>" method="post" enctype="multipart/form-data">
                        <div class="card-body py-3">
                            <div class="px-7 py-2">
                                <div class="row">
                                    <input type="hidden"  name="id" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['id'];}?>">
                                    <input type="hidden"  name="created_by" class="form-control" value="<?= $_SESSION['user']['id']?>">
                                    <input type="hidden" name="page_name" value="<?= $page_name;?>">
                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">Room No</label>
                                        <input type="number" name="room_no" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['room_no'];}?>" required>
                                        <span class="text-danger" id="room_no"></span>
                                    </div>
                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">Bed Occupied</label>
                                        <input type="number" name="bed_occupied" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['bed_occupied'];}?>" required>
                                        <span class="text-danger" id="bed_occupied"></span>
                                    </div>
                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">Bed Vacant</label>
                                        <input type="number" name="bed_vacant" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['bed_vacant'];}?>" required>
                                        <span class="text-danger" id="bed_vacant"></span>
                                    </div>
                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">Resident Name/ Batch</label>
                                        <input type="text" name="resident_name" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['resident_name'];}?>" required>
                                        <span class="text-danger" id="resident_name"></span>
                                    </div>

                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">Room Cleaning</label>
                                        <select class="form-control" name="room_cleaning" required>
                                            <option value="">Select</option>
                                            <option value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['room_cleaning'] == 1) {
                                            echo 'selected'; } }?>>Yes</option>
                                            <option value="2" <?php if (!empty($singleRecord)){ if ($singleRecord['room_cleaning'] == 2) {
                                            echo 'selected'; } }?>>No</option>

                                        </select>
                                        <span class="text-danger" id="room_cleaning"></span>
                                    </div>
                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">Bed Making</label>
                                        <select class="form-control" name="bed_making" required>
                                            <option value="">Select</option>
                                            <option value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['bed_making'] == 1) {
                                            echo 'selected'; } }?>>Yes</option>
                                            <option value="2" <?php if (!empty($singleRecord)){ if ($singleRecord['bed_making'] == 2) {
                                            echo 'selected'; } }?>>No</option>

                                        </select>
                                        <span class="text-danger" id="bed_making"></span>
                                    </div>
                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">Toilet Cleaning</label>
                                        <select class="form-control" name="toilet_cleaning" required>
                                            <option value="">Select</option>
                                            <option value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['toilet_cleaning'] == 1) {
                                            echo 'selected'; } }?>>Yes</option>
                                            <option value="2" <?php if (!empty($singleRecord)){ if ($singleRecord['toilet_cleaning'] == 2) {
                                            echo 'selected'; } }?>>No</option>

                                        </select>
                                        <span class="text-danger" id="toilet_cleanin"></span>
                                    </div>
                                    <div class="col-md-3 mb-2"> 
                                        <label class="form-label fw-semibold">All Electric Fitting working satisfactory</label>
                                        <select class="form-control" name="electricty_working" required>
                                            <option value="">Select</option>
                                            <option value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['electricty_working'] == 1) {
                                            echo 'selected'; } }?>>Yes</option>
                                            <option value="2" <?php if (!empty($singleRecord)){ if ($singleRecord['electricty_working'] == 2) {
                                            echo 'selected'; } }?>>No</option>

                                        </select>
                                        <span class="text-danger" id="electricty_working"></span>
                                    </div>
                                    <div class="col-md-12 mb-2"> 
                                        <label class="form-label fw-semibold">Remarks</label>
                                        <textarea name="remarks" class="form-control" required><?php if (!empty($singleRecord)){ echo $singleRecord['remarks'];}?></textarea>
                                        <span class="text-danger" id="remarks"></span>
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


