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
                                <h4 class="card-title">Service Form</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/edit_services/'.$s->s_id); ?>
                                    <?=print_r($s->service_name);?>
                                        <div class="form-row">
                                            
                                            <div class="form-group col-md-6">
                                                <label>Service Image</label>
                                                <input type="file" value="<?=$s->service_img?>" name="service_image" class="form-control" placeholder="Image">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label>Service Cover Image</label>
                                                <input type="file" value="<?=$s->cover_img?>" name="cover_image" class="form-control" placeholder="Image">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Service Text</label>
                                            <textarea  name="service_taxt" class="form-control" style="height: 200px"><?=$s->service_d?></textarea>
                                        
                                        </div>
                                       
                                        <button type="submit" class="btn btn-dark">Add Service</button>
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