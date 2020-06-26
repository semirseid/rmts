<?php
if($this->session->userdata('district')==null && $this->session->userdata('role')==null)
{
    redirect(base_url());
}else {


    ?>

    <div class="row" style="margin-top:-18px">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand pull-right" href="#">RMMS</a>
                </div>

                <!-- Collect the nav links and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false">Road Asset management <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="<?php echo base_url('district/Register_road'); ?>"> Register new Road asset</a></li>
                                <li><a href="<?php echo base_url('district/AddSegment'); ?>"> Road Segment Management</a></li>
                                <li><a href="#">View road assets</a></li>
                                <li><a href="#">View Maintenance History</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false"> Maintenance management<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Road inspection</a></li>
                                <li><a href="#">planned projects</a></li>
                                <li><a href="#">Late maintenance projects</a></li>
                                <li><a href="#">Finished maintenance projects</a></li>
                                <li><a href="#">Ongoing maintenance projects</a></li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false"> Resource management<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Assign resource to Projects</a></li>
                                <li><a href="#">Inspect resource Allocation</a></li>
                                <li><a href="#">View Allocation History</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"> Staff Management <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('District/register_staff_member') ?>">Register
                                        new Member</a></li>
                                <li><a href="#">view Active Members</a></li>
                                <li><a href="#">Resign Member</a></li>
                                <li><a href="#">Staff report</a></li>

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
                                <li><a href="<?php echo base_url() ?>/">Logout</a></li>

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