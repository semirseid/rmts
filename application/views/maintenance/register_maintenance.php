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
        <form method="post" class="form-group" action="<?php echo base_url()?>index.php/maintenance/do_registration">

            <div class="form-group  col-lg-4 ">
                <label>project code</label>
                <input name="prcode" class="form-control">
            </div>

            <div class="form-group  col-lg-4 ">
                <label>maintenance types</label>
                <select type="text" class="form-control"name="matypes">
                    <option>choose maintenance type</option>
                   <?php
                   foreach ($types as $typedata)
                   {
                       echo "<option value='".$typedata->maintenance_type_id."'>".$typedata->maintenance_type_name."</option>";
                   }
                   ?>
                </select>
                </div>

            <div class="form-group  col-lg-4 ">
                <label>maintenance name</label>
                <input name="maname" class="form-control">
            </div>

            <div class="form-group  col-lg-4 ">
                <label>maintenance activity types</label>
                <select type="text" class="form-control"name="mactivitytypes">
                    <option> choose maintenance activity type</option>

                     <?php
                    foreach ($activitytypes as $typedata)
                    {
                        echo "<option value='".$typedata->tbl_maintenanceactivity_types."'>".$typedata->tbl_maintenanceactivity_type_name."</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group  col-lg-4 ">
                <label>maintenance projects</label>
                <input name="maintenanceprojects" class="form-control">
            </div>

            <div class="form-group  col-lg-4 ">
                <label>financial accomplishment</label>
                <input name="financialaccomplishment" class="form-control">
            </div>
            <div class="form-group  col-lg-4">
                <label>	physical_accomplishment</label>
                <input name="physicalaccomplishment" class="form-control">
            </div>
            <div class="form-group  col-lg-4 ">
                <label>plan of the year</label>
                <input name="planoftheyear" class="form-control">
            </div>
            <div class="form-group  col-lg-4">
                <label>unit</label>
                <input name="unit" class="form-control">
            </div>
            <div class="form-group  col-lg-4">
                <label>unit rate</label>
                <input name="unitrate" class="form-control">
            </div>

            <div class="form-group col-lg-4">
                <label for="remark">Remark</label>
                <textarea class="form-control" name="remark" id="remark"></textarea>
            </div>
            <button class="btn btn-success">save maintenance data</button>
        </form>
    </div>



            </tbody>
    </div>

