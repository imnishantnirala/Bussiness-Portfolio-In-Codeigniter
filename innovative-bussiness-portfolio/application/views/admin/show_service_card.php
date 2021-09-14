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
                                <h4 class="card-title">Project information</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>S No.</th>
                                                <th>Name</th>
                                                <th>card img</th>
                                                <th>card Taxt</th>
                                                <th>card URL</th>
                                                <th>SUb Menu</th>
                                                <th>Cover Images</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>



                                        <tbody>
                                            <?php
                                                $i=0;
                                                foreach($this->amodels->select_card() as $card){
                                                $i++;
                                            ?>
                                            
                                            <tr>
                                                <td><?=$i;?></td>
                                                <td><?=$card->card_name?></td>
                                                <td><img style="height: 100px" src="<?=base_url();?>images/service_card_img/<?=$card->card_img?>"></td>
                                                <td><?=$card->card_d?></td>
                                                <td><?=$card->card_url?></td>
                                                <td><?=$card->sub_menu_id?></td>
                                                <td><img style="height: 100px" src="<?=base_url();?>images/service_card_img/<?=$card->cover_img?>"></td>
                                                <td><?=$card->description;?></td>
                                                <td> 
                                                    <a href="<?=site_url('admin/show_service_card/'.$card->cart_id);?>">
                                                        <button class="btn mb-1 btn-danger" onclick="return confirm('Are you sure for delete');" >Delete <i class="fa fa-trash"></i> </button>
                                                    </a> 
                                                    <a href="<?=site_url('admin/update_service_cart/'.$card->cart_id);?>">
                                                        <button  class="btn mb-1 btn-success" onclick="return confirm('Are you sure for Update');" >Update <i class="fa fa-edit"></i></button>
                                                    </a> 
                                                </td>
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