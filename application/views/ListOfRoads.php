<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/8/2018
 * Time: 7:44 PM
 */
?>
<div class="container" style="margin-top:2px">

    <div class="table-responsive">
        <table class="table table-bordered table-responsive">
            <thead>
            <th colspan="9" >List of road assets
                <span class="pull-right" >
                    <button type="button" id="add_new_road" class="btn btn-sm btn-primary pull-right">
                    Add new road
                    </button>
                </span>
            </th>
            </thead>
            <thead >
            <th >No.</th>
            <th >Road name</th>
            <th >Start point</th>
            <th >End point</th>
            <th >Length</th>
            <th >Registration Date</th>
            <th >No Lanes</th>
            <th >No ways</th>
             <!-- <th >origin</th>-->
            </thead>
            <tbody>
           <?php
           foreach ($roads as $roadinfo)
           {
               echo "<tr>
                <td>".$roadinfo->road_number."</td>
                <td>".$roadinfo->road_name."</td>
                 <td>".$roadinfo->start_Chainage."</td>
                  <td>".$roadinfo->end_chainage."</td>
                    <td>".$roadinfo->Length."</td>
                     <td>".$roadinfo->Date."</td>
                     <td>".$roadinfo->no_of_lanes."</td>
                        <td>".$roadinfo->no_ways."</td>
                         
                 </tr>";
           }
           ?>
            </tbody>
        </table>
    </div>
</div>

