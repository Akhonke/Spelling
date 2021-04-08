<style type="text/css">

</style>
<?php
if (isset($_SESSION['admin']['logintype'])) {
    $res = $this->common->accessrecord('user_permission', ['is_view,is_add,is_edit,is_delete'], ['user_type' => 'Provider', 'user_id' => $_SESSION['admin']['id'], 'module_name' => 'Learners'], 'row_array');
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
                        <h3 class="h6 text-uppercase mb-0"> Drop Outs List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <!--  <input type="checkbox" id="checkall" value='1'>&nbsp;
                         <a  id="delete" class="btn btn-danger btn-sm"> 
                        <i class="fa fa-trash"></i></a> -->
                                        <input type="checkbox" id="checkall" value='1'>
                                        <?php if ($res['is_delete'] == 1) { ?>
                                            <a href="javascript:;" class="text-danger" style="padding: 0px 5px !important;
              font-size: 13px !important;" id="delete"><i class="fa fa-trash"></i></a>
                                        <?php } ?>

                                    </th>
                                    <!-- <th>Serial Number</th> -->
                                    <th>Serial Number</th>
                                    <th>Training Provider Name</th>
                                    <th>Learner Full Name</th>
                                    <th>Learner Surname</th>
                                    <th>Email</th>
                                    <th>Id Number</th>
                                    <th>Seat Reg. No.</th>
                                    <th>Primary Mobile Number</th>
                                    <th>Secondary Mobile Number</th>
                                    <th>Gender</th>
                                    <th>Learnership Sub Type</th>
                                    <th>Password</th>
                                    <th>Province</th>
                                    <th>District</th>
                                    <th>City</th>
                                    <th>Municipality</th>
                                    <!-- <th>Region</th> -->
                                    <th>Suburb</th>
                                    <th>Street Name</th>
                                    <th>Street Number</th>
                                    <th>Assessment</th>
                                    <th>Is Disable</th>
                                    <th>Uif Benefits</th>
                                    <th>Learner Accepted for Training</th>
                                    <th>Class Name</th>
                                    <th>Employer Name</th>
                                    <th>Bank Name</th>
                                    <th>Bank Account Type</th>
                                    <th>Bank Account Number</th>
                                    <th>Branch Name</th>
                                    <th>Branch Code</th>
                                    <th>Reason</th>
                                    <th>I.D.Copy</th>
                                    <th>Certificate Copy</th>
                                    <th>Contract Copy</th>
                                    <th>Upload Proof Of Banking</th>
                                    <th>Replacement Learner Detail</th>
                                    <th>Resignation Date</th>
                                    <th>Reason for Dropping Out</th>
                                    <th>Letter of Resignation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                if (!empty($learner)) {
                                    foreach ($learner as $key => $value) {
                                        $i++;
                                ?>
                                        <tr id="del-<?= $value->learner_id ?>">
                                            <td align='center'><input type="checkbox" class='checkbox' name='delete' value='<?= $value->learner_id ?>'></td>
                                            <td></td>
                                            <td><?= $value->trining_provider ?></td>
                                            <td><?= $value->first_name ?></td>
                                            <td><?= $value->surname ?></td>
                                            <td><?= $value->email ?></td>
                                            <td><?= intval($value->learner_id) ?></td>
                                            <td><?= $value->SETA ?></td>
                                            <td><?= $value->mobile ?></td>
                                            <td><?= $value->mobile_number ?></td>
                                            <td><?= $value->gender ?></td>
                                            <td><?= $value->learnershipSubType ?></td>
                                            <td></td>
                                            <td><?= $value->province ?></td>
                                            <td><?= $value->district ?></td>
                                            <td><?= $value->city ?></td>
                                            <td><?= $value->municipality ?></td>
                                            <!-- <td><?= $value->region ?></td> -->
                                            <td><?= $value->Suburb ?></td>
                                            <td><?= $value->Street_name ?></td>
                                            <td><?= $value->Street_number ?></td>
                                            <td><?= $value->assessment ?></td>
                                            <td><?= $value->disable ?></td>
                                            <td><?= $value->utf_benefits ?></td>
                                            <td><?= $value->learner_accepted_training ?></td>
                                            <td><?= $value->classname ?></td>
                                            <td><?= $value->employer_name ?></td>
                                            <td><?= $value->bank_name ?></td>
                                            <td><?= $value->bank_account_type ?></td>
                                            <td><?= $value->bank_account_number ?></td>
                                            <td><?= $value->branch_name ?></td>
                                            <td><?= $value->branch_code ?></td>
                                            <td><?= $value->reason ?></td>
                                            <td class="image-col">
                                                <?php if (!empty($value->id_copy)) { ?>
                                                    <img src="<?= BASEURL . 'uploads/learner/id_copy/' . $value->id_copy ?>" width="50px" height="50px">
                                                <?php } ?>
                                            </td>
                                            <td class="image-col1">
                                                <?php if (!empty($value->certificate_copy)) { ?>
                                                    <img src="<?= BASEURL . 'uploads/learner/certificate_copy/' . $value->certificate_copy ?>" width="50px" height="50px">
                                                <?php } ?>
                                            </td>
                                            <td class="image-col2">
                                                <?php if (!empty($value->contract_copy)) { ?>
                                                    <img src="<?= BASEURL . 'uploads/learner/contract_copy/' . $value->contract_copy ?>" width="50px" height="50px">
                                                <?php } ?>
                                            </td>
                                            <td><?php if (!empty($value->upload_proof_of_banking)) { ?>
                                                    <a href="<?= BASEURL . 'uploads/learner/upload_proof_of_banking/' . $value->upload_proof_of_banking ?>" download class="btn btn-sm btn-info">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                                <?php } ?>
                                            </td>
                                            <td><?= $value->replacement_learner_details ?></td>
                                            <td><?= $value->date_of_resignation ?></td>
                                            <td><?= $value->reason_for_dropping_out ?></td>
                                            <td>
                                                <?php if (!empty($value->attachments)) { ?>
                                                    <a href="<?= BASEURL . 'uploads/learner/drop_out/' . $value->attachments ?>" download class="btn btn-sm btn-info">Download <i class="fa fa-download" aria-hidden="true"></i></a>

                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal" data-id="<?= $value->id ?>" data-name="<?= $value->id ?>" onclick="view(<?= $value->id; ?>)" class="btn btn-primary btn-sm preview_product"><i class="fa fa-eye" aria-hidden="true"></i></a>

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
                                                <?php $id = $value->learner_id;
                                                if ($value->drop_out == 1) { ?>
                                                    <i data="<?php echo $id; ?>" class="status_accepted btn btn-warning" data-learner="<?php echo $value->learner_accepted_training; ?>">Bring Back</i>
                                                <?php }  ?>

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
    </section>
</div>

<script>
    function view() {

        debugger;

        $("#exampleModal").modal({
            keyboard: true,
            backdrop: "static",
            show: false,

        }).on("show.bs.modal", function(event) {
            var button = $(event.relatedTarget); // button the triggered modal
            var id = button.data("id"); //data-id of button which is equal to id (primary key) of person
            var ss = $(this).attr("photoss");
            var base_url = "your base url";
            var trining_provider = $(event.relatedTarget).closest("tr").find("td:eq(2)").text();
            var first_name = $(event.relatedTarget).closest("tr").find("td:eq(3)").text();
            var surname = $(event.relatedTarget).closest("tr").find("td:eq(4)").text();
            var email = $(event.relatedTarget).closest("tr").find("td:eq(5)").text();
            var learner_id = $(event.relatedTarget).closest("tr").find("td:eq(6)").text();
            var SETA_no = $(event.relatedTarget).closest("tr").find("td:eq(7)").text();
            var mobile = $(event.relatedTarget).closest("tr").find("td:eq(8)").text();
            var mobile_number = $(event.relatedTarget).closest("tr").find("td:eq(9)").text();
            var gender = $(event.relatedTarget).closest("tr").find("td:eq(10)").text();
            var learnershipSubType = $(event.relatedTarget).closest("tr").find("td:eq(11)").text();
            var province = $(event.relatedTarget).closest("tr").find("td:eq(13)").text();
            var district = $(event.relatedTarget).closest("tr").find("td:eq(14)").text();
            var city = $(event.relatedTarget).closest("tr").find("td:eq(15)").text();
            var region = $(event.relatedTarget).closest("tr").find("td:eq(16)").text();
            var Suburb = $(event.relatedTarget).closest("tr").find("td:eq(17)").text();
            var Street_name = $(event.relatedTarget).closest("tr").find("td:eq(18)").text();
            var Street_number = $(event.relatedTarget).closest("tr").find("td:eq(19)").text();
            var assessment = $(event.relatedTarget).closest("tr").find("td:eq(20)").text();
            var disable = $(event.relatedTarget).closest("tr").find("td:eq(21)").text();
            var utf_benefits = $(event.relatedTarget).closest("tr").find("td:eq(22)").text();
            var learner_accepted_training = $(event.relatedTarget).closest("tr").find("td:eq(23)").text();
            var classname = $(event.relatedTarget).closest("tr").find("td:eq(24)").text();
            var employer_name = $(event.relatedTarget).closest("tr").find("td:eq(25)").text();
            var bank_name = $(event.relatedTarget).closest("tr").find("td:eq(26)").text();
            var bank_account_type = $(event.relatedTarget).closest("tr").find("td:eq(27)").text();
            var bank_account_number = $(event.relatedTarget).closest("tr").find("td:eq(28)").text();
            var branch_name = $(event.relatedTarget).closest("tr").find("td:eq(29)").text();
            var branch_code = $(event.relatedTarget).closest("tr").find("td:eq(30)").text();
            var reason = $(event.relatedTarget).closest("tr").find("td:eq(31)").text();
            var id_copy = $(event.relatedTarget).closest("tr").find("td:eq(32).image-col img").attr("src");
            var certificate_copy = $(event.relatedTarget).closest("tr").find("td:eq(33).image-col1 img").attr("src");
            var contract_copy = $(event.relatedTarget).closest("tr").find("td:eq(34).image-col2 img").attr("src");
            var replacement_learner_details = $(event.relatedTarget).closest("tr").find("td:eq(36)").text();
            var date_of_resignation = $(event.relatedTarget).closest("tr").find("td:eq(37)").text();
            var reason_for_dropping_out = $(event.relatedTarget).closest("tr").find("td:eq(38)").text();
            // var reason_for_dropping_out = $(event.relatedTarget).closest("tr").find("td:eq(36")text();


            //displays values to modal
            $(this).find("#personDetails").html($("<div class=row><div class=col-sm-12><span class='pull-left'>Training Provider Name:</span><span class='pull-right'> " + trining_provider +
                "</div><div class=col-sm-12><span class='pull-left'>Learner Full Name:</span><span class='pull-right'> " + first_name +
                "</div><div class=col-sm-12><span class='pull-left'>Learner Surname:</span><span class='pull-right'> " + surname +
                "</div><div class=col-sm-12><span class='pull-left'>Email :</span><span class='pull-right'> " + email +
                "</div><div class=col-sm-12><span class='pull-left'>Id Number :</span><span class='pull-right'> " + learner_id +
                "</div><div class=col-sm-12><span class='pull-left'>Seat Reg. No. :</span><span class='pull-right'> " + SETA_no +
                "</div><div class=col-sm-12><span class='pull-left'>Primary Mobile Number:</span><span class='pull-right'> " + mobile +
                "</div><div class=col-sm-12><span class='pull-left'>Secondary Mobile Number  :</span><span class='pull-right'> " + mobile_number +
                "</div><div class=col-sm-12><span class='pull-left'>Gender :</span><span class='pull-right'> " + gender +
                "</div><div class=col-sm-12><span class='pull-left'>Learnership Sub Type :</span><span class='pull-right'> " + learnershipSubType +
                "</div><div class=col-sm-12><span class='pull-left'>Province  :</span><span class='pull-right'> " + province +
                "</div><div class=col-sm-12><span class='pull-left'>District :</span><span class='pull-right'> " + district +
                "</div><div class=col-sm-12><span class='pull-left'>City:</span><span class='pull-right'> " + city +
                "</div><div class=col-sm-12><span class='pull-left'>Region:</span><span class='pull-right'> " + region +
                "</div><div class=col-sm-12><span class='pull-left'>Suburb:</span><span class='pull-right'> " + Suburb +
                "</div><div class=col-sm-12><span class='pull-left'>Street Name :</span><span class='pull-right'> " + Street_name +
                "</div><div class=col-sm-12><span class='pull-left'>Street Number:</span><span class='pull-right'> " + Street_number +
                "</div><div class=col-sm-12><span class='pull-left'>Assessment  :</span><span class='pull-right'> " + assessment +
                "</div><div class=col-sm-12><span class='pull-left'>Is Disable :</span><span class='pull-right'> " + disable +
                "</div><div class=col-sm-12><span class='pull-left'>Uif Benefits  :</span><span class='pull-right'> " + utf_benefits +
                "</div><div class=col-sm-12><span class='pull-left'>Learner Accepted for Training </span><span class='pull-right'> " + learner_accepted_training +
                "</div><div class=col-sm-12><span class='pull-left'>Class Name :</span><span class='pull-right'> " + classname +
                "</div><div class=col-sm-12><span class='pull-left'>Employer Name :</span><span class='pull-right'> " + employer_name +
                "</div><div class=col-sm-12><span class='pull-left'>Bank Namee :</span><span class='pull-right'> " + bank_name +
                "</div><div class=col-sm-12><span class='pull-left'>Bank Account Type :</span><span class='pull-right'> " + bank_account_type +
                "</div><div class=col-sm-12><span class='pull-left'>Bank Account Number :</span><span class='pull-right'> " + bank_account_number +
                "</div><div class=col-sm-12><span class='pull-left'>Branch Name :</span><span class='pull-right'> " + branch_name +
                "</div><div class=col-sm-12><span class='pull-left'>Branch Code  :</span><span class='pull-right'> " + branch_code +
                "</div><div class=col-sm-12><span class='pull-left'>Reason:</span><span class='pull-right'> " + reason +

                "</div><div class=col-sm-12><span class='pull-left'>I.D.Copy  :</span><span class='pull-right'>  " + ' <img width="50" src="' + id_copy + '" / > ' +
                "</div><div class=col-sm-12><span class='pull-left'>Certificate Copy :</span><span class='pull-right'>  " + ' <img width="50" src="' + certificate_copy + '" / > ' +
                "</div><div class=col-sm-12><span class='pull-left'>Contract Copy: </span><span class='pull-right'> " + ' <img width="50" src="' + contract_copy + '" / > ' +
                "</div><div class=col-sm-12><span class='pull-left'>Replacement Learner Detail :</span><span class='pull-right'>  " + replacement_learner_details +
                "</div><div class=col-sm-12><span class='pull-left'>Resignation Date :</span><span class='pull-right'>  " + date_of_resignation +
                "</div><div class=col-sm-12><span class='pull-left'>Reason for Dropping Out : </span><span class='pull-right'> " + reason_for_dropping_out +

                "</span></div></div></span>"))
        }).on("hide.bs.modal", function(event) {
            $(this).find("#personDetails").html("");
        });
    }
</script>




<script src="<?= BASEURL ?>assets/admin/cloudfront/vendor/jquery/jquery.min.js"></script>
<script>
    /*$(document).on("click",".status_change",function(){
    var learner = $(this).data("learner");  
    var msg =((learner =="No")||(learner=="no"))? "Not Accept" : "Accept";
    var current_element = $(this); 
  
    swal({
      title: "Reason",
     // text: "Enter your Reason!",
      type: "input",
      showCancelButton: true,
      closeOnConfirm: false,
      animation: "slide-from-top",
      inputPlaceholder: "Enter your Reason"
    },
    function(inputValue){
      if (inputValue === false) return false;
      
      if (inputValue === "") {
        swal.showInputError("Please Enter Your Reason");
        return false
      }
        $.ajax({
            url :"provider-changeleanerstatus",
            type : "POST",
            dataType : "JSON",
            data: {tablenm_id:$(current_element).attr("data"),learner:"no",text:inputValue},
            success : function(data){
                if(data["status"] == 200){
                  location.reload();
                }
            },
            error : function(jqXHR, textStatus, errorThrown){
                swal("Error deleting!", "Please try again", "error");
            }
        });
    });
});*/
    $(document).on("click", ".status_accepted", function() {
        var learner = $(this).data("learner");
        var msg = ((learner == "Yes") || (learner == "yes")) ? "Accept" : "";
        var current_element = $(this);
        swal({
                title: "Are you sure?",
                text: msg,
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: msg,
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "bring-back-drop-out",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            id: $(current_element).attr("data")
                        },
                        success: function(data) {
                            if (data["status"] == 200) {
                                swal("Updated!", "Drop out record updated successfully.", "success");
                                window.location.replace("<?= base_url('learner-list') ?>");
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            swal("Error deleting!", "Please try again", "error");
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    });

    function providerdeletedataLearner(tablename, columnname, id) {
        swal({
                title: "Are you sure?",
                text: "Delete",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancle",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "GET",
                        url: "providerdeletedataLearner?table=" + tablename + "&behalf=" + columnname + "&data=" + id,
                        dataType: "json",
                        success: function(data) {
                            if (data.status == "true") {
                                swal("Deleted!", "Record Delete Successfully.", "success");
                                $("#del-" + id).remove();
                            }
                            if (data.error == "stipend") {
                                swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");
                            }
                            if (data.error == "drop_out") {
                                swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");
                            }
                            if (data.error == "complaints_and_suggestions") {
                                swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");
                            }
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
    $(function() {
        $('#toggle').bootstrapToggle({
            on: 'Accepted',
            off: 'Not Accepted'
        });
    })
</script>

<script type="text/javascript">
    $(document).ready(function() {

        // Check all
        $("#checkall").change(function() {

            var checked = $(this).is(':checked');
            if (checked) {
                $(".checkbox").each(function() {
                    $(this).prop("checked", true);
                });
            } else {
                $(".checkbox").each(function() {
                    $(this).prop("checked", false);
                });
            }
        });

        // Changing state of CheckAll checkbox 
        $(".checkbox").click(function() {

            if ($(".checkbox").length == $(".checkbox:checked").length) {
                $("#checkall").prop("checked", true);
            } else {
                $("#checkall").prop("checked", false);
            }

        });

        // Delete button clicked
        $('#delete').click(function() {
            // Confirm alert
            var checkbox = $('.checkbox:checked');
            var users_arr = [];
            $(".checkbox:checked").each(function() {
                var userid = $(this).val();

                users_arr.push(userid);
            });

            // Array length
            var length = users_arr.length;

            if (length > 0) {
                // if(checkbox.length > 0){
                swal({
                        title: "Are you sure?",
                        text: "Delete",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "cancel",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            // if (deleteConfirm == true) {
                            // Get userid from checked checkboxes
                            /*var users_arr = [];
                            $(".checkbox:checked").each(function(){
                                var userid = $(this).val();
                                users_arr.push(userid);
                            });
                            // Array length
                            var length = users_arr.length;
                            if(length > 0){*/
                            // AJAX request
                            $.ajax({
                                url: '<?= base_url() ?>Bulk-Delete',
                                type: 'post',
                                data: {
                                    user_ids: users_arr
                                },
                                success: function(response) {

                                    swal("Deleted!", "Record Delete Successfully.", "success");
                                    location.reload();
                                    // Remove <tr>
                                    /* $(".checkbox:checked").each(function(){
                                         var userid = $(this).val();

                                         $('#tr_'+userid).remove();
                                         location.reload();
                                     });*/
                                }
                            });
                            //}
                        } else {
                            swal("Cancelled", "Your data is safe :)", "error");
                        }
                    });
            } else {
                swal("Cancelled", "No learner selected :)", "error");
            }

        });

    });
</script>