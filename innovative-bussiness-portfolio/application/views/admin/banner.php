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
                                    <?=form_open_multipart('admin/insert_banner'); ?>
                                    
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Banner Title</label>
                                                 <input type="text" name="banner_title" class="form-control" placeholder="Title" required autofocus>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Banner Tag</label>
                                                <input type="text" name="banner_tag" class="form-control" placeholder="Banner Tag" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Description</label>
                                                 <input type="text" name="description" class="form-control" placeholder="Enter Taxt" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Banner Images</label>
                                                <input type="file" name="banner_img" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-dark">Add</button>
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
</body>
</html>