<?= view('admin/header.php');
$db = \Config\Database::connect();
 ?>
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

                                        <?php $column2 = $db->table('db_column')->select('*')->where('list', 1)->where('table_name', 'db_'.$page_name)->orderBy('position', 'ASC')->get()->getResultArray(); 

                                        if ($page_name == 'column' || $page_name == 'table') {
                                            $column2 = $db->table('db_column_structure')->select('*')->where('list', 1)->where('table_name', 'db_'.$page_name)->orderBy('position', 'ASC')->get()->getResultArray(); 
                                        }


                                        ?>



                                        <?php if (count($column2) > 0): ?>
                                            
                                        
                                        <div class="card-header">
                                            <h5><?= $page_title; ?></h5>
                                            <a style="position: absolute; right: 20px; top: 5px;" class="btn btn-primary btn-add-task waves-effect waves-light m-t-10" href="<?= base_url('admin/'.$page_name.'/add') ?>" ><i class="icofont icofont-plus"></i>Add New</a>
                                        </div>
                                        <?php endif ?>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="example"
                                                class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <?php 
                                                    
                                                    if(count($column2) < 1){
                                                    $column =  json_decode(column('db_'.$page_name));
                                                    ?>
                                                    <tr>
                                                        <th>#</th>
                                                        <?php  foreach($column as $value){
                                                        if ($value->Field != 'id' ) { ?>
                                                        <th><?= label($value->Field); ?></th>
                                                        <?php } }?>
                                                        <th style="width:5%">View/Edit</th> 
                                                        <th style="width:5%">Delete</th>
                                                    </tr>
                                                    <?php }  else {?>
                                                    <tr>
                                                        <th>#</th>
                                                        <?php foreach($column2 as $key){ ?>
                                                        <th><?= label($key['name']); ?></th>
                                                        <?php } ?>
                                                        <th style="width:5%">View/Edit</th> 
                                                        <th style="width:5%">Delete</th>
                                                    </tr>
                                                <?php }?>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $i = 0;
                                                    
                                                    foreach ($table as $key ): ?>
                                                        <?php if(count($column2) < 1){ ?>

                                                    <tr>
                                                        <th><?php echo ++$i ?></th>
                                                        <?php $column =  json_decode(column('db_'.$page_name));
                                                            foreach($column as $value){
                                                            if ($value->Field != 'id' ) {
                                                        ?>
                                                        <?php if (strlen($key[$value->Field]) >100 ) { ?>
                                                        <td><p class="show-mess" mess="<?= strip_tags($key[$value->Field]); ?>">view</p> </td>
                                                        <?php   } elseif (preg_match("/\.(jpg|jpeg|png|gif|bmp|webp)$/i", $key[$value->Field])) { ?>
                                                                <td><img src="<?= base_url($key[$value->Field]); ?>"  height="50"></td>
                                                        <?php  }else  {?>
                                                            <td><?= $key[$value->Field]; ?>
                                                        <?php }}  }?>
                                                        <td> <a  href="<?= base_url('admin/'.$page_name.'/edit/'.$key['id']); ?>"><i class="fa fa-edit" ></i></a></td>
                                                        <td><div class="dlt-data"  id="<?= $key['id']; ?>" url="<?= base_url('delete') ?>" table="db_<?= $page_name;?>"><i style="color: red;" class="fa fa-trash btn" ></i></div></td>
                                                    </tr>

                                                <?php } else { ?>
                                                    <tr>
                                                        <th><?php echo ++$i ?></th>
                                                        <?php 
                                                            foreach($column2 as $key2){
                                                        ?>
                                                        <td>
                                                        <?php if (strlen($key[$key2['name']]) >200 && !isJson($key[$key2['name']])) { ?>
                                                        <p class="show-mess" mess="<?= strip_tags($key[$key2['name']]); ?>">view</p> 
                                                        <?php } elseif ($key2['type'] == 'select' && $key2['options'] === ''){ ?>

                                                            <?php if (singleData($key2['option_table'], ['id' => $key[$key2['name']]]) != '') {
                                                              echo  singleData($key2['option_table'], ['id' => $key[$key2['name']]])['name'];
                                                            } ?>

                                                        <?php } elseif ($key2['type'] == 'multiple_select' && $key2['options'] === ''){ 
                                                                $sdatas = json_decode($key[$key2['name']]);
                                                                foreach ($sdatas as $sdata) { ?>

                                                            <?php if (singleData($key2['option_table'], ['id' => $sdata]) != '') {
                                                               
                                                             singleData($key2['option_table'], ['id' => $sdata])['name']; }?>

                                                        <?php  } } elseif ($key2['type'] == 'image') { ?>
                                                                <img src="<?= base_url($key[$key2['name']]); ?>"  height="50">
                                                        <?php   } elseif ($key2['type'] == 'multiple_image') { 
                                                            $images = json_decode($key[$key2['name']]);
                                                            foreach ($images as $image) {  ?>
                                                                <img src="<?= base_url($image); ?>"  height="50">
                                                        <?php }} elseif ($key2['name'] == 'status') { ?>

                                                            <?php if ($key[$key2['name']] == 0){ ?>
                                                                <a  href="" class="status-data" id="<?= $key['id']; ?>" page_name="<?= $page_name; ?>"><i class='fas fa-toggle-off' style='font-size:36px;color:#4099ff'></i></a>
                                                            <?php } else { ?>
                                                                <a  href="" class="status-data" id="<?= $key['id']; ?>" page_name="<?= $page_name; ?>"><i class='fas fa-toggle-on' style='font-size:36px;color:#4099ff'></i></a>
                                                            <?php } ?>
                                                         
                                                        <?php } elseif ($key2['name'] == 'verification') { ?>

                                                        <?php if ($key[$key2['name']] == 0){ ?>
                                                                <a  href="" class="vaification" id="<?= $key['id']; ?>" page_name="<?= $page_name; ?>"><i class='fas fa-exclamation-circle' style='font-size:36px;color:#ffc107;'></i></a>
                                                            <?php } elseif ($key[$key2['name']] == 1) { ?>
                                                                <a  href="" class="vaification" id="<?= $key['id']; ?>" page_name="<?= $page_name; ?>"><i class='fa fa-check-circle' style='font-size:36px;color:#4099ff'></i></a>
                                                            <?php } else { ?>
                                                                <a  href="" class="vaification" id="<?= $key['id']; ?>" page_name="<?= $page_name; ?>"><i class='fa fa-close' style='font-size:36px;color:red'></i></a>
                                                            <?php } ?>


                                                        <?php } else  {?>
                                                            <?= $key[$key2['name']]; ?>
                                                        <?php }?>
                                                    </td>
                                                   <?php }?>
                                                        <td> <a  href="<?= base_url('admin/'.$page_name.'/edit/'.$key['id']); ?>"><i class="fa fa-edit" ></i></a></td>
                                                        <?php if ($page_name == 'column'){ ?>
                                                            <td><div class="dlt-data"  id="<?= $key['id']; ?>" url="<?= base_url('delete_column') ?>" page_name="<?= $page_name;?>"><i style="color: red;" class="fa fa-trash btn" ></i></div></td>
                                                            
                                                        <?php } else { ?>
                                                            <td><div class="dlt-data"  id="<?= $key['id']; ?>" url="<?= base_url('delete') ?>" page_name="<?= $page_name;?>"><i style="color: red;" class="fa fa-trash btn" ></i></div></td>


                                                        <?php } ?>
                                                        
                                                    </tr>
                                                <?php } ?>
                                                    <?php endforeach; ?>
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


