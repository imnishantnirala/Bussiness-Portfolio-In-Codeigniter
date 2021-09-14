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
                                <h4 class="card-title">Comapny Details Form</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/updatedetails/'.$d->details_id); ?>
                                    
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Comapny Name</label>
                                                 <input type="text" value="<?=$d->company_name?>" name="company_name" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Company Email</label>
                                                <input type="text" value="<?=$d->company_email?>" name="company_email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Phone No.</label>
                                                 <input type="text" value="<?=$d->company_no?>" name="company_no" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>address</label>
                                                <input type="text" value="<?=$d->address?>" name="address" class="form-control" placeholder="Enter Taxt">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Update Details</button>
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