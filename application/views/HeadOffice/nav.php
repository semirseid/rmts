<?php
if($this->session->userdata("HeadOffice")==null &&$this->session->userdata("role")==null )
{
    redirect(base_url());
}else
{
?>

<div class="row" style="margin-top:-18px">
  <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand pull-right" href="<?php echo base_url()?>/HeadOffice">RMMS </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false"> Assets <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
           
            <li><a href="<?php echo base_url("HeadOffice/ListAllroads"); ?>">Road Assets</a></li>
            <li><a href="<?php echo base_url("HeadOffice/ListAllproducts"); ?>">Production of maintenance materials</a></li>
             <li><a href="<?php echo base_url("HeadOffice/laboratory_results"); ?>">Laboratory results </a></li>
              <li><a href="<?php echo base_url("HeadOffice/ListAllmachines"); ?>">Machineries</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> Staff Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("HeadOffice/hireEmployee"); ?>">Register new Member</a></li>
              <li><a href="<?php echo base_url("HeadOffice/Employeeprofile"); ?>">view Active Members</a></li>
            <li><a href="<?php echo base_url("HeadOffice/resignEmployee"); ?>">Resign Member</a></li>
              <li><a href="<?php echo base_url("HeadOffice/AddUser"); ?>">create user account</a></li>
            <li><a href="<?php echo base_url("HeadOffice/employeeReport"); ?>">Staff report</a></li>
          
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false"> Maintenance management<span class="caret"></span></a>
          <ul class="dropdown-menu">

              <!-- <li><a href="<?php echo base_url("HeadOffice/ongoingprojects"); ?>">Ongoing Maintenance projects</a></li>
              <li><a href="<?php echo base_url("HeadOffice/Delayedprojects"); ?>">Delayed maintenances projects</a></li>
             <li><a href="<?php echo base_url("HeadOffice/suspendedprojects"); ?>">Suspended maintenance projects</a></li>
             <li><a href="<?php echo base_url("HeadOffice/finishedprojects"); ?>">Finished maintenance projects</a></li>
              -->

              <li><a href="<?php echo base_url("HeadOffice/northdistrictprojects"); ?>">North District maintenance</a></li>
             <li><a href="<?php echo base_url("HeadOffice/southdistrictprojects"); ?>">South District maintenance</a></li>
              <li><a href="<?php echo base_url("HeadOffice/centraldistrictprojects"); ?>">central District maintenance</a></li>
              <li><a href="<?php echo base_url("HeadOffice/eastdistrictprojects"); ?>">East District maintenance</a></li>
			   <li><a href="<?php echo base_url("HeadOffice/westdistrictprojects"); ?>">West District maintenance</a></li>
                     
          </ul>
        </li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false">Budget management<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="<?php echo base_url("HeadOffice/budget"); ?>">maintenance budget management</a></li>
            <li><a href="<?php echo base_url("HeadOffice/machineries"); ?>">machinery budget management</a></li>
             <li><a href="<?php echo base_url("HeadOffice/materials"); ?>">Construction materials budget</a></li>
          </ul>
        </li>
          
         
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> District Management<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("HeadOffice/addDistrict"); ?>">Register new District</a></li>
               <li><a href="<?php echo base_url("HeadOffice/viewDisricts"); ?>">View Registered Districts</a></li>
                 <li><a href="<?php echo base_url("HeadOffice/reportsbyDistrict"); ?>">Reports by  district</a></li>  
          
          </ul>
        </li>


      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> Welcome <?php echo $this->session->userdata('user');?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a  href="<?php echo base_url("HeadOffice/myprofile"); ?>">My profile</a></li>
               <li><a href="<?php echo base_url("HeadOffice/changepassword"); ?>">Change Password</a></li>
            <li><a href="<?php echo base_url("HeadOffice/logout"); ?>">Logout</a></li>
          
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<?php
}
?>