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
                                <h4 class="card-title">Service information</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Name</th>
                                                <th>service img</th>
                                                <th>service Taxt</th>
                                                <th>cover Img</th>
                                                <th>Action</th>
                                                
                                                
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_service() as $service ){
                                                $i++;
                                            ?>
                                            
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$service->service_name?></td>
                                                <td><img style="height: 100px" src="<?=base_url();?>images/<?=$service->service_img?>"></td>
                                                <td><?=$service->service_d?></td>
                                               
                                                <td><img style="height: auto; width: 200px" src="<?=base_url();?>images/service_cover_img/<?=$service->cover_img?>"></td>

                                                 <td> <a href="<?=site_url('admin/update_service/'.$service->s_id);?>"> <button>Update</button> </a> </td>
                                                  <td> <a href="<?=site_url('admin/delete_service/'.$service->s_id);?>"> <button>Delete</button> </a> </td>
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