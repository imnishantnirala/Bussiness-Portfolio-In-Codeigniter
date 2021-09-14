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
                                    <?=form_open_multipart('admin/update_privacy/'.$p->policy_id); ?>
                                    
                                        <div class="form-row">
                                            
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" value="<?=$p->policy_banner?>" name="policy_banner" class="custom-file-input">
                                                <label class="custom-file-label">Choose file Banner</label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label>privacy Title </label>
                                                <input type="text" value="<?=$p->policy_title?>" name="policy_name" class="form-control" placeholder="Enter title..">
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label>Text Area </label>
                                                <textarea class="form-control" name="policy_text"><?=$p->policy_text?></textarea>
                                        </div>

                                        

                                        
                                       
                                        <button type="submit" class="btn btn-dark">Update</button>
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