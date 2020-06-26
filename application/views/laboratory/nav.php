<?php
if($this->session->userdata('laboratory')==null && $this->session->userdata('role')==null)
{
    redirect(base_url());
}
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
      <a class="navbar-brand pull-right" href="#">RMMS </a>
    </div>

    <!-- Collect the nav links and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
 
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false"> laboratory management <span class="caret"></span></a>
          <ul class="dropdown-menu">
           
            <li><a href="<?php echo base_url('index.php/laboratory/viewrequest');?>"> Manage test request</a></li>
            <li><a href="<?php echo base_url('index.php/district/AddSegment');?>"> Update labratory requests</a></li>
             <li><a href="<?php echo base_url('index.php/district/AddSegment');?>"> labratory reports</a></li>
          </ul>
        </li>
         
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false"> labratory profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">labratory test details </a></li>
            
          </ul>
        </li>
         
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
                        aria-expanded="false"> laboratory Reports <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="#">Daily tests </a></li>
            <li><a href="#">Monthly tests </a></li>
             <li><a href="#">View all tests </a></li>
          </ul>
        </li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> My Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">My profile</a></li>
               <li><a href="#">Change Password</a></li>
            <li><a href="#">Logout</a></li>
          
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>