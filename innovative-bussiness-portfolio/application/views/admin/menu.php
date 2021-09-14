<?php include('header.php');?>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ADD Menu list</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/insertmenu'); ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Menu Name </label>
                                                <input type="text" name="menu" class="form-control" placeholder="Enter your Menu Name.." required autofocus>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Menu URL </label>
                                                <input type="text" name="url" class="form-control" placeholder="Enter Your Menu Url.. *(if you want dropdown menu enter 1)" required>
                                            </div>
                                        </div>
                                        
                                      
                                        <button type="submit" class="btn mb-1 btn-success">ADD <span class="btn-icon-right"><i class="fa fa-plus"></i> </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?=base_url();?>admin/plugins/common/common.min.js"></script>
    <script src="<?=base_url();?>admin/js/custom.min.js"></script>
    <script src="<?=base_url();?>admin/js/settings.js"></script>
    <script src="<?=base_url();?>admin/js/gleek.js"></script>
    <script src="<?=base_url();?>admin/js/styleSwitcher.js"></script>

</body>


<!-- Mirrored from demo.themefisher.com/quixlab/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 11:44:07 GMT -->
</html>