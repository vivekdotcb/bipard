<?= view('admin/header.php');
$db = \Config\Database::connect();

if (empty($date)) {
    $date = date('Y-m-d');
}
 ?>
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-4">
                <div class="page-header-title">
                    <i class="feather icon-inbox bg-c-blue"></i>
                    <div class="d-inline">
                        <h5><?= $page_title; ?></h5>

                    </div>
                </div>
            </div>
            <?php if (empty($userid)){$userid = ''; } ?>

            <?php  
            if ($_SESSION['role'] == 9) {
                $sesid = $_SESSION['user']['id'];
            } else{
                $sesid = $userid;
            } ?>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <div class="page-header-title t">
                        <form class="row" method="post" action="<?= base_url('admin/'.$page_name) ?>">
                            <div class="col-8">
                                <input type="date" name="datee" value="<?= $date; ?>" class="form-control">
                                <input type="hidden" name="userid" value="<?= $sesid; ?>" class="form-control">
                            </div>
                            <div class="col-4">
                                <input type="submit" class="form-control">
                            </div>
                            
                            
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
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

                                            <?php if ($_SESSION['role'] == 9): ?>
                                                 <a style="position: absolute; right: 20px; top: 5px;" class="btn btn-primary btn-add-task waves-effect waves-light m-t-10" href="<?= base_url('hostelDailyReport/'.$date.'/'.$sesid) ?>" >Add</a>
                                            <?php endif ?>

                                           
                                        </div>
                                        
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="example"
                                                class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <th>#</th>
                                                    <th>Room No</th>
                                                    <th>Bed Occupied</th>
                                                    <th>Bed Vacant</th>
                                                    <th>Resident Name/ Batch</th>
                                                    <th>Room Cleaning</th>
                                                    <th>Bed Making</th>
                                                    <th>Toilet Cleaning</th>
                                                    <th>All Electric Fitting working satisfactory</th>
                                                    <th>Remarks</th>
                                                </thead>
                                                <tbody>
                                                    <?php 

                                                    

                                                    $allData = \Config\Database::connect()->table('db_hostel_daily_report')->orderBy('id', 'asc')->where('DATE(created_at)', $date)->get()->getResultArray(); 
                                                    // $allData = allData('db_mess_daily_report', ['DATE(created_at)' => $date]);

                                                    $i = 0;
                                                    foreach ($allData as $key) { ?>


                                                    <tr>
                                                        <td><?= ++$i; ?></td>
                                                        <td><?= $key['room_no']; ?></td>
                                                        <td><?= $key['bed_occupied']; ?></td>
                                                        <td><?= $key['bed_vacant']; ?></td>
                                                        <td><?= $key['resident_name']; ?></td>
                                                        <td class="<?php if ($key['room_cleaning'] == 1) { echo "bg-success"; } else { echo "bg-danger";
                                                        } ?>"><?php if ($key['room_cleaning'] == 1) { echo "Yes"; } else { echo "No";
                                                        } ?></td>
                                                        <td class="<?php if ($key['bed_making'] == 1) { echo "bg-success"; } else { echo "bg-danger";
                                                        } ?>"><?php if ($key['bed_making'] == 1) { echo "Yes"; } else { echo "No";
                                                        } ?></td>
                                                        <td class="<?php if ($key['toilet_cleaning'] == 1) { echo "bg-success"; } else { echo "bg-danger";
                                                        } ?>"><?php if ($key['toilet_cleaning'] == 1) { echo "Yes"; } else { echo "No";
                                                        } ?></td>

                                                        <td class="<?php if ($key['electricty_working'] == 1) { echo "bg-success"; } else { echo "bg-danger";
                                                        } ?>"><?php if ($key['electricty_working'] == 1) { echo "Yes"; } else { echo "No";
                                                        } ?></td>
                                                        
                                                        
                                                        <td><?= $key['remarks']; ?></td>
                                                
                                                                                                            </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
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


