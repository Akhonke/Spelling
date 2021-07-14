<div class="container-fluid px-xl-5">

    <section class="py-5">

        <div class="row">

            <!-- Form Elements -->

            <div class="col-lg-12 mb-1">

                <div class="card">

                    <div class="card-header">

                        <h3 class="h6 text-uppercase mb-0">Learner Attendance List</h3>

                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-striped table-bordered" style="width:100%">

                                <thead>

                                    <tr>

                                        <th>S. No.</th>

                                        <th>Learner Name</th>

                                        <th>Learner Surname</th>

                                        <th>I.D Number</th>

                                        <th>Learnership Type</th>

                                        <th>Learnership Sub Type</th>

                                        <th>Class</th>

                                        <th>Date</th>

                                        <th>Reason for Not Attending</th>

                                        <th>Download Doctors Note</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                    if (!empty($attendance)) {



                                        $i = 1;

                                        foreach ($attendance as $key => $row) {

                                            $learnership = $this->common->accessrecord('learnership', [], ['id' => $row['learnership_id']], 'row');

                                            if (!empty($learnership)) {

                                                $learnershiptype = $learnership->name;
                                            } else {

                                                $learnershiptype = "";
                                            }

                                            $learnership_sub_type = $this->common->accessrecord('learnership_sub_type', [], ['id' => $row['sublearnership_id']], 'row');

                                            if (!empty($learnership_sub_type)) {

                                                $sub_type = $learnership_sub_type->sub_type;
                                            } else {

                                                $sub_type = "";
                                            }

                                            $Date = $row['date'];

                                            $newDate = date("d-m-Y", strtotime($Date));  


                                    ?>



                                            <tr>

                                                <td><?= $i; ?></td>

                                                <td><?= $row['learner_name']; ?></td>

                                                <td><?= $row['learner_surname']; ?></td>

                                                <td><?= $row['learner_id']; ?></td>

                                                <td><?= $learnershiptype ?></td>

                                                <td><?= $sub_type ?></td>

                                                <td><?= $row['class_name']; ?></td>

                                                <td><?= $newDate ?></td>

                                                <td><?= $row['reason']; ?></td>

                                                <td class="text-center">
                                                    <?php if (!empty($row['doctor_note'])) { ?>
                                                    <div class="text-center">
                                                        <button class="btn btn-info download text-center"><i class="fa fa-download" aria-hidden="true"></i><a target="_blank" href="<?= base_url('uploads/learner/doctor_note/') ?><?= $row['doctor_note']; ?>">Download</a></button>
                                                    </div>
                                                    <?php  } else{?>
                                                        <p style="color: red;" class="text-center">Not Available !</p>
                                                    <?php }?>
                                                </td>
                                                <td>

                                                <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="<?=$row['id']?>" data-name="<?=$row['id']?>" onclick="view(<?= $row['id']; ?>)"  class="btn btn-primary btn-sm preview_product"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                 
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
                                                </td>
                                            </tr>

                                    <?php $i++;
                                        }
                                    } ?>

                                </tbody>

                            </table>

                        </div>

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
            var learnershiptype = $(event.relatedTarget).closest("tr").find("td:eq(4)").text(); 
  			var sub_type = $(event.relatedTarget).closest("tr").find("td:eq(5)").text(); 
              var class_name = $(event.relatedTarget).closest("tr").find("td:eq(6)").text();
              var newDate  = $(event.relatedTarget).closest("tr").find("td:eq(7)").text();
              var reason  = $(event.relatedTarget).closest("tr").find("td:eq(8)").text();
          
            
            var src = [];

            $(event.relatedTarget).closest("tr").find("td:eq(9) div").each(function(){
               src.push($(this).find("a").attr("href"));
            });
            var attchedImage;
            if(src.length > 1){
                for(var i=0; i<src.length; i++){
                    attchedImage = i===0 ? 
                    ' <button class="btn btn-info download text-center"><i class="fa fa-download" aria-hidden="true"></i><a target="_blank" href="'+ src[i] +'">Download</a></button>'
                   :
                     attchedImage + ' <button class="btn btn-info download text-center"><i class="fa fa-download" aria-hidden="true"></i><a target="_blank" href="'+ src[i] +'">Download</a></button>';                   
                }
            }
            else{
                 attchedImage = ' <button class="btn btn-info download text-center"><i class="fa fa-download" aria-hidden="true"></i><a target="_blank" href="'+ src[0] +'">Download</a></button>' ;
            }
  			//displays values to modal
              $(this).find("#personDetails").html($("<div class=row><div class=col-sm-12><span class='pull-left'>Learner Name :</span><span class='pull-right'> " + learner_name + 
              "</div><div class=col-sm-12><span class='pull-left'>Learner Surname : </span><span class='pull-right'>" + learner_surname + 
              "</div><div class=col-sm-12><span class='pull-left'>I.D Number:</span><span class='pull-right'> " + learner_id + 
              "</div><div class=col-sm-12><span class='pull-left'>Learnership Type  : </span><span class='pull-right'>" + learnershiptype + 
              "</div><div class=col-sm-12><span class='pull-left'>Learnership Sub Type  :</span><span class='pull-right'> " + sub_type + 
              "</div><div class=col-sm-12><span class='pull-left'>Class  : </span><span class='pull-right'>" + class_name + 
              "</div><div class=col-sm-12><span class='pull-left'>Date  :</span><span class='pull-right'> " + newDate + 
              "</div><div class=col-sm-12><span class='pull-left'>Reason for Not attanding  : </span><span class='pull-right'>" + reason + 
              "</div><div class=col-sm-12><span class='pull-left'>Reason for Not attanding  : </span><span class='pull-right'>" + attchedImage + 

            
              
                 
               
             "</span></div></div></span>"))
  		}).on("hide.bs.modal", function (event) {
			$(this).find("#personDetails").html("");
		});
    }
</script>
