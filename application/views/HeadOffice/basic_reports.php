<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/10/2018
 * Time: 9:56 AM
 */?>
<div class="container">

    <div class="col-lg-12">
<div class="row">
    <table class="table  table-condensed table-responsive ">
        <thead>
        <th colspan="11" class="text-centre text-capitalize text-info"> List of Registered Road Assets </th>
        </thead>
        <thead>
        <th>No.</th>
        <th>Road Number</th>
        <th>Road Name</th>
        <th>District</th>
        <th>Road class</th>
        <th>Measured Length</th>
        <th>Start Point</th>
        <th>End point</th>
        <th colspan="3">Actions</th>
        </thead>
        <tbody>
        <?php
        $roadcounter=1;
        foreach ($roads as $roadInfo)
        {
            echo "<tr>
                            <td>.$roadcounter.</td> 
                             <td>.$roadInfo->road_number.</td>
                              <td>.$roadInfo->road_name.</td>
                               <td>".$roadInfo->District_name."</td>
                                  <td>".$roadInfo->RoadclassName."</td>
                                <td>.$roadInfo->measured_Length.</td>
                                  <td>.$roadInfo->start_chainage.</td>
                                   <td>.$roadInfo->End_chainage.</td>
                                     <td> <a href='".base_url()."RoadAsset/viewDetails/".$roadInfo->road_number."' class='btn btn-link'> view detailed info</a> </td>         
                            </tr>";
            $roadcounter++;
        }
        ?>
        </tbody>
    </table>
</div>
        <script type="text/javascript">
            var roadcount=0;
            var xmlhttp=new XMLHttpRequest();
            function getdistrict(id) {

                var roadcount=0;
                document.write(roadcount);
            }
            function getclass(id) {

                var roadcount=0;
                document.write(roadcount);
            }
            function displaycount (id) {
              xmlhttp.onreadystatechange=function () {
                  if(xmlhttp.readyState==4 && xmlhttp.status==200)
                  {
                      document.write('ok');
                  }else
                      {
                      document.write('k');
                  }
              }

                var url="<?php echo base_url()?>district/road_count/"+id;
                xmlhttp.open('GET',url,true);
                xmlhttp.send();
            }


        </script>


    </div>
    <div class="col-lg-12">
        <div class="col-lg-6">
            <div class="row">
                <div class="page-header">
               <h5>  All Districts and their respective total number of roads.</h5>
                </div>
                <table class="table  table-responsive table-responsive">
                    <thead>

                    <th>District ID</th>
                    <th>District name</th>
                    <th>number of  roads </th>
                    </thead>
                    <tbody>
                    <?php
                    //echo json_encode($districts);
                    $count=1;

                    foreach ($districts as $district ) {
                        echo "<tr>
                                  <td>" . $district->District_id . "</td>
                                  <td>" . $district->District_name . "</td>
                                  <td>" . $district->roads . "</td>
                                
                                 </tr>";
                        $count++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col-lg-6">
                    <div class="row">
                        <div class="container">
                            <div class="page-header"><strong>Graphs</strong> </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
