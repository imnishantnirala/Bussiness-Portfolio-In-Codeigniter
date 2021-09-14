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
                                                <th>S No.</th>
                                                <th>Company Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Address</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_details() as $details ){
                                                $i++;
                                            ?>
                                            <tr>
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$details->company_name?></td>
                                                <td><?=$details->company_email?></td>
                                                <td><?=$details->company_no?></td>
                                                <td><?=$details->address?></td> 

                                                <td> <a href="<?=site_url('admin/update_details/'.$details->details_id);?>"> <button class="btn mb-1 btn-success"  onclick="return confirm('Are you sure for Update');" >Update <i class="fa fa-edit"></i> </button> </a> </td>                                            
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
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
       
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?=base_url();?>admin/plugins/common/common.min.js"></script>
    <script src="<?=base_url();?>admin/js/custom.min.js"></script>
    <script src="<?=base_url();?>admin/js/settings.js"></script>
    <script src="<?=base_url();?>admin/js/gleek.js"></script>
    <script src="<?=base_url();?>admin/js/styleSwitcher.js"></script>

    <script src="<?=base_url();?>admin/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>admin/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>admin/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>


<!-- Mirrored from demo.themefisher.com/quixlab/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 11:44:20 GMT -->
</html>