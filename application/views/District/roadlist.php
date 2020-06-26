<div class="container">
<h4 class="page-header">list of roads</h4>
<table class="table table-striped table-hover">
<thead>
<th>#</th>
<th>road number</th>
<th>road name</th>
<th>length</th>
<th>origin</th>
<th>End</th>
<th>no. lanes</th>
</thead>
<tbody>
<?php
$counter=1;
foreach ($roads as $road_data)
{
echo "<tr>";
echo '<td>'.$counter.'</td>';
echo '<td>'.$road_data->road_number."</td>";
echo '<td>'.$road_data->road_name."</td>";
echo '<td>'.$road_data->measured_Length."</td>";
echo '<td>'.$road_data->origin."</td>";
echo '<td>'.$road_data->End_chainage."</td>";
echo '<td>'.$road_data->no_lanes."</td>";
echo "</tr>";
$counter++;
}
?>
</tbody>
</table>
</div>