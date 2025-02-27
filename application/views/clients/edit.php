<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Client Management <small>Add, Edit, Delete</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Client Details</h3>
                        <hr>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url() ?>client/editClient/<?=$clientInfo->id?>" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Client Official Names</label>
                                        <input type="text" class="form-control required" value="<?php echo $clientInfo->client_name; ?>" id="client_name" name="contact_name" maxlength="128">
                                        <input type="hidden" name="id" value="<?=$clientInfo->id?>"/>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Contact persons Name</label>
                                        <input type="text" class="form-control required" value="<?php echo $clientInfo->contact_person; ?>" id="contact_person" name="contact_person" maxlength="128">
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Address</label>
                                        <input type="text" class="form-control required" id="address" name="address" value="<?=$clientInfo->address;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Date of Registration</label>
                                        <input type="text" class="form-control required" id="reg_date" name="reg_date" value="<?=$clientInfo->reg_date;?>">
                                    </div>
                                </div>
                            
                            
                        
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Telephone No.</label>
                                        <input type="text" class="form-control required" value="<?=$clientInfo->tel_no;?>" id="tel_no" name="tel_no" maxlength="70">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Email Address</label>
                                        <input type="text" class="form-control required" value="<?php echo $clientInfo->email; ?>" id="email" name="email" maxlength="100">
                                    </div>                                    
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Physical Address</label>
                                        <input type="text" class="form-control required" id="mobile" value="<?php echo $clientInfo->physical_address; ?>" name="physical_address" maxlength="16">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="mobile">Client Type</label>
                                        <input type="text" class="form-control required" id="mobile" value="<?php echo $clientInfo->ac_type; ?>" name="client_Type" maxlength="16">
                                    </div>
                                </div>    
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>