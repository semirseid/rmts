<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/7/2018
 * Time: 1:43 PM
 */
?>

<div class="container" style="margin-top:-20px">

<div class="col-lg-12">

<p class="text-info">List of Employee and their profile</p>
    <div id="fullprofile"></div>
    <div class="table table-responsive">
        <table class="table table-striped table-condensed">
            <thead>
            <th>#</th>
            <th>Full name</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Hire Date</th>
            <th>Salary</th>
            <th>Academic Level</th>
            <th colspan="2">Action</th>
            </thead>
            <tbody>
            <?php
              $counter=1;
            foreach ($empdata as $employee)
            {
                echo  "<tr>
                      <td>".$counter."</td>
                        <td class='text-capitalize'>".$employee->First_name." ".$employee->Middle_name." ".$employee->Last_name."</td>
                         <td>".$employee->Gender."</td>
                          <td>".$employee->Birth_date."</td>
                           <td>".$employee->Hire_date."</td>
                            <td>".$employee->salary."</td>
                             <td>".$employee->academic_level."</td>
                             <td>
                            
                             <button class='btn btn-danger btn-sm' onclick='return resign(".$employee->Staff_ID.")'>
                             <span class='glyphicon glyphicon-trash'></span>
                             </button>
                             </td>
                             <td>
                            
                              <button class='btn btn-info btn-sm' onclick='return view(".$employee->Staff_ID.")'>
                             <span class='glyphicon glyphicon-eye-open'></span>
                             </button>
                            
                             </td>
                      </tr>";
                $counter++;
            }

            ?>
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body" id="viewbody">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<script src="<?php echo base_url()?>/resources/jquery/jquery-1.10.2.min.js"></script>
<script >
    var xmlhttp =new XMLHttpRequest();
    var url="";
    function view(id) {
      xmlhttp.onreadystatechange=function () {
          if(xmlhttp.readyState==4&& xmlhttp.status==200){
              $('#viewmodal').modal('show');
              $('#viewbody').innerHTML=xmlhttp.responseText;
          }else {
             // $('#myModal').modal('show')
          }
      }
       url="<?php echo base_url()?>/HeadOffice/viewProfile/"+id;
        xmlhttp.open('GET',url,true);
        xmlhttp.send();

    }
    function resign($id) {
        url=
        xmlhttp.open();
        xmlhttp.send();
    }
</script>