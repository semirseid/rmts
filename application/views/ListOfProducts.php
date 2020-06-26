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
            <th colspan="9" >List of products
                <span class="pull-right" >
                    <button type="button" id="add_new_product" class="btn btn-sm btn-primary pull-right">
                    Add new product
                    </button>
                </span>
            </th>
            </thead>
            <thead >
            <th >ID.</th>
            <th>product types</th>
            <th >Product name</th>
            <th >Quantity</th>
            <th >Unit cost</th>
            <th >Total cost</th>

            <th>date</th>
            <th >Supplier</th>
            <th>remark</th>
            <!-- <th >origin</th>-->

            </thead>
            <tbody>
            <?php
            foreach ($products as $ProductsInfo)
            {
                echo "<tr>
                <td>".$ProductsInfo->product_id."</td>
                <td>".$ProductsInfo->product_types."</td>
                <td>".$ProductsInfo->product_name."</td>
                 <td>".$ProductsInfo->quantity."</td>
                  <td>".$ProductsInfo->unit_cost."</td>
                    <td>".$ProductsInfo->total_cost."</td>
                    
                    <td>".$ProductsInfo->date."</td>
                     <td>".$ProductsInfo->supplier."</td>
                     <td>".$ProductsInfo->remark."</td>
                     
                                              
                 </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

