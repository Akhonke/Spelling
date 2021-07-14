<div class="container-fluid px-xl-5">

    <section class="py-5">

        <div class="row">

            <!-- Form Elements -->

            <div class="col-lg-12 mb-1">

                <div class="card">

                    <div class="card-header">

                        <h3 class="h6 text-uppercase mb-0">Assessors List</h3>

                    </div>

                    <div class="card-body">

                        <table class="table table-striped table-bordered table-responsive" style="width:100%">

                            <thead>

                                <tr>

                                    <th>S. No.</th>

                                    <th>Training Provider</th>

                                    <th>Full Name</th>

                                    <th>Surname</th>

                                    <th>Email</th>

                                    <th>Mobile Number</th>

                                    <th>Landline Number</th>

                                    <th>ID Number</th>

                                    <th>Province</th>

                                    <th>District</th>

                                    <!-- <th>Region</th> -->

                                    <th>City</th>

                                    <th>Municipality</th>

                                    <th>Suburb</th>

                                    <th>Street Name</th>

                                    <th>Street Number</th>

                                    <th>Accreditations Files</th>

                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                if (!empty($assessor)) {

                                    $i = 1;

                                    foreach ($assessor as  $value) {

                                        foreach ($value as $key => $row) {

                                            $trainer = $this->common->accessrecord('trainer', [], ['id' => $row->trainer_id], 'row');

                                            $trainer_nm = $trainer ? $trainer->company_name : '';

                                ?>

                                            <tr id="del-<?= $row->id ?>">

                                                <td><?= $i; ?></td>

                                                <td><?= $trainer_nm; ?></td>

                                                <td><?= $row->fullname; ?></td>

                                                <td><?= $row->surname; ?></td>

                                                <td><?= $row->email; ?></td>

                                                <td><?= "+27-" . $row->mobile; ?></td>

                                                <td><?= "+27-" . $row->landline; ?></td>

                                                <td><?= $row->id_number; ?></td>

                                                <td><?= $row->province; ?></td>

                                                <td><?= $row->district; ?></td>

                                                <!-- <td><?= $row->region; ?></td> -->

                                                <td><?= $row->city; ?></td>

                                                <td><?= $row->municipality; ?></td>

                                                <td><?= $row->Suburb; ?></td>

                                                <td><?= $row->Street_name; ?></td>

                                                <td><?= $row->Street_number; ?></td>



                                                <td>

                                                    <?php if (!empty($row->acreditations_file)) {

                                                        $acreditations_file = unserialize($row->acreditations_file);

                                                        if (!empty($acreditations_file)) {

                                                            foreach ($acreditations_file as $value) {

                                                    ?>

                                                                <div class="text-center" style="display:inline-block; margin:0 5px; border:1px solid #000;padding:5px"><?= $value['acreditations'] ?><br>

                                                                    <img src="<?= BASEURL . 'uploads/acreditationsfiles/' . $value['acreditations_file'] ?>" width="50px">

                                                                </div>

                                                    <?php }
                                                        }
                                                    }

                                                    ?>

                                                </td>

                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="<?= $row->id ?>" data-name="<?= $row->id ?>" onclick="view(<?= $row->id; ?>)" class="btn btn-primary btn-sm preview_product"><i class="fa fa-eye" aria-hidden="true"></i></a>

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
                                                    <!-- <a href="projectmanager-create-assessor?id=<?= $row->id ?>" class="btn btn-info btn-sm"><i

                                                        class="fa fa-edit"></i></a>

                                                <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:5px 0 0"onclick="projectmanagerdeletedataAssessor('assessor&behalf','id','<?= $row->id ?>','<?= $trainer_nm ?>')"><i

                                                        class="fa fa-trash"></i></a> -->

                                                </td>

                                            </tr>



                                <?php $i++;
                                        }
                                    }
                                } ?>







                        </table>

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
            var trainer_nm = $(event.relatedTarget).closest("tr").find("td:eq(1)").text();
            var fullname = $(event.relatedTarget).closest("tr").find("td:eq(2)").text();
            var surname = $(event.relatedTarget).closest("tr").find("td:eq(3)").text();
            var email = $(event.relatedTarget).closest("tr").find("td:eq(4)").text();
            var mobile = $(event.relatedTarget).closest("tr").find("td:eq(5)").text();
            var landline = $(event.relatedTarget).closest("tr").find("td:eq(6)").text();
            var id_number = $(event.relatedTarget).closest("tr").find("td:eq(7)").text();
            var province = $(event.relatedTarget).closest("tr").find("td:eq(8)").text();
            var district = $(event.relatedTarget).closest("tr").find("td:eq(9)").text();
            var city = $(event.relatedTarget).closest("tr").find("td:eq(10)").text();
            var municipality = $(event.relatedTarget).closest("tr").find("td:eq(11)").text();
            var Suburb = $(event.relatedTarget).closest("tr").find("td:eq(12)").text();
            var Street_name = $(event.relatedTarget).closest("tr").find("td:eq(13)").text();
            var Street_number = $(event.relatedTarget).closest("tr").find("td:eq(14)").text();
            // var classname = $(event.relatedTarget).closest("tr").find("td:eq(15)").text(); 

            var src = [];

            $(event.relatedTarget).closest("tr").find("td:eq(15) div").each(function() {
                src.push($(this).find("img").attr("src"));
            });
            var attchedImage;
            if (src.length > 1) {
                for (var i = 0; i < src.length; i++) {
                    attchedImage = i === 0 ?
                        '<img width="50" src="' + src[i] + '" / > ' :
                        attchedImage + '<img width="50" src="' + src[i] + '" / > ';
                }
            } else {
                attchedImage = '<img width="50" src="' + src[0] + '" / > ';
            }
            //displays values to modal
            $(this).find("#personDetails").html($("<div class=row><div class=col-sm-12><span class='pull-left'>Trainer Name   :  </span><span class='pull-right'>" + trainer_nm +
                "</div><div class=col-sm-12><span class='pull-left'>Full Name:  </span><span class='pull-right'>" + fullname +
                "</div><div class=col-sm-12><span class='pull-left'> SurName: </span><span class='pull-right'> " + surname +
                "</div><div class=col-sm-12><span class='pull-left'>Email : </span><span class='pull-right'> " + email +
                "</div><div class=col-sm-12><span class='pull-left'>Email Address :</span><span class='pull-right'>  " + mobile +
                "</div><div class=col-sm-12><span class='pull-left'>Landline Number  :</span><span class='pull-right'>  " + landline +
                "</div><div class=col-sm-12><span class='pull-left'>ID Number :</span><span class='pull-right'>  " + id_number +
                "</div><div class=col-sm-12><span class='pull-left'>province  : </span><span class='pull-right'> " + province +
                "</div><div class=col-sm-12><span class='pull-left'>District  : </span><span class='pull-right'> " + district +
                "</div><div class=col-sm-12><span class='pull-left'>city : </span><span class='pull-right'> " + city +
                "</div><div class=col-sm-12><span class='pull-left'>Municipality :</span><span class='pull-right'>  " + municipality +
                "</div><div class=col-sm-12><span class='pull-left'>Suburb : </span><span class='pull-right'> " + Suburb +
                "</div><div class=col-sm-12><span class='pull-left'>Street Name :</span><span class='pull-right'>  " + Street_name +
                "</div><div class=col-sm-12><span class='pull-left'>Street Number : </span><span class='pull-right'> " + Street_number +
                // "</div><div class=col-sm-12><span class='pull-left'>Class Name : " + classname +               
                "</div><div class=col-sm-12><span class='pull-left'>Attach Documents: </span><span class='pull-right'> " + attchedImage +


                "</span></div></div></span>"))
        }).on("hide.bs.modal", function(event) {
            $(this).find("#personDetails").html("");
        });
    }
</script>