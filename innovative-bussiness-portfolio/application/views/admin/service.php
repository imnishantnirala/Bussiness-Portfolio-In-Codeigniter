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
            <!-- row -->

            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Service Form</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/insert_service'); ?>
                                    <div class="form-group">
                                            <label>Sub Menu</label>
                                            <select name="sub_menu" class="form-control" required>
                                                <?php foreach($this->amodels->select_sub_menu() as $submenu){ ?>
                                                
                                                <option value="<?=$submenu->sub_menu_id?>"><?=$submenu->sub_menu_name?></option>
                                                <?php } ?>                                           
                                            </select>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Service Name</label>
                                            <select name="service_name" class="form-control" required>
                                                <?php foreach($this->amodels->select_sub_menu() as $submenu){ ?>
                                                
                                                <option value="<?=$submenu->sub_menu_name?>"><?=$submenu->sub_menu_name?></option>
                                                <?php }?>                                            
                                            </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Service Image</label>
                                                <input type="file" name="service_image" class="form-control" placeholder="Image" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                                <label>Service Cover Image</label>
                                                <input type="file" name="cover_image" class="form-control" placeholder="Image" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Service Text</label>
                                            <textarea  name="service_taxt"  id="service_taxt" class="form-control" style="height: 200px" required></textarea>
                                            <script>
                                                window.onload = function() {
                                                CKEDITOR.replace( 'service_taxt' );
                                            };
                                            </script>
                                        
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