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
                             

                               <div class="card-block row">
                                <?php 
                                $single  = singleData('db_mess_admin_profile' , ['userId' => $_SESSION['user']['id']]); ?>
                                            <table>
                                                <tr>
                                                    <td width="50%">Name Of Mess - <?php if($single != '') { echo $single['name']; } ?></td>
                                                    <td width="50%">Admin Name - <?php if($single != '') { echo $single['admin_name']; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td width="50%">Name of Mess Agency/Manager - <?php if($single != '') { echo $single['agency']; } ?></td>
                                                    <td width="50%">Head Cook - <?php if($single != '') { echo $single['headCook']; } ?></td>
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


