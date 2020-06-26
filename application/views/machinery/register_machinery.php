<?php
/**
 * Created by PhpStorm.
 * User: ALEME
 * Date: 4/6/2018
 * Time: 9:19 AM
 */
?>

<div class="container">

    <div class="form-group" >
        <?php
        echo $this->session->flashdata('msg');
        ?>
        <form method="post" class="form-group" action="<?php echo base_url()?>index.php/machinery/do_registration">


            <div class="form-group  col-lg-4 ">
                <label>machinery types</label>
                <select type="text" class="form-control" name="machinery_types" required>
                    <option>choose machinery type</option>
                    <?php
                   foreach ($types as $typesdata)
                   {
                       echo "<option value='".$typesdata->machinery_type_name."'>".$typesdata->machinery_type_name."</option>";
                                          }
                   ?>
                </select>

            </div>
            <div class="form-group  col-lg-4 ">
                <label>Machinery Name</label>
                <input name="maname" class="form-control">
            </div>

            <div class="form-group  col-lg-4 ">
                <label>Quantity</label>
                <input name="quantity" class="form-control">
            </div>
            <div class="form-group  col-lg-4 ">
                <label>Model no</label>
                <input name="modelno" class="form-control">
            </div>
            <div class="form-group  col-lg-4 ">
                <label>Engine no</label>
                <input name="engineno" class="form-control">
            </div>
            <div class="form-group  col-lg-4">
                <label>Plate no</label>
                <input name="plateno" class="form-control">
            </div>
            <div class="form-group  col-lg-4">
                <label>Owner</label>
                <input name="owner" class="form-control">
            </div>
            <div class="form-group  col-lg-4">
                <label>Assigned lot</label>
                <input name="assignedlot" class="form-control">
            </div>
            <div class="form-group col-lg-3">
                <label for="remark">Remark</label>
                <textarea class="form-control" name="remark" id="remark"></textarea>
            </div>
            <div>

            </div>
            <button class="btn btn-success">Save Machinery</button>
        </form>
    </div>
    <div class="table">
        <?php
        echo $this->session->flashdata('requestmsg');
        ?>
        <table class="table table-striped table-responsive">
            <thead>
            <th>#</th>
            <th>machinery types</th>
            <th>machinary name</th>
            <th>quantity</th>
            <th>model no</th>
            <th>engine no</th>
            <th>plate no</th>
            <th>owner</th>
            <th>assigned lot</th>
            <th>remark</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
            $rollno=1;
            foreach ($machinerylist as $item)
            {
                echo "<tr>
             <td>$rollno</td>
             <td>$item->machinery_types</td
            <td>$item->machinery_name</td>
            <td>$item->quantity</td>
            <td>$item->model_no</td>
            <td>$item->engine_no</td>
            <td>$item->plate_no</td>
            <td>$item->owner</td>
            <td>$item->assigned_lot</td>
            <td>$item->remark</td>
            
             <td>
            <form action='".base_url()."index.php/machinery/requestTesting'>
            <input type='hidden' name='maid' value='$item->machinery_id'> 
             <button class='btn btn-default btn-sm'>request for testing</button>
               </form>
           
           
            </td></tr>";
                $rollno++;
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
