<?php include('header.php'); ?>

        <!--**********************************
            Content body start
        ***********************************-->
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

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Project information</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Name</th>
                                                <th>project img</th>
                                                <th>project Admin Name</th>
                                                <th>project URL</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_project() as $project ){
                                                $i++;
                                            ?>
                                           
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$project->project_name?></td>
                                                <td><img style="height: 100px" src="<?=base_url();?>images/project_image/<?=$project->project_img?>"></td>
                                                <td><?=$project->admin_name?></td>
                                                <td><?=$project->project_url?></td>
                                                <td> <a href="<?=site_url('admin/delete_project/'.$project->project_id);?>"> <button onclick="return confirm('Are you sure for delete');" >Delete</button> </a> </td>
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