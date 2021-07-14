 <?php
	defined('BASEPATH') or exit('No direct script access allowed');
	class Jscss extends CI_Model
	{
		public function css($page)
		{
			$css = [];
			$css[] = '<link href="' . BASEURL . 'assets/admin/cloudfront/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">';
			$css[] = '<link href="' . BASEURL . 'assets/admin/fontawesome/all.css" rel="stylesheet" type="text/css">';
			$css[] = '<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">';
			$css[] = '<link href="' . BASEURL . 'assets/admin/cloudfront/css/orionicons.css" rel="stylesheet" type="text/css">';
			$css[] = '<link href="' . BASEURL . 'assets/admin/cloudfront/css/style.default.css" id="theme-stylesheet" rel="stylesheet" type="text/css">';
			$css[] = '<link href="' . BASEURL . 'assets/admin/cloudfront/css/custom.css" rel="stylesheet" type="text/css">';
			$css[] = '<link href="' . BASEURL . 'assets/admin/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">';

			$css[] = '<link href="' . BASEURL . 'assets/validation/css/screen.css" rel="stylesheet" type="text/css">';
			$css[] = '<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">';
			$css[] = '<style>
		table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
			border-bottom-width: 0;
			vertical-align: middle;
			text-transform: capitalize;
		}
		.sa-button-container .cancel.btn.btn-lg.btn-default{
			background:#f95506;
		}

		</style>';

			if ($page == 'createlearnershipSubType' || $page == 'newcreatesublearnership') {
				$css[] = '<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />';
				$css[] = '<link href="' . BASEURL . 'assets/admin/multiselect/jquery.multiselect.css" rel="stylesheet" type="text/css">';
				$css[] = '<style type="text/css">label{
					    border: 0;
					    margin-bottom: 3px;
					    display: block;
					    width: 100%;
					  }
					  input {
					    @include box-sizing(border-box);
					  }
					  .error {
					    color: red;
					  }
					  </style>';
			}

			if ($page == 'list_learner_attendance' || $page == 'progammme_report_list' || $page == 'create_projects_list' || $page == 'attendance_list' || $page == 'stipends_list' || $page == 'unitList' || $page == 'drop_out_list' || $page == 'complaint_list' || $page == 'complaints_suggestionlist' || $page == 'create_province' || $page == 'create_district' || $page == 'create_region' || $page == 'create_city' || $page == 'organisation_list' || $page == 'programmer_list' || $page == 'project_list' || $page == 'training_list' || $page == 'facilitator_list' || $page == 'assessor_list' || $page == 'moderator_list' || $page == 'learner_list' || $page == 'create_learner' || $page == 'learnerList' || $page == 'learnershipList' || $page == 'learnershipSubType' || $page == 'create_drop_out' || $page == 'stipend_list' || $page == 'organisation_view' || $page == 'progammer_director_view' || $page == 'project_manager_view' || $page == 'training_provider_view' || $page == 'assessor_view' || $page == 'monderator_view' || $page == 'facilitator_view' || $page == 'learner_view' || $page == 'create_learner_reason' || $page == 'create_class' || $page == 'class_list' || $page == 'providerunitList' || $page == 'providerlearnershipSubType' || $page == 'providerlearnershipList' || $page == 'providerlearnerList' || $page == 'learner_marks_list' || $page == 'income_item_list' || $page == 'expense_item_list' || $page == 'account_balance_list' || $page == 'finance_expense_item' || $page == 'expense_view' || $page == 'organisation_report_list' || $page == 'training_report_list' || $page == 'classlist' || $page == 'facilitatoruserlist' || $page == 'assessoruserlist' || $page == 'moderatorlist' || $page == 'create_bank' || $page == 'employer_list' || $page == 'user_list' || $page = 'quaterly_report_list') {
				$css[] = '<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">';
				$css[] = '<link href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css" rel="stylesheet">';
			}
			return $css;
		}
		public function js($page)
		{
			$js = [];
			$js[] = '<script src="' . BASEURL . 'assets/admin/cloudfront/vendor/jquery/jquery.min.js"></script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/cloudfront/vendor/jquery.cookie/jquery.cookie.js"> </script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/cloudfront/vendor/popper.js/umd/popper.min.js"> </script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/cloudfront/vendor/bootstrap/js/bootstrap.min.js"></script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/cloudfront/vendor/jquery.cookie/jquery.cookie.js"> </script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/jsdelivr/js.cookie.min.js"></script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/cloudfront/js/front.js"></script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/sweetalert/sweetalert.js"></script>';
			$js[] = '<script src="' . BASEURL . 'assets/admin/sweetalert/sweetalert.min.js"></script>';
			//$js[] = '<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script>';
			$js[] = '<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>';
			if ($page == 'dashboard') {


				$js[] = "";
				$js[] = "";
			}
			if ($page == 'list_learner_attendance' || $page == 'progammme_report_list' ||  $page == 'create_projects_list' || $page == 'stipends_list' || $page == 'unitList' || $page == 'drop_out_list' || $page == 'complaints_suggestionlist' || $page == 'complaint_list' || $page == 'create_province' || $page == 'create_district' || $page == 'create_region' || $page == 'create_city' || $page == 'organisation_list' || $page == 'programmer_list' || $page == 'project_list' || $page == 'training_list' || $page == 'facilitator_list' || $page == 'assessor_list' || $page == 'moderator_list' || $page == 'learner_list' || $page == 'create_learner' || $page == 'create_training' || $page == 'learnerList' || $page == 'learnershipList' || $page == 'learnershipSubType' || $page == 'create_assessor' || $page == 'create_moderator' || $page == 'create_facilitator' || $page == 'create_organisation' || $page == 'create_programmer' || $page == 'changepassword' || $page == 'editprofile' || $page == 'create_drop_out' || $page == 'stipend_list' || $page == 'organisation_view' || $page == 'progammer_director_view' || $page == 'project_manager_view' || $page == 'training_provider_view' || $page == 'assessor_view' || $page == 'monderator_view' || $page == 'facilitator_view' || $page == 'learner_view' || $page == 'create_learner_reason' || $page == 'create_class' || $page == 'class_list' || $page == 'income_item_list' || $page == 'expense_item_list' || $page == 'account_balance_list' || $page == 'create_income_item' || $page == 'create_expense_item' || $page == 'finance_expense_item' || $page == 'expense_view' || $page == 'organisation_report_list' || $page == 'training_report_list' || $page == 'classlist' || $page == 'facilitatoruserlist' || $page == 'assessoruserlist' || $page == 'moderatorlist' || $page == 'create_bank' || $page == 'providerunitList' || $page == 'providerlearnershipSubType' || $page == 'providerlearnershipList' || $page == 'employer_list' || $page == 'user_list'||  $page == 'userList' ||  $page == 'departmentList' ||  $page == 'userGroupList' ||  $page == 'userRoleList' ||  $page == 'programmeList' || $page =='expenseitemList' || $page =='subContractorWorkTypeList' || $page =='list_assessments') {
				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>';
				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>';
				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>';
				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>';
				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>';
				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>';
				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>';
				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>';
				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>';
				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>';
				$js[] = '<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>';
				$js[] = "<script>


		$(document).ready(function() {

			var table=$('.table').DataTable( {

				dom: 'Bfrtip',
				columnDefs: [
                    {
                        'searchable': false,
                        'orderable': false,
                        'targets': 0
                    },
                ],
                order: [[0, 'asc']] ,


				buttons: [

				{

                  extend: 'pdfHtml5',

                  orientation: 'landscape',//landscape give you more space

                  pageSize: 'A0',//A0 is the largest A5 smallest(A0,A1,A2,A3,legal,A4,A5,letter))

                },

					 'csv', 'excel', 'print' ,'colvis'

				]

			} );

			$('.table').addClass('nowrap')
			 table.on('order.dt search.dt', function () {
                table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                     table.cell(cell).invalidate('dom');
                });
            }).draw();

		} );





			</script>";

				if ($page != 'class_list' || $page != 'organisation_list' || $page != 'programmer_list' || $page != 'project_list' || $page != "training_list" || $page != 'facilitator_list' || $page != 'assessor_list' || $page != 'learner_list' || $page != 'create_province' || $page != 'create_district' || $page != 'create_region' || $page != 'create_city' || $page != 'learnershipList' || $page != 'learnershipSubType' || $page != 'unitList') {

					$js[] = '<script>

			        function deleterecord(tablename,columnname,id){

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

		                function (isConfirm) {

		                    if (isConfirm) {

		                        $.ajax({

		                            type:"GET",

								    url: "deletedata?table="+tablename+"&behalf="+columnname+"&data="+id,

		                            success : function(data){

		                                swal("Deleted!", "Record Delete Successfully.", "success");

		                                $("#del-"+id).remove();

		                            },

		                            error : function(jqXHR, textStatus, errorThrown){

		                                swal("Error deleting!", "Please try again", "error");

		                            }

		                        });

		                    } else {

		                      swal("Cancelled", "Your data is safe :)", "error");

		                    }

		                });

		            }

	           	</script>';
				}
			}
			if ($page == 'providerlearnerList') {
				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>';

				$js[] = '<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>';
				$js[] = "<script>
				$(document).ready(function() {

					var table = $('.table').DataTable( {
						dom: 'Bfrtip',
						columnDefs: [
									{
										'searchable': false,
										'orderable': false,
										'targets': 1
									},
								],
						order: [[1, 'asc']] ,
						buttons: [
							{
								extend: 'copyHtml5',
								exportOptions: {
									columns: [ 0, ':visible' ]
								}


							},
							{
								extend: 'excelHtml5',
								title:'',

								exportOptions: {
									columns: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]
								}
							},
							{
								extend: 'pdfHtml5',
								exportOptions: {
									columns: [ 1, ':visible' ]
								}

							},
							'colvis'
						]
					} );
					$('.table').addClass('nowrap')
					table.on('order.dt search.dt', function () {
								table.column(1, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
									cell.innerHTML = i + 1;
									table.cell(cell).invalidate('dom');
								});
							}).draw();
				} );


			</script>";
			}

			if ($page == 'attendance_list') {

				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>';

				$js[] = '<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>';

				$js[] = "<script>

		    $(document).ready(function() {

				$('.table').DataTable( {

					dom: 'Bfrtip',

					buttons: [

						 'csv', 'excel', 'pdf', 'print' ,'colvis'

					]

				} );

				$('.table').addClass('nowrap')

			} );



		 	</script>";

				$js[] = '<script>

						function deleterecord(tablename,columnname,id){

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

						    function (isConfirm) {

						        if (isConfirm) {

						            $.ajax({

						                type:"GET",

						                url: "Traningprovider/deletedata?table="+tablename+"&behalf="+columnname+"&data="+id,

						                success : function(data){

						                    swal("Deleted!", "Record Delete Successfully.", "success");

						                    $("#del-"+id).remove();

						                },

						                error : function(jqXHR, textStatus, errorThrown){

						                    swal("Error deleting!", "Please try again", "error");

						                }

						            });

						        } else {

						          swal("Cancelled", "Your imaginary file is safe :)", "error");

						        }

						    });

						}

						</script>';
			}

			if ($page == 'send_massage') {

				$js[] = "<script>

				$('#receiver_type').change(function() {

					$.ajax({

					   url: 'MyOrganization-get_receiver',

					   data: {
						  'value': $('#receiver_type').val()
					   },

					   dataType: 'json',

					   type: 'post',

					   success: function(data) {

						  var option = '';

						  $.each(data, function(i, star) {

							 if (i == 'error') {

								$('#receiver').html(option);

								$('#receiver-error').show();

								$('#receiver-error').html(star);

							 } else {
								var test = '<option hidden value=' + '>Select Receiver</option>';
								option += '<option value=' + star.id + '>' + star.name + '</option>'

								$('#receiver').html(test + option);

								$('#receiver-error').hide();

							 }

						  });

					   }

					});
				 });
				</script>";
			}

			if ($page == 'tpsend_massage') {

				$js[] = "<script>

				$('#receiver_type').change(function() {

					$.ajax({

					   url: 'provider-get_receiver',

					   data: {
						  'value': $('#receiver_type').val()
					   },

					   dataType: 'json',

					   type: 'post',

					   success: function(data) {

						  var option = '';

						  $.each(data, function(i, star) {

							 if (i == 'error') {

								$('#receiver').html(option);

								$('#receiver-error').show();

								$('#receiver-error').html(star);

							 } else {
								var test = '<option hidden value=' + '>Select Receiver</option>';
								option += '<option value=' + star.id + '>' + star.name + '</option>'

								$('#receiver').html(test + option);

								$('#receiver-error').hide();

							 }

						  });

					   }

					});
				 });
				</script>";
			}

			if ($page == 'bulk_message') {

				$js[] = "<script>

				$('#receiver_type').change(function() {

					$.ajax({

					   url: 'MyOrganization-get_receiver_contact',

					   data: {
						  'value': $('#receiver_type').val()
					   },

					   dataType: 'json',

					   type: 'post',

					   success: function(data) {

						  var option = '';

						  $.each(data, function(i, star) {

							 if (i == 'error') {

								$('#receiver').html(option);

								$('#receiver-error').show();

								$('#receiver-error').html(star);

							 } else {
								var test = '<option hidden value=' + '>Select Receiver</option>';
								option += '<option value=+27' + star.mobile_number + '>' + star.name + '</option>'

								$('#receiver').html(test + option);

								$('#receiver-error').hide();

							 }

						  });

					   }

					});
				});




				</script>";
			}
			if ($page == 'tpbulk_message') {

				$js[] = "<script>

				$('#receiver_type').change(function() {

					$.ajax({

					   url: 'provider-get_receiver_contact',

					   data: {
						  'value': $('#receiver_type').val()
					   },

					   dataType: 'json',

					   type: 'post',

					   success: function(data) {

						  var option = '';

						  $.each(data, function(i, star) {

							 if (i == 'error') {

								$('#receiver').html(option);

								$('#receiver-error').show();

								$('#receiver-error').html(star);

							 } else {
								var test = '<option hidden value=' + '>Select Receiver</option>';
								option += '<option value=+27' + star.mobile_number + '>' + star.name + '</option>'

								$('#receiver').html(test + option);

								$('#receiver-error').hide();

							 }

						  });

					   }

					});
				});


				$('#tpbulkform').validate({

					rules:{

						receiver_type:{

						 required: true,

						},

						receiver:{

						 required: true,

						},

						message:{

						 required: true,

						},


					},

					messages:{

						receiver_type: {

						  required: 'Please select receiver Type',

						},

						receiver: {

						  required: 'Please select Receivers',

						},

						message: {

						  required: 'Please enter your message content',

						},

					}

					});

					$.validator.setDefaults({

					   submitHandler: function(form) {

					   form.submit();

					}

				});

				</script>";
			}

			if ($page == 'class_list') {

				$js[] = '<script>

		        function deleterecordClass(tablename,columnname,id,classname){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url: "deletedataclass?table="+tablename+"&behalf="+columnname+"&data="+id+"&classname="+classname,

							    dataType: "json",

	                            success : function(data){



	                               if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'organisation_list') {

				$js[] = '<script>

		        function deleterecordCommon(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataOrganisation?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'create_employer') {

				$js[] = "<script>

			        $(function () {

			            $.validator.addMethod('employer_contact_email', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );

                        }, 'Please enter a valid employer email address.');



                        $.validator.addMethod('employer_contact_number', function (value, element) {

			              return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Employer Contact Number');

				        $('#CreateEmployerForm').validate({

					        rules:{

					            employer_name:{

		                         required: true,

		                        },

		                        employer_contact_number:{

		                         required: true,

		                        },

		                        employer_contact_email:{

		                         required: true,

		                        },

		                        employer_province:{

		                         required: true,

		                        },

		                        employer_district:{

		                          required: true,

		                        },

		                        employer_region:{

		                          required: true,

		                        },

		                        employer_city:{

		                          required: true,

		                        },

		                        employer_Suburb:{

		                          required: true,

		                        },

		                        employer_Street_name:{

		                          required: true,

		                        },

		                        employer_Street_number:{

		                         required: true,

		                        },

		                        contact_person_name:{

		                         required: true,

		                        },

		                        contact_person_surname:{

		                         required: true,

		                        },

		                        contact_person_contact_no:{

		                         required: true,

		                        },

		                    },

		                    messages:{

		                        employer_name: {

		                          required: 'Please enter your employer name',

		                        },

		                        employer_contact_number: {

		                          required: 'Please enter your contact number',

		                        },

		                        employer_contact_email: {

		                          required: 'Please enter your contact email',

		                        },

		                        employer_province: {

		                          required: 'Please enter your employer province',

		                        },

		                        employer_district: {

		                          required: 'Please enter your employer district',

		                        },

		                        employer_region: {

		                          required: 'Please enter your employer region',

		                        },

		                        employer_city: {

		                          required: 'Please enter your employer city',

		                        },

		                        employer_Suburb: {

		                          required: 'Please enter your employer suburb',

		                        },

		                        employer_Street_number: {

		                          required: 'Please enter your employer street number',

		                        },

		                        employer_Street_name: {

		                          required: 'Please enter your employer street name',

		                        },

		                        contact_person_name: {

		                          required: 'Please enter your employer street name',

		                        },

		                        contact_person_surname: {

		                          required: 'Please enter your employer street name',

		                        },

		                        contact_person_contact_no: {

		                          required: 'Please enter your employer street name',

		                        },

		                    }

					        });

					        $.validator.setDefaults({

					           submitHandler: function(form) {

					           form.submit();

					        }

				        });

			        });

			      </script> ";

				$js[] = "<script type='text/javascript'>

                $('.employer_province').change(function(){

			        $.ajax({

			            url: 'provider-getdestrict',

			            data: { 'value': $('.employer_province').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			               	 	if(i == 'error'){

			                        $('.employer_district_option').html(option);

			                        $('#employer-district-error').show();

			                        $('#employer-district-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select District</option>';
			                      option += '<option value='+star.id+'>'+star.name+'</option>'

			                      $('.employer_district_option').html(test+option);

			                      $('#employer-district-error').hide();

			                    }

			                });



			            }

			        });

			    });

			    $('.employer_district_option').change(function(){

			       $.ajax({

			            url: 'provider-getregion',

			            data: { 'value': $('.employer_district_option').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			               	if(i == 'error'){

			                        $('#employer_region').html(option);

			                        $('#employer-region-error').show();

			                        $('#employer-region-error').html(star);

			                 }else{
								var test = '<option hidden value='+'>Select Region</option>';
			                       option += '<option value='+star.id+'>'+star.region+'</option>'

			                       $('#employer_region').html(test+option);

			                       $('#employer-region-error').hide();

			                }

			                });



			            }

			        });

			    });



			    $('#employer_region').change(function(){

			       $.ajax({

			            url: 'provider-getcity',

			            data: { 'value': $('#employer_region').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			                    if(i == 'error'){

			                        $('#employer_city').html(option);

			                        $('#employer-city-error').show();

			                        $('#employer-city-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select City</option>';
			               	   		option += '<option value='+star.id+'>'+star.city+'</option>'

			               	   		$('#employer_city').html(test+option);

			                        $('#employer-city-error').hide();

			               	   	}

			                });

			            }

			        });

			    });

            </script> ";
			}



			if ($page == 'programmer_list') {

				$js[] = '<script>

		        function deleterecordprogrammedirector(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataprogrammedirector?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'project_list') {

				$js[] = '<script>

		        function deletedataprojectmanager(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataprojectmanager?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'assessor_list') {

				$js[] = '<script>

		        function deletedataAssessor(tablename,columnname,id,trainer_id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataAssessor?table="+tablename+"&behalf="+columnname+"&data="+id+"&trainer_id="+trainer_id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'moderator_list') {

				$js[] = '<script>

		        function deletedataModerator(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataModerator?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'facilitator_list') {

				$js[] = '<script>

		        function deletedataFacilitator(tablename,columnname,id,training_provider){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataFacilitator?table="+tablename+"&behalf="+columnname+"&data="+id+"&training_provider="+training_provider,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'learner_list') {

				$js[] = '<script>

		        function deletedataLearner(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataLearner?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "stipend"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "drop_out"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "complaints_and_suggestions"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'training_list') {

				$js[] = '<script>

		        function deletedataTrainingprovider(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataTrainingprovider?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "moderator"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "facilitator"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "assessor"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner&moder"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner&asso"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner&moder&asso"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner&asso&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner&fac&mon"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "learner&moder&ass&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    ///------- moderator-------------//

                                    if(data.error == "moderator&lea"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "moderator&asso"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "moderator&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "moderator&lea&asso"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "moderator&asso&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "moderator&fac&lea"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "moderator&lea&asso&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    //------------assessor

                                    if(data.error == "assessor&lea"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "assessor&mon"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "assessor&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "assessor&lea&mon"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "assessor&mon&fac"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "assessor&fac&lea"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "assessor&lea&fac&mon"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    //--------------Facilitator

                                    if(data.error == "facilitator&lea"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "facilitator&asso"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "facilitator&mon"){

                                        swal("Error deleting!","You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "facilitator&lea&asso"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "facilitator&asso&mon"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "facilitator&mon&lea"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

                                    if(data.error == "facilitator&lea&asso&mon"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'create_province') {

				$js[] = '<script>

		        function deleterecordProvince(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deleterecordProvince?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}






			if ($page == 'learnershipList') {

				$js[] = '<script>

		        function deletedataLearnerName(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataLearnerName?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'learnershipSubType') {

				$js[] = '<script>

		        function deletedataLearnerShipType(tablename,columnname,id,learnSub_id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataLearnerShipType?table="+tablename+"&behalf="+columnname+"&data="+id+"&learnSub_id="+learnSub_id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+learnSub_id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'unitList') {

				$js[] = '<script>

		        function deletedataUnit(tablename,columnname,id){

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

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

	                            type:"GET",

							    url:"deletedataUnit?table="+tablename+"&behalf="+columnname+"&data="+id,

							    dataType: "json",

	                            success : function(data){

	                            	if(data.status == "true"){

                                        swal("Deleted!", "Record Delete Successfully.", "success");

                                       $("#del-"+id).remove();

                                    }

                                    if(data.error == "error"){

                                        swal("Error deleting!", "You Can Not Delete Because This Record Have Some Relative Data", "error");

                                    }

	                            },

	                            error : function(jqXHR, textStatus, errorThrown){

	                                swal("Error deleting!", "Please try again", "error");

	                            }

	                        });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

	            }

           	</script>';
			}

			if ($page == 'learner_marks_list') {

				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>';

				$js[] = '<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>';

				$js[] = "<script>

		        	$(document).ready(function() {

						 var table = $('.table').DataTable( {



							dom: 'Bfrtip',

							buttons: [

								'csv', 'excel', 'pdf', 'print' ,'colvis'

							]





				    } );



				    $('#dropdown1').on('change', function () {

                    table.columns(4).search( this.value ).draw();

		                } );

		                $('#dropdown2').on('change', function () {

		                    table.columns(1).search( this.value ).draw();

		                } );



				    } );

		        </script>";
			}

			if ($page == 'create_income_item') {

				$js[] = '<script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>';

				$js[] = '<script>

				    CKEDITOR.editorConfig = function (config) {

				    config.language = "es";

				    config.uiColor = "#F7B42C";

				    config.height = 300;

				    config.toolbarCanCollapse = true;

				};

				CKEDITOR.replace("description");

				$(function () {

			        $("#CreateIncomeItem").validate({

			          rules:{

			            "date":{

			              required: true,

			            },

			            "amount":{

			              required: true,

			            },

			            "payer":{

			              required: true,

			            },

			            "description":{

			              required: true,

			            },

			        },

                      messages:{

			            "date":{

			              required: "Please enter your date",

			            },

			             "amount":{

			              required: "Please enter your amount",

			            },

			             "payer":{

			              required: "Please enter your payer",

			            },

			             "description":{

			              required: "Please enter your date",

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

				</script>';
			}

			if ($page == 'create_expense_item') {

				$js[] = '<script>

				    $(function () {

			        $("#CreateExpenseItem").validate({

			          rules:{

			            "funding_id":{

			              required: true,

			            },

			            "expense_type":{

			              required: true,

			            },

			            "expense_name":{

			              required: true,

			            },

			            "expense_amount":{

			              required: true,

			            },

			        },

                      messages:{

			            "funding_id":{

			              required: "Please enter your funding id",

			            },

			             "expense_type":{

			              required: "Please enter your expense type",

			            },

			             "expense_name":{

			              required: "Please enter your expense name",

			            },

			             "expense_amount":{

			              required: "Please enter your expense amount",

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			    </script>';
			}

			if ($page == 'create_class' || $page == 'create_learner_marks' || $page == 'create_attendance' || $page == 'learner-attandance' || $page == 'create_assessment') {
				$js[] = "<script>
			$('.learnship_id').change(function(){

				$.ajax({

					url: 'provider-get_sublearnership',

					data: { 'value': $('.learnship_id').val() },

					dataType:'json',

					type: 'post',

					success: function(data){

						var option = '';

					   $.each(data, function(i, star) {

								if(i == 'error'){

								$('.learnership_sub_type_id').html(option);

								$('#learnership_sub_type_id-error').show();

								$('#learnership_sub_type_id-error').html(star);

							}else{
								var test = '<option hidden value='+'>Select Sublearnership</option>';
							  option += '<option value='+star.id+'>'+star.sub_type+'</option>'

							  $('.learnership_sub_type_id').html(test+option);

							  $('#learnership_sub_type_id-error').hide();

							}

						});



					}

				});

			});


			</script>";
			}
			if ($page == 'create_learner_marks'  || $page == 'create_attendance' || $page == 'learner-attandance' || $page == 'create_assessment') {
		    // if ($page == 'create_learner_marks'  || $page == 'create_attendance' || $page == 'learner-attandance') {
			    $js[] = "<script>
			$('.learnership_sub_type_id').change(function(){

				$.ajax({

					url: 'provider-getclassname',

					data: { 'value': $('.learnership_sub_type_id').val() },

					dataType:'json',

					type: 'post',

					success: function(data){

						var option = '';

					   $.each(data, function(i, star) {

								if(i == 'error'){

								$('.learner_classname').html(option);

								$('#learner_classname-error').show();

								$('#learnership_sub_type_id-error').html(star);

							}else{
								var test = '<option hidden value='+'>Select Class</option>';
							  option += '<option value='+star.id+'>'+star.class_name+'</option>'

							  $('.learner_classname').html(test+option);

							  $('#learner_classname-error').hide();

							}

						});



					}

				});

			});


			</script>";
			}

			if ($page == 'create_assessment') {
			    $js[] = "<script>
			$('.learnership_sub_type_id').change(function(){

				$.ajax({

					url: 'provider-leanership-subtype-units',

					data: { 'value': $('.learnership_sub_type_id').val() },

					dataType:'json',

					type: 'post',

					success: function(data){

						var option = '';

					   $.each(data, function(i, star) {

								if(i == 'error'){

								$('.learner_classname').html(option);

								$('#learner_classname-error').show();

								$('#learnership_sub_type_id-error').html(star);

							}else{
								var test = '<option hidden value='+'>Select Class</option>';
							  option += '<option value='+star.id+'>'+star.title+'</option>'

							  $('.lstBox1').html(test+option);

							  $('#lstBox1-error').hide();

							}

						});



					}

				});

			});

			$('.class_module').change(function(){

				$.ajax({

					url: 'api-module-uploads',

					data: { 'value': $('.class_module').val() },

					type: 'post',

					success: function(data){
			             $('#class_module_uploads').html(data);
					}

				});

			});


			</script>";
			}

			if ($page == 'create_learner_marks'  || $page == 'create_attendance' || $page == 'learner-attandance') {
				$js[] = "<script>

			$('.learner_classname').change(function(){

				$.ajax({

					url: 'provider-getfacilitator',

					data: { 'value': $('.learner_classname').val() },

					dataType:'json',

					type: 'post',

					success: function(data){

						var option = '';

					   $.each(data, function(i, star) {

								if(i == 'error'){

								$('.facilitator').val(option);

								$('#facilitator-error').show();

								$('#facilitator-error').html(star);

							}else{
							  $('.facilitators').val(star.id);
							  $('.facilitator').val(star.fullname);
							  $('#facilitator-error').hide();

							}

						});



					}

				});

			});


			</script>";
			}
			if ($page == 'create_attendance') {


				$js[] = "<script>

						$(function () {

						$.validator.addMethod('fullname', function(value, element) {

							// allow any non-whitespace characters as the host part

								return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

							}, 'Only letters and white space allowed.');


						$('#CreateAttendanceForm').validate({

						  rules:{

							'training_provider':{

							  required: true,

							},
							'week_start_date' : {
								required: true,
							},

							'week_date':{

								required: true,

							  },

							  'year':{

								required: true,

							  },

							  'learnship_id':{

								required: true,

							  },

							  'learnership_sub_type_id':{

								required: true,

							  },

							  'learner_classname':{

								required: true,

							  },


							  'facilitator':{

								required: true,

							  },

							  'attachment':{

								required: true,

							  },


						},

						  messages:{

							'training_provider':{

							  required: 'Please enter your Training Providere name',

							},

							'week_start_date' : {
								required: 'Please enter Week Start Date',
							},
							'week_date':{

								required: 'Please enter Week Date',

							  },

							  'year':{

								required: 'Please enter year ',

							  },

							  'learnship_id':{

								required: 'Please select learnership',

							  },

							  'learnership_sub_type_id':{

								required: 'Please select learnership sub type',

							  },

							  'learner_classname':{

								required: 'Please select Learner classname',

							  },

							  'facilitator':{

								required: 'Please select class name',

							  },

							  'attachment':{

								required: 'Please select attachment',

							  },




						}

						});

						$.validator.setDefaults({

						   submitHandler: function(form) {

						   form.submit();

						}

					  });

					});

				</script> ";
			}


			if ($page == 'create_province') {

				$js[] = "<script>

			        $(function () {

			        $('#CreateProvinerForm').validate({

			          rules:{

			            'name':{

			              required: true,

			            },

			        },

                      messages:{

			            'name':{

			              required: 'Please enter your province name',

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			</script> ";
			}

			if ($page == 'create_district') {

				$js[] = "<script>

			        $(function () {

			        $('#CreateDistrictForm').validate({

			          rules:{

			          	'province_id':{

			              required: true,

			            },

			            'name':{

			              required: true,

			            },

			        },

                      messages:{

                      	'province_id':{

			              required: 'Please select your province name',

			            },

			            'name':{

			              required: 'Please enter your district name',

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			</script> ";
			}

			if ($page == 'create_region') {

				$js[] = "<script>

			        $(function () {

			        $('#CreateRegionForm').validate({

			          rules:{

			          	'province':{

			              required: true,

			            },

			            'District':{

			              required: true,

			            },

			            'region':{

			              required: true,

			            },

			        },

                      messages:{

                      	'province':{

			              required: 'Please select your province name',

			            },

			            'District':{

			              required: 'Please select your district name',

			            },

			            'region':{

			              required: 'Please enter your region',

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

                $('#province').change(function(){

			       $.ajax({

			            url: 'get_destrict',

			            data: { 'value': $('#province').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

                                if(i == 'error'){

			                        $('.district_option').html(option);

			                        $('#District-error').show();

			                        $('#District-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select District</option>';
			                      option += '<option value='+star.id+'>'+star.name+'</option>'

			                      $('.district_option').html(test+option);

			                      $('#District-error').hide();

			                    }

                            });



			            }

			        });

                });

			</script> ";
			}

			if ($page == 'create_city') {

				$js[] = "<script>

			        $(function () {

			        $('#CreateCityForm').validate({

			          rules:{

			          	'province':{

			              required: true,

			            },

			            'District':{

			              required: true,

			            },

			            'region':{

			              required: true,

			            },

			            'city':{

			              required: true,

			            },

			        },

                      messages:{

                      	'province':{

			              required: 'Please select your province name',

			            },

			            'District':{

			              required: 'Please select your district name',

			            },

			            'region':{

			              required: 'Please select your region',

			            },

			            'city':{

			              required: 'Please enter your city',

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			     $('.province').change(function(){

			       $.ajax({

			            url: 'get_destrict',

			            data: { 'value': $('.province').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			            var option = '';

			            $.each(data, function(i, star) {

			               	if(i == 'error'){

		                        $('.district_option').html(option);

		                        $('#District-error').show();

		                        $('#District-error').html(star);

			                }else{
								var test = '<option hidden value='+'>Select District</option>';
		                      option += '<option value='+star.id+'>'+star.name+'</option>'

		                      $('.district_option').html(test+option);

		                      $('#District-error').hide();

			                }

			           // }

			        });

			    }

               });

               });





			    $('.district_option').change(function(){

			        $.ajax({

			            url: 'get_city',

			            data: { 'value': $('.district_option').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			                    if(i == 'error'){

			                        $('#city').html(option);

			                        $('#city-error').show();

			                        $('#city-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select City</option>';
			                       option += '<option value='+star.id+'>'+star.city+'</option>'

			                       $('#city').html(test+option);

			                       $('#city-error').hide();

			                    }

			                });



			            }

			        });

			    });

			</script> ";
			}

			if ($page == 'create_training') {

				$js[] = "<script>

			        $(function () {

			        	$.validator.addMethod('full_name', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, 'Only letters and white space allowed.');

			            $.validator.addMethod('email', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );

                        }, 'Please enter a valid email address.');

                        $.validator.addMethod('mobile', function (value, element) {

			            return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Mobile Number');

			            $.validator.addMethod('landline', function (value, element) {

			            return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Landline Number');

                     var trainer_id = $('#trainer_id').val();

			        $('#CreateTraininForm').validate({

			          rules:{

			          	'full_name':{

			              required: true,

			            },

			            'company_name':{

			              required: true,

			               remote: 'trainingcompanyname?id='+trainer_id,

			            },

			            'surname':{

			              required: true,

			            },

			            'email':{

			              required: true,

			            },

			            'mobile':{

			              required: true,

			            },

			            'landline':{

			              required: true,

			            },

			            'province':{

			              required: true,

			            },

			            'district':{

			              required: true,

			            },

			            'region':{

			              required: true,

			            },

			            'city':{

			              required: true,

			            },

			            'Suburb':{

			              required: true,

			            },

			            'Street_name':{

			              required: true,

			            },

			            'Street_number':{

			              required: true,

			            },

			            'project_id':{

			              required: true,

			            },

			            'password':{

			              required: true,

			              minlength: 5,

			            },

			        },

                      messages:{

                      	'full_name':{

			              required: 'Please enter your name',

			            },

			            'company_name':{

			              required: 'Please enter your training provider',

			              remote: 'training provider already in use',

			            },

			            'surname':{

			              required: 'Please enter your surname name',

			            },



			            'email':{

			              required: 'Please enter your email',

			            },

			            'mobile':{

			              required: 'Please enter your mobile',

			            },

			            'landline':{

			              required: 'Please enter your landline',

			            },

			            'province':{

			              required: 'Please select your province name',

			            },

			            'district':{

			              required: 'Please select your district name',

			            },

			            'region':{

			              required: 'Please select your region',

			            },

			            'city':{

			              required: 'Please select your city',

			            },

			            'Suburb':{

			              required: 'Please enter your Suburb',

			            },

			            'Street_name':{

			              required: 'Please enter your street name',

			            },

			            'Street_number':{

			              required: 'Please enter your street number',

			            },

			            'project_id':{

			              required: 'Please enter your project manager',

			            },

			            'password':{

			              required: 'Please enter your password',

			              minlength:'password must be at least 5 characters long'

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			</script> ";
			}

			if ($page == 'create_learner') {

				$js[] = "<script>

			        $(function () {

			        	$.validator.addMethod('full_name', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');



                        $.validator.addMethod('surname', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');



			            $.validator.addMethod('email', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );

                        }, 'Please enter a valid email address.');



                        $.validator.addMethod('employer_contact_email', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );

                        }, 'Please enter a valid employer email address.');



                        $.validator.addMethod('employer_contact_number', function (value, element) {

			              return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Employer Contact Number');





                        $.validator.addMethod('mobile', function (value, element) {

			            return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Mobile Number');



                         $.validator.addMethod('mobile_number', function (value, element) {

			            return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Mobile Number');



                        $.validator.addMethod('password',function(value, element) {

                           return /^[A-Za-z0-9\d=!\-@._*]+$/.test(value);

                        },'Password Formate Not Match');



			        $('#CreateLearnerForm').validate({

			          rules:{

			          	'full_name':{

			              required: true,
						  full_name : true
			            },



			            'surname':{

			              required: true,
						  surname : true
			            },



			            'email':{

			              required: true,
						  email : true
			            },



			            'id_number':{

			              required: true,

			               minlength: 5

			            },

			            'SETA':{

                          required: true,

                           minlength: 5

			            },

			            'mobile':{

			              required: true,

			            },

			            'mobile_number':{

			              required: true,

			            },

			             'gender':{

			              required: true,

			            },

			             'trining_provider':{

			              required: true,

			            },

			            'learnershipSubType':{

			              required: true,

			            },

			            'province':{

			              required: true,

			            },

			            'district':{

			              required: true,

			            },

			            'region':{

			              required: true,

			            },

			            'city':{

			              required: true,

			            },

			            'Suburb':{

			              required: true,

			            },

			            'Street_name':{

			              required: true,

			            },

			            'Street_number':{

			              required: true,

			            },

			            'password':{

			              required: true,

			              minlength: 5,

			            },

			            'assessment': 'required',

                        'disable': 'required',

                        'utf_benefits': 'required',

                        'learnershipSubType':'required',

                         'learner_accepted_training': 'required',

                        reason:{

                         required: true,

                        },

                        classname:{

                         required: true,

                        },

                        learner_place_of_employment:{

                         required: true,

                        },

                        employer_name:{

                         required: true,

                        },

                        employer_contact_number:{

                         required: true,

                        },

                        employer_contact_email:{

                         required: true,

                        },

                        employer_province:{

                         required: true,

                        },

                        employer_district:{

                          required: true,

                        },

                        employer_region:{

                          required: true,

                        },

                        employer_city:{

                          required: true,

                        },

                        employer_Suburb:{

                          required: true,

                        },

                        employer_Street_name:{

                          required: true,

                        },

                        employer_Street_number:{

                         required: true,

                        },

                        bank_name:{

                         required: true,

                        },

                        bank_account_type:{

                          required: true,

                        },

                        bank_account_number:{

                          required: true,

                        },

                        branch_name:{

                          required: true,

                        },

                        branch_code:{

                          required: true,

                        },

                        upload_proof_of_banking:{

                          required: true,

                        },



			        	},

                      messages:{

                      	'full_name':{

			              required: 'Please enter your full name',

			            },

			            'second_name':{

			              required: 'Please enter your second name',

			            },

			            'surname':{

			              required: 'Please enter your surname',

			            },

			            'email':{

			              required: 'Please enter your email',

			            },

			            'id_number':{

			            	required:'Please enter your id number',

			               minlength: 'Your id number must be at least 5 characters long'



			            },

			            'SETA':{

			            	required:'Please enter your SETA',

			            	 minlength: 'Your seat number must be at least 5 characters long'

			            },

			            'mobile':{

			              required: 'Please enter your primary cellphone number',

			            },

			            'mobile_number':{

			              required: 'Please enter your second cellphone number',

			            },

			             'gender':{

			              required: 'Please select your gender',

			            },

			             'trining_provider':{

			              required: 'Please select your training provider',

			            },

			            'learnershipSubType':{

			              required: 'Please select your learnership sub type',

			            },

			            'province':{

			              required: 'Please select your province name',

			            },

			            'district':{

			              required: 'Please select your district',

			            },

			            'region':{

			              required: 'Please select your region',

			            },

			            'city':{

			              required: 'Please select your city',

			            },

			            'Suburb':{

			              required: 'Please enter your Suburb',

			            },

			            'Street_name':{

			              required: 'Please enter your street name',

			            },

			            'Street_number':{

			              required: 'Please enter your street number',

			            },

			            'password':{

			              required: 'Please enter your password',

			              minlength:'password must be at least 5 characters long'

			            },



                        assessment: 'Please select your assessment status',

			            disable: 'Please select your disabled',

			            utf_benefits: 'Please select your U.I.F Beneficiary',

			            learnershipSubType: 'Please choose your learnership Sub Type',

			            learner_accepted_training:'Please select your learner accpeted for training',

			            reason: {

                          required: 'Please enter your reason',

                        },

                        classname: {

                          required: 'Please choose your class name',

                        },

                        learner_place_of_employment: {

                          required: 'Please enter your learner place of employment',

                        },

                        employer_name: {

                          required: 'Please enter your employer name',

                        },

                        employer_contact_number: {

                          required: 'Please enter your contact number',

                        },

                        employer_contact_email: {

                          required: 'Please enter your contact email',

                        },

                        employer_province: {

                          required: 'Please enter your employer province',

                        },

                        employer_district: {

                          required: 'Please enter your employer district',

                        },

                        employer_region: {

                          required: 'Please enter your employer region',

                        },

                        employer_city: {

                          required: 'Please enter your employer city',

                        },

                        employer_Suburb: {

                          required: 'Please enter your employer suburb',

                        },

                        employer_Street_number: {

                          required: 'Please enter your employer street number',

                        },

                        employer_Street_name: {

                          required: 'Please enter your employer street name',

                        },

                        bank_name: {

                          required: 'Please enter your bank name',

                        },

                        bank_account_type: {

                          required: 'Please enter your bank account type',

                        },

                        bank_account_number: {

                          required: 'Please enter your bank account number',

                        },

                        branch_name: {

                          required: 'Please enter your branch name',

                        },

                        branch_code: {

                          required: 'Please enter your branch code',

                        },

                        upload_proof_of_banking: {

                          required: 'Please enter your upload proof of banking',

                        },

                    }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			    function Beneficiary(type,reason){

			        if(type =='no'){

			          $('#addtextarea').html('<div id=textarea><label class=form-control-label>Reason</label><textarea rows=4 name=reason  id=reason class=form-control style=resize:none>'+reason+'</textarea><label id=reason-error class=error for=reason></label></div>');

			        }

			        if(type =='yes'){

			          $('#textarea').remove();

			        }

                }

			</script> ";

				$js[] = "<script type='text/javascript'>

                $('.employer_province').change(function(){

			        $.ajax({

			            url: 'get_destrict',

			            data: { 'value': $('.employer_province').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			               	 	if(i == 'error'){

			                        $('.employer_district_option').html(option);

			                        $('#employer-district-error').show();

			                        $('#employer-district-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select District</option>';
			                      option += '<option value='+star.id+'>'+star.name+'</option>'

			                      $('.employer_district_option').html(test+option);

			                      $('#employer-district-error').hide();

			                    }

			                });



			            }

			        });

			    });

			    $('.employer_district_option').change(function(){

			       $.ajax({

			            url: 'get_region',

			            data: { 'value': $('.employer_district_option').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			               	if(i == 'error'){

			                        $('#employer_region').html(option);

			                        $('#employer-region-error').show();

			                        $('#employer-region-error').html(star);

			                 }else{
								var test = '<option hidden value='+'>Select Region</option>';
			                       option += '<option value='+star.id+'>'+star.region+'</option>'

			                       $('#employer_region').html(test+option);

			                       $('#employer-region-error').hide();

			                }

			                });



			            }

			        });

			    });



			    $('#employer_region').change(function(){

			       $.ajax({

			            url: 'get_city',

			            data: { 'value': $('#employer_region').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			                    if(i == 'error'){

			                        $('#employer_city').html(option);

			                        $('#employer-city-error').show();

			                        $('#employer-city-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select City</option>';
			               	   		option += '<option value='+star.id+'>'+star.city+'</option>'

			               	   		$('#employer_city').html(test+option);

			                        $('#employer-city-error').hide();

			               	   	}

			                });

			            }

			        });

			    });

            </script> ";
			}

			if ($page == 'create_learner' || $page == 'create_training' || $page == 'create_organisation' || $page == 'create_programmer' || $page == 'create_project' || $page == 'create_assessor' || $page == 'create_moderator' || $page == 'create_facilitator') {

				$js[] = "<script type='text/javascript'>

                $('.province').change(function(){

			        $.ajax({

			            url: 'get_destrict',

			            data: { 'value': $('.province').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			               	 	if(i == 'error'){

			                        $('.district_option').html(option);

			                        $('#district-error').show();

			                        $('#district-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select District</option>';
			                      option += '<option value='+star.id+'>'+star.name+'</option>'

			                      $('.district_option').html(test+option);

			                      $('#district-error').hide();

			                    }

			                });



			            }

			        });

			    });

			    $('.district_option').change(function(){

			       $.ajax({

			            url: 'get_city',

			            data: { 'value': $('.district_option').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

							if(i == 'error'){

								$('#city').html(option);

								$('#city-error').show();

								$('#city-error').html(star);

							}else{
								var test = '<option hidden value='+'>Select City</option>';
									  option += '<option value='+star.id+'>'+star.city+'</option>'

									  $('#city').html(test+option);

								$('#city-error').hide();

								  }

			                });



			            }

			        });

			    });






				$('#city').change(function(){
					$.ajax({
						 url: 'get_municipality',
						 data: { 'value': $('#city').val() },
						 dataType:'json',
						 type: 'post',
						 success: function(data){
							 var option = '';
							$.each(data, function(i, star) {
								 if(i == 'error'){
									 $('#municipality').html(option);
									 $('#municipality-error').show();
									 $('#municipality-error').html(star);
								 }else{
								 var test = '<option hidden value='+'>Select Municipality</option>'
									 option += '<option value='+star.id+'>'+star.municipality+'</option>'
									 $('#municipality').html(test+option);
									 $('#municipality-error').hide();
								 }
							 });
						 }
					 });
				 });

            </script> ";
			}

			if ($page == 'create_assessor' || $page == 'create_moderator') {

				$js[] = '<script>

				   $(document).ready(function(){

					    var maxField = 10; //Input fields increment limitation

					    var addButton = $(".add_button"); //Add button selector

					    var wrapper = $(".field_wrapper"); //Input field wrapper

					    var fieldHTML = "<div class=row id=row_><div class=col-md-6><label class=form-control-label>Acreditations</label><input type=text name=acreditations[] class=form-control  placeholder=Enter Acreditations Name></div><div class=col-md-6><label class=form-control-label>Acreditations Files</label><input type=file name=acreditations_file[] class=form-control></div><a href=javascript:void(0); class=remove_button>Remove</a></div>";

					    var x = 1; //Initial field counter is 1



					    //Once add button is clicked

					    $(addButton).click(function(){

					        //Check maximum number of input fields

					        if(x < maxField){

					            x++; //Increment field counter



					            $(wrapper).append(fieldHTML); //Add field html

					        }

							// $(.remove_button).addClass(btn btn-danger)

							$(".remove_button").addClass("btn btn-danger");

							$(".remove_button").css("margin","15px");

					    });



					    //Once remove button is clicked

					    $(wrapper).on("click", ".remove_button", function(e){

					        e.preventDefault();

					        $(this).parent("div").remove(); //Remove field html

					        x--; //Decrement field counter

					    });

				    });

				    $(function() {

				        $("#CreateAssessorForm").validate({

				            rules: {

				                fullname: "required",

				                surname: "required",

				                email: {

				                    required: true,

				                    email: true

				                },

				                id_number: {

				                    required: true,

				                    minlength: 5,

				               },

				                mobile: {

				                    required: true,

				                    minlength: 9,

				                    maxlength: 9,

				                    number: true

				                },

				                landline: {

				                    required: true,

				                    minlength: 9,

				                    maxlength: 9,

				                    number: true

				                },

				                trainer_id:{

				                	required: true,

				                },

				                password:{

			                       required: true,

			                       minlength: 5,

			                    },

			                     province:{

			                        required: true,

			                    },

					            district:{

					              required: true,

					            },

					            region:{

					              required: true,

					            },

					            city:{

					              required: true,

								},
								municipality:{

									required: true,

								  },

					            Suburb:{

					              required: true,

					            },

					            Street_name:{

					              required: true,

					            },

					            Street_number:{

					              required: true,

					            },

				            },

				            messages: {

				                fullname: "Please enter your fullname name",

				                surname: "Please enter your surname name",

				                email: "Please enter a valid email address",



				                id_number: {

				                    required: "Please enter your id number",

				                    minlength: "Your id number must be at least 5 characters long"

				                },



				                mobile: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                landline: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                trainer_id: {

				                	required: "Please select your training provider",

				                },

				                password:{

			                       required: "Please enter your password",

			                       minlength:"password must be at least 5 characters long"

			                    },

			                     province:{

			                       required: "Please select your province name",

			                    },

					            district:{

					              required: "Please select your district",

					            },

					            region:{

					              required: "Please select your region",

					            },

					            city:{

					              required: "Please select your city",

								},
								municipality:{

									required: "Please select your municipality",

								  },

					            Suburb:{

					              required: "Please enter your Suburb",

					            },

					            Street_name:{

					              required: "Please enter your street name",

					            },

					            Street_number:{

					              required: "Please enter your street number",

					            },



				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				    function remove_file(table,file_id,id){

                        swal({

				            title:"Do you want delete this acreditations?",

				            type: "warning",

				            showCancelButton: true,

				            confirmButtonClass: "btn btn-success",

				            cancelButtonClass: "btn btn-danger",

				            buttonsStyling: false,

				            confirmButtonText: "Delete",

				            cancelButtonText: "Cancel",

				            closeOnConfirm: false,

				            showLoaderOnConfirm: true,

				        },

				        function(isConfirm){

				            if(isConfirm){

				                $.ajax({

				                    url:"acreditations_file_delete",

				                    type: "POST",

				                    data:{table:table,id:id,file_index:file_id},

				                    success: function(resp){

				                    if(resp){

				                    	$("#remove_file"+file_id).remove();

				                       // swal("Deleted!", "Your acreditations file has been deleted.", "success");

				                        location.reload(true);

				                    }



				                    }

				                });

				            }else {

				             swal("Cancelled", "Your  acreditations is safe :)", "error");

				            }

				           ;

				        });

                     };

				</script>';
			}

			if ($page == 'create_facilitator') {

				$js[] = '<script>

				   $(document).ready(function(){

					    var maxField = 10; //Input fields increment limitation

					    var addButton = $(".add_button"); //Add button selector

					    var wrapper = $(".field_wrapper"); //Input field wrapper

					    var fieldHTML = "<div class=row id=row_><div class=col-md-6><label class=form-control-label>Acreditations</label><input type=text name=acreditations[] class=form-control  placeholder=Enter Acreditations Name></div><div class=col-md-6><label class=form-control-label>Acreditations Files</label><input type=file name=acreditations_file[] class=form-control></div><a href=javascript:void(0); class=remove_button>Remove</a></div>";

					    var x = 1; //Initial field counter is 1



					    //Once add button is clicked

					    $(addButton).click(function(){

					        //Check maximum number of input fields

					        if(x < maxField){

					            x++; //Increment field counter



					            $(wrapper).append(fieldHTML); //Add field html

					        }

							// $(.remove_button).addClass(btn btn-danger)

							$(".remove_button").addClass("btn btn-danger");

							$(".remove_button").css("margin","15px");

					    });



					    //Once remove button is clicked

					    $(wrapper).on("click", ".remove_button", function(e){

					        e.preventDefault();

					        $(this).parent("div").remove(); //Remove field html

					        x--; //Decrement field counter

					    });

				    });

				    $(function() {

				        $("#CreateAssessorForm").validate({

				            rules: {

				                fullname: "required",

				                surname: "required",

				                email: {

				                    required: true,

				                    email: true

				                },

				                id_number: {

				                    required: true,

				                    minlength: 5,

				               },

				                mobile: {

				                    required: true,

				                    minlength: 9,

				                    maxlength: 9,

				                    number: true

				                },

				                landline: {

				                    required: true,

				                    minlength: 9,

				                    maxlength: 9,

				                    number: true

				                },

				                trainer_id:{

				                	required: true,

				                },

				                password:{

			                       required: true,

			                       minlength: 5,

			                    },

			                     province:{

			                        required: true,

			                    },

					            district:{

					              required: true,

					            },

					            region:{

					              required: true,

					            },

					            city:{

					              required: true,

								},
								municipality:{

									required: true,

								  },

					            Suburb:{

					              required: true,

					            },

					            Street_name:{

					              required: true,

					            },

					            Street_number:{

					              required: true,

					            },

					            classname:{

					            	required: true,

					            },

				            },

				            messages: {

				                fullname: "Please enter your fullname name",

				                surname: "Please enter your surname name",

				                email: "Please enter a valid email address",



				                id_number: {

				                    required: "Please enter your id number",

				                    minlength: "Your id number must be at least 5 characters long"

				                },



				                mobile: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                landline: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                trainer_id: {

				                	required: "Please select your training provider",

				                },

				                password:{

			                       required: "Please enter your password",

			                       minlength:"password must be at least 5 characters long"

			                    },

			                     province:{

			                       required: "Please select your province name",

			                    },

					            district:{

					              required: "Please select your district",

					            },

					            region:{

					              required: "Please select your region",

					            },

					            city:{

					              required: "Please select your city",

								},
								municipality:{

									required: "Please select your municipality",

								  },

					            Suburb:{

					              required: "Please enter your Suburb",

					            },

					            Street_name:{

					              required: "Please enter your street name",

					            },

					            Street_number:{

					              required: "Please enter your street number",

					            },

					            classname: {

                                   required: "Please choose your class name",

                                },



				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				    function remove_file(table,file_id,id){

                        swal({

				            title:"Do you want delete this acreditations?",

				            type: "warning",

				            showCancelButton: true,

				            confirmButtonClass: "btn btn-success",

				            cancelButtonClass: "btn btn-danger",

				            buttonsStyling: false,

				            confirmButtonText: "Delete",

				            cancelButtonText: "Cancel",

				            closeOnConfirm: false,

				            showLoaderOnConfirm: true,

				        },

				        function(isConfirm){

				            if(isConfirm){

				                $.ajax({

				                    url:"acreditations_file_delete",

				                    type: "POST",

				                    data:{table:table,id:id,file_index:file_id},

				                    success: function(resp){

				                    if(resp){

				                    	$("#remove_file"+file_id).remove();

				                       // swal("Deleted!", "Your accreditations file has been deleted.", "success");

				                        location.reload(true);

				                    }



				                    }

				                });

				            }else {

				             swal("Cancelled", "Your  accreditations is safe :)", "error");

				            }

				           ;

				        });

                     };

				</script>';
			}

			if ($page == 'organisation_list' || $page == "programmer_list" || $page == "project_list") {

				$js[] = '<script>

			$(document).on("click",".status_checks",function(){

		        var status = ($(this).hasClass("btn-success")) ? "0" : "1";

		        var msg = (status=="0")? "Inactivate" : "Activate";

		        var current_element = $(this);

			    swal({

			        title: "Are you sure?",

			        text: msg,

			        type: "warning",

			        showCancelButton: true,

			        confirmButtonColor: "#DD6B55",

			        confirmButtonText: msg,

			        closeOnConfirm: false

		        }, function (isConfirm) {

		        if (!isConfirm) return;

			        $.ajax({

			            url :"changestatus",

			            type : "POST",

			            dataType : "JSON",

			            data: {tablenm_id:$(current_element).attr("data"),status:status},

			            success : function(data){

			            	location.reload();

			            },

			            error : function(jqXHR, textStatus, errorThrown){

			                swal("Error deleting!", "Please try again", "error");

			            }

					});

		        });

	        });

	       </script>';
			}

			if ($page == 'create_organisation') {

				$js[] = '<script>

				    $(function() {

				    	$.validator.addMethod("fullname", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");



                        $.validator.addMethod("surname", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");

				    	$.validator.addMethod("organisation_name", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");

				        $("#CreateOrganisationForm").validate({

				            rules: {

				            	fullname: "required",

				                surname: "required",

				                organisation_name:{

				                    required: true,

				                },

				                email_address: {

				                    required: true,

				                    email: true

				                },

				                mobile_number: {

				                    required: true,

				                    number: true,

				                    minlength: 9,

				                    maxlength: 9,

				               },

				                landline_number: {

				                    required: true,

				                    number: true,

				                    minlength: 9,

				                    maxlength: 9,

				                },

				                province:{

			                        required: true,

			                    },

					            district:{

					              required: true,

					            },

					            region:{

					              required: true,

					            },

					            city:{

					              required: true,

					            },

					            Suburb:{

					              required: true,

					            },

					            Street_name:{

					              required: true,

					            },

					            Street_number:{

					              required: true,

					            },

				                password:{

			                       required: true,

			                       minlength: 5,

			                    },

			                },

				            messages: {

				            	fullname: "Please enter your fullname name",

				                surname: "Please enter your surname name",

				                organisation_name:  {

				                    required: "Please enter your organisation name",

				                },

				                email_address: "Please enter a valid email address",

				                mobile_number: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                landline_number: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                password:{

			                       required: "Please enter your password",

			                       minlength:"password must be at least 5 characters long"

			                    },

			                    province:{

			                       required: "Please select your province name",

			                    },

					            district:{

					              required: "Please select your district",

					            },

					            region:{

					              required: "Please select your region",

					            },

					            city:{

					              required: "Please select your city",

					            },

					            Suburb:{

					              required: "Please enter your Suburb",

					            },

					            Street_name:{

					              required: "Please enter your street name",

					            },

					            Street_number:{

					              required: "Please enter your street number",

					            },

					        },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				</script>';
			}

			if ($page == 'create_programmer') {

				$js[] = '<script>

				    $(function() {

				    	$.validator.addMethod("fullname", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");



                        $.validator.addMethod("surname", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");



				    	$.validator.addMethod("project_director", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");



                      /*  $.validator.addMethod("programme_name", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");*/

                        $.validator.addMethod("dateBefore", function (value, element, params) {

			            // if end date is valid, validate it as well

			            var end = $(params);

			            if (!end.data("validation.running")) {

			                $(element).data("validation.running", true);

			                setTimeout($.proxy(



			                function () {

			                    this.element(end);

			                }, this), 0);

			                // Ensure clearing the "flag" happens after the validation of "end" to prevent endless looping

			                setTimeout(function () {

			                    $(element).data("validation.running", false);

			                }, 0);

			            }

			            return this.optional(element) || this.optional(end[0]) || new Date(value) < new Date(end.val());



			        }, "Must be before corresponding end date");



			        $.validator.addMethod("dateAfter", function (value, element, params) {

			            // if start date is valid, validate it as well

			            var start = $(params);

			            if (!start.data("validation.running")) {

			                $(element).data("validation.running", true);

			                setTimeout($.proxy(



			                function () {

			                    this.element(start);

			                }, this), 0);

			                setTimeout(function () {

			                    $(element).data("validation.running", false);

			                }, 0);

			            }

			            return this.optional(element) || this.optional(start[0]) || new Date(value) > new Date($(params).val());



			        }, "Must be after corresponding start date");



				        $("#CreateProgrammerForm").validate({

				            rules: {

				            	fullname: "required",

				                surname: "required",

				                project_director:{

				                    required: true,

				                },

				                programme_name:{

				                    required: true,

				                },

				                programme_start_date:{

			                      dateBefore: "#programme_end_date",

			                      required: true

			                    },

			                    programme_end_date:{

			                      dateAfter: "#programme_start_date",

			                      required: true

			                    },

			                    q1_start_date:{

			                      dateBefore: "#q1_end_date",

			                      required: true

			                    },

			                    q1_end_date:{

			                      dateAfter: "#q1_start_date",

			                      required: true

			                    },

			                     q2_start_date:{

			                      dateBefore: "#q2_end_date",

			                      required: true

			                    },

			                    q2_end_date:{

			                      dateAfter: "#q2_start_date",

			                      required: true

			                    },

			                     q3_start_date:{

			                      dateBefore: "#q3_end_date",

			                      required: true

			                    },

			                    q3_end_date:{

			                      dateAfter: "#q3_start_date",

			                      required: true

			                    },

			                    q4_start_date:{

			                      dateBefore: "#q4_end_date",

			                      required: true

			                    },

			                    q4_end_date:{

			                      dateAfter: "#q4_start_date",

			                      required: true

			                    },

				                email_address: {

				                    required:true,

				                    email:true,

				                },

				               /* tax_clearance: {

				                    required: true,

				                },

				                "company_registration_documents[]":{

				                 required: true,

				                },*/

				                password:{

			                       required: true,

			                       minlength: 5,

			                    },

			                    province:{

			                        required: true,

			                    },

					            district:{

					              required: true,

					            },

					            region:{

					              required: true,

					            },

					            city:{

					              required: true,

					            },

					            Suburb:{

					              required: true,

					            },

					            Street_name:{

					              required: true,

					            },

					            Street_number:{

					              required: true,

					            },

					            organisation_id:{

					            	required: true,

					            },

					            contact_person: {

				                    required: true,

				                    number: true,

				                    minlength: 9,

				                    maxlength: 9,

				               },

				               mobile_number: {

				                    required: true,

				                    number: true,

				                    minlength: 9,

				                    maxlength: 9,

				               },

				            },

				            messages: {

				            	fullname: "Please enter your fullname name",

				                surname: "Please enter your surname name",

				                project_director:  {

				                    required: "Please enter your project director",

				                },

				                programme_name:  {

				                    required: "Please enter your programme name",

				                },

				                programme_start_date:{

			                       required: "Please enter your programme start date",

			                    },

			                    programme_end_date:{

			                       required: "Please enter your programme end date",

			                    },

			                     q1_start_date:{

			                       required: "Please enter your Quarter 1 start date",

			                    },

			                    q1_end_date:{

			                       required: "Please enter your Quarter 1 end date",

			                    },

			                     q2_start_date:{

			                       required: "Please enter your Quarter 2 start date",

			                    },

			                    q2_end_date:{

			                       required: "Please enter your Quarter 2 end date",

			                    },

			                    q3_start_date:{

			                       required: "Please enter your Quarter 3 start date",

			                    },

			                    q3_end_date:{

			                       required: "Please enter your Quarter 3 end date",

			                    },

			                     q4_start_date:{

			                       required: "Please enter your Quarter 4 start date",

			                    },

			                    q4_end_date:{

			                       required: "Please enter your Quarter 4 end date",

			                    },





				                email_address: {

				                	required:"Please enter your email address",

				                    email:"Please enter a valid email address",

				                },







				               /* tax_clearance: {

				                    required: "Please choose tex clearance",



				                },

				                "company_registration_documents[]":{

                                   required: "Please choose company document",

				                },*/

				                password:{

			                       required: "Please enter your password",

			                       minlength:"password must be at least 5 characters long"

			                    },

			                    province:{

			                       required: "Please select your province name",

			                    },

					            district:{

					              required: "Please select your district",

					            },

					            region:{

					              required: "Please select your region",

					            },

					            city:{

					              required: "Please select your city",

					            },

					            Suburb:{

					              required: "Please enter your Suburb",

					            },

					            Street_name:{

					              required: "Please enter your street name",

					            },

					            Street_number:{

					              required: "Please enter your street number",

					            },

					            organisation_id:{

					              required: "Please choose your organisation name",

					            },

					            contact_person: {

				                  required: "Please enter your landline number",

				                    minlength: "Your landline number must be at least 9 characters long"

				               },

				               mobile_number: {

				                  required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				               },

				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				</script>';
			}

			if ($page == 'create_project' || $page == 'create_new_project') {

				$js[] = '<script>

				    $(function() {

				    	$.validator.addMethod("fullname", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");



                        $.validator.addMethod("surname", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");



                      /*  $.validator.addMethod("programme_name", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");*/



                        $.validator.addMethod("project_manager", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, "Only letters and white space allowed.");



                        $.validator.addMethod("project_name", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, "Only letters and white space allowed.");



                        $.validator.addMethod("dateBefore", function (value, element, params) {

			            // if end date is valid, validate it as well

			            var end = $(params);

			            if (!end.data("validation.running")) {

			                $(element).data("validation.running", true);

			                setTimeout($.proxy(



			                function () {

			                    this.element(end);

			                }, this), 0);

			                // Ensure clearing the "flag" happens after the validation of "end" to prevent endless looping

			                setTimeout(function () {

			                    $(element).data("validation.running", false);

			                }, 0);

			            }

			            return this.optional(element) || this.optional(end[0]) || new Date(value) < new Date(end.val());



			        }, "Must be before corresponding end date");



			        $.validator.addMethod("dateAfter", function (value, element, params) {

			            // if start date is valid, validate it as well

			            var start = $(params);

			            if (!start.data("validation.running")) {

			                $(element).data("validation.running", true);

			                setTimeout($.proxy(



			                function () {

			                    this.element(start);

			                }, this), 0);

			                setTimeout(function () {

			                    $(element).data("validation.running", false);

			                }, 0);

			            }

			            return this.optional(element) || this.optional(start[0]) || new Date(value) > new Date($(params).val());



			        }, "Must be after corresponding start date");

					$("#nextBtn").validate({

						rules: {

							fullname: "required",

							surname: "required",

							project_manager:{

								required: true,

							},

							project_name:{

								required: true,

							},

							programme_director:{

								required: true,

							},

							programme_name:{

								required: true,

							},

							project_start_date:{

							  dateBefore: "#project_end_date",

							  required: true

							},

							project_end_date:{

							  dateAfter: "#project_start_date",

							  required: true

							},

							q1_start_date:{

							  dateBefore: "#q1_end_date",

							  required: true

							},

							q1_end_date:{

							  dateAfter: "#q1_start_date",

							  required: true

							},

							 q2_start_date:{

							  dateBefore: "#q2_end_date",

							  required: true

							},

							q2_end_date:{

							  dateAfter: "#q2_start_date",

							  required: true

							},

							 q3_start_date:{

							  dateBefore: "#q3_end_date",

							  required: true

							},

							q3_end_date:{

							  dateAfter: "#q3_start_date",

							  required: true

							},

							q4_start_date:{

							  dateBefore: "#q4_end_date",

							  required: true

							},

							q4_end_date:{

							  dateAfter: "#q4_start_date",

							  required: true

							},

							email_address: {

								required:true,

								email:true,

							},

						   /* tax_clearance: {

								required: true,

							},

							assesor_acreditations: {

								required: true,

							},

							seta_creditiation: {

								required: true,

							},

							moderator_accreditation: {

								required: true,

							},

							"company_registration_documents[]":{

							 required: true,

							},*/

							mobile_number: {

								required: true,

								minlength: 9,

								maxlength: 9,

								number: true

							},

							landline_number: {

								required: true,

								minlength: 9,

								maxlength: 9,

								number: true

							},

							password:{

							   required: true,

							   minlength: 5,

							},

							province:{

								required: true,

							},

							district:{

							  required: true,

							},

							region:{

							  required: true,

							},

							city:{

							  required: true,

							},

							Suburb:{

							  required: true,

							},

							Street_name:{

							  required: true,

							},



						},

						messages: {

							fullname: "Please enter your fullname name",

							surname: "Please enter your surname name",

							project_manager:  {

								required: "Please enter your project manager",

							},

							project_name:  {

								required: "Please enter your project name",

							},

							programme_director:  {

								required: "Please enter your programme director",

							},

							programme_name:  {

								required: "Please enter your programme name",

							},

							project_start_date:{

							   required: "Please enter your project start date",

							},

							project_end_date:{

							   required: "Please enter your project end date",

							},

							 q1_start_date:{

							   required: "Please enter your Quarter 1 start date",

							},

							q1_end_date:{

							   required: "Please enter your Quarter 1 end date",

							},

							 q2_start_date:{

							   required: "Please enter your Quarter 2 start date",

							},

							q2_end_date:{

							   required: "Please enter your Quarter 2 end date",

							},

							q3_start_date:{

							   required: "Please enter your Quarter 3 start date",

							},

							q3_end_date:{

							   required: "Please enter your Quarter 3 end date",

							},

							 q4_start_date:{

							   required: "Please enter your Quarter 4 start date",

							},

							q4_end_date:{

							   required: "Please enter your Quarter 4 end date",

							},

							email_address: {

								required:"Please enter your email address",

								email:"Please enter a valid email address",

							},





							/*tax_clearance: {

								required: "Please choose tex clearance",

							},

							assesor_acreditations: {

								required: "Please choose assesor acreditations",

							},

							seta_creditiation: {

								required: "Please choose tex seta creditiations",

							},

							moderator_accreditation: {

								required: "Please choose moderator accreditations",

							},

							"company_registration_documents[]":{

							   required: "Please choose company document",

							},*/

							mobile_number: {

								required: "Please enter your mobile number",

								minlength: "Your mobile number must be at least 9 characters long"

							},

							landline_number: {

								required: "Please enter your mobile number",

								minlength: "Your mobile number must be at least 9 characters long"

							},

							password:{

							   required: "Please enter your password",

							   minlength:"password must be at least 5 characters long"

							},

							province:{

							   required: "Please select your province name",

							},

							district:{

							  required: "Please select your district",

							},

							region:{

							  required: "Please select your region",

							},

							city:{

							  required: "Please select your city",

							},

							Suburb:{

							  required: "Please enter your Suburb",

							},

							Street_name:{

							  required: "Please enter your street name",

							},



						},



					});
					$.validator.addMethod("fullname", function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

                        }, "Only letters and white space allowed.");


				        $("#CreateProjectForm").validate({

				            rules: {

				            	fullname: "required",

				                surname: "required",

				                project_manager:{

				                    required: true,

				                },

				                project_name:{

				                    required: true,

				                },

				                programme_director:{

				                    required: true,

				                },

				                programme_name:{

				                    required: true,

				                },

				                project_start_date:{

			                      dateBefore: "#project_end_date",

			                      required: true

			                    },

			                    project_end_date:{

			                      dateAfter: "#project_start_date",

			                      required: true

			                    },

			                    q1_start_date:{

			                      dateBefore: "#q1_end_date",

			                      required: true

			                    },

			                    q1_end_date:{

			                      dateAfter: "#q1_start_date",

			                      required: true

			                    },

			                     q2_start_date:{

			                      dateBefore: "#q2_end_date",

			                      required: true

			                    },

			                    q2_end_date:{

			                      dateAfter: "#q2_start_date",

			                      required: true

			                    },

			                     q3_start_date:{

			                      dateBefore: "#q3_end_date",

			                      required: true

			                    },

			                    q3_end_date:{

			                      dateAfter: "#q3_start_date",

			                      required: true

			                    },

			                    q4_start_date:{

			                      dateBefore: "#q4_end_date",

			                      required: true

			                    },

			                    q4_end_date:{

			                      dateAfter: "#q4_start_date",

			                      required: true

			                    },

				                email_address: {

				                    required:true,

				                    email:true,

				                },

				               /* tax_clearance: {

				                    required: true,

				                },

				                assesor_acreditations: {

				                    required: true,

				                },

				                seta_creditiation: {

				                    required: true,

				                },

				                moderator_accreditation: {

				                    required: true,

				                },

				                "company_registration_documents[]":{

				                 required: true,

				                },*/

				                mobile_number: {

				                    required: true,

				                    minlength: 9,

				                    maxlength: 9,

				                    number: true

				                },

				                landline_number: {

				                    required: true,

				                    minlength: 9,

				                    maxlength: 9,

				                    number: true

				                },

				                password:{

			                       required: true,

			                       minlength: 5,

			                    },

			                    province:{

			                        required: true,

			                    },

					            district:{

					              required: true,

					            },

					            region:{

					              required: true,

					            },

					            city:{

					              required: true,

					            },

					            Suburb:{

								  required: true,
								  fullname : true,

					            },

					            Street_name:{

								  required: true,

					            },


				            },

				            messages: {

				            	fullname: "Please enter your fullname name",

				                surname: "Please enter your surname name",

				                project_manager:  {

				                    required: "Please enter your project manager",

				                },

				                project_name:  {

				                    required: "Please enter your project name",

				                },

				                programme_director:  {

				                    required: "Please enter your programme director",

				                },

				                programme_name:  {

				                    required: "Please enter your programme name",

				                },

				                project_start_date:{

			                       required: "Please enter your project start date",

			                    },

			                    project_end_date:{

			                       required: "Please enter your project end date",

			                    },

			                     q1_start_date:{

			                       required: "Please enter your Quarter 1 start date",

			                    },

			                    q1_end_date:{

			                       required: "Please enter your Quarter 1 end date",

			                    },

			                     q2_start_date:{

			                       required: "Please enter your Quarter 2 start date",

			                    },

			                    q2_end_date:{

			                       required: "Please enter your Quarter 2 end date",

			                    },

			                    q3_start_date:{

			                       required: "Please enter your Quarter 3 start date",

			                    },

			                    q3_end_date:{

			                       required: "Please enter your Quarter 3 end date",

			                    },

			                     q4_start_date:{

			                       required: "Please enter your Quarter 4 start date",

			                    },

			                    q4_end_date:{

			                       required: "Please enter your Quarter 4 end date",

			                    },

				                email_address: {

				                	required:"Please enter your email address",

				                    email:"Please enter a valid email address",

				                },





				                /*tax_clearance: {

				                    required: "Please choose tex clearance",

				                },

				                assesor_acreditations: {

				                    required: "Please choose assesor acreditations",

				                },

				                seta_creditiation: {

				                    required: "Please choose tex seta creditiations",

				                },

				                moderator_accreditation: {

				                    required: "Please choose moderator accreditations",

				                },

				                "company_registration_documents[]":{

                                   required: "Please choose company document",

				                },*/

				                mobile_number: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                landline_number: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },

				                password:{

			                       required: "Please enter your password",

			                       minlength:"password must be at least 5 characters long"

			                    },

			                    province:{

			                       required: "Please select your province name",

			                    },

					            district:{

					              required: "Please select your district",

					            },

					            region:{

					              required: "Please select your region",

					            },

					            city:{

					              required: "Please select your city",

					            },

					            Suburb:{

					              required: "Please enter your Suburb",

					            },

					            Street_name:{

					              required: "Please enter your street name",

					            },



				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				</script>';
			}



			if ($page == 'changepassword') {

				$js[] = '<script>

				    $(function() {

				       $("#ChangepasswordForm").validate({

				           rules: {

				            oldpassword:{

                                required: true,

                            },

					        password:{

					          required: true,

					          minlength:5,

					        },

					        confirm_password:{

					          required: true,

					          minlength:5,

					          equalTo:"#password",

					        },

				          },

				            messages: {

				            	oldpassword:{

                                  required: "Please enter your old password",

                                  minlength: "Password must be at least 5 characters long"

                                },

				                password:{

                                  required: "Please enter your new password ",

                                  minlength: "Password must be at least 5 characters long"

                                },

					            confirm_password:{

					              required: "Please enter your confirm password",

					              minlength: "Confirm password must be at least 5 characters long",

					              equalTo:"Password and confirm password not match!",

					            },

				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				    </script>';
			}

			if ($page == 'editprofile') {

				$js[] = '<script>

				    $(function() {

				       $("#EditProfileForm").validate({

				           rules: {

				            full_name:{

                               required: true,

                            },

					        email:{

					          required: true,

					          email:true,

					        },

					        mobile: {

			                    required: true,

			                    number: true,

			                    minlength: 9,

			                    maxlength: 9,



				           }



				          },

				            messages: {

				            	full_name:{

                                  required: "Please enter your full name",

                                },

				                email:{

                                  required: "Please enter your email ",

                                  email: "Please enter a valid email address",

                                },

                                mobile: {

				                    required: "Please enter your mobile number",

				                    minlength: "Your mobile number must be at least 9 characters long"

				                },



				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				</script>';
			}

			if ($page == 'import_learner') {

				$js[] = '<script>

				    $(function() {

				       $("#ImportLearnerForm").validate({

				            rules: {

					            learner:{

	                               required: true,

	                            },

					        },

				            messages: {

				            	learner:{

                                  required: "Please choose your file",

                                },



				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				</script>';
			}

			if ($page == 'complaints_suggestion') {

				$js[] = '<script>

				    $(function() {

				       $("#CreateComplaintsForm").validate({

				            rules: {

					            type:{

	                               required: true,

	                            },

	                            description:{

	                                required: function() {

                                     CKEDITOR.instances.description.updateElement();

                                    },



	                            },

					        },

				            messages: {

				            	type:{

                                  required: "Please choose your type",

                                },

                                description:{

                                  required: "Please Enter your description",

                                },



				            },

				            submitHandler: function(form) {

				                form.submit();

				            }

				        });

				    });

				</script>';
			}

			if ($page == 'learner_editprofile') {



				$js[] = "<script>

			        $(function () {

			        	$.validator.addMethod('full_name', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');



                        $.validator.addMethod('surname', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');



			            $.validator.addMethod('email', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );

                        }, 'Please enter a valid email address.');



                        $.validator.addMethod('mobile', function (value, element) {

			            return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Mobile Number');



                         $.validator.addMethod('mobile_number', function (value, element) {

			            return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Mobile Number');



                        $.validator.addMethod('password',function(value, element) {

                           return /^[A-Za-z0-9\d=!\-@._*]+$/.test(value);

                        },'Password Formate Not Match');



			        $('#editlearnerForm').validate({

			          rules:{

			          	'full_name':{

			              required: true,
						  full_name : true
			            },



			            'surname':{

			              required: true,
						  full_name : true

			            },



			            'email':{

			              required: true,

			            },



			            'id_number':{

			              required: true,

			               minlength: 5

			            },

			           // 'SETA':{

                         // required: true,

                          // minlength: 5

			           // },

			            'mobile':{

			              required: true,

			            },

			            'mobile_number':{

			              required: true,

			            },

			             'gender':{

			              required: true,

			            },

			             'trining_provider':{

			              required: true,

			            },

			            'learnershipSubType':{

			              required: true,

			            },

			            'province':{

			              required: true,

			            },

			            'district':{

			              required: true,

			            },

			            'region':{

			              required: true,

			            },

			            'city':{

			              required: true,

			            },

			            'Suburb':{

			              required: true,
						  full_name : true

			            },

			            'Street_name':{

			              required: true,
						  full_name : true

			            },

			            'Street_number':{

			              required: true,

			            },



			            'assessment': 'required',

                        'disable': 'required',

                        'utf_benefits': 'required',

                        'learnershipSubType':'required',

                         'learner_accepted_training': 'required',

                        reason:{

                         required: true,

                        },

                        classname:{

                         required: true,

                        },





			        },

                      messages:{

                      	'full_name':{

			              required: 'Please enter your full name',

			            },

			            'second_name':{

			              required: 'Please enter your second name',

			            },

			            'surname':{

			              required: 'Please enter your surname',

			            },

			            'email':{

			              required: 'Please enter your email',

			            },

			            'id_number':{

			            	required:'Please enter your id number',

			               minlength: 'Your id number must be at least 5 characters long'



			            },

			           // 'SETA':{

			            	//required:'Please enter your SETA',

			            	// minlength: 'Your seat number must be at least 5 characters long'

			           // },

			            'mobile':{

			              required: 'Please enter your primary cellphone number',

			            },

			            'mobile_number':{

			              required: 'Please enter your second cellphone number',

			            },

			             'gender':{

			              required: 'Please select your gender',

			            },

			             'trining_provider':{

			              required: 'Please select your training provider',

			            },

			            'learnershipSubType':{

			              required: 'Please select your learnership sub type',

			            },

			            'province':{

			              required: 'Please select your province name',

			            },

			            'district':{

			              required: 'Please select your district',

			            },

			            'region':{

			              required: 'Please select your region',

			            },

			            'city':{

			              required: 'Please select your city',

			            },

			            'Suburb':{

			              required: 'Please enter your Suburb',

			            },

			            'Street_name':{

			              required: 'Please enter your street name',

			            },

			            'Street_number':{

			              required: 'Please enter your street number',

			            },



                        assessment: 'Please select your assessment status',

			            disable: 'Please select your disabled',

			            utf_benefits: 'Please select your U.I.F Beneficiary',

			            learnershipSubType: 'Please choose your learnership Sub Type',

			            learner_accepted_training:'Please select your learner accpeted for training',

			            reason: {

                          required: 'Please enter your reason',

                        },

                        classname: {

                          required: 'Please choose your class name',

                        },

						}

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			    function Beneficiary(type,reason){

			        if(type =='no'){

			          $('#addtextarea').html('<div id=textarea><label class=form-control-label>Reason</label><textarea rows=4 name=reason  id=reason class=form-control style=resize:none>'+reason+'</textarea><label id=reason-error class=error for=reason></label></div>');

			        }

			        if(type =='yes'){

			          $('#textarea').remove();

			        }

                }

			</script> ";

				$js[] = "<script type='text/javascript'>

                $('.province').change(function(){

			        $.ajax({

			            url: 'learner-get-destrict',

			            data: { 'value': $('.province').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			               	 	if(i == 'error'){

			                        $('.district_option').html(option);

			                        $('#district-error').show();

			                        $('#district-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select District</option>';
			                      option += '<option value='+star.id+'>'+star.name+'</option>'

			                      $('.district_option').html(test+option);

			                      $('#district-error').hide();

			                    }

			                });



			            }

			        });

			    });

			    $('.district_option').change(function(){

			       $.ajax({

			            url: 'learner-get-region',

			            data: { 'value': $('.district_option').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			               	if(i == 'error'){

			                        $('#region').html(option);

			                        $('#region-error').show();

			                        $('#region-error').html(star);

			                 }else{
								var test = '<option hidden value='+'>Select Region</option>';
			                       option += '<option value='+star.id+'>'+star.region+'</option>'

			                       $('#region').html(test+option);

			                       $('#region-error').hide();

			                }

			                });



			            }

			        });

			    });



			    $('#region').change(function(){

			       $.ajax({

			            url: 'learner-get-city',

			            data: { 'value': $('#region').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			                    if(i == 'error'){

			                        $('#city').html(option);

			                        $('#city-error').show();

			                        $('#city-error').html(star);

			                    }else{
									var test = '<option hidden value='+'>Select City</option>';
			               	   		option += '<option value='+star.id+'>'+star.city+'</option>'

			               	   		$('#city').html(test+option);

			                        $('#city-error').hide();

			               	   	}

			                });

			            }

			        });

			    });

            </script> ";
			}

			if ($page == 'create_drop_out' || $page == 'providerlearnerList') {

				$js[] = "<script>

			        $(function () {



                    $('#CreateDropOutForm').validate({

			          rules:{

			            'replacement_learner_details':{

			              required: true,

			            },

			            'date_of_resignation':{

			              required: true,

			            },

			            'reason_for_dropping_out':{

			              required: true,

			            },

			            'attachments':{

			              required: true,

			            },

			        },

                      messages:{

                      	'replacement_learner_details':{

			              required: 'Please enter your replacement learner details',

			            },

			            'date_of_resignation':{

			              required: 'Please enter your date of resignation',

			            },

			            'reason_for_dropping_out':{

			              required: 'Please enter your reason for dropping out',

			            },

			            'attachments':{

			           	 required: 'Please enter your attachments',

			            }

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			</script> ";
			}

			if ($page == 'create_stipend') {

				$js[] = "<script>

			        $(function () {

			        $('#CreateStipendForm').validate({

			          rules:{

			          	'learner_id':{

			              required: true,

			            },



			            'date':{

			              required: true,

			            },



			            'amount':{

			              required: true,

			              number:true,

			            },



			        },

                      messages:{

                      	'learner_id':{

			              required: 'Please enter your learner name',

			            },

			            'date':{

			              required: 'Please select your date',

			            },



			            'amount':{

			              required: 'Please enter your amount',

			            },







			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			</script> ";
			}

			if ($page == 'createlearnershipSubType' || $page == 'newcreatesublearnership' || $page == 'create_assessment') {

				$js[] = '<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';

				$js[] = '<script src="' . BASEURL . 'assets/admin/multiselect/jquery.multiselect.js"></script>';

				$js[] = '<script>

					    $(function () {

					    	$("select[multiple].active.3col").multiselect({

			                	placeholder: "Select Unit Standard",

					            selectAll: true,

					            optionul:function(element){

                              return $(element).html("<ul><li>spansss</li></ul>") || $(element).text();

                              },



					        });

				        });

                        $(document).ready(function(){

					        $("select[multiple].active.3col").change(function(){

					        	var brands = $("select[multiple].active.3col option:selected");

					        	var options = [];

					        	var sum=0;

					            $(brands).each(function(index, brand){

							        var options = $(this).attr("data-price");

					            	sum+=+$(this).attr("data-price");

					                //$("#min_credit").val(sum);

					                $("#total_credits_allocated").val(sum);



							    });

							});

                        });

                        $(".unitype").click(function(e){

                         var checkboxes = document.getElementsByName("unit_standard1[]");

                          console.log(checkboxes);

							var vals = "";

							for (var i=0, n=checkboxes.length;i<n;i++)

							{

							    if (checkboxes[i].checked)

							    {

							        vals += ","+checkboxes[i].value;

							    }

							}

							if (vals) vals = vals.substring(1);



                        });

		                $(function() {
							$.validator.addMethod("full_name", function(value, element) {

								// allow any non-whitespace characters as the host part

								return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);

							  }, "Only letters and white space allowed.");

		                 	$("#sublearnshipform").validate({

							    rules: {

							      learnship_id: { required: true },

							      sub_type: { required: true },

							      "unit_standard[]": { required: true },

							      min_credit: { required: true, number: true },

								  total_credits_allocated: { required: true, number: true },

								  facilitator_id: { required: true},

							    },

							    messages: {

							      learnship_id: "Please select your learnship name",

							      sub_type: { required : "Please enter your sub type", },

							      "unit_standard[]":{

							       required: "Please select your unit standard",



							      },

							      min_credit:{

							        required:"Please enter your minimum credits",

							        number: "Please enter valid number"

							      },

							      total_credits_allocated:{

							        required: "Please enter your total credits allocated",

							        number: "Please enter valid number"

								  },
								  facilitator_id: "Please Select Facilitator",

							    },

							    submitHandler: function(form) {

							    	validateTheForm ();

							     /* form.submit();*/

							    }

						    });

	                    });

	                    $(document).ready(function(){

					        $("#multiple_select").change(function(){

					        	var brands = $("#multiple_select input:selected");

					        	var options = [];

					        	var sum=0;

					            $(brands).each(function(index, brand){

							        var options = $(this).attr("data-price");

					            	sum+=+$(this).attr("data-price");

					            	console.log(sum)

					               // $("#min_credit").val(sum);

					                $("#total_credits_allocated").val(sum);





							    });

					        });



                        });

                        function strDes(a, b) {

								   if (a.value>b.value) return 1;

								   else if (a.value<b.value) return -1;

								   else return 0;

								 }



								console.clear();

								(function () {

								    $("#btnRight").click(function (e) {

								        var selectedOpts = $("#lstBox1 option:selected");

								        if (selectedOpts.length == 0) {

								            alert("Nothing to move.");

								            e.preventDefault();

								        }



								        $("#lstBox2").append($(selectedOpts).clone());

								        $(selectedOpts).remove();


                                        $("#lstBox2").children("option").prop("selected", true);



								        /* -- Uncomment for optional sorting --*/

								        var box2Options = $("#lstBox2 option");

								        var box2OptionsSorted;

								        box2OptionsSorted = box2Options.toArray().sort(strDes);

								        $("#lstBox2").empty();

								        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								        })



								       var sum=0; var units=[];

                                        var box2Options = $("#lstBox2 option");

                                        console.log(box2Options);

                                        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								            units.push($(opt).attr("data-id"));

								          console.log($(opt).attr("data-price"));

								           sum+=+$(opt).attr("data-price");

								        })

								         console.log(units);

                                         console.log(sum);

								        $("#total_credits_allocated").val(sum);

								        $("#lstBox2").val(units);







								        e.preventDefault();







								    });



								    $("#btnAllRight").click(function (e) {

								        var selectedOpts = $("#lstBox1 option");

								        if (selectedOpts.length == 0) {

								            alert("Nothing to move.");

								            e.preventDefault();

								        }



								        $("#lstBox2").append($(selectedOpts).clone());

								        $(selectedOpts).remove();

								        var box2Options = $("#lstBox2 option");

								        var box2OptionsSorted;

								        box2OptionsSorted = box2Options.toArray().sort(strDes);

								        $("#lstBox2").empty();

								        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								        })



								       var sum=0; var units=[];

                                        var box2Options = $("#lstBox2 option");

                                        console.log(box2Options);

                                        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								            units.push($(opt).attr("data-id"));

								          console.log($(opt).attr("data-price"));

								           sum+=+$(opt).attr("data-price");

								        })

								         console.log(units);

                                         console.log(sum);

								        $("#total_credits_allocated").val(sum);

								        $("#lstBox2").val(units);

								        e.preventDefault();


                                        $("#lstBox2").children("option").prop("selected", true);

								    });



								    $("#btnLeft").click(function (e) {

								        var selectedOpts = $("#lstBox2 option:selected");

								        if (selectedOpts.length == 0) {

								            alert("Nothing to move.");

								            e.preventDefault();

								        }



								        $("#lstBox1").append($(selectedOpts).clone());

								        $(selectedOpts).remove();

								        var box2Options = $("#lstBox2 option");

								        var box2OptionsSorted;

								        box2OptionsSorted = box2Options.toArray().sort(strDes);

								        $("#lstBox2").empty();

								        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								        })



								      var sum=0; var units=[];

                                        var box2Options = $("#lstBox2 option");

                                        console.log(box2Options);

                                        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								            units.push($(opt).attr("data-id"));

								          console.log($(opt).attr("data-price"));

								           sum+=+$(opt).attr("data-price");

								        })

								         console.log(units);

                                         console.log(sum);

								        $("#total_credits_allocated").val(sum);

								        $("#lstBox2").val(units);



								        e.preventDefault();

								    });



								    $("#btnAllLeft").click(function (e) {

								        var selectedOpts = $("#lstBox2 option");

								        if (selectedOpts.length == 0) {

								            alert("Nothing to move.");

								            e.preventDefault();

								        }



								        $("#lstBox1").append($(selectedOpts).clone());

								        $(selectedOpts).remove();

								        var box2Options = $("#lstBox2 option");

								        var box2OptionsSorted;

								        box2OptionsSorted = box2Options.toArray().sort(strDes);

								        $("#lstBox2").empty();

								        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								        })



								      var sum=0; var units=[];

                                        var box2Options = $("#lstBox2 option");

                                        console.log(box2Options);

                                        box2OptionsSorted.forEach(function(opt){

								          $("#lstBox2").append(opt);

								            units.push($(opt).attr("data-id"));

								          console.log($(opt).attr("data-price"));

								           sum+=+$(opt).attr("data-price");

								        })

								         console.log(units);

                                         console.log(sum);

								        $("#total_credits_allocated").val(sum);

								        $("#lstBox2").val(units);

								        e.preventDefault();

								    });



								}(jQuery));







					</script>';

				$js[] = "<script>

			$(function () {

				$('#learnship_id').change(function(){

				$.ajax({

						url: 'provider-get_learnership',

						data: { 'value': $('#learnship_id').val() },

						dataType:'json',

						type: 'post',

						success: function(data){

							var option = '';

						$.each(data, function(i, star) {

									if(i == 'error'){

										$('#min_credit').val();

									}else{



										$('#min_credit').val(star.total_credits);

									}

							});



						}

					});

			});
		});

		</script>";
			}

			if ($page == 'createlearnershipSubType') {
			}

			if ($page == 'learner_list') {

				$js[] = '<script>

			   $(document).on("click",".status_change",function(){

			   	var learner = $(this).data("learner");

		       // var status = ($(this).hasClass("btn-success")) ? "0" : "1";

		        var msg =((learner =="No")||(learner=="no"))? "Not Accepted" : "Accepted";

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

				        url :"change-leaner-status",

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

	        });

	        $(document).on("click",".status_accepted",function(){

	        	var learner = $(this).data("learner");

                var msg =((learner =="Yes")||(learner=="yes"))? "Not Accepted" : "Accepted";

		        var current_element = $(this);

		        var text = "";

		        swal({

	                    title: "Are you sure?",

	                    text: msg,

	                    type: "warning",

	                    showCancelButton: true,

	                    confirmButtonClass: "btn-danger",

	                    confirmButtonText: msg,

	                    cancelButtonText: "No, cancel it!",

	                    closeOnConfirm: false,

	                    closeOnCancel: false

	                },

	                function (isConfirm) {

	                    if (isConfirm) {

	                        $.ajax({

						        url :"change-leaner-status",

						        type : "POST",

						        dataType : "JSON",

						        data: {tablenm_id:$(current_element).attr("data"),learner:"yes",text:text},

						        success : function(data){

						        	if(data["status"] == 200){

						        	  location.reload();

						            }

						        },

						        error : function(jqXHR, textStatus, errorThrown){

						            swal("Error deleting!", "Please try again", "error");

						        }

			                });

	                    } else {

	                      swal("Cancelled", "Your imaginary file is safe :)", "error");

	                    }

	                });

		    });

	     </script>';
			}

			if ($page == 'create_learner_reason') {

				$js[] = "<script>

			        $(function () {

			        $('#CreateReasonForm').validate({

			          rules:{

			            'reason':{

			              required: true,

			            },

			        },

                      messages:{

			            'reason':{

			              required: 'Please enter your reason',

			            },

			        }

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });

			</script> ";
			}

			if ($page == 'create_class') {

				$js[] = "<script>

		        $(function () {


					$.validator.addMethod('full_name', function(value, element) {

						// allow any non-whitespace characters as the host part

						return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);

					}, 'Only letters and white space allowed.');

		            $('#CreateClassForm').validate({

				        rules:{

				          	'trainer_id':{

				              required: true,

				            },

				            'learnership_sub_type_id':{

				              required: true,

				            },

				            'class_name':{

							  required: true,
							},

							'facilitator_id':{

								required: true,

							  },

				        },

	                    messages:{

	                        'trainer_id':{

				              required: 'Please select your training provider',

				            },

				            'learnership_sub_type_id':{

				              required: 'Please select your learnership sub type',

				            },

				             class_name: {

	                          required: 'Please enter your class name',

							},

							facilitator_id: {

								required: 'Please select your Facilitator',

							  },

						}

			        });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			            form.submit();

			           }

		            });

		        });

	        </script> ";
			}

			if ($page == 'create_learner_marks') {

				$js[] = "<script>

			    $(function() {

			        $('#CreateLearnerMarksForm').validate({

			            'rules': {

			                'year': {

			                	required:true,

			                	number:true,

			                	},

			                'learnership_sub_type': {

			                	required:true,

			                	},



			                 'learner_classname':{

			                    'required': true,

			                },

			                'facilirator':{

			                  'required': true,

			                },

			               'attachment':{

			                  'required': true,

			                },

			            },

			            'messages': {

			                'year': 'Please choose your year',

			                'learnership_sub_type': 'Please select your learnership sub type',



			                'learner_classname':{

			                  'required': 'Please select your classname',

			                },

			                'facilirator':{

			                  'required': 'Please enter your faciliator',

			                },

			               'attachment':{

			                  'required': 'Please enter your attachment',

			                },

			            },

			            submitHandler: function(form) {

			                form.submit();

			            }

			        });

			    });



			    $('.learnshipsubtype').change(function(){

			        $.ajax({

			            url: 'Faciltator-getclassname',

			            data: { 'value': $('.learnshipsubtype').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			                    if(i == 'error'){

			                        $('.learner_classname').html(option);

			                        $('#learner_classname-error').show();

			                        $('#learner_classname-error').html(star);

			                    }else{

			                      option += '<option value='+star.id+'>'+star.class_name+'</option>'

			                      $('.learner_classname').html('<option>Select Class Name</option>'+option);

			                      $('#learner_classname-error').hide();

			                   }

			                });



			            }

			        });

			    });

            </script>";
			}

			if ($page == 'create_bank') {

				$js[] = "<script>

			    $(function() {
					$.validator.addMethod('full_name', function(value, element) {

						// allow any non-whitespace characters as the host part

						return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);

					}, 'Only letters and white space allowed.');


			        $('#CreateBankForm').validate({

			            'rules': {

			                'created_by_first_name': {

								required:true,
								full_name : true



			                	},

			                'created_by_surname':{

			                	required:true,
								full_name : true

			                },



			                'start_date':{

			                  'required': true,

			                },

			                'end_date':{

			                  'required': true,

			                },

			                'quater_name':{

			                  'required': true,

			                },

			               'document':{

			                  'required': true,

			                },

			            },

			            'messages': {

			                'created_by_first_name': { required :'Please choose your First name',},

			                'created_by_surname': { required : 'Please choose Surname', },





			                'start_date':{

			                  'required': 'Please select your Start',

			                },

			                'end_date':{

			                  'required': 'Please enter your End Date',

			                },

			               'quater_name':{

			                  'required': 'Please enter your quater name ',

			                },

			                 'document':{

			                  'required': 'Please enter your attachment',

			                },

			            },

			            submitHandler: function(form) {

			                form.submit();

			            }

			        });

			    });

			    </script>";
			}

			if ($page == 'learner-attandance') {

				$js[] = "<script>

			    $(function() {
					$('#learner_id').keyup(function(){
				debugger;
						$.ajax({

							 url: 'provider-getlearner',

							 data: { 'value': $('#learner_id').val() },

							 dataType:'json',

							 type: 'post',

							 success: function(data){

								 var option = '';

								$.each(data, function(i, star) {

									 if(i == 'error'){

										 $('#learner_name').val(option);

										 $('#learner_surname').val(option);

										 $('#learnship_id').val(option);
										 $('#learnship_ids').val(option);
										 $('#learnership_sub_type_id').val(option);
										 $('#learnership_sub_type_ids').val(option);
										 $('#learner_classname').val(option);
										 $('#city-error').html(star);

									 }else{

										$('#learner_name').val(star.first_name);

										$('#learner_surname').val(star.surname);

										$('#learnship_id').val(star.learnshipname);
										$('#learnship_ids').val(star.learnership_id);
										$('#learnership_sub_type_id').val(star.sublearnshipname);
										$('#learnership_sub_type_ids').val(star.sublearnship_id);
										$('#learner_classname').val(star.classname);

									 }

								 });

							 }
							})
						 });

			        $('#CreateAttendanceForm').validate({

			            'rules': {

			                'learner_id': {

			                	required:true,



			                	},

			                'date':{

			                	required:true,

			                },

			                'learnership_subtype': {

			                	required:true,

			                	},



			                'learner_name':{

			                    'required': true,

			                },

			                'learner_surname':{

			                  'required': true,

			                },

			               'learner_class':{

			                  'required': true,

							},



			            },

			            'messages': {

			                'year': 'Please Enter Learner ID number',

			                'date':'Please choose your week ending date',

			                'learnership_subtype': 'Please select your learnership sub type',

							'learner_id':{

								'required': 'Please Enter Learner ID',

							  },
			                'learner_name':{

			                  'required': 'Please Enter Valid Learner ID',

			                },

			                'learner_surname':{

			                  'required': 'Please Enter Valid Learner ID',

			                },

			               'learner_class':{

			                  'required': 'Please enter Learner Classname',

			                },

							// 'reason_not_attend':{

							// 	'required': 'Please select Reason',

							//   },


			            },

			            submitHandler: function(form) {

			                form.submit();

			            }

			        });

			    });

			    $('.learnshipsubtype').change(function(){

			        $.ajax({

			            url: 'provider-getclassname',

			            data: { 'value': $('.learnshipsubtype').val() },

			            dataType:'json',

			            type: 'post',

			            success: function(data){

			                var option = '';

			               $.each(data, function(i, star) {

			                    if(i == 'error'){

			                        $('.classname').html(option);

			                        $('#learner_classname-error').show();

			                        $('#learner_classname-error').html(star);

			                    }else{

			                      option += '<option value='+star.id+'>'+star.class_name+'</option>'

			                      $('.classname').html('<option>Select Class Name</option>'+option);

			                      $('#learner_classname-error').hide();

			                   }

			                });



			            }

			        });

			    });

            </script>";
			}

			if ($page == 'user_list') {
				$js[] = '<script>
        	 function deleteuser(tablename,columnname,id){
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
		                function (isConfirm) {
		                    if (isConfirm) {
		                        $.ajax({
		                            type:"GET",
								    url: "Provider-User-Delete?table="+tablename+"&behalf="+columnname+"&data="+id,
		                            success : function(data){
		                                swal("Deleted!", "Record Delete Successfully.", "success");
		                                $("#del-"+id).remove();
		                            },
		                            error : function(jqXHR, textStatus, errorThrown){
		                                swal("Error deleting!", "Please try again", "error");
		                            }
		                        });
		                    } else {
		                      swal("Cancelled", "Your imaginary file is safe ", "error");
		                    }
		                });
		            }
        	</script>';
			}

			if ($page == 'create_user') {
				$js[] = "<script>
			        $(function () {
			            $.validator.addMethod('email', function(value, element) {
                        // allow any non-whitespace characters as the host part
                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
                        }, 'Please enter a valid email address.');

                        $.validator.addMethod('mobile', function (value, element) {
			              return this.optional(element) || /^[0-9]{9}$/.test(value);
						}, 'Invalid Mobile Number');

						$.validator.addMethod('fullname', function(value, element) {

							// allow any non-whitespace characters as the host part

								return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );

							}, 'Only letters and white space allowed.');


				        $('#CreateUserForm').validate({
					        rules:{
					            first_name:{
								 required: true,
								 fullname : true
		                        },
		                        second_name:{
								 required: true,
								 fullname : true

		                        },
		                        email:{
								 required: true,
								 email : true
		                        },
		                        mobile:{
		                         required: true,
		                        },
		                        password:{
		                         required: true,
		                        },
		                        designation:{
								 required: true,
								 fullname : true

		                        },
		                    },
		                    messages:{
		                        first_name: {
		                          required: 'Please enter uesr first name',
		                        },
		                        second_name: {
		                          required: 'Please enter user second number',
		                        },
		                        email: {
		                          required: 'Please enter user contact email',
		                        },
		                        mobile: {
		                          required: 'Please enter user mobile number',
		                        },
		                        password: {
		                          required: 'Please enter user password',
		                        },
		                        designation: {
		                          required: 'Please enter user designation',
		                        },
		                    }
					        });
					        $.validator.setDefaults({
					           submitHandler: function(form) {
					           form.submit();
					        }
				        });
			        });
			      </script> ";
			}

			if ($page == 'quaterly_report_list') {
				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>';

				$js[] = '<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>';

				$js[] = '<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>';

				$js[] = '<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>';

				$js[] = "<script>



			$(document).ready(function() {

				var table=$('.table').DataTable( {

					dom: 'Bfrtip',
					columnDefs: [
						{
							'searchable': false,
							'orderable': false,
							'targets': 0
						},
					],
					order: [[0, 'asc']] ,


					buttons: [

					{

					extend: 'pdfHtml5',

					orientation: 'landscape',//landscape give you more space

					pageSize: 'A0',//A0 is the largest A5 smallest(A0,A1,A2,A3,legal,A4,A5,letter))

					},


					'csv', 'excel', 'print' ,'colvis'

					]

				} );

				$('.table').addClass('nowrap')
				table.on('order.dt search.dt', function () {
					table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
						cell.innerHTML = i + 1;
						table.cell(cell).invalidate('dom');
					});
				}).draw();

			} );





			</script>";
			}

			if ($page == 'banking-detail') {
				$js[] = "<script>

			        $(function () {

						$('#learner_id').keyup(function(){
							debugger;
							$.ajax({

								 url: 'provider-getlearner',

								 data: { 'value': $('#learner_id').val() },

								 dataType:'json',

								 type: 'post',

								 success: function(data){

									 var option = '';

									$.each(data, function(i, star) {

										 if(i == 'error'){

											 $('#learner_name').val(option);

											 $('#learner_surname').val(option);
											 $('#learner_classname').val(option);

											 $('#learnship_id').val(option);
											 $('#learnership_sub_type_id').val(option);
											 $('#bank_name').val(option);
											 $('#bank_branch_name').val(option);
											 $('#account_type').val(option);
											 $('#branch_code').val(option);
											 $('#account_number').val(option);
											 $('#account_holder_name').val(option);
											 $('#account_holder_surname').val(option);
											 $('#account_holder_idnumber').val(option);
											 $('#account_holder_id').val(option);
										 }else{

											$('#learner_name').val(star.first_name);

											$('#learner_surname').val(star.surname);
											$('#learnship_id').val(star.learnshipname);
											$('#learner_classname').val(star.classname);
											$('#learnership_sub_type_id').val(star.sublearnshipname);
											$('#bank_name').val(star.bank_name);
											$('#bank_branch_name').val(star.branch_name);
											$('#account_type').val(star.bank_account_type);
											$('#branch_code').val(star.branch_code);
											$('#account_number').val(star.bank_account_number);
											$('#account_holder_name').val(star.first_name);
											$('#account_holder_surname').val(star.surname);
											$('#account_holder_idnumber').val(star.id_number);
											$('#account_holder_id').val(star.account_holder_id);

										 }

									 });

								 }
								})
							 });

							 $('.learnship_id').change(function(){

								$.ajax({

									url: 'provider-get_sublearnership',

									data: { 'value': $('.learnship_id').val() },

									dataType:'json',

									type: 'post',

									success: function(data){

										var option = '';

									   $.each(data, function(i, star) {

												if(i == 'error'){

												$('.learnership_sub_type_id').html(option);

												$('#learnership_sub_type_id-error').show();

												$('#learnership_sub_type_id-error').html(star);

											}else{
												var test = '<option hidden value='+'>Select Sublearnership</option>';
											  option += '<option value='+star.id+'>'+star.sub_type+'</option>'

											  $('.learnership_sub_type_id').html(test+option);

											  $('#learnership_sub_type_id-error').hide();

											}

										});



									}

								});

							});
							$('.learnership_sub_type_id').change(function(){

								$.ajax({

									url: 'provider-getclassname',

									data: { 'value': $('.learnership_sub_type_id').val() },

									dataType:'json',

									type: 'post',

									success: function(data){

										var option = '';

									   $.each(data, function(i, star) {

												if(i == 'error'){

												$('.learner_classname').html(option);

												$('#learner_classname-error').show();

												$('#learnership_sub_type_id-error').html(star);

											}else{
												var test = '<option hidden value='+'>Select Class</option>';
											  option += '<option value='+star.class_name+'>'+star.class_name+'</option>'

											  $('.learner_classname').html(test+option);

											  $('#learner_classname-error').hide();

											}

										});



									}

								});

							});

			        	$.validator.addMethod('learner_name', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');



                        $.validator.addMethod('surname', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');



			            $.validator.addMethod('email', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );

                        }, 'Please enter a valid email address.');



                        $.validator.addMethod('employer_contact_number', function (value, element) {

			              return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Employer Contact Number');





                        $.validator.addMethod('mobile', function (value, element) {

			            return this.optional(element) || /^[0-9]{9}$/.test(value);

			            }, 'Invalid Mobile Number');



                        $.validator.addMethod('password',function(value, element) {

                           return /^[A-Za-z0-9\d=!\-@._*]+$/.test(value);

                        },'Password Formate Not Match');



						$('#CreateBankingDetailForm').validate({

							rules:{

								'learner_name':{

								required: true,
								learner_name : true

							  },

							  'learner_surname':{

								  required: true,
								  learner_name : true

								},
								'learner_id' :{

								  required: true,

								},
								'learnship_id':{

								  required: true,

								},
								'learnership_sub_type_id':{

									required: true,

								  },
								  'learner_classname':{

									required: true,
									learner_name : true


								  },
								'learner_class':{

								  required: true,

								},
								'bank_name':{

								  required: true,
								  learner_name : true

								},
								// 'bank_branch_name':{

								//   required: true,
								//   learner_name : true

								// },
								'branch_code':{

								  required: true,

								},
								'account_number':{

								  required: true,

								},
								'account_type':{

								  required: true,
								  learner_name : true

								},
								'account_holder_name':{

								  required: true,

								  learner_name : true

								},
								'account_holder_surname':{

								  required: true,
								  learner_name : true

								},
								'account_holder_idnumber':{

								  required: true,

								},
								'account_holder_id':{

								  required : true,

							  },
							  'account_holder_proof_id':{

								  required : true,

							  }

							  },

							messages:{

								'learner_name':{

								required: 'Please enter valid Learner ID',

							  },
							  'learner_surname':{

								  required: 'Please enter valid Learner ID',

								},
								'learner_id' :{

								  required: 'Please enter ID number',

								},
								'learnship_id':{

								  required: 'Please select Learnership ',

								},
								'learnership_sub_type_id':{

									required: 'Please select Learnership Subtype',

								  },

								'learner_classname':{

								  required: 'Please select Learner class',

								},
								'bank_name':{

								  required: 'Please enter Learner Bank Name',

								},
								// 'bank_branch_name':{

								//   required: 'Please enter Learner Bank Branch name',

								// },
								'branch_code':{

								  required: 'Please enter Learner Branch Code',

								},
								'account_number':{

								  required: 'Please enter Learner Account Number',

								},
								'account_type':{

								  required: 'Please enter Learner Account Type',

								},
								'account_holder_name':{

								  required: 'Please enter Account Holder name',

								},
								'account_holder_surname':{

								  required: 'Please enter Account Holder surname',

								},
								'account_holder_idnumber':{

								  required: 'Please enter Account Holder ID number',

								},
								'account_holder_id':{

								  required : 'Please choose an Account Holder ID',

							  },
							  'account_holder_proof_id':{

								  required : 'Choose Account Holder Proof ID',

							  }

						  }

						  });

			        $.validator.setDefaults({

			           submitHandler: function(form) {

			           form.submit();

			        }

			      });

			    });
			</script>";
			}

			if ($page == 'createLearnership') {

				$js[] = "<script>

						$(function () {

							$.validator.addMethod('fname', function(value, element) {

								// allow any non-whitespace characters as the host part

									return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

								}, 'Only letters and white space allowed.');


							$('#learnshipform').validate({

								rules:{

									name:{
										required: true,


									},

									saqa_registration_id:{

									 required: true,

									},
									total_credits:{

										required: true,

									   },


								},

								messages:{

									name: {

									  required: 'Please enter Learnership name',

									},

									saqa_registration_id: {

									  required: 'Please enter SAQA Registration ID',

									},
									total_credits: {

										required: 'please enter total credits',

									  },

								}

								});

								$.validator.setDefaults({

								   submitHandler: function(form) {

								   form.submit();

								}

							});

						});

					  </script> ";
			}

			if ($page == 'createLearner') {
				$js[] = "<script>

					$(function () {

						$('.learnship_id').change(function(){

							$.ajax({

								url: 'provider-get_sublearnership',

								data: { 'value': $('.learnship_id').val() },

								dataType:'json',

								type: 'post',

								success: function(data){

									var option = '';

								   $.each(data, function(i, star) {

											if(i == 'error'){

											$('.learnership_sub_type_id').html(option);

											$('#learnership_sub_type_id-error').show();

											$('#learnership_sub_type_id-error').html(star);

										}else{
											var test = '<option hidden value='+'>Select Sublearnership</option>';
										  option += '<option value='+star.id+'>'+star.sub_type+'</option>'

										  $('.learnership_sub_type_id').html(test+option);

										  $('#learnership_sub_type_id-error').hide();

										}

									});



								}

							});

							});

							$('.learnership_sub_type_id').change(function(){

							$.ajax({

								url: 'provider-getclassname',

								data: { 'value': $('.learnership_sub_type_id').val() },

								dataType:'json',

								type: 'post',

								success: function(data){

									var option = '';

								   $.each(data, function(i, star) {

											if(i == 'error'){

											$('.learner_classname').html(option);

											$('#learner_classname-error').show();

											$('#learnership_sub_type_id-error').html(star);

										}else{
											var test = '<option hidden value='+'>Select Class</option>';
										  option += '<option value='+star.class_name+'>'+star.class_name+'</option>'

										  $('.learner_classname').html(test+option);

										  $('#learner_classname-error').hide();

										}

									});



								}

							});

							});



						$('.province').change(function(){
							$.ajax({
								url: 'provider-getdestrict',
								data: { 'value': $('.province').val() },
								dataType:'json',
								type: 'post',
								success: function(data){
									var option = '';
								   $.each(data, function(i, star) {
										if(i == 'error'){
											$('.district_option').html(option);
											$('#district-error').show();
											$('#district-error').html(star);
										}else{
											var test = '<option hidden value='+'>Select District</option>'
										  option += '<option value='+star.id+'>'+star.name+'</option>'
										  $('.district_option').html(test+option);
										  $('#district-error').hide();
										}
									});

								}
							});
						});
						$('.district_option').change(function(){
						   $.ajax({
								url: 'provider-getcity',
								data: { 'value': $('.district_option').val() },
								dataType:'json',
								type: 'post',
								success: function(data){
									var option = '';
								   $.each(data, function(i, star) {
									if(i == 'error'){
										$('#city').html(option);
										$('#city-error').show();
										$('#city-error').html(star);
									}else{
									var test = '<option hidden value='+'>Select City</option>'
										option += '<option value='+star.id+'>'+star.city+'</option>'
										$('#city').html(test+option);
										$('#city-error').hide();
									}
									});

								}
							});
						});

						$('#region').change(function(){
						   $.ajax({
								url: 'provider-getcity',
								data: { 'value': $('#region').val() },
								dataType:'json',
								type: 'post',
								success: function(data){
									var option = '';
								   $.each(data, function(i, star) {
										if(i == 'error'){
											$('#city').html(option);
											$('#city-error').show();
											$('#city-error').html(star);
										}else{
										var test = '<option hidden value='+'>Select City</option>'
											option += '<option value='+star.id+'>'+star.city+'</option>'
											$('#city').html(test+option);
											$('#city-error').hide();
										}
									});
								}
							});
						});

						$('#city').change(function(){
							$.ajax({
								 url: 'provider-getmunicipality',
								 data: { 'value': $('#city').val() },
								 dataType:'json',
								 type: 'post',
								 success: function(data){
									 var option = '';
									$.each(data, function(i, star) {
										 if(i == 'error'){
											 $('#municipality').html(option);
											 $('#municipality-error').show();
											 $('#municipality-error').html(star);
										 }else{
										 var test = '<option hidden value='+'>Select Municipality</option>'
											 option += '<option value='+star.municipality+'>'+star.municipality+'</option>'
											 $('#municipality').html(test+option);
											 $('#municipality-error').hide();
										 }
									 });
								 }
							 });
						 });
						$.validator.addMethod('arsname', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');



                        $.validator.addMethod('surname', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

                        }, 'Only letters and white space allowed.');


			            $.validator.addMethod('check___email', function(value, element) {

                        // allow any non-whitespace characters as the host part

                            return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );

                        }, 'Please enter a valid email address.');


						$('#learnerForm').validate({
							rules: {

								full_name: {
									required: true,
									arsname: true
								},

								surname: {
									required: true,
									arsname: true
								},
								assessment: 'required',
								disable: 'required',
								utf_benefits: 'required',
								learnship_id: 'required',
								learnershipSubType: 'required',
								email: {
									required: true,
									check___email: true
								},

								id_number: {
									required: true,
									minlength: 13,
									maxlength: 13
								},
								//SETA: {
									//required: true,
									//minlength: 5
								//},
								mobile: {
									required: true,
									minlength: 9,
									maxlength: 9,
									number: true
								},
								mobile_number: {
									required: true,
									minlength: 9,
									maxlength: 9,
									number: true
								},
								gender: {
									required: true
								},
								password: {
									required: true,
									minlength: 5
								},
								classname:{
									required: true,
								},
								province: {
									required: true
								},
								district: {
									required: true
								},
								region: {
									required: true
								},
								city: {
									required: true
								},
								Suburb: {
									required: true
								},
								municipality: {
									required: true
								},
								Street_name: {
									required: true
								},

								reason:{
								   required: true,
								},
								learner_accepted_training:{
									required: true,
								},
								//employer_name:{
									//required:true,
								//},
								bank_name:{
									required: true,
								},
								bank_account_type:{
								  required: true,
								},
								bank_account_number:{
								  required: true,
								},
								branch_name:{
								  required: true,
								},
								branch_code:{
								  required: true,
								},
								upload_proof_of_banking:{
								  required: true,
								},

							},

							messages: {
								full_name: {
								required : 'Please enter your full name',
								},
								surname:{
								required :'Please enter your surname',
								},
								email: {
									required :'Please enter a valid email address',
								},
								gender: 'Please select your gender',
								province: 'Please select your province',
								district: 'Please select your district',
								region: 'Please select your region',
								city: 'Please select your city',
								assessment: 'Please select your assessment',
								disable: 'Please select your status',
								utf_benefits: 'Please select your UTF Beneficiary',
								learnship_id: 'Please choose your learnership Type',
								learnershipSubType: 'Please choose your learnership Sub Type',
								Suburb: 'Please enter your suburb',
								municipality: {
										required: 'Please select your Municipality'
									},
								Street_name:{
								 required: 'Please enter your street name'
								},
								  employer_name: {
											  required: 'Please enter your employer name',
											},

								id_number: {
									required: 'Please enter your id number',
									minlength: 'Your id number must  13 characters long',
									maxlength: 'Your id number must  13 characters long',

								},
								password:{
									required: 'Please enter your password',
									minlength: 'Your password must be at least 5 characters long'
								},
								SETA: {
									required: 'Please enter your id seat number',
									minlength: 'Your seat number must be at least 5 characters long'
								},
								mobile: {
									required: 'Please enter your mobile number',
									minlength: 'Your mobile number must be at least 9 characters long'
								},
								mobile_number: {
									required: 'Please enter your mobile number',
									minlength: 'Your mobile number must be at least 9 characters long'
								},
								reason: {
									required: 'Please enter your reason',
								},
								learner_accepted_training:'Please select your learner accpeted for training',
								classname: {
									required: 'Please choose your class name',
								},
								bank_name: {
									required: 'Please enter your bank name',
								},
								bank_account_type: {
								  required: 'Please enter your bank account type',
								},
								bank_account_number: {
								  required: 'Please enter your bank account number',
								},
								branch_name: {
								  required: 'Please enter your branch name',
								},
								branch_code: {
								  required: 'Please enter your branch code',
								},
								upload_proof_of_banking: {
								  required: 'Please enter your upload proof of banking',
								},
							},
							submitHandler: function(form) {
								form.submit();
							}
						})
						});
				  </script> ";
			}

			if ($page == 'createUnit') {
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('fname', function(value, element) {
						// allow any non-whitespace characters as the host part
							return this.optional( element ) || /^[a-zA-Z ]*$/.test( value );

							}, 'Only letters and white space allowed.');

						$('#unitform').validate({

							rules:{

								title:{

								 required: true,
								fname: true
								},

								total_credits:{

									required: true,

								   },

								   unit_standard_type:{

									required: true,

								   },

								   standard_id:{

								 required: true,

								},



							},

							messages:{

								title: {

								  required: 'Please enter Title',

								},

								total_credits: {

									required: 'Please enter Total credits',

								  },

								  unit_standard_type: {

									required: 'Please select	 Unit Standard Type',

								  },

								  standard_id: {

								  required: 'Please enter Statndard ID',

								},


							}

							});

							$.validator.setDefaults({

							   submitHandler: function(form) {

							   form.submit();

							}

						});

					});

				  </script> ";
			}

			if($page == 'createUser'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#Createuser').validate({
						rules:{
							first_name:{
								required: true,
							},
							last_name:{
								required: true,
							},
							organization_name:{
								required: true,
							},
							department:{
								required: true,
							},
							email:{
								required: true,
							},
							gender:{
								required: true,
							},
							mobile:{
								required: true,
							},
							province:{
								required: true,
							},
							city:{
								required: true,
							},
							user_role:{
								required: true,
							},

						},
						messages:{
							first_name: {
								required: 'Please Enter First Name',
							},
							last_name: {
								required: 'Please Enter Last Name',
							},
							organization_name: {
								required: 'Please Enter Organization Name',
							},
							department: {
								required: 'Please Select Department',
							},
							email: {
								required: 'Please Enter Email Address',
							},
							gender: {
								required: 'Please Select Gender',
							},

							mobile: {
								required: 'Please Enter Mobile Number ',
							},
							province: {
								required: 'Please Select Province ',
							},
							city: {
								required: 'Please Select City ',
							},
							user_role: {
								required: 'Please Select User Role',
							},

						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}
			if($page == 'createDepartment'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#createDepartment').validate({
						rules:{
							department_name:{
								required: true,
							},


						},
						messages:{
							department_name: {
								required: 'Please Enter Department Name',
							},


						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}
			if($page == 'craeteUserGroup'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#userGroup').validate({
						rules:{
							group_name:{
								required: true,
							},
							department:{
								required: true,
							},
							'user[]' : {
								required: true,
							},

						},
						messages:{
							group_name: {
								required: 'Please Enter Group Name',
							},
							department: {
								required: 'Please Enter Department',
							},
							'user[]':{
								required: 'Please Select User',
							},
						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}
			if($page == 'craeteUserRole'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#craeteUserRole').validate({
						rules:{
							user_name:{
								required: true,
							},
							department:{
								required: true,
							},
							role : {
								required: true,
							},
						},
						messages:{
							user_name: {
								required: 'Please Enter Group Name',
							},
							department: {
								required: 'Please Enter Department',
							},
							role:{
								required: 'Please Select User',
							},
						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}
			if($page == 'createNewProgramme'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#createNewProgramme').validate({
						rules:{
							programme_name:{
								required: true,
							},
							start_date:{
								required: true,
							},
							end_date : {
								required: true,
							},
							budget:{
								required: true,
							}

						},
						messages:{
							programme_name: {
								required: 'Please Enter Group Name',
							},
							start_date: {
								required: 'Please Select Start Date',
							},
							end_date:{
								required: 'Please Select End Date',
							},
							budget:{
								required: 'Please Enter Budget',
							}
						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}

			if($page == 'createNewExpenseItem'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#createExpenseItem').validate({
						rules:{
							item_name:{
								required: true,
							},


						},
						messages:{
							item_name: {
								required: 'Please Enter Item Name',
							},

						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}
			if($page == 'createSubContractorWorkType'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#subContractorType').validate({
						rules:{
							sub_contractor_type:{
								required: true,
							},
						},
						messages:{
							sub_contractor_type: {
								required: 'Please Enter Sub Contractor Name',
							},
						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}

			if($page == 'createNewSubcontractor'){
				$js[] = "<script>
				$(function () {
					$.validator.addMethod('employer_contact_email', function(value, element) {
						// allow any non-whitespace characters as the host part
						return this.optional( element ) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
					}, 'Please enter a valid employer email address.');
					$.validator.addMethod('employer_contact_number', function (value, element) {
						return this.optional(element) || /^[0-9]{9}$/.test(value);
					}, 'Invalid Employer Contact Number');
					$('#createNewSubcontractor').validate({
						rules:{
							company_name:{
								required: true,
							},
							first_name:{
								required: true,
							},
							last_name:{
								required: true,
							},
							mobile_number:{
								required: true,
							},
							email:{
								required: true,
							},
							company_req_no:{
								required: true,
							},
							work_type:{
								required: true,
							},
							province:{
								required: true,
							},
							city:{
								required: true,
							},
							Street_name:{
								required: true,
							},

							Street_number:{
								required: true,
							},
							city:{
								required: true,
							},
							user_role:{
								required: true,
							},

						},
						messages:{
							company_name: {
								required: 'Please Enter Company Name',
							},
							first_name: {
								required: 'Please Enter First Name',
							},

							last_name: {
								required: 'Please Enter Last Name',
							},
							mobile_number: {
								required: 'Please Enter Mobile Number ',
							},
							email: {
								required: 'Please Enter Email Address',
							},
							company_req_no: {
								required: 'Please Enter Company Registration Nubmer',
							},
							work_type: {
								required: 'Please Select Subcontractor Type of Work',
							},
							province: {
								required: 'Please Select Province ',
							},
							city: {
								required: 'Please Select City ',
							},
							Street_name: {
								required: 'Please Select Street Name',
							},
							Street_number: {
								required: 'Please Select Street Number ',
							},
							suburb: {
								required: 'Please Select City ',
							},


							user_role: {
								required: 'Please Select User Role',
							},

						}
						});
						$.validator.setDefaults({
							submitHandler: function(form) {
							   form.submit();
						}
					});
				});
			</script>";
			}

			if ($page == 'create_assessment') {
			    $js[] = "<script>

/// //////////////////////////
// ///////////////////////////////

			$('.learner_classname').change(function(){

				$.ajax({

					url: 'provider-get_class_module',

					data: { 'value': $('.learner_classname').val() },

					dataType:'json',

					type: 'post',

					success: function(data){

						var option = '';

					   $.each(data, function(i, star) {

								if(i == 'error'){

								$('.class_module').html(option);

								$('#class_module-error').show();

								$('#class_module-error').html(star);

							}else{
								var test = '<option hidden value='+'>Select Class Module</option>';
							  option += '<option value='+star.id+'>'+star.title+'</option>'

							  $('.class_module').html(test+option);

							  $('#class_module-error').hide();

							}

						});

					}

				});

			});


			</script>";
			}

			return $js;
		}
	}
