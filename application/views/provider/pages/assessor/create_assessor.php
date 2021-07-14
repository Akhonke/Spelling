<div class="container-fluid px-xl-5">
    <section class="py-5">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-12 mb-1">
                <div class="card">
                    <?php if (!empty($_GET['id'])) {
                        $name = 'Update';
                    } else {
                        $name = "CREATE ";
                    } ?>
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0"><?= $name ?> NEW ASSESSOR</h3>
                    </div>
                    <?php
                    if (!empty($this->session->flashdata('error'))) { ?>
                        <div style="color:red;text-align:center"><?= $this->session->flashdata('error'); ?></div>
                    <?php } ?>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateAssessorproviderForm">
                            <!-- <div class="line"></div> -->
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Full Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Full Name" name="fullname" class="form-control" value="<?= (isset($record)) ? $record->fullname : ''; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Surname<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Surname" name="surname" class="form-control" value="<?= (isset($record)) ? $record->surname : ''; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Email<span style="color:red;font-weight:bold;"> *</span> </label>
                                    <input type="text" placeholder="Enter Your Email" name="email" class="form-control" value="<?= (isset($record)) ? $record->email : ''; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">ID Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your ID Number" name="id_number" class="form-control" value="<?= (isset($record)) ? $record->id_number : ''; ?>">
                                </div>
                                <div class="col-md-6">
                                    <span style="position: absolute;top: 47px;z-index: 1;padding: 8px;border-right: 1px solid #ccc;">+27</span>
                                    <label class="form-control-label">Landline Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="number" placeholder="Enter Your Landline Number" name="landline" class="form-control" value="<?= (isset($record)) ? $record->landline : ''; ?>" style="position: relative;padding-left: 50px;" pattern="[0-9]{9}" title="Landline number 9 digit with 0-9">
                                </div>
                                <div class="col-md-6">
                                    <span style="position: absolute;top: 47px;z-index: 1;padding: 8px;border-right: 1px solid #ccc;">+27</span>
                                    <label class="form-control-label">Mobile Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="number" placeholder="Enter Your Mobile Number" name="mobile" class="form-control" value="<?= (isset($record)) ? $record->mobile : ''; ?>" style="position: relative;padding-left: 50px;" pattern="[0-9]{9}" title="Mobile number 9 digit with 0-9">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Province<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control province" name="province">
                                        <option label="Choose Your Province" hidden></option>
                                        <?php
                                        foreach ($province as $key => $value) {
                                        ?>
                                            <option value="<?= $value->name  ?>" <?php
                                                                                    if (isset($record)) {

                                                                                        if ($record->province == $value->name) { ?> selected="selected" <?php }
                                                                                                                                                } ?>><?= $value->name  ?>
                                            </option>
                                        <?php }
                                        ?>
                                    </select>
                                    <label id="province-error" class="error" for="province"></label>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">District<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control district_option" name="district">
                                        <?php if (!empty($_GET['id'])) {
                                            foreach ($District as $key => $value) {
                                                if ($record->province == $value->province_id) {
                                        ?>
                                                    <option value="<?= $value->id ?>" <?php
                                                                                        if (isset($record)) {

                                                                                            if ($record->district == $value->name) { ?> selected="selected" <?php }
                                                                                                                                                    } ?>><?= $value->name ?></option>
                                            <?php
                                                }
                                            }
                                        } else { ?>
                                            <option label="Select Your District" hidden></option>
                                        <?php } ?>
                                    </select>
                                    <label id="district-error" class="error" for="district"></label>
                                </div>

                                <!-- <div class="col-md-6">
                                    <label class="form-control-label">Region<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control" id="region" name="region">
                                        <?php if (!empty($_GET['id'])) {
                                            foreach ($region as $key => $value) {
                                                if ($record->province == $value->province_id && $record->district == $value->district_id) {
                                        ?>
                                                    <option value="<?= $value->id ?>" <?php
                                                                                        if (isset($record)) {

                                                                                            if ($record->region == $value->region) { ?> selected="selected" <?php }
                                                                                                                                                    } ?>><?= $value->region ?></option>
                                            <?php
                                                }
                                            }
                                        } else { ?>
                                            <option label="Select Your Region" hidden></option>
                                        <?php } ?>
                                    </select>
                                    <label id="region-error" class="error" for="region"></label>
                                </div> -->

                                <div class="col-md-6">
                                    <label class="form-control-label">City<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control" name="city" id="city">

                                        <?php if (!empty($_GET['id'])) {
                                            foreach ($city as $key => $value) {
                                                if ($record->province == $value->province_id && $record->district == $value->district_id && $record->region == $value->region_id) {
                                        ?>
                                                    <option value="<?= $value->id ?>" <?php
                                                                                        if (isset($record)) {

                                                                                            if ($record->city == $value->city) { ?> selected="selected" <?php }
                                                                                                                                                } ?>><?= $value->city ?></option>
                                            <?php
                                                }
                                            }
                                        } else { ?>
                                            <option label="Select Your City" hidden></option>
                                        <?php
                                        } ?>
                                    </select>
                                    <label id="city-error" class="error" for="city"></label>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-control-label">Municipality<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control" name="municipality" id="municipality">

                                        <?php if (!empty($_GET['id'])) {
                                            foreach ($municipality as $key => $valuemn) {
                                                if ($record->city == $valuemn->city_id) {
                                        ?>
                                                    <option value="<?= $valuemn->id ?>" <?php
                                                                                        if (isset($record)) {

                                                                                            if ($record->municipality == $valuemn->municipality) { ?> selected="selected" <?php }
                                                                                                                                                                    } ?>><?= $valuemn->municipality ?></option>
                                            <?php
                                                }
                                            }
                                        } else { ?>
                                            <option label="Select Your Municipality"></option>
                                        <?php
                                        } ?>
                                    </select>
                                    <label id="municipality-error" class="error" for="municipality"></label>
                                </div>



                                <div class="col-md-6">

                                    <label class="form-control-label">Suburb<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="text" placeholder="Enter Your Suburb" class="form-control" name="Suburb" value="<?= (isset($record)) ? $record->Suburb : ''; ?>">
                                    <label id="Suburb-error" class="error" for="Suburb"></label>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Street Name<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="text" placeholder="Enter Your Street Name" class="form-control" name="Street_name" value="<?= (isset($record)) ? $record->Street_name : ''; ?>">
                                    <label id="Street_name-error" class="error" for="Street_name"></label>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Street Number</label>

                                    <input type="text" placeholder="Enter Your Street Number" class="form-control" name="Street_number" value="<?= (isset($record)) ? $record->Street_number : ''; ?>">
                                    <label id="Street_number-error" class="error" for="Street_number"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Password<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="password" placeholder="Enter Your Password" class="form-control password" name="password" value="<?= (isset($record)) ? $record->password : ''; ?>" id="password">
                                    <label id="password-error" class="error" for="password"></label>
                                </div>
                                <div class="field_wrapper col-md-12">
                                    <div class="row">
                                        <?php
                                        if (!empty($_GET['id'])) {
                                            if (!empty($record->acreditations_file)) {
                                                $acreditations_file = unserialize($record->acreditations_file);
                                                if (!empty($acreditations_file)) {
                                                    foreach ($acreditations_file as $value) {
                                                        $key = $value['id'];
                                                        $implode = implode(',', $value);
                                        ?>
                                                        <div id="remove_file<?= $key ?>">
                                                            <div class="col-md-6">
                                                                <label class="form-control-label">Acreditations</label>
                                                                <input type="text" placeholder="Enter Your Acreditations Name" name="acreditations[]" class="form-control" value="<?= $value['acreditations']; ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-control-label">Acreditations</label>
                                                                <img src="<?= BASEURL . 'uploads/acreditationsfiles/' . $value['acreditations_file'] ?>" width="50px" height="50px">
                                                                <input type="hidden" name="acreditations_image[]" class="form-control" value="<?= $implode ?>">
                                                            </div>
                                                            <span onclick="remove_file('assessor','<?= $key ?>','<?= $record->id ?>');"><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        </div>
                                            <?php }
                                                }
                                            }
                                        } else { ?>
                                            <div class="col-md-6">
                                                <label class="form-control-label">Accreditations</label>
                                                <input type="text" placeholder="Enter Your Accreditations Name" name="acreditations[]" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-control-label">Accreditations Files</label>
                                                <input type="file" name="acreditations_file[]" class="form-control">
                                            </div>
                                        <?php } ?>
                                        <div class="col-md-6">
                                            <a href="javascript:void(0);" class="add_button btn btn-info" title="Add Accreditations" style="margin:15px 0 0">+ Add More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" id="assessorfield">
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        var maxField = 10; //Input fields increment limitation
        var addButton = $(".add_button"); //Add button selector
        var wrapper = $(".field_wrapper"); //Input field wrapper
        var fieldHTML = "<div class=row id=row_><div class=col-md-6><label class=form-control-label>Acreditations</label><input type=text name=acreditations[] class=form-control  placeholder=Enter Acreditations Name></div><div class=col-md-6><label class=form-control-label>Acreditations Files</label><input type=file name=acreditations_file[] class=form-control></div><a href=javascript:void(0); class=remove_button>Remove</a></div>";
        var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function() {
            //Check maximum number of input fields
            if (x < maxField) {
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
            $(".remove_button").addClass("btn btn-danger");
            $(".remove_button").css("margin", "15px");
        });

        //Once remove button is clicked
        $(wrapper).on("click", ".remove_button", function(e) {
            e.preventDefault();
            $(this).parent("div").remove(); //Remove field html
            x--; //Decrement field counter
        });
    });

    $(function() {
        $.validator.addMethod('full_name', function(value, element) {
            // allow any non-whitespace characters as the host part
            return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
        }, 'Only letters and white space allowed.');
        $("#CreateAssessorproviderForm").validate({
            'rules': {
                'fullname': {
                    'required': true,
                    'full_name': true
                },
                'surname': {
                    'required': true,
                    'full_name': true
                },

                'email': {
                    'required': true,
                    'email': true
                },
                'id_number': {
                    'required': true,
                    //'number':true,
                    'minlength': 5,
                },
                'mobile': {
                    'required': true,
                    'minlength': 9,
                    'maxlength': 9,
                    'number': true
                },
                'landline': {
                    'required': true,
                    'minlength': 9,
                    'maxlength': 9,
                    'number': true
                },
                'password': {
                    'required': true,
                    'minlength': 5,
                },
                'province': {
                    'required': true,
                },
                'district': {
                    'required': true,
                },
                'region': {
                    'required': true,
                },
                'city': {
                    'required': true,
                },
                'municipality':{

                    'required': true,

                },

                'Suburb': {
                    'required': true,
                    'full_name': true
                },
                'Street_name': {
                    'required': true,
                    'full_name': true
                },

            },
            'messages': {
                'fullname': {
                    'required': "Please enter your fullname",
                },
                'surname': {
                    'required': "Please enter your surname",
                },
                'email': "Please enter a valid email address",

                'id_number': {
                    'required': "Please enter your id number",
                    'minlength': "Your id number must be at least 5 characters long"
                },

                'mobile': {
                    'required': "Please enter your mobile number",
                    'minlength': "Your mobile number must be at least 9 characters long"
                },
                'landline': {
                    'required': "Please enter your mobile number",
                    'minlength': "Your mobile number must be at least 9 characters long"
                },
                'password': {
                    'required': "Please enter your password",
                    'minlength': "password must be at least 5 characters long"
                },
                'province': {
                    'required': "Please select your province name",
                },
                'district': {
                    'required': "Please select your district",
                },
                'region': {
                    'required': "Please select your region",
                },
                'city': {
                    'required': "Please select your city",
                },
                'municipality':{

                    'required': "Please select your municipality",

                },
                'Suburb': {
                    'required': "Please enter your Suburb",
                },
                'Street_name': {
                    'required': "Please enter your street name",
                },


            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });

    function remove_file(table, file_id, id) {
        swal({
                title: "Do you want delete this acreditations?",
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
            function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: "acreditationsfiledelete",
                        type: "POST",
                        data: {
                            table: table,
                            id: id,
                            file_index: file_id
                        },
                        success: function(resp) {
                            if (resp) {
                                $("#remove_file" + file_id).remove();
                                // swal("Deleted!", "Your acreditations file has been deleted.", "success");
                                location.reload(true);
                            }

                        }
                    });
                } else {
                    swal("Cancelled", "Your  acreditations is safe :)", "error");
                };
            });
    };
    $('.province').change(function() {
        $.ajax({
            url: 'provider-getdestrict',
            data: {
                'value': $('.province').val()
            },
            dataType: 'json',
            type: 'post',
            success: function(data) {
                var option = '';
                $.each(data, function(i, star) {
                    if (i == 'error') {
                        $('.district_option').html(option);
                        $('#district-error').show();
                        $('#district-error').html(star);
                    } else {
                        option += '<option value=' + star.id + '>' + star.name + '</option>'
                        $('.district_option').html('<option hidden>Select District</option>' + option);
                        $('#district-error').hide();
                    }
                });

            }
        });
    });
    $('.district_option').change(function() {
        $.ajax({
            url: 'provider-getcity',
            data: {
                'value': $('.district_option').val()
            },
            dataType: 'json',
            type: 'post',
            success: function(data) {
                var option = '';
                $.each(data, function(i, star) {
                    if (i == 'error') {
                        $('#city').html(option);
                        $('#city-error').show();
                        $('#city-error').html(star);
                    } else {
                        option += '<option value=' + star.id + ' >' + star.city + '</option>'
                        $('#city').html('<option hidden>Select City</option>' + option);
                        $('#city-error').hide();
                    }
                });

            }
        });
    });


    $('#city').change(function() {
        $.ajax({
            url: 'provider-getmunicipality',
            data: {
                'value': $('#city').val()
            },
            dataType: 'json',
            type: 'post',
            success: function(data) {
                var option = '';
                $.each(data, function(i, star) {
                    if (i == 'error') {
                        $('#municipality').html(option);
                        $('#municipality-error').show();
                        $('#municipality-error').html(star);
                    } else {
                        var test = '<option hidden value=' + '>Select Municipality</option>'
                        option += '<option value=' + star.municipality + '>' + star.municipality + '</option>'
                        $('#municipality').html(test + option);
                        $('#municipality-error').hide();
                    }
                });
            }
        });
    });
</script>