<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/11/2018
 * Time: 5:16 PM
 */
?>
<div class="container" style="margin-top: -5px">

    <div class="col-lg-6">
        <h4 class="text-muted">Segment management</h4>
        <div class="form-group">
            <form class="form-inline" method="get" >
                <div class="form-group">
                    <label>Enter road number</label>
                    <select class="form-control"  id="roadnumber" required onchange="showform()">
                     <option value="">Choose road number </option>
                      <?php
					   foreach($rnumbers as $data){
					   echo "<option>".$data->road_number."</option>";
					   }
					   ?>
                    </select>

                </div>

            </form>
        </div>
        <div id="editform">

             <?php
echo $this->session->flashdata('Segmessage');
             $form_attrib = array(
                 'Method'        => 'post',
                 'id'          => 'addsegmentform',
                 'class'       => 'form-group'

             );
             echo form_open('District/do_segment_registration',$form_attrib);
             ?>
             <div class="form-group ">
                 <label>road number</label>
                 <input class="form-control" name="roadnumber" id="roadID" readonly="readonly">
             </div>
            <div class="form-group ">
                <label>Enter name of segment</label>
                <input class="form-control"name="segment"  >
            </div>
            <div class="form-group ">
                <label>Enter Starting point</label>
                <input class="form-control"name="segmentstart"  >
            </div>
            <div class="form-group ">
                <label>Enter End point</label>
                <input class="form-control"name="segmentend"  >
            </div>
            <div class="form-group ">
                <label>Enter Length of segment</label>
                <input class="form-control"name="segmentlength"  >
            </div>
            
            <div class="form-group ">
                <label>segment Description</label>
                <input class="form-control"name="segmentDescription"  >
            </div>
            <div class="form-group ">

                <input type="submit" class="btn btn-primary" value="Add segment"  >
            </div>
         </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="bg-info">
                <th>#</th>
                <th>Road number</th>
                <th>Number of segments</th>
                <th>Actions</th>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="delete all segments"><span class="glyphicon glyphicon-trash"></span></button>
                        <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="view all segments"><span class="glyphicon glyphicon-eye-open"></span></button>
                        <button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit segments"><span class="glyphicon glyphicon-edit"></span></button>

                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('#addsegmentform').css('visibility','hidden');

    });
    function showform()
    {
        $('#addsegmentform').css('visibility','visible');
        var roadnumber=document.getElementById('roadnumber').value;
        var editdiv=document.getElementById('editform');
        document.getElementById('roadID').value = roadnumber;
        //roadnumberInput.value(roadnumber);roadID

    }

</script>