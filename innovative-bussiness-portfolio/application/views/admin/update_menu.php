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
                                <h4 class="card-title">ADD Menu list</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/editform/'.$c->m_id); ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Menu Name </label>
                                                <?=print_r($c);?>
                                                <input type="text" name="menu" value="<?=$c->menu_name?>" class="form-control" placeholder="Enter your Menu Name..">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Menu URL </label>
                                                <input type="text" name="url" value="<?=$c->menu_url?>" class="form-control" placeholder="Enter Your Menu Url..">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">ADD</button>
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