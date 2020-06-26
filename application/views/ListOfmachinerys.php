<?php
/**
 * Created by PhpStorm.
 * User: ALEME
 * Date: 4/26/2018
 * Time: 6:33 PM
 */
?>
<div class="container" style="margin-top:2px">

    <div class="table-responsive">
        <table class="table table-bordered table-responsive">
            <thead>
            <th colspan="9" >List of machinerys
                <span class="pull-right" >
                    <button type="button" id="add_new_machine" class="btn btn-sm btn-primary pull-right">
                    Add new machinery
                    </button>
                </span>
            </th>
            </thead>
            <thead >
            <th >ID.</th>
            <th>machinery types</th>
            <th >machinery name</th>
            <th >Quantity</th>
            <th >model no</th>
            <th >engine no</th>
            <th >plate no</th>
            <th >owner</th>
            <th >assigned lot</th>
            <th >remark</th>

            <!-- <th >origin</th>-->

            </thead>
            <tbody>
            <?php
            foreach ($machinerys as $machinerysInfo)
            {
                echo "<tr>
                <td>".$machinerysInfo->machinery_id."</td>
                <td>".$machinerysInfo->machinery_types."</td>
                <td>".$machinerysinfo->machinery_name."</td>
                 <td>".$machinerysinfo->quantity."</td>
                 <td>".$machinerysinfo->model_no."</td>
                  <td>".$machinerysinfo->engine_no."</td>
                  <td>".$machinerysinfo->plate_no."</td>
                  <td>".$machinerysinfo->owner."</td>
                  <td>".$machinerysinfo->assigned_lot."</td>
                  <td>".$machinerysinfo->remark."</td>
                     
                                              
                 </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

