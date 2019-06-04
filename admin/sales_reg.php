<?php
include "connection.php";
include 'session.php';
include 'header.php';

?>
<style>
    
</style>
<div class="content-wrapper">
 
<section class="content" >
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Sales Registration</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" placeholder="Full Name" name="sales_name"/>
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Username" username="sales_username"/>
                    </div>
                    <div class="form-group">
                      <label>Contact No</label>
                      <input type="text" class="form-control" placeholder="Contact Number" username="sales_username"/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>     
                        <i class="fa fa-envelope"></i></span><input type="text" class="form-control" placeholder="abc123@example.com">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Password" username="sales_username"/>
                    </div>
                    <div class="form-group">
                      <label>Coinfirm Password</label>
                      <input type="password" class="form-control" placeholder="Coinfirm Your Password" username="sales_username"/>
                    </div>
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  </form> 
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>

<?php

include 'footer.php';

?>
