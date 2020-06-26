<?php
/**
 * Created by PhpStorm.
 * User: luv2codeit
 * Date: 2/12/2018
 * Time: 2:48 PM
 */
?>
<div class="container">

    <div class="col-lg-12">
        <h4 class="text-muted text-info">staff report</h4>
        <div class="col-lg-8">
            <table class="table table-responsive">
                <thead>
                <th>#</th>
                <th>Full name</th>
                <th>Hire date</th>
                <th>Birth date</th>
                <th>Acadamic level</th>
                </thead>
            </table>
        </div>

        <div class="col-lg-4">
            <ul class="list-group">
                <li class="list-group-item active">Filter reports </li>
                <li class="list-group-item"> <a id="salary" title="click me to filter by salary"> By salary </a></li>
                <li class="list-group-item"> <a id="bydistrict">By District </a></li>
                <li class="list-group-item "> <a id="bygender">By Gender </a></li>
                <li class="list-group-item "> <a id="aca_level">by academic level </a> </li>
            </ul>
        </div>
    </div>
</div>
            <script type="text/javascript">
                        $('#salary').click(function (e)
                            {
                                e.preventDefault();
                                alert("salary clicked");
                            });
                        $('#bydistrict').click(function (e)
                        {
                            e.preventDefault();
                            alert("by district clicked");
                        });
                        $('#bygender').click(function (e)
                        {
                            e.preventDefault();
                            alert("gender clicked");
                        });
                        $('#aca_level').click(function (e)
                        {
                            e.preventDefault();
                            alert("filtration by acadamic level");
                        });
            </script>