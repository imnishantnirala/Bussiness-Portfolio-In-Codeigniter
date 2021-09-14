<?php include('header.php'); ?>
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sub Menu list</h4> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Sub Menu Name</th>
                                                <th>Sub Menu URL</th>
                                                <th>Date/Time</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_sub_menu() as $submenu ){
                                                $i++;
                                            ?>
                                           
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$submenu->sub_menu_name?></td>
                                                <td><?=$submenu->sub_menu_url?></td>
                                                
                                                <td><?=$submenu->date_time?></td>
                                                <td>
                                                    <a href="<?=site_url('admin/updatesubmenu/'.$submenu->sub_menu_id);?>"><button class="btn mb-1 btn-success" onclick="return confirm('Are you sure for Update');" >Edit <i class="fa fa-edit"></i> </button></a>
                                                    <a href="<?=site_url('admin/deletesubform/'.$submenu->sub_menu_id);?>"><button   class="btn mb-1 btn-danger"  onclick="return confirm('Are you sure for delete');" >Delete <i class="fa fa-trash"></i> </button></a>
                                                </td>
                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    <script src="<?=base_url();?>admin/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>admin/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
</body>
</html>