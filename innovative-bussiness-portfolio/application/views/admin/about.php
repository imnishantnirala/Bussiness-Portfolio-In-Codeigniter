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
                                    <?=form_open_multipart('admin/update_about/'.$a->about_id); ?>
                                    
                                        <div class="form-row">  
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" value="<?=$a->about_img?>" name="about_img" class="custom-file-input" >
                                                <label class="custom-file-label">Choose file About</label>
                                            </div>
                                            </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" value="<?=$a->about_banner?>" name="about_banner" class="custom-file-input">
                                                <label class="custom-file-label">Choose file Banner</label>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label>About Name </label>
                                                <input type="text" value="<?=$a->about_title?>" name="about_name" class="form-control" placeholder="Enter Your Menu Url..">
                                        </div>
                                        <div class="form-group col-md-12">
                                                <label>Text Area </label>
                                                <textarea class="form-control" name="about_text">
                                                    <?=$a->about_taxt?>
                                                </textarea>
                                                <script>
                                                    window.onload = function() {
                                                    CKEDITOR.replace( 'about_text');
                                                    };
                                                </script>
                                        </div>

                                        

                                        
                                       
                                        <button type="submit" class="btn btn-dark">Add Project</button>
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