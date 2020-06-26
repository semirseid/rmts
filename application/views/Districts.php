<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/7/2018
 * Time: 9:36 PM
 */
?>


<div class="container" style="margin-top:-20px">
    <h3 class="text-capitalize text-info">List of registered Districts </h3>
    <table class="table table-bordered">
        <thead class="active">
        <th>#</th>
        <th>District ID</th>
        <th>District name</th>
        <th>Description</th>
        <th>Edit/Delete</th>
        </thead>
        <tbody>

        <?php
        $iterator=0;
        foreach ($district as $data)
        {
            echo "<tr>
<td>".$iterator."</td>
    <td>".$data->District_id."</td>
    <td>".$data->District_name."</td>
    <td>".$data->Disrict_description."</td>
     <td>
     <button class='btn btn-warning  btn-sm' type='submit'><span class='glyphicon glyphicon-edit'></span></button>
     <button class='btn btn-danger  btn-sm' type='submit'><span class='glyphicon glyphicon-trash'></span></button>
     </td>
    </tr>";
            $iterator++;
        }
        ?>


        </tbody>
    </table>

</div>