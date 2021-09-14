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
                                <h4 class="card-title">Contact List</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                               
                                                <th>user images</th>
                                                <th>user name</th>
                                                <th>user text</th>
                                                <th>user details</th>
                                               
                                                <th>delete</th>
                                                
                                                
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_review() as $review ){
                                                $i++;
                                            ?>
                                            
                                            <tr>
                                                
                                                <td><img style="height: 200px" src="<?=base_url();?>images/review/<?=$review->user_img?>"></td>
                                                <td><?=$review->user_name?></td>
                                                <td><?=$review->user_text?></td>
                                                <td><?=$review->user_details?></td>
                                                
                                                
                                                <td> <a href="<?=site_url('admin/deletereview/'.$review->review_id);?>"> <button>delete</button> </a> </td>
                                                                                           
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