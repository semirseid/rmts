<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/6/2018
 * Time: 6:43 PM
 */
?>

<div class="container" style="margin-top:-20px">

<div class="col-lg-5">
    <h4 class="text-capitalize text-info">Add district  </h4>
<?php
if($this->session->flashdata('message')!=null)
{
    echo "<p class='alert alert-success'>".$this->session->flashdata('message')."</p>";
}

?>
    <div class="form-group">
        <form class="form-group" method="post" action="<?php echo base_url('index.php/HeadOffice/Do_addDistrict');?>">

            <div class="form-group ">
                <label>Enter District name</label>
                <input class="form-control" type="text" name="districtname" placeholder="Enter name of district">
            </div>
            <div class="form-group ">
                <label>Description of District</label>
                <textarea type="text" class="form-control" name="description" placeholder="Enter detailed description of this district"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Add district">
        </form>
    </div>
</div>
    <div class="col-lg-7">
        <h4 class="text-info">List of registered districts</h4>

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

</div>