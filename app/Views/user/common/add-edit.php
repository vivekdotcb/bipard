<?= view('user/header.php');
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
                    <form  class="all-form"  action="<?= base_url('admin/'.$page_name.'/update')?>" method="post" enctype="multipart/form-data">
                        <div class="card-body py-3">
                          
                            <div class="px-7 py-2">
                                <div class="mb-10 row"> 

                                    <input type="hidden" name="id" value="<?php if (!empty($singleRecord)){ echo $singleRecord['id'];}?>">
                                    <input type="hidden" name="page_name" value="<?= $page_name;?>">

                                    <?php 

                                       $column = $db->table('db_column')->select('*')->where('status', 1)->where('table_name', 'db_'.$page_name)->orderBy('position', 'ASC')->get()->getResultArray();
                                       if ($page_name == 'column' || $page_name == 'table') {
                                        $column = $db->table('db_column_structure')->select('*')->where('status', 1)->where('table_name', 'db_'.$page_name)->orderBy('position', 'ASC')->get()->getResultArray();
                                        }

                                    if (count($column) > 0){

                                        foreach($column as $row){

                                            if ($row['type'] == 'text') {
                                    ?>
                                    <div class="col-md-<?= $row['col'] ?> mb-2"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <input type="text" name="<?= $row['name'] ?>" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord[$row['name']];}?>">
                                        <span class="text-danger" id="<?= $row['name'] ?>"></span>
                                    </div>

                                    <?php } elseif ($row['type'] == 'year') { ?>
                                    <div class="col-md-<?= $row['col'] ?>  mb-2"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <select class="form-control js-example-basic-single col-sm-12" name="<?= $row['name'] ?>" required >
                                            <option value="">Select Year</option>
                                            <?php
                                                $current_year = $row['max'];
                                                if ($current_year == 0) {
                                                    $current_year = date("Y");

                                                }
                                                for ($year = $row['min']; $year <= $current_year; $year++) { ?>
                                                    <option value="<?= $year; ?>"  <?php if (!empty($singleRecord)){  if ($singleRecord[$row['name']] == $year) { echo 'Selected';
                                                    }}?>><?= $year; ?></option>
                                               <?php } ?>

                                        </select>
                                        <span class="text-danger" id="<?= $row['name'] ?>"></span>
                                    </div>

                                    <?php } elseif ($row['type'] == 'select') { ?>
                                    <div class="col-md-<?= $row['col'] ?>  mb-2"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <select class="form-control js-example-basic-single col-sm-12 dynamic-select <?= $row['option_table']; ?>"  data-wrapper="<?= $row['depend_table']; ?>" data-depend ="<?= $row['depend_column']; ?>" name="<?= $row['name'] ?>" >
                                        <option value="">Select <?= label($row['name']); ?></option>
                                        <?php if ($row['option_table'] != 'static') { 

                                            
                                            $variable =  allData($row['option_table']);
                                            foreach($variable as $val){
                                            ?>
                                            <option value="<?= $val['id'] ?>" <?php if (!empty($singleRecord)){  if ($singleRecord[$row['name']] == $val['id']) { echo 'Selected';
                                                    }}?>><?= label($val['name']); ?></option>


                                        <?php } ?>
                                        <?php }else {
                                            $variable = json_decode($row['options']);
                                            foreach($variable as $val){ ?>

                                                <option value="<?= $val; ?>"><?= label($val); ?></option>

                                        <?php } }?>
                                        </select>
                                        <span class="text-danger" id="<?= $row['name'] ?>"></span>
                                    </div>


                                    <?php } elseif ($row['type'] == 'multiple_select') { ?>
                                    <div class="col-md-<?= $row['col'] ?> mb-4"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']) ?></label>
                                        <select name="<?= $row['name'] ?>[]" class="form-control js-example-placeholder-multiple col-sm-12" multiple="multiple">
                                            <option value="">Select <?= label($row['name']); ?></option>
                                            <?php 

                                            if ($row['option_table'] != 'static') {
                                            $variable =  allData($row['option_table']);
                                            foreach ($variable as $key ){ ?>
                                                <option value="<?= $key['name']; ?>" <?php if (!empty($singleRecord) && !empty(json_decode($singleRecord[$row['name']]))) { if ( in_array($key['name'], json_decode($singleRecord[$row['name']])) ){ echo "Selected"; }}?>><?= $key['name']; ?></option>
                                            <?php } ?>
                                            <?php }else {
                                            $variable = json_decode($row['options']);
                                            foreach($variable as $val){ ?>
                                                <option value="<?= $val; ?>"><?= label($val); ?></option>

                                        <?php } }?>
                                        </select>
                                        <span class="text-danger" id="brandid"></span>
                                    </div>
                                    <?php } elseif ($row['type'] == 'image') { ?>
                                    <div class="col-md-<?= $row['col'] ?>"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <input type="file" name="<?= $row['name'] ?>" class="form-control" <?php if (empty($singleRecord)) { echo 'required';}?>>
                                        <span class="text-danger" id="<?= $row['name'] ?>"></span>
                                    </div>  

                                    <?php } elseif ($row['type'] == 'multiple_image') { ?> 
                                    <div class="col-md-<?= $row['col'] ?>"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <input type="file" name="<?= $row['name'] ?>[]" class="form-control" <?php if (empty($singleRecord)) { echo 'required';}?> multiple>
                                        <span class="text-danger" id="<?= $row['name'] ?>"></span>
                                    </div> 

                                    <?php } elseif ($row['type'] == 'textfield') { ?>
                                    <div class="col-md-12"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <textarea  class="form-control" name="<?= $row['name']; ?>" required><?php if (!empty($singleRecord)){ echo $singleRecord[$row['name']];}?></textarea>
                                        <span class="text-danger" id="<?= $row['name']; ?>"></span>
                                    </div>

                                    <?php } elseif ($row['type'] == 'texteditor') { ?>
                                    <div class="col-md-12"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <textarea  class="form-control edi" name="<?= $row['name']; ?>" required><?php if (!empty($singleRecord)){ echo $singleRecord[$row['name']];}?></textarea>
                                        <span class="text-danger" id="<?= $row['name']; ?>"></span>
                                    </div>

                                    <?php } else{ ?>
                                    <div class="col-md-<?= $row['col'] ?> mb-2"> 
                                        <label class="form-label fw-semibold"><?= label($row['name']); ?></label>
                                        <input type="<?= $row['col'] ?>" name="<?= $row['name'] ?>" class="form-control" value="<?php if (!empty($singleRecord)){ echo $singleRecord[$row['name']];}?>">
                                        <span class="text-danger" id="<?= $row['name'] ?>"></span>
                                    </div>


                                    <?php } } } ?>

                                    <div class="mt-4 col-md-12 text-right"> 
                                        <?php if (empty($singleRecord)){ ?>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Add</button>
                                        <?php    }else{ ?>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">update</button>
                                        <?php  }  ?>
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

    

 



<?= view('user/footer.php'); ?>


