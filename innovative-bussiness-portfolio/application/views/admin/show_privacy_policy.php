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
                                <h4 class="card-title">Pricacy Policy</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Pricacy Policy Title</th>
                                                
                                                
                                                
                                                <th>Pricacy Policy Banner</th>
                                                
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_privacy() as $privacy ){}
                                                $i++;
                                            ?>
                                            
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$privacy->policy_title?></td>
                                                
                                                
                                                <td><img style="height:200px" src="<?=base_url();?>images/privacy/<?=$privacy->policy_banner?>"> </td>

                                                

                                                
                                                <td><div class="bootstrap-modal">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Show Privacy Policy Text</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModalLong">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">TEXT</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <?=$privacy->policy_text?>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> <a href="<?=site_url('admin/privacy_policy/'.$privacy->policy_id);?>"> <button  onclick="return confirm('Are you sure for update');">Updete</button> </a>
                                                </td>
                                            </tr>

                                           
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