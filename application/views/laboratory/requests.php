<?php
/**
 * Created by PhpStorm.
 * User: ALEME
 * Date: 4/6/2018
 * Time: 11:14 AM
 */
?>
<div class="container">
    <table class="table table-responsive table-bordered">
        <thead>

        <th>product ID</th>
        <th>Product name</th>
        <th>quantity</th>
        <th>request date</th>
        <th>requested by</th>
        <th>request ID</th>
        <th colspan="3">Actions</th>
        </thead>
        <tbody>

        <?php
        $name=null;
foreach ($requestlist as $request)
{
    echo "<tr>
<td>$request->product_id</td>
<td>


</td>
<td>$request->quantity</td>
<td>$request->request_date</td>
<td>$request->requested_by</td>
<td>$request->test_id</td>

<th>
<form>
<input type='hidden' name='requestid' value='$request->product_id'> 
<input class='btn btn-sm btn-success' value='Approve' 'Reject'>
</form>
</th>
<th>
<form>
<input type='hidden' name='requestid' value='$request->product_id'> 
<input class='btn btn-sm btn-danger' value='Reject'>
</form>
</th>
</tr>";
}
?>
        </tbody>
    </table>
</div>
