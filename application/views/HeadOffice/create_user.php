<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/6/2018
 * Time: 3:56 PM
 */
?>
<div class="container" style="margin-top:-20px">
<h3 class="text-capitalize text-info">Create User </h3>
<div class="col-lg-6">
<?php
if($this->session->flashdata('message')!=null)
{
    echo "<p class='alert alert-success'>".$this->session->flashdata('message')."</p>";
}

?>
    <div class="form-group">
        <form class="form-group" method="post" action="<?php echo base_url('index.php/HeadOffice/do_create_user');?>">
          <div class="form-group ">
                <label>Select role</label>
                <select class="form-control" name="role">
                    <option value="-1">Please select role type</option>
              <?php
                    foreach ($role as $roletype)
                    {
                        echo "<option value='$roletype->Role_ID'>".$roletype->role_name."</option>";
                    }
                  ?>
                </select>
            </div>
            <div class="form-group ">
                <label>Select staff member for whom the account is owned</label>
                <select class="form-control" name="userid">
                    <?php
                    foreach ($employee as $user)
                    {
                        echo "<option value=".$user->Staff_ID.">"
                            .$user->First_name." ".$user->Middle_name." ".$user->Last_name."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group ">
                <label>Enter user name</label>
                <input class="form-control" type="text" name="username" placeholder="Enter username">
            </div>
            <div class="form-group ">
                <label>password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter username">
            </div>
            <div class="form-group ">
                <label>Confirm password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Enter username">
            </div>
            <input type="submit" class="btn btn-primary" value="Create user">
        </form>
    </div>
</div>
    <div class="col-lg-6">

        <div class="panel panel-danger">
            <div class="panel-heading"> Close user account </div>
               <div class="panel-body">
                   <form action="" method="post" class="form-group">
                       <div class="form-group">
                           <label>Select user account to be closed </label>
                           <select class="form-control" name="accountholder">
                               <option value="-1">Select staff member to be closed</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <p class="text-muted">please enter the reason why this account is to be closed</p>
                           <textarea class="form-control" name="reason">

                        </textarea>
                       </div>

                       <div class="form-group">
                           <button class="btn btn-warning">Ban this account</button>
                       </div>

                   </form>
               </div>
        </div>
        <div class="panel panel-warning">
            <div class="panel-heading">  Ban/suspend user account </div>
            <div class="panel-body">
                <form action="" method="post" class="form-group">
                    <div class="form-group">
                        <label>Select user to be suspended</label>
                        <select class="form-control" name="accountholder">
                            <option value="-1">Select staff member to be suspended</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <p class="text-muted">please enter the reason why this account is to be suspended</p>
                        <textarea class="form-control" name="reason">

                        </textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-warning">Ban this account</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>