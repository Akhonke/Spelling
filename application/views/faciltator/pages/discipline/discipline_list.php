<div class="container-fluid px-xl-5">

    <section class="py-5">

        <div class="row">

            <!-- Form Elements -->

            <div class="col-lg-12 mb-1">

                <div class="card">

                    <div class="card-header">

                        <h3 class="h6 text-uppercase mb-0"> ISSUE LIST</h3>

                    </div>

                    <div class="card-body">




                        <table class="table table-bordered table-responsive table-striped" id="learner_mark" style="width:100%">

                            <thead>

                                <tr>

                                    <th>Serial No.</th>

                                    <th>Learner Name</th>

                                    <th>Learner Surname</th>

                                    <th>Learner I.D</th>

                                    <th>Date OF Incident</th>

                                    <th>Current Status</th>

                                    <th>Outcome</th>

                                    <th>Evidence</th>

                                    <th>Warning Letter</th>

                                    <th>Incident Description</th>
                                    <th>Action</th>

                                    

                                </tr>

                            </thead>

                            <tbody>
                                <?php $i = 0;
                                foreach ($discipline as $dis) {
                                    $i++;
                                    $imgarray = explode(",", $dis['evidance'])
                                ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $dis['learner_name'] ?></td>
                                        <td><?= $dis['learner_surname'] ?></td>
                                        <td><?= $dis['learner_id'] ?></td>
                                        <td><?= $dis['date_of_incident'] ?></td>
                                        <td><?= $dis['current_status_incident'] ?></td>
                                        <td><?= $dis['outcome_of_incident'] ?></td>
                                        <td class="image-col">
                                            <?php foreach ($imgarray as $img) { ?>
                                                <img width="100" height="100" src="<?= base_url('uploads/evidence/') ?><?= $img ?>" alt="">
                                            <?php } ?>
                                        </td>
                                        <td class="image-col1"><img width="100" height="100" src="<?= base_url('uploads/warningletter/') ?><?= $dis['warning_letter'] ?>" alt=""></td>
                                        <td><?= $dis['insident_desc'] ?></td>
                                        <td>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal"  onclick="view()"  class="btn btn-primary btn-sm preview_product"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                   
  
                                        <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body " id="personDetails">
                                                    <img class="modal-img" id="show-img" src="" />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>



<script>
    function view(){

        debugger;
  
  		$("#exampleModal").modal({
  			keyboard: true,
  			backdrop: "static",
  			show: false,
  
  		}).on("show.bs.modal", function(event){
  		  var button = $(event.relatedTarget); // button the triggered modal
  			var id = button.data("id"); //data-id of button which is equal to id (primary key) of person
            var learner_name = $(event.relatedTarget).closest("tr").find("td:eq(1)").text(); 
  			var learner_surname = $(event.relatedTarget).closest("tr").find("td:eq(2)").text(); 
            var learner_id = $(event.relatedTarget).closest("tr").find("td:eq(3)").text(); 
            var date_of_incident = $(event.relatedTarget).closest("tr").find("td:eq(4)").text(); 
  			var current_status_incident = $(event.relatedTarget).closest("tr").find("td:eq(5)").text(); 
            var outcome_of_incident = $(event.relatedTarget).closest("tr").find("td:eq(6)").text(); 
            var img = $(event.relatedTarget).closest("tr").find("td:eq(7).image-col img").attr("src");
           
            
            var warning_letter = $(event.relatedTarget).closest("tr").find("td:eq(8).image-col1 img").attr("src");
            var insident_desc = $(event.relatedTarget).closest("tr").find("td:eq(9)").text(); 
            
            // var src = $(event.relatedTarget).closest("tr").find("td:eq(26).image-col img").attr("src");
            // var src = $(event.relatedTarget).closest("tr").find("td:eq(26).image-col img").attr("src");
            // var src = $(event.relatedTarget).closest("tr").find("td:eq(26).image-col img").attr("src");
            // var src = $(event.relatedTarget).closest("tr").find("td:eq(26).image-col img").attr("src");
           
  			//displays values to modal
              $(this).find("#personDetails").html($("<div class=row><div class=col-sm-6>Learner Name : " + learner_name + 
              "</div><div class=col-sm-6>Learner Surname : " + learner_surname + 
              "</div><div class=col-sm-6> Learner ID : " + learner_id + 
              "</div><div class=col-sm-6>Date OF Incident  : " + date_of_incident + 
              "</div><div class=col-sm-6>Current Status  : " + current_status_incident + 
              "</div><div class=col-sm-6>Outcome  : " + outcome_of_incident +
            "</div><div class=col-sm-6>Evidence : " + ' <img width="50" src="'+ img +'" / > ' +
            "</div><div class=col-sm-6>Warning Letter : " + ' <img width="50" src="'+ warning_letter +'" / > ' +
            "</div><div class=col-sm-6>Incident Description : " + insident_desc +
                 
                 "</div></div>"))
  		}).on("hide.bs.modal", function (event) {
			$(this).find("#personDetails").html("");
		});
    }
</script>