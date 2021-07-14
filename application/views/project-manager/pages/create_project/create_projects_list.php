<div class="container-fluid px-xl-5">

    <section class="py-5">

        <div class="row">

            <!-- Form Elements -->

            <div class="col-lg-12 mb-1">

                <div class="card">

                    <div class="card-header">

                        <h3 class="h6 text-uppercase mb-0">All Projects List</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-striped table-bordered " style="width:100%">

                                <thead>

                                    <tr>

                                        <th>S. No.</th>

                                        <th>Project Name</th>

                                        <th>Project Type</th>

                                        <th>Province</th>

                                        <th>District</th>

                                        <!-- <th>Region</th> -->

                                        <th>City</th>

                                        <th>Municipality</th>

                                        <th>Planned Project Start Date</th>

                                        <th>Actual Project Start Date</th>

                                        <th>Planned Project End Date</th>

                                        <th>Actual Project End Date</th>

                                        <th>Project Owner First Name</th>

                                        <th>Project Owner Surname</th>

                                        <th>Project Owner Email</th>

                                        <th>Project Owner Mobile</th>

                                        <th>Project Owner Landline</th>

                                        <th>Project Owner ID</th>

                                        <th>Project Owner Gender</th>

                                        <th>Project Owner Date of Birth</th>

                                        <th>Pre Implementation Planned Start Date</th>

                                        <th>Pre Implementation Actual Start Date</th>

                                        <th>Pre Implementation Planned End Date</th>

                                        <th>Pre Implementation Actual End Date</th>

                                        <th>Implementation Planned Start Date</th>

                                        <th>Implementation Actual Start Date</th>

                                        <th>Implementation Planned End Date</th>

                                        <th>Implementation Actual End Date</th>

                                        <th>Closeout Planned Start Date</th>

                                        <th>Closeout Actual Start Date</th>

                                        <th>Closeout Planned End Date</th>

                                        <th>Closeout Actual End Date</th>



                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php



                                    $i = 1;

                                    foreach ($project as $key => $row) {
                                        $district = $this->common->accessrecord('district', [], ['id' => $row['district']], 'row');

                                        if ((!empty($district->name))) {

                                            $district_name = $district->name;
                                        } else {

                                            $district_name = "";
                                        }

                                        // $region = $this->common->accessrecord('region', [], ['id' => $row['region']], 'row');

                                        // if ((!empty($region->region))) {

                                        //     $region_name = $region->region;
                                        // } else {

                                        //     $region_name = "";
                                        // }

                                        $city = $this->common->accessrecord('city', [], ['id' => $row['city']], 'row');

                                        if ((!empty($city->city))) {

                                            $city_name = $city->city;
                                        } else {

                                            $city_name = "";
                                        }

                                        $municipality = $this->common->accessrecord('municipality', [], ['id' => $row['municipality']], 'row');

                                        if ((!empty($municipality->municipality))) {

                                            $municipality_name = $municipality->municipality;
                                        } else {

                                            $municipality_name = "";
                                        }

                                    ?>

                                        <tr id="del-<?= $row['id'] ?>" class="list">

                                            <td><?= $i; ?></td>

                                            <td class="1"><?= $row['project_name']; ?></td>

                                            <td class="2"><?= $row['project_type']; ?></td>

                                            <td class="4"><?= $row['province']; ?></td>

                                            <td class="5"><?= $district_name ?></td>

                                            <!-- <td class="3"><?= $region_name ?></td> -->

                                            <td class="4"><?= $city_name ?></td>

                                            <td class="29"><?= $municipality_name    ?></td>

                                            <td class="5"> <?= date("d-m-Y", strtotime($row['planned_start_date'])); ?></td>

                                            <td class="6"><?= date("d-m-Y", strtotime($row['actual_start_date'])); ?></td>

                                            <td class="7"><?= date("d-m-Y", strtotime($row['planned_end_date'])); ?></td>

                                            <td class="8"><?= date("d-m-Y", strtotime($row['actual_end_date'])); ?></td>

                                            <td class="9"><?= $row['project_owner_name'] ?></td>

                                            <td class="10"><?= $row['project_owner_surname'] ?></td>

                                            <td class="11"><?= $row['project_owner_email'] ?></td>

                                            <td class="12"><?= $row['project_owner_mobile'] ?></td>

                                            <td class="13"><?= $row['project_owner_landline'] ?></td>

                                            <td class="14"><?= $row['project_owner_id_number'] ?></td>

                                            <td class="15"><?= $row['project_owner_gender'] ?></td>

                                            <td class="16"><?= $row['project_owner_dob'] ?></td>

                                            <td class="17"><?= date("d-m-Y", strtotime($row['pre_implement_planned_start_date'])); ?></td>

                                            <td class="18"><?= date("d-m-Y", strtotime($row['pre_implement_actual_start_date'])); ?></td>

                                            <td class="19"><?= date("d-m-Y", strtotime($row['pre_implement_planned_end_date'])); ?></td>

                                            <td class="20"><?= date("d-m-Y", strtotime($row['pre_implement_actual_end_date'])); ?></td>

                                            <td class="21"><?= date("d-m-Y", strtotime($row['implement_planned_start_date'])); ?></td>

                                            <td class="22"><?= date("d-m-Y", strtotime($row['implement_actual_start_date'])); ?></td>

                                            <td class="23"><?= date("d-m-Y", strtotime($row['implement_planned_end_date'])); ?></td>

                                            <td class="24"><?= date("d-m-Y", strtotime($row['implement_actual_end_date'])); ?></td>

                                            <td class="25"><?= date("d-m-Y", strtotime($row['closeout_planned_start_date'])); ?></td>

                                            <td class="26"><?= date("d-m-Y", strtotime($row['closeout_actual_start_date'])); ?></td>

                                            <td class="27"><?= date("d-m-Y", strtotime($row['closeout_planned_end_date'])); ?></td>

                                            <td class="28"><?= date("d-m-Y", strtotime($row['closeout_actual_end_date'])); ?></td>

                                            <td>

                                                <!-- <a href="#" req_id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#exampleModal" id= "view" onclick="view(<?= $row['id']; ?>)" class="btn btn-primary btn-sm view"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
                                                <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row['id'] ?>" data-name="<?= $row['id'] ?>" onclick="view(<?= $row['id']; ?>)" class="btn btn-primary btn-sm preview_product"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <!-- <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                                  </div> -->
                                                            <div class="modal-body " id="personDetails">

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>






                                                <a href="create_new_project?id=<?= $row['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>

                                                <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:5px 0 0" onclick="project_delete('project&behalf','id',<?= $row['id'] ?>)"><i class="fa fa-trash"></i></a>

                                                <?php $tablenm_id = 'project' . '.' . $row['id'];

                                                ?>

                                                <i data="<?php echo $tablenm_id; ?>" class="status_checks btn

                                                <?php echo ($row['status']) ? 'btn-success' : 'btn-warning' ?>"><?php echo ($row['status']) ? 'Active' : 'Inactive' ?></i>

                                            </td>

                                        </tr>



                                    <?php $i++;
                                    }
                                    ?>







                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

<script>
    function view() {



        $("#exampleModal").modal({
            keyboard: true,
            backdrop: "static",
            show: false,

        }).on("show.bs.modal", function(event) {
            var button = $(event.relatedTarget); // button the triggered modal
            var id = button.data("id"); //data-id of button which is equal to id (primary key) of person
            var project_name = $(event.relatedTarget).closest("tr").find("td:eq(1)").text();
            var project_type = $(event.relatedTarget).closest("tr").find("td:eq(2)").text();
            var province = $(event.relatedTarget).closest("tr").find("td:eq(3)").text();
            var district_name = $(event.relatedTarget).closest("tr").find("td:eq(4)").text();
            var city_name = $(event.relatedTarget).closest("tr").find("td:eq(5)").text();
            var municipality = $(event.relatedTarget).closest("tr").find("td:eq(6)").text();
            var planned_start_date = $(event.relatedTarget).closest("tr").find("td:eq(7)").text();
            var actual_start_date = $(event.relatedTarget).closest("tr").find("td:eq(8)").text();
            var planned_end_date = $(event.relatedTarget).closest("tr").find("td:eq(9)").text();
            var actual_end_date = $(event.relatedTarget).closest("tr").find("td:eq(10)").text();
            var project_owner_name = $(event.relatedTarget).closest("tr").find("td:eq(11)").text();
            var project_owner_surname = $(event.relatedTarget).closest("tr").find("td:eq(12)").text();
            var project_owner_email = $(event.relatedTarget).closest("tr").find("td:eq(13)").text();
            var project_owner_mobile = $(event.relatedTarget).closest("tr").find("td:eq(14)").text();
            var project_owner_landline = $(event.relatedTarget).closest("tr").find("td:eq(15)").text();
            var project_owner_id_number = $(event.relatedTarget).closest("tr").find("td:eq(16)").text();
            var project_owner_gender = $(event.relatedTarget).closest("tr").find("td:eq(17)").text();
            var project_owner_dob = $(event.relatedTarget).closest("tr").find("td:eq(18)").text();
            var pre_implement_planned_start_date = $(event.relatedTarget).closest("tr").find("td:eq(19)").text();
            var pre_implement_actual_start_date = $(event.relatedTarget).closest("tr").find("td:eq(20)").text();
            var pre_implement_planned_end_date = $(event.relatedTarget).closest("tr").find("td:eq(21)").text();
            var pre_implement_actual_end_date = $(event.relatedTarget).closest("tr").find("td:eq(22)").text();
            var implement_planned_start_date = $(event.relatedTarget).closest("tr").find("td:eq(23)").text();
            var implement_actual_start_date = $(event.relatedTarget).closest("tr").find("td:eq(24)").text();
            var implement_planned_end_date = $(event.relatedTarget).closest("tr").find("td:eq(25)").text();
            var implement_actual_end_date = $(event.relatedTarget).closest("tr").find("td:eq(26)").text();
            var closeout_planned_start_date = $(event.relatedTarget).closest("tr").find("td:eq(27)").text();
            var closeout_actual_start_date = $(event.relatedTarget).closest("tr").find("td:eq(28)").text();
            var closeout_planned_end_date = $(event.relatedTarget).closest("tr").find("td:eq(29)").text();
            var closeout_actual_end_date = $(event.relatedTarget).closest("tr").find("td:eq(30)").text();

            //displays values to modal
            $(this).find("#personDetails").html($("<div class=row><div class=col-sm-12><span class='pull-left'>project Name: </span><span class='pull-right'> " + project_name +
                "</div><div class=col-sm-12><span class='pull-left'>project type:</span><span class='pull-right'>  " + project_type +
                "</div><div class=col-sm-12><span class='pull-left'>province:</span><span class='pull-right'>  " + province +
                "</div><div class=col-sm-12><span class='pull-left'>District Name: </span><span class='pull-right'> " + district_name +
                "</div><div class=col-sm-12><span class='pull-left'>City Name: </span><span class='pull-right'> " + city_name +
                "</div><div class=col-sm-12><span class='pull-left'>Municipality Name: </span><span class='pull-right'> " + municipality +
                "</div><div class=col-sm-12><span class='pull-left'>Planned start date: </span><span class='pull-right'> " + planned_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>Actual Start Date: </span><span class='pull-right'> " + actual_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>planned end date:</span><span class='pull-right'>  " + planned_end_date +
                "</div><div class=col-sm-12><span class='pull-left'>actual end date: </span><span class='pull-right'> " + actual_end_date +
                "</div><div class=col-sm-12><span class='pull-left'>project owner name: </span><span class='pull-right'> " + project_owner_name +
                "</div><div class=col-sm-12><span class='pull-left'>project owner  surname:</span><span class='pull-right'>  " + project_owner_surname +
                "</div><div class=col-sm-12><span class='pull-left'>project_owner_email: </span><span class='pull-right'> " + project_owner_email +
                "</div><div class=col-sm-12><span class='pull-left'>project_owner_mobile:</span><span class='pull-right'>  " + project_owner_mobile +
                "</div><div class=col-sm-12><span class='pull-left'>project_owner_landline: </span><span class='pull-right'> " + project_owner_landline +
                "</div><div class=col-sm-12><span class='pull-left'>project_owner_id_number: </span><span class='pull-right'> " + project_owner_id_number +
                "</div><div class=col-sm-12><span class='pull-left'>project_owner_gender: </span><span class='pull-right'> " + project_owner_gender +
                "</div><div class=col-sm-12><span class='pull-left'>project_owner_dob: </span><span class='pull-right'> " + project_owner_dob +
                "</div><div class=col-sm-12><span class='pull-left'>pre_implement_planned_start_date: </span><span class='pull-right'> " + pre_implement_planned_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>pre_implement_actual_start_date:</span><span class='pull-right'>  " + pre_implement_actual_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>pre_implement_planned_end_date:</span><span class='pull-right'>  " + pre_implement_planned_end_date +
                "</div><div class=col-sm-12><span class='pull-left'>pre_implement_actual_end_date:</span><span class='pull-right'> " + pre_implement_actual_end_date +
                "</div><div class=col-sm-12><span class='pull-left'>implement_planned_start_date:</span><span class='pull-right'>  " + implement_planned_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>implement_actual_start_date: </span><span class='pull-right'> " + implement_actual_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>implement_planned_end_date: </span><span class='pull-right'> " + implement_planned_end_date +
                "</div><div class=col-sm-12><span class='pull-left'>implement_actual_end_date: </span><span class='pull-right'> " + implement_actual_end_date +
                "</div><div class=col-sm-12><span class='pull-left'>closeout_planned_start_date: </span><span class='pull-right'> " + closeout_planned_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>closeout_actual_start_date: </span><span class='pull-right'> " + closeout_actual_start_date +
                "</div><div class=col-sm-12><span class='pull-left'>closeout_planned_end_date: </span><span class='pull-right'> " + closeout_planned_end_date +
                "</div><div class=col-sm-12><span class='pull-left'>closeout_actual_end_date: </span><span class='pull-right'> " + closeout_actual_end_date +
                "</span></div></div></span>"))
        }).on("hide.bs.modal", function(event) {
            $(this).find("#personDetails").html("");
        });
    }
</script>