<?php
$userId = $userInfo->userId;
$name = $userInfo->name;
$email = $userInfo->email;
$mobile = $userInfo->mobile;
$roleId = $userInfo->roleId;
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add / Edit User</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>editUser" method="post" id="editUser" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Full Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Full Name" name="fname" value="<?php echo $name; ?>" maxlength="128">
                                        <input type="hidden" value="<?php echo $userId; ?>" name="userId" id="userId" />    
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" maxlength="20">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile">Mobile Number</label>
                                        <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" value="<?php echo $mobile; ?>" maxlength="10">
                                    </div>
                                </div>
                                
                                <!--div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select class="form-control" id="role" name="role">
                                            <option value="0">Select Role</option>
                                            <?php
                                            if(!empty($roles))
                                            {
                                                foreach ($roles as $rl)
                                                {
                                                    ?>
                                                    <option value="<?php echo $rl->roleId; ?>" <?php if($rl->roleId == $roleId) {echo "selected=selected";} ?>><?php echo $rl->role ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div-->    
                            </div>
                            
                            
                                
                                <div class="row">
                                    <div class="box-header">
                                        <h3 class="box-title">Permissions</h3>
                                    </div><!-- /.box-header -->
                                  <div class="col-sm-6">
                                        <?php if(!empty($permissions)){ ?>
                                            <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th class="text-center" width="50">
                                                    <!--<input type="checkbox" class="check-select-all-p" checked="checked">-->
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Shipping Lines List</td>
                                                <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="shippinglines_list" 
                                                        <?php if (in_array("shippinglines_list", $permissions)) {
                                                            echo 'checked';
                                                        } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Clients List</td>
                                                <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="clients_list" 
                                                        <?php if (in_array("clients_list", $permissions)) {
                                                            echo 'checked';
                                                        } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Documents manager</td>
                                                <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="documents_manager" 
                                                        <?php if (in_array("documents_manager", $permissions)) {
                                                            echo 'checked';
                                                        } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Transporters List</td>
                                                <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="transporters_list"  
                                                        <?php if (in_array("transporters_list", $permissions)) {
                                                            echo 'checked';
                                                        } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Interchange</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="interchange"  
                                                        <?php if (in_array("interchange", $permissions)) {
                                                            echo 'checked';
                                                        } ?>
                                                    >
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Fees Manager</td>
                                                    <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="fees_manager"
                                                        <?php if (in_array("fees_manager", $permissions)) {
                                                            echo 'checked';
                                                        } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Accounts Manager</td>
                                                    <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="accounts_manager"
                                                    <?php if (in_array("accounts_manager", $permissions)) {
                                                        echo 'checked';
                                                    } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quotations Manager</td>
                                                    <td class="text-center" width="50">
                                                        <input type="checkbox" class="check-select-p" name="permission[]" value="quotations_manager"
                                                        <?php if (in_array("quotations_manager", $permissions)) {
                                                            echo 'checked';
                                                        } ?>
                                                        >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Voucher Manager</td>
                                                <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="voucher_manager" 
                                                    <?php if (in_array("voucher_manager", $permissions)) {
                                                        echo 'checked';
                                                    } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Receipts Manager</td>
                                                <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="receipts_manager"
                                                    <?php if (in_array("receipts_manager", $permissions)) {
                                                        echo 'checked';
                                                    } ?>
                                                    >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Reports</td>
                                                <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="reports"
                                                <?php if (in_array("reports", $permissions)) {
                                                    echo 'checked';
                                                } ?>
                                                >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Settings</td>
                                                <td class="text-center" width="50">
                                                    <input type="checkbox" class="check-select-p" name="permission[]" value="settings" 
                                                    <?php if (in_array("settings", $permissions)) {
                                                        echo 'checked';
                                                    } ?>
                                                    >
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        <?php } else{ ?>
                                            <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th class="text-center" width="50">
                                                    <!--<input type="checkbox" class="check-select-all-p" checked="checked">-->
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Shipping Lines List</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="shippinglines_list" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Clients List</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="clients_list" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Documents manager</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="documents_manager" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Transporters List</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="transporters_list" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Interchange</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="interchange" checked="">
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Fees Manager</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="fees_manager" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Accounts Manager</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="accounts_manager" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Quotations Manager</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="quotations_manager" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Voucher Manager</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="voucher_manager" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Receipts Manager</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="receipts_manager" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Reports</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="reports" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Settings</td>
                                                    <td class="text-center" width="50"><input type="checkbox" class="check-select-p" name="permission[]" value="settings" checked="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        <?php }?>
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

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>