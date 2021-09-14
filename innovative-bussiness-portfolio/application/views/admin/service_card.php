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
                                <h4 class="card-title">Latest Project Form</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/insert_card'); ?>
                                    <div class="form-group">
                                            <label> Menu</label>
                                            <select name="menu" class="form-control" required>
                                                <?php foreach($this->amodels->select_menu() as $menu){ ?>
                                                
                                                <option value="<?=$menu->m_id?>"><?=$menu->menu_name?></option>
                                                <?php } ?>                                           
                                            </select>
                                            
                                    </div>
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
                                                <label>Service Card Name</label>
                                                 <input type="text" name="card_name" class="form-control" placeholder="Service Card name" required>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Card Url</label>
                                                 <input type="text" name="card_url" class="form-control" placeholder="card url" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Card Images</label>
                                                <input type="file" name="card_image" class="form-control" required>
                                            </div>
                                            
                                        </div>

                                        <div class="form-row">
                                            
                                            <div class="form-group col-md-6">
                                                <label>Cover Images</label>
                                                <input type="file" name="cover_image" class="form-control" required>
                                            </div>

                                        </div>

                                        

                                        <div class="form-group">
                                            <label>Card Short description</label>
                                            <textarea  name="card_text"  class="form-control" style="height: 50px" required></textarea>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Card Full description</label>
                                            <textarea  name="description"  class="form-control" style="height: 100px"></textarea>
                                            <script>
                                                    window.onload = function() {
                                                    CKEDITOR.replace( 'description' );
                                                    };
                                            </script>
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

</body>
</html>