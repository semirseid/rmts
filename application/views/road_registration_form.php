<div class="container" style="margin-top:-10px">

<div class="col-lg-12 " >
    <strong>
        <?php
        if($this->session->flashdata('message')!=null)
        {
            echo $this->session->flashdata('message');
        }
        ?>
    </strong>

    <div class="content" id="content">
        <h3 class=" text-success text-muted">New Road Registration Form/ <small><?php echo "  " .$this->session->userdata('districtName');?></small></h3>

        <form id="road_reg_form"   class="form-group" method="post" action="<?php echo base_url('District/do_Add_road')?>" >
        <div class="form-group col-sm-3">
            <label class="text-muted" for="roadnumber">Road_Number</label class="text-muted">
            <input type="text" class="form-control" id="roadnumber" name="roadnumber"  />
        </div>

        <div class="form-group col-sm-3">
            <label class="text-muted">Road_Name</label >
            <input type="text" class="form-control" name="roadname" required />
        </div>
		<div class="form-group col-sm-3">
            <label class="text-muted">Road_Class</label>
            <select type="text" class="form-control" name="roadclass" required>
			<option value="">select road class</option>
			<?php
			foreach($roadclasses as $classdata)
			{
			echo "<option value='".$classdata->class_id."'>".$classdata->RoadclassName."</option>";
			}
			?>
			</select>
        </div>
		        <div class="form-group col-sm-3">
            <label class="text-muted">Standard_Width</label>
            <input type="text" class="form-control" name="standard_wdith"required />
        </div>
		
	          <div class="form-group col-sm-3">
            <label class="text-muted">Length</label>
            <input type="number" class="form-control" name="roadLength"required />
        </div>
		<div class="form-group col-sm-3">
            <label class="text-muted">CarriageWay_Width</label>
            <input type="text" class="form-control" name="carriageWidth"required/>
        </div>

        <div class="form-group col-sm-3">
            <label class="text-muted">Area</label class="text-muted">
            <input type="text" class="form-control" name="roadArea" />
        </div>

        
        <div class="form-group col-sm-3">
            <label class="text-muted">Number_of_lanes</label class="text-muted">
            <input type="number" class="form-control" name="number_of_lanes"required />
        </div>
        <div class="form-group col-sm-3">
            <label class="text-muted">No_Ways</label class="text-muted">
            <input type="number" class="form-control" name="no_ways"required />
        </div>
        <div class="form-group col-sm-3">
            <label class="text-muted">Start_Chainage</label class="text-muted">
            <input type="text" class="form-control" name="Start_Chainage" required/>
        </div>
		<div class="form-group col-sm-3">
            <label class="text-muted"> End_chainage</label class="text-muted">
            <input type="text" class="form-control" name="End_chainage" required/>
        </div>
        <div class="form-group col-sm-3">
            <label class="text-muted">start_description</label class="text-muted">
            <input type="text" class="form-control" name="start_description" required/>
        </div>
        
        <div class="form-group col-sm-3">
            <label class="text-muted">End_description</label class="text-muted">
            <input type="text" class="form-control" name="End_description"required />
        </div>

        <div class="form-group col-sm-3">
            <label class="text-muted">District ID</label class="text-muted">
            <input readonly="readonly" value="<?php echo $this->session->userdata('districtID');?>" class="form-control"  name="District"required />
        </div>
        
		 <div class="form-group col-sm-3">
            <label class="text-muted">Project_HandOver</label class="text-muted">
            <input data-type="date" class="form-control" id="projectHandover" name="projectHandover"required />
        </div>
        <div class="form-group col-sm-3">
            <label class="text-muted">Road rate</label class="text-muted">
            <select class="form-control" name="rate" required >
                <option value="">select road rate</option>
                <option value="1">poor</option>
                <option value="2">good</option>
                <option value="3">Very good</option>
                <option value="4">best</option>
                <option value="5">Excellent</option>
            </select>
        </div>
       <div class="form-group col-sm-3">
           <br>

           <input type="submit" class="btn btn-primary" value="Register road" />
       </div>

    </form>
    </div>
	

<!--<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
  Register new road
</button>-->


</div>
    <div class="col-lg-12">

<div class="table-responsive">
<h4 class="text-capitalize  text-muted">Addis Ababa city administration/District road assets</h4>
        <table class="table table-striped">
            <thead>
    <tr>
        <th colspan="10" class=" active">
            List of currently registered Employees
            <!-- Button trigger modal -->
            <button type="button" id="addnew" class="btn btn-primary pull-right">
                Add new road
            </button>
        </th>
    </tr>
    <tr>
        <th>#</th>
        <th>Road_Number</th>
        <th>Road_Name</th>
        <th>Start point</th>
        <th>End point</th>
        <th>No. segments</th>
        <th>Date registered</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>

    <tbody>
    <?php
    $counter=0;
    foreach ($roads as $road)
    {
        echo "<tr>
                              <td>".$counter."</td>
                              <td class='text-capitalize'>".$road->road_number." </td>
                               <td>".$road->road_name."</td>
                                <td>".$road->start_chainage."</td>
                                 <td>".$road->End_chainage."</td>  
                                 <td></td>   
                                 
                                 <td>
                                 <button onclick='return deleteInfo($road->road_number)' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span></button>
                                 <button onclick='return editinfo($road->road_number)' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit'></span></button>
                                  <button onclick='return viewInfo' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open'></span> </button>
                                  </td>   
                                     
                            
                              </tr>";
        $counter++;
    }
    ?>
    </tbody>
    </table>

    </div>



</div>

</div>
<!--importing  jquery-ui css-->
<link rel="stylesheet" href="<?php echo base_url()?>/resources/jquery-ui/css/jquery-ui.css">
<style>
    .error{
        color: red;
    },
    #content{
        display: none;
        padding : 5px;
    }
</style>
<!--importing selector jquery-->
<script type="text/javascript" src="<?php echo base_url()?>/resources/js/jquery-1.10.2.js"></script>
<!--importing selector jquery-ui library-->
<script type="text/javascript" src="<?php echo base_url()?>/resources/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>/resources/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('input[data-type=date]').datepicker(
            {
                changeYear:true,
                changeMonth:true
            }
        );
        // form validation

        $('#road_reg_form').validate({
            rules:{
                roadnumber:{
                    required:true,
                    maxlength:10,
                    minlength:1

                },
                Route_Number:{
                    required:true,
                    digits:true,
                }
            },
            messages:{}
        });

        $('#projectHandover').datepicker();

        // add new rod
        $("#addnew").click(function () {
           $('#content').style.display="block";
        });
    });
  //  $('#regdate')
</script>
