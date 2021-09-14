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
            <!-- row -->

            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contect Form</h4>
                                <div class="basic-form">
                                    <?=form_open_multipart('admin/insertcontact'); ?>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>subject</label>
                                            <select name="subject" class="form-control">
                                                <option>select..</option>
                                                <option>Web development</option>
                                                <option>PHP Development</option>
                                                <option>.NET Development</option>                                                
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea  name="message"  class="form-control"></textarea>
                                        
                                        </div>
                                       
                                        <button type="submit" class="btn btn-dark">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

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

</body>


<!-- Mirrored from demo.themefisher.com/quixlab/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 11:44:07 GMT -->
</html>