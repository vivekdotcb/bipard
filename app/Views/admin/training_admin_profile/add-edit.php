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
                <?php   $singleRecord = singleData('db_training_admin_profile', ['userId' =>  $_SESSION['user']['id']]); ?>
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
                                    <div class="col-md-4 mb-2"> 

                                        <label class="form-label fw-semibold">TRAINING NAME</label>
                                        <input type="text" name="name" class="form-control" value="<?= $_SESSION['user']['name']?>" readonly >
                                        <span class="text-danger" id="name"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Trainees Dept./Office</label>
                                        <input type="text" name="deptOffice" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['deptOffice'];}?>">
                                        <span class="text-danger" id="deptOffice"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">No. of Trainees</label>
                                        <input type="number" name="noOfTrainees" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['noOfTrainees'];}?>">
                                        <span class="text-danger" id="noOfTrainees"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">No. of Male and Female Trainees</label>
                                        <input type="number" name="noOfMaleAndFemaleTrainees" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['noOfMaleAndFemaleTrainees'];}?>">
                                        <span class="text-danger" id="noOfMaleAndFemaleTrainees"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Training Requisition Letter No.</label>
                                        <input type="text" name="letterNo" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['letterNo'];}?>">
                                        <span class="text-danger" id="letterNo"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Budget Sent to Department.</label>
                                        <input type="text" name="budget" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['budget'];}?>">
                                        <span class="text-danger" id="budget"></span>
                                    </div> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Training Period.</label>
                                        <input type="text" name="period" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['period'];}?>">
                                        <span class="text-danger" id="period"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Course Co-ordinator.</label>
                                        <select name="co-ordinator" class="form-control"> 
                                            <option value="">Select</option>   

                                            <?php 
                                            $alldata=alldata('db_admin', ['type' => 2]);
                                            foreach ($alldata as $key): ?>
                                                <option  value="<?= $key['id']; ?>" <?php if (!empty($singleRecord)){ if ($singleRecord['co-ordinator'] == $key['id']) {
                                                echo "Selected"; } }?>><?= $key['name']; ?></option>
                                            <?php endforeach ?>
                                            
                                            
                                        </select>
                                        <span class="text-danger" id="co-ordinator"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Name of Admin.</label>
                                        <input type="text" name="adminName" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['adminName'];}?>">
                                        <span class="text-danger" id="adminName"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Name of D.E.O..</label>
                                        <input type="text" name="deoName" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['deoName'];}?>">
                                        <span class="text-danger" id="deoName"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Name of MTS.</label>
                                        <input type="text" name="mtsName" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['mtsName'];}?>">
                                        <span class="text-danger" id="mtsName"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Training Hall.</label>
                                        <input type="text" name="trainingHall" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['trainingHall'];}?>">
                                        <span class="text-danger" id="trainingHall"></span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4 mb-2"> 
                                        <h4><b>Item</b></h4>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <h4><b>Status</b></h4>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <h4><b>Remarks</b></h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Training Module Prepared.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="module" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['module'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['module'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="name"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="moduleMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['moduleMess'];}?>">
                                        <span class="text-danger" id="moduleMess"></span>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Training Schedule Prepared.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="schedule" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['schedule'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['schedule'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="name"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="scheduleMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['scheduleMess'];}?>">
                                        <span class="text-danger" id="scheduleMess"></span>
                                    </div>
                                </div>  

                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">RP outside Bihar Planned.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="outsidePlanned" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['outsidePlanned'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['outsidePlanned'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="outsidePlanned"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="outsidePlannedMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['outsidePlannedMess'];}?>">
                                        <span class="text-danger" id="outsidePlannedMess"></span>
                                    </div>
                                </div>    

                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Faculty Detail Available.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="faculty" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['faculty'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['faculty'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="faculty"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="facultyMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['facultyMess'];}?>">
                                        <span class="text-danger" id="facultyMess"></span>
                                    </div>
                                </div>   

                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Outdoor Activity Planned.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="activityPlanned" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['activityPlanned'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['activityPlanned'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="activityPlanned"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="activityPlannedMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['activityPlannedMess'];}?>">
                                        <span class="text-danger" id="activityPlannedMess"></span>
                                    </div>
                                </div> 

                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Bihar / Bharat Darshan Worked Out in Advance.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="WorkedOutInAdvance" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['WorkedOutInAdvance'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['WorkedOutInAdvance'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="WorkedOutInAdvance"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="WorkedOutInAdvanceMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['WorkedOutInAdvanceMess'];}?>">
                                        <span class="text-danger" id="WorkedOutInAdvanceMess"></span>
                                    </div>
                                </div> 

                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Ticket Reservation and Lodging Done in Advance.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="LodgingDoneInAdvance" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['LodgingDoneInAdvance'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['LodgingDoneInAdvance'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="LodgingDoneInAdvance"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="LodgingDoneInAdvanceMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['LodgingDoneInAdvanceMess'];}?>">
                                        <span class="text-danger" id="LodgingDoneInAdvanceMess"></span>
                                    </div>
                                </div> 
                                    
                                <hr>  
                                <h4>Post Training Checklist</h4>
                                <hr> 
                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">All RP Payment Done.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="AllRPPaymentDone" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['AllRPPaymentDone'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['AllRPPaymentDone'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="AllRPPaymentDone"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="AllRPPaymentDoneMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['AllRPPaymentDoneMess'];}?>">
                                        <span class="text-danger" id="AllRPPaymentDoneMess"></span>
                                    </div>
                                </div> 
                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Course Completion Report Submitted.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="CourseCompletionReportSubmitted" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['CourseCompletionReportSubmitted'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['CourseCompletionReportSubmitted'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="CourseCompletionReportSubmitted"></span>
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        
                                        <input type="text" name="CourseCompletionReportSubmittedMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['CourseCompletionReportSubmittedMess'];}?>">
                                        <span class="text-danger" id="CourseCompletionReportSubmittedMess"></span>
                                    </div>
                                </div> 
                                <div class="row"> 
                                    <div class="col-md-4 mb-2"> 
                                        <label class="form-label fw-semibold">Training Expenses Bill Raised to Department.</label>
                                        
                                    </div>
                                    <div class="col-md-4 mb-2"> 
                                        <select name="TrainingExpensesBillRaisedToDepartment" class="form-control"> 
                                            <option value="">Select</option>   
                                            <option  value="1" <?php if (!empty($singleRecord)){ if ($singleRecord['TrainingExpensesBillRaisedToDepartment'] == 1) {
                                                echo "Selected"; } }?>>Yas</option>
                                            <option value="0" <?php if (!empty($singleRecord)){ if ($singleRecord['TrainingExpensesBillRaisedToDepartment'] == 2) {
                                                // code...
                                            echo "Selected"; } }?>>No</option>
                                        </select>
                                        <span class="text-danger" id="TrainingExpensesBillRaisedToDepartment"></span>
                                    </div>
                                    <div class="col-md-4 mb-2 pribtn"> 
                                        
                                        <input type="text" name="TrainingExpensesBillRaisedToDepartmentMess" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord['TrainingExpensesBillRaisedToDepartmentMess'];}?>">
                                        <span class="text-danger" id="TrainingExpensesBillRaisedToDepartmentMess"></span>
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


