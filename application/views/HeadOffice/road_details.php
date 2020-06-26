<div class="container">


    <div class="row">
        <?php
        foreach ($roadData as $datum)
        {
            $name=$datum->road_name;
           $End_chainage= $datum->End_chainage;
            $measured_Length= $datum-> measured_Length;
             $road_number=  $datum-> road_number;
           $start_chainage=   $datum->start_chainage;
            $End_description= $datum->End_description;
          $start_description=$datum->  start_description;
         $surface_width= $datum->  surface_width;
          $no_lanes= $datum-> no_lanes;
           $carriage_way_width=$datum-> carriage_way_width;
            $no_ways= $datum-> no_ways;
           $area=$datum-> area;
         $project=  $datum-> project_handover;
         $rate=  $datum-> rate;
           $width=$datum-> standard_Width;
           $distrct=$datum-> District_name;
           $class=$datum-> RoadclassName;
        }

?>



        <div class=' col-lg-6'>

            <table class="table table-condensed table-bordered">
                <thead>
                <th colspan="2"><strong>Details of <?php echo $name; ?> </strong> </th>
                </thead>
                <tbody>
                <tr>
                    <td>Road name</td>
                    <td> <?php echo $name; ?> </td>
                </tr>
                <tr>
                    <td>road class</td>
                    <td><?php echo $class; ?></td>
                </tr>
                <tr>

                    <td>road length</td>
                    <td> <?php echo $measured_Length; ?> </td>
                </tr>
                <tr>
                    <td>End_chainage</td>
                    <td> <?php echo $End_chainage; ?> </td>
                </tr>
                <tr>
                    <td>Start_chainage</td>
                    <td> <?php echo $start_chainage; ?> </td>
                </tr>

                <tr>
                    <td>End_description</td>
                    <td> <?php echo $End_description; ?> </td>
                </tr>
                <tr>
                    <td>Start description</td>
                    <td> <?php echo $start_description; ?> </td>
                </tr>
                <tr>
                    <td>surface_width</td>
                    <td> <?php echo $surface_width; ?> </td>
                </tr>
                <tr>
                    <td>number of lanes</td>
                    <td> <?php echo $no_lanes; ?> </td>
                </tr>
                <tr>
                    <td>carriage way width</td>
                    <td> <?php echo $carriage_way_width; ?> </td>
                </tr>
                <tr>
                    <td>no_ways</td>
                    <td> <?php echo $no_ways; ?> </td>
                </tr>
                <tr>
                    <td>Area of the road</td>
                    <td> <?php echo $area; ?> </td>
                </tr>
                <tr>
                    <td>Project handover</td>
                    <td> <?php echo $project; ?> </td>
                </tr>
                <tr>
                    <td>Road Rating</td>
                    <td> <?php echo $rate; ?> </td>
                </tr>

                <tr>
                    <td>Road district</td>
                    <td> <?php echo $distrct; ?> </td>
                </tr>
                <tr>
                    <td>Road width</td>
                    <td> <?php echo $width."M"; ?> </td>
                </tr>








                </tbody>
            </table>
        </div>
        <div class="col-lg-6">
            <h5> <strong>Segments of <?php echo $name ?></strong> </h5>
            <table class="table table-bordered">
                <thead>
                <th>#</th>
                <th>segment name</th>
                <th>Section start </th>
                <th>Section End  </th>
                <th>length</th>
                </thead>

                <tbody>
                <?php

                $counter=1;
                foreach ($segments as $segment){
                    echo "<tr>
                        <td>".$counter."</td>
                        <td>".$segment->segment_name."</td>
                         <td>".$segment->start_point."</td>
                          <td>".$segment->segment_end."</td>
                     
                            <td>".$segment->segment_length."</td>

                           </tr>";
                    $counter++;
                }
                ?>

                </tbody>
            </table>
            <div class="page-header text-danger"><strong>Maintainace history</strong></div>
            <table class="table table-condensed">
          <thead>
          <th>#</th>
          <th>Maintainance type</th>
          <th>Maintained segment</th>
          <th>Start date</th>
          <th>End date</th>

          <th>total budget deployed</th>
          </thead>

            </table>

        </div>




</div>
    </div>