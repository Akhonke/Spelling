<?php
if (isset($_SESSION['admin']['logintype'])) {
    $res = $this->common->accessrecord('user_permission', ['is_view,is_add,is_edit,is_delete'], ['user_type' => 'Provider', 'user_id' => $_SESSION['admin']['id'], 'module_name' => 'MarkSheet'], 'row_array');
} else {
    $res = array();
    if (empty($res)) {
        $logintype = 'main-user';
        $res['is_edit'] = 1;
        $res['is_delete'] = 1;
    }
}
?>
<div class="container-fluid px-xl-5">

    <section class="py-5">

        <div class="row">

            <!-- Form Elements -->

            <div class="col-lg-12 mb-1">

                <div class="card">

                    <div class="card-header">

                        <h3 class="h6 text-uppercase mb-0">Mark Sheet List</h3>

                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped nowrap" style="width:100%">

                                <thead>

                                    <tr>

                                        <th>S. No.</th>

                                        <th>Training Provider</th>

                                        <th>Learnership Type</th>

                                        <th>Learnership Sub Type</th>

                                        <th>Class Name</th>

                                        <th>Facilitator</th>

                                        <th>Year</th>

                                        <th>Mark Sheet</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php

                                    $i = 0;

                                    if (!empty($record)) {

                                        foreach ($record as $key => $value) {
                                            $learnership = $this->common->accessrecord('learnership', [], ['id' => $value->learnship_id], 'row');

                                            if (!empty($learnership)) {

                                                $learnershiptype = $learnership->name;
                                            } else {

                                                $learnershiptype = "";
                                            }

                                            $learnership_sub_type = $this->common->accessrecord('learnership_sub_type', [], ['id' => $value->learnership_sub_type], 'row');

                                            if (!empty($learnership_sub_type)) {

                                                $sub_type = $learnership_sub_type->sub_type;
                                            } else {

                                                $sub_type = "";
                                            }

                                            $class_name = $this->common->accessrecord('class_name', [], ['id' => $value->learner_classname], 'row');
                                            // print_r($class_name);die;
                                            if (!empty($class_name)) {

                                                $classname = $class_name->class_name;
                                            } else {

                                                $classname = "";
                                            }
                                            $facilirator = $this->common->accessrecord('facilitator', [], ['id' => $value->facilirator], 'row');

                                            if (!empty($facilirator)) {

                                                $facilirators = $facilirator->fullname;
                                            } else {

                                                $facilirators = "";
                                            }

                                            $i++;

                                    ?>

                                            <tr id="del-<?= $value->id ?>" class="filters">

                                                <td><?= $i ?></td>

                                                <td><?= $value->training_provider ?></td>

                                                <td><?= $learnershiptype ?></td>

                                                <td><?= $sub_type ?></td>

                                                <td><?= $classname ?></td>

                                                <td><?= $facilirators ?></td>

                                                <td><?= $value->year ?></td>

                                                <td><?php if (!empty($value->attachment)) { ?>

                                                        <a href="<?= BASEURL . 'uploads/learner/import_learnermarks/' . $value->attachment ?>" download class="btn btn-sm btn-info">Download <i class="fa fa-download" aria-hidden="true"></i></a>

                                                    <?php } ?>

                                                </td>

                                                <td>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal"  onclick="view()"  class="btn btn-primary btn-sm preview_product"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                      
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
                                                    <?php if ($res['is_edit'] == 1) { ?>

                                                        <a href="provider-learner-marks?id=<?= $value->id ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                    <?php }
                                                    if ($res['is_delete'] == 1) { ?>
                                                        <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:5px 0 0" onclick="deleterecord('learner_marks&behalf','id',<?= $value->id ?>)"><i class="fa fa-trash"></i></a>
                                                    <?php } ?>

                                                </td>

                                            </tr>

                                    <?php

                                        }
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
    function view(){

        debugger;
  
  		$("#exampleModal").modal({
  			keyboard: true,
  			backdrop: "static",
  			show: false,
  
  		}).on("show.bs.modal", function(event){
  		  var button = $(event.relatedTarget); // button the triggered modal
  			var id = button.data("id"); //data-id of button which is equal to id (primary key) of person
            var company_name = $(event.relatedTarget).closest("tr").find("td:eq(1)").text(); 
  			var learnership_nm = $(event.relatedTarget).closest("tr").find("td:eq(2)").text(); 
            var learner_nm = $(event.relatedTarget).closest("tr").find("td:eq(3)").text(); 
            var facilitator_name = $(event.relatedTarget).closest("tr").find("td:eq(4)").text(); 
  			var class_name = $(event.relatedTarget).closest("tr").find("td:eq(5)").text(); 
              var year = $(event.relatedTarget).closest("tr").find("td:eq(6)").text();
          
            
            var src = [];

            $(event.relatedTarget).closest("tr").find("td:eq(15) div").each(function(){
               src.push($(this).find("img").attr("src"));
            });
            var attchedImage;
            if(src.length > 1){
                for(var i=0; i<src.length; i++){
                    attchedImage = i===0 ? 
                    '<img width="50" src="'+ src[i] +'" / > ':
                     attchedImage + '<img width="50" src="'+ src[i] +'" / > ';                   
                }
            }
            else{
                 attchedImage = '<img width="50" src="'+ src[0] +'" / > ';
            }
  			//displays values to modal
              $(this).find("#personDetails").html($("<div class=row><div class=col-sm-12><span class='pull-left'>Training Provider :</span><span class='pull-right'>" + company_name + 
              "</div><div class=col-sm-12><span class='pull-left'>Learnership Type :</span><span class='pull-right'> " + learnership_nm + 
              "</div><div class=col-sm-12><span class='pull-left'>Learnership Sub Type :</span><span class='pull-right'> " + learner_nm + 
              "</div><div class=col-sm-12><span class='pull-left'>ClassName  :</span><span class='pull-right'> " + facilitator_name + 
              "</div><div class=col-sm-12><span class='pull-left'>Facilitator  :</span><span class='pull-right'> " + class_name + 
              "</div><div class=col-sm-12><span class='pull-left'>Year  : </span><span class='pull-right'>" + year + 
            
              
                 
                 "</span></div></div></span>"))
  		}).on("hide.bs.modal", function (event) {
			$(this).find("#personDetails").html("");
		});
    }
</script>

<script>
    function deleterecord(tablename, columnname, id) {

        swal({

                title: "Are you sure?",

                text: "Delete",

                type: "warning",

                showCancelButton: true,

                confirmButtonClass: "btn-danger",

                confirmButtonText: "Yes, delete it!",

                cancelButtonText: "No, cancel it!",

                closeOnConfirm: false,

                closeOnCancel: false

            },

            function(isConfirm) {

                if (isConfirm) {

                    $.ajax({

                        type: "GET",

                        url: "Traningprovider/deletedata?table=" + tablename + "&behalf=" + columnname + "&data=" + id,

                        success: function(data) {

                            swal("Deleted!", "Record Delete Successfully.", "success");

                            $("#del-" + id).remove();

                        },

                        error: function(jqXHR, textStatus, errorThrown) {

                            swal("Error deleting!", "Please try again", "error");

                        }

                    });

                } else {

                    swal("Cancelled", "Your imaginary file is safe :)", "error");

                }

            });

    }
</script>