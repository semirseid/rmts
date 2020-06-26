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
        <form method="post" class="form-group" action="<?php echo base_url()?>index.php/production/do_registration">

            <div class="form-group  col-lg-4 ">
                <label>product_types</label>
                <select type="text" class="form-control"name="product_types">
                    <option>choose product type</option>
                   <?php
                   foreach ($types as $typesdata)
                   {
                       echo "<option value='".$typesdata->product_type_name."'>".$typesdata->product_type_name."</option>";
                   }
                   ?>
                </select>

                </div>
            <div class="form-group  col-lg-4 ">
                <label>Product name</label>
                <input name="prname" class="form-control">
            </div>

            <div class="form-group  col-lg-4 ">
                <label>quantity</label>
                <input name="quantity" class="form-control">
            </div>
            <div class="form-group  col-lg-4 ">
                <label>Unit cost</label>
                <input name="unitcost" class="form-control">
            </div>

            <div class="form-group  col-lg-4">
                <label>Supplier</label>
                <select name="supplier"  class="form-control">
                    <option>choose supplier</option>
                    <option>out source</option>
                    <option>on force</option>
                </select>
            </div>
            <div class="form-group  col-lg-4">
                <label>Production plant </label>
                <input name="productionsite" readonly  value="<?php echo $this->session->userdata('plant')?>" class="form-control">
            </div>

            <div class="form-group col-lg-4">
                <label for="remark">Remark</label>
                <textarea class="form-control" name="remark" id="remark"></textarea>
            </div>
            <div class="form-group col-lg-4">
                &nbsp;
                <br>
            <button class="btn btn-success">save product</button>
            </div>
        </form>
    </div>
    <div class="table">
        <?php
        echo $this->session->flashdata('requestmsg');
        ?>
        <table class="table  table-responsive">
            <thead>
            <th>#</th>
            <th>product type</th>
            <th>product name</th>
            <th>quantity</th>
            <th>unit cost</th>
            <th>total cost</th>
            <th>supplier</th>
            <th>production plant name</th>
            <th>date of registration</th>
            <th>remark</th>
            <th>Action</th>
            </thead>
            <tbody>
            <?php
            $rollno=1;
            foreach ($productlist as $item)
            {
                echo "<tr>
             <td>$rollno</td>
            <td>$item->product_type_id</td>
            <td>$item->product_name</td>
            <td>$item->quantity</td>
            <td>$item->Unit_cost</td>
            <td></td>
            <td>$item->Supplier</td>
           <td>$item->Plant_id</td>
            <td>$item->date_inserted</td>
            <td>$item->Remark</td>
            <td>
            <form action='".base_url()."index.php/production/requestTesting'>
            <input type='hidden' name='prid' value='$item->product_id'> 
             <input type='hidden' name='supplier' value='$item->Supplier'> 
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
<?php

?>
