<?php include('header.php');?>
        
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
           

            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Banner Form</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/insert_review/'); ?>
                                    
                                        <div class="form-row">
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file"  name="user_img" class="custom-file-input" required autofocus>
                                                <label class="custom-file-label">Uplode Your Profile</label>
                                            </div>
                                            </div>
                                       
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label>User Name </label>
                                                <input type="text" name="user_name" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                                <label>City </label>
                                                <input type="text" name="city" class="form-control">
                                        </div>

                                        <div class="form-group col-md-6">
                                                <label>Enter Massages </label>
                                                <textarea class="form-control" name="user_text"></textarea>
                                        </div>

                                        

                                        
                                       
                                        <button type="submit" class="btn btn-dark">Add </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
    
    <script src="<?=base_url();?>admin/plugins/common/common.min.js"></script>
    <script src="<?=base_url();?>admin/js/custom.min.js"></script>
    <script src="<?=base_url();?>admin/js/settings.js"></script>
    <script src="<?=base_url();?>admin/js/gleek.js"></script>
    <script src="<?=base_url();?>admin/js/styleSwitcher.js"></script>

     <script src="plugins/summernote/dist/summernote.min.js"></script>
    <script src="plugins/summernote/dist/summernote-init.js"></script>

</body>



</html>