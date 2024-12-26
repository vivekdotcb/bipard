    
    
    <div  style="background-color:black;">
        <div class="row common_padding">
            <div class="col-12 col-sm-6 text-center text-sm-start">
                <p class = "text-white">©Copyright <?= singleData('db_setting',['id' => 1])['copyright']; ?>.
                </p>
            </div>
            <div class = "col-12 col-sm-6 mt-1 mt-sm-0 text-center text-sm-end">
                <a href = "https://aytis.in/" target = "_blank" class = "text-white">Technology Partner: <?= singleData('db_setting',['id' => 1])['technology_partner']; ?></a>
            </div>
        </div>
    </div>
    
    <script src="<?= base_url() ?>public/backend/files/assets/pages/chart/float/jquery.flot.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/pages/chart/float/curvedLines.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>

    <script src="<?= base_url() ?>public/backend/files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/pages/widget/amchart/serial.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/pages/widget/amchart/light.js"></script>

    <script src="<?= base_url() ?>public/backend/../../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/assets/pages/google-maps/gmaps.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/assets/pages/dashboard/crm-dashboard.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/assets/js/script.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/assets/pages/todo/todo.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?= base_url() ?>public/backend/files/assets/pages/waves/js/waves.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/select2/js/select2.full.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
    </script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/bower_components/multiselect/js/jquery.multi-select.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/assets/js/jquery.quicksearch.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/assets/pages/advance-elements/select2-custom.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/js/pcoded.min.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="<?= base_url() ?>public/backend/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/backend/files/assets/js/script.js"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
    <script src="<?= base_url('public/common/');?>js/toastr.js"></script>
    <script src="<?= base_url('public/common/');?>js/custom.js"></script>


     <script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            placeholder: 'Select one or more options',
            allowClear: true
        });
    });
    </script>

    <script>
    document.querySelectorAll('.edi').forEach(function(element) {
        CKEDITOR.replace(element);
    });
</script> 
    
</body>



</html>