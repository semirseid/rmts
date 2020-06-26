<div class="container" style="margin-top:-10px">

<?php
if($this->session->flashdata('message')!=null)
{
    echo '<p class=" alert alert-success">'.$this->session->flashdata('message').'</p>';
}
?>
<!-- Modal -->
<div class="modal  fade" id="staffregmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add new Employee <span></span></h4>
      </div>
      <div class="modal-body">
       <div class="form-group">
           <form class="form-group" action="<?php echo base_url('index.php/HeadOffice/do_register');?>" method="post">
               <div class="form-group">
                   <label>First Name</label>
                   <input class="form-control" name="FirstName" type="text" />
               </div>
                <div class="form-group">
                   <label>middle Name</label>
                   <input class="form-control" name="middleName" type="text" />
               </div>
               <div class="form-group">
                   <label>Last Name</label>
                   <input class="form-control" name="LastName" type="text" />
               </div>
               <div class="form-group">
               <label>Gender</label>
                   <select class="form-control" name="gender">
                   <option value="Male">Male</option>
                   <option value="FeMale">FeMale</option>
               </select>
               </div>
               

               <div class="form-group">
                   <label>Birth Date</label>
                   <input class="form-control" name="birthdate" data-type="date" />
               </div>
               <div class="form-group">
                   <label>Hire Date</label>
                   <input class="form-control" name="hiredate" data-type="date" />
               </div>
              <div class="form-group">
                   <label>salary</label>
                   <input class="form-control" name="salary" type="number" />
               </div>
              <div class="form-group">
                   <label>Academic level</label>
                   <select class="form-control" name="academic_level">
                       <option>Degree</option>
                       <option>certificate</option>
                       <option>Msc</option>
                       <option>Diploma</option>
                   </select>
               </div>
               <button type="reset" class="btn btn-danger">reset form</button>
                 <button type="submit" class="btn btn-primary">Save Employee profile</button>
           </form>
       </div>
      </div>
    </div>
  </div>
</div>

    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Editing Employee profile <span></span></h4>
                </div>
                <div class="modal-body" id="editform">

                </div>
            </div>
        </div>
    </div>

<div class="col-lg-12">
    <br>
<div class="table-responsive">
    <table class="table table-striped table-condensed table-responsive" id="EmpTable">
                <thead>
                <tr>
                    <th colspan="7" class=" active">
                        List of currently registered Employees
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#staffregmodal">
                                New Employee
                        </button>
                    </th>
                </tr>
                <tr>
                    <th> # </th>
                    <th> Full name </th>
                    <th> Birth Date </th>
                    <th> Academic level </th>
                    <th> Gender </th>
                    <th> Hire date </th>
                    <th> Actions </th>
                </tr>
                </thead>

                    <tbody>
                    <?php
                    $counter=0;
                    foreach ($employee as $object)
                    {
                        echo "<tr>
                              <td>".$counter."</td>
                              <td class='text-capitalize'>".$object->First_name." ".$object->Middle_name." ".$object->Last_name."</td>
                               <td>".$object->Birth_date."</td>
                                <td>".$object->academic_level."</td>
                                 <td>".$object->Gender."</td>  
                                 <td>".$object->Hire_date."</td>   
                                 
                                 <td>
                                 <button onclick='return deleteInfo($object->Staff_ID)' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span></button>
                                 <button onclick='return editinfo($object->Staff_ID)' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit'></span></button>
                                  <button onclick='return viewInfo' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open'></span> </button>
                                  </td>   
                                     
                            
                              </tr>";
                        $counter++;
                    }
                    ?>
                    </tbody>
            </table>
    <script type="text/javascript" src="<?php echo base_url('/resources/jquery/jquery-1.10.2.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>/resources/DataTable/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/resources/DataTable/css/jquery.dataTables.css">
 <script>
     function editinfo(id) {
         var xmlhttp = new XMLHttpRequest();
         var editform = document.getElementById('editform');
         xmlhttp.onreadystatechange = function () {
             if (xmlhttp.status == 200 && xmlhttp.readyState == 4) {
                 editform.innerHTML = xmlhttp.responseText;
             } else {
                 editform.innerHTML = "requested data not found";
             }
         }
         xmlhttp.open('GET', '<?php echo base_url()?>index.php/HeadOffice/editprofile?staffid='+id, true);
         xmlhttp.send();
         $('#editmodal').modal('show');
     }
     function deleteInfo(id) {
         alert()
     }
$('#EmpTable').dataTable();

 </script>
</div>
</div>
</div>