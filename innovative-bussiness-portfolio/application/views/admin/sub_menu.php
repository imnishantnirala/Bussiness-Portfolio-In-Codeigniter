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
                                <h4 class="card-title">ADD Sub Menu list</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/insertsubmenu'); ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Select Menu </label>
                                                <select class="form-control" name="menu" >
                                                    <?php foreach($this->amodels->select_menu() as $menu){ ?>
                                                    
                                                    <option class="form-control" value="<?=$menu->m_id?>"><?=$menu->menu_name?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Sub Menu Name </label>
                                                <input type="text" name="submenu" class="form-control" placeholder="Enter your sub Menu Name.." required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Sub Menu URL </label>
                                                <input type="text" name="url" class="form-control" placeholder="Enter Your sub Menu Url.." required>
                                            </div>
                                        </div>
                                        
                                       
                                        <button type="submit" class="btn mb-1 btn-success" >ADD  <span class="btn-icon-right"><i class="fa fa-plus"></i></button>
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