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
                                <h4 class="card-title">Contact List</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>About Title</th>
                                                
                                                
                                                <th>Description</th>
                                                <th>About Banner</th>
                                                <th>About Image</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_about() as $about ){
                                                $i++;
                                            ?>
                                           
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$about->about_title?></td>
                                                <td><?=$about->about_taxt?></td>
                                                
                                                <td><img style="height:200px" src="<?=base_url();?>images/about/<?=$about->about_img?>"> </td>

                                                <td><img style="height:200px" src="<?=base_url();?>images/about/<?=$about->about_banner?>"> </td>

                                                <td> <a href="<?=site_url('admin/about/'.$about->about_id);?>"> <button  onclick="return confirm('Are you sure for update');">Updete</button> </a> </td>
                                                
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