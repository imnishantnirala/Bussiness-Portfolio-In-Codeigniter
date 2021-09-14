
<?php 
foreach($this->models->getdetails() as $details){}

?>

<!-- contact -->
<section class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-1 col-md-5">
                <h2 class="section-title"><?=$details->company_name?></h2>
                <ul class="pl-0">
                    <!-- contact items -->
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-mobile"></i>
                        <div class="align-self-center font-primary">
                            <p><?=$details->company_no?></p>
                            
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-email"></i>
                        <div class="align-self-center font-primary">
                            <p><?=$details->company_email?></p>
                           
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="round-icon mr-3 ti-map-alt"></i>
                        <div class="align-self-center font-primary">
                            <p><?=$details->address?></p>
                           
                        </div>
                    </li>
                </ul>
            </div>
            <!-- form -->
            <div class="col-lg-6 col-md-7">
                <div class="p-5 rounded box-shadow">
                    <?=form_open_multipart('welcome/insertform');?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Contact Form</h3>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                        </div>
                         <div class="col-lg-6">
                            <input type="text" name="phoneno"  id="subject" class="form-control" placeholder="phone no.." required>
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control p-2" name="message" id="message" placeholder="Your Message Here..." required style="height: 150px;"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-primary" type="submit" value="send">Submit Now</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>