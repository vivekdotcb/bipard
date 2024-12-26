<?= view('admin/header.php');
$db = \Config\Database::connect();

if (empty($date)) {
    $date = date('Y-m-d');
}
 ?>

 <style>
        .main-body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1, h3 {
            text-align: center;
        }
        .signature {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }
        .signature div {
            text-align: center;
        }
    </style>
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-6">
                <div class="page-header-title">
                    <i class="feather icon-inbox bg-c-blue"></i>
                    <div class="d-inline">
                        <h5><?= $page_title; ?></h5>

                    </div>
                </div>
            </div>

            
            <div class="col-6">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                       
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('admin'); ?>"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href=""><?= $page_title; ?></a>
                        </li>
                                    
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
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><?= $page_title; ?></h5>

                                            <a style="position: absolute; right: 20px; top: 5px;" class="btn btn-primary btn-add-task waves-effect waves-light m-t-10" href="<?= base_url('admin/'.$page_name.'/add') ?>" ><?php if ($date == date('Y-m-d')){ echo 'Edit'; } else { echo "View";}?></a>
                                        </div>
                                        
                              <!--            <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="example"
                                                class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Question</th>
                                                    <th>Time</th>
                                                
                                                </thead>
                                                <tbody>
                                                    <?php 

                                                    

                                                    $allData = \Config\Database::connect()->table('db_training_daily_report')->orderBy('question', 'asc')->where('DATE(created_at)', $date)->get()->getResultArray(); 


                                                    // $allData = allData('db_training_daily_report', ['DATE(created_at)' => $date]);

                                                    $i = 0;
                                                    foreach ($allData as $key) { ?>


                                                    <tr class="<?php if ($key['ans'] == 2){ echo "bg-danger"; } elseif ($key['ans'] == 1){ echo "bg-success"; } else { echo "bg-primary"; } ?>">
                                                        <td>
                                                            <?= ++$i; ?>
                                                        </td>
                                                        <td>
                                                            <?= $key['name']; ?>
                                                        </td>
                                                        <td>
                                                        <?php if (singleData('db_question', ['id' => $key['question']]) != '') {
                                                            echo  singleData('db_question', ['id' => $key['question']])['question'];
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?= $key['created_at']; ?>
                                                        </td>
                                                                                                            </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> -->

                               <div class="card-block row">
                                <?php 
                                $single  = singleData('db_training_admin_profile' , ['userId' => $_SESSION['user']['id']]); ?>
                                            <table>
                                                <tr>
                                                    <td width="50%">TRAINING NAME</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['name']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Trainees Dept./Office</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['deptOffice']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">No. of Trainees</td>
                                                    <td width="50%"><?php if($single != '') { echo   $single['noOfTrainees']; }?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">No. of Male and Female Trainees</td>
                                                    <td width="50%" width="50%"><?php if($single != '') { echo  $single['noOfMaleAndFemaleTrainees']; }?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Training Requisition Letter No.</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['letterNo'];} ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Budget Sent to Department</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['budget'];} ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Training Period</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['period'];} ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Course Co-ordinator</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['co-ordinator'];} ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Name of Admin</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['adminName'];} ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Name of D.E.O.</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['deoName']; }?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Name of MTS</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['mtsName']; }?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Training Hall</td>
                                                    <td width="50%"><?php if($single != '') { echo $single['trainingHall']; }?></td>
                                                </tr>
                                            </table>
                                            <br>
                                            <table>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                    <th>Remarks</th>
                                                </tr>
                                                <tr>
                                                    <td>Training Module Prepared</td>
                                                    <td><?php if($single != '') { if ($single['module'] == 1) {
                                                        echo "Yes";  } elseif ($single['module'] == 2)
                                                        { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['moduleMess']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Training Schedule Prepared</td>
                                                    <td><?php if($single != '') { if ($single['schedule'] == 1) {
                                                        echo "Yes";  } elseif ($single['schedule'] == 2)
                                                        { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['scheduleMess']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>RP outside Bihar Planned</td>
                                                    <td><?php if($single != '') { if ($single['outsidePlanned'] == 1) {
                                                        echo "Yes";  } elseif ($single['outsidePlanned'] == 2)
                                                        { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['outsidePlannedMess']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Faculty Detail Available</td>
                                                    <td><?php if($single != '') { if ($single['faculty'] == 1) {
                                                        echo "Yes";  } elseif ($single['faculty'] == 2)
                                                        { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['facultyMess']; }?></td>
                                                </tr>
                                                <tr>
                                                    <td>Outdoor Activity Planned</td>
                                                    <td><?php if($single != '') { if ($single['activityPlanned'] == 1) {
                                                        echo "Yes";  } elseif ($single['activityPlanned'] == 2)
                                                        { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['activityPlannedMess']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bihar / Bharat Darshan Worked Out in Advance</td>
                                                    <td><?php if($single != '') { if ($single['WorkedOutInAdvance'] == 1) {
                                                        echo "Yes";  } elseif ($single['WorkedOutInAdvance'] == 2)
                                                        { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['WorkedOutInAdvanceMess']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Ticket Reservation and Lodging Done in Advance</td>
                                                    <td><?php if($single != '') { if ($single['LodgingDoneInAdvance'] == 1) {
                                                        echo "Yes";  } elseif ($single['LodgingDoneInAdvance'] == 2)
                                                        { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['LodgingDoneInAdvanceMess']; }?></td>
                                                </tr>
                                            </table>
                                            <br>
                                            <h3>Post Training Checklist</h3>
                                            <table>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                    <th>Remarks</th>
                                                </tr>
                                                <tr>
                                                    <td>All RP Payment Done</td>
                                                    <td><?php if($single != '') { if ($single['AllRPPaymentDone'] == 1) {
                                                        echo "Yes";  } elseif ($single['AllRPPaymentDone'] == 2) { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['AllRPPaymentDoneMess']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Course Completion Report Submitted</td>
                                                    <td><?php if($single != '') { if ($single['CourseCompletionReportSubmitted'] == 1) {
                                                        echo "Yes";  } elseif ($single['CourseCompletionReportSubmitted'] == 2) { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['CourseCompletionReportSubmittedMess']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Training Expenses Bill Raised to Department</td>
                                                    <td><?php if($single != '') { if ($single['TrainingExpensesBillRaisedToDepartment'] == 1) {
                                                        echo "Yes";  } elseif ($single['TrainingExpensesBillRaisedToDepartment'] == 2) { echo "No"; } } ?></td>
                                                    <td><?php if($single != '') { echo $single['TrainingExpensesBillRaisedToDepartmentMess']; } ?></td>
                                                </tr>
                                            </table>
                                            <div class="signature row w-100">
                                                <div class="col-6">
                                                    <p>_________________________</p>
                                                    <p>Signature of DEO</p>
                                                </div>
                                                <div class="col-6">
                                                    <p>_________________________</p>
                                                    <p>Signature of Admin</p>
                                                </div>
                                            </div>

                                        
                                </div> 

                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>




<?= view('admin/footer.php'); ?>


