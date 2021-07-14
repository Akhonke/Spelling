<style type="text/css">
    label {
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
</style>

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->


<div class="container-fluid px-xl-5">

    <section class="py-5">

        <div class="row">

            <!-- Form Elements -->

            <div class="col-lg-12 mb-1">

                <div class="card">

                    <div class="card-header">

                        <h3 class="h6 text-uppercase mb-0">Create Learner</h3>

                    </div>

                    <div class="card-body">

                        <form class="form-horizontal" method="post" id="learnerForm" enctype="multipart/form-data">

                            <!-- <div class="line"></div> -->

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <h3 class="h6 text-uppercase mb-0">Personal Information<span style="color:red;font-weight:bold;"> *</span></h3>
                                </div>
                                <div class="col-md-6">

                                    <label class="form-control-label">Full Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Full Name" class="form-control" name="full_name" id="full_name" value="<?php if (isset($record)) {
                                                                                                                                                            echo $record->first_name;
                                                                                                                                                        } else {
                                                                                                                                                            if (isset($_POST['full_name'])) {
                                                                                                                                                                echo set_value('full_name');
                                                                                                                                                            }
                                                                                                                                                        } ?>">
                                    <span class='error_validate' style='color:red;'><?= form_error('full_name') ?></span>
                                </div>



                                <div class="col-md-6">

                                    <label class="form-control-label">Surname<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="text" placeholder="Enter Your Surname" class="form-control" name="surname" id="surname" value="<?php if (isset($record)) {
                                                                                                                                                    echo $record->surname;
                                                                                                                                                } else {
                                                                                                                                                    if (isset($_POST['surname'])) {
                                                                                                                                                        echo set_value('surname');
                                                                                                                                                    }
                                                                                                                                                } ?>">
                                    <span class='error_validate' style='color:red;'><?= form_error('surname') ?></span>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Email<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="email" placeholder="Enter Your Email" class="form-control" name="email" id="email" value="<?php if (isset($record)) {
                                                                                                                                                echo $record->email;
                                                                                                                                            } else {
                                                                                                                                                if (isset($_POST['email'])) {
                                                                                                                                                    echo set_value('email');
                                                                                                                                                }
                                                                                                                                            } ?>">
                                    <span class='error_validate' style='color:red;'><?= form_error('email') ?></span>
                                </div>


                                <div class="col-md-6">

                                    <label class="form-control-label">SETA Registration Number</span></label>

                                    <input type="text" placeholder="Enter Your SETA Number" class="form-control" name="SETA" id="SETA" value="<?php if (isset($record)) {
                                                                                                                                                    echo $record->SETA;
                                                                                                                                                } else {
                                                                                                                                                    if (isset($_POST['SETA'])) {
                                                                                                                                                        echo set_value('SETA');
                                                                                                                                                    }
                                                                                                                                                } ?>">
                                    <span class='error_validate' style='color:red;'><?= form_error('SETA') ?></span>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">ID Number<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="number" placeholder="Enter Your ID Number" class="form-control" name="id_number" value="<?php if (isset($record)) {
                                                                                                                                                echo $record->id_number;
                                                                                                                                            } else {
                                                                                                                                                if (isset($_POST['id_number'])) {
                                                                                                                                                    echo set_value('id_number');
                                                                                                                                                }
                                                                                                                                            } ?>" id="">

                                </div>

                                <div class="col-md-6">
                                    <span style="position: absolute;top: 47px;z-index: 1;padding: 8px;border-right: 1px solid #ccc;">+27</span>
                                    <label class="form-control-label">Primary Cellphone Number<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="number" placeholder="Enter Your Primary Cellphone Number" class="form-control" name="mobile" id="mobile" value="<?php if (isset($record)) {
                                                                                                                                                                        echo $record->mobile;
                                                                                                                                                                    } else {
                                                                                                                                                                        if (isset($_POST['mobile'])) {
                                                                                                                                                                            echo set_value('mobile');
                                                                                                                                                                        }
                                                                                                                                                                    } ?>" style="position: relative;padding-left: 50px;" pattern="[0-9]{9}" title="Primary Cellphone number 9 digit with 0-9">

                                </div>
                                <span class='error_validate' style='color:red;'><?= form_error('mobile') ?></span>
                                <div class="col-md-6">
                                    <span style="position: absolute;top: 47px;z-index: 1;padding: 8px;border-right: 1px solid #ccc;">+27</span>
                                    <label class="form-control-label">Second Cellphone Number<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="number" placeholder="Enter Your Second Cellphone Number" class="form-control" name="mobile_number" id="mobile_number" value="<?php if (isset($record)) {
                                                                                                                                                                                    echo $record->mobile_number;
                                                                                                                                                                                } else {
                                                                                                                                                                                    if (isset($_POST['mobile_number'])) {
                                                                                                                                                                                        echo set_value('mobile_number');
                                                                                                                                                                                    }
                                                                                                                                                                                } ?>" style="position: relative;padding-left: 50px;" pattern="[0-9]{9}" title="Second Cellphone number 9 digit with 0-9">
                                    <span class='error_validate' style='color:red;'><?= form_error('mobile_number') ?></span>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Gender<span style="color:red;font-weight:bold;"> *</span></label>

                                    <select class="form-control" name="gender">

                                        <option value="" hidden>Select Gender</option>
                                        <option value="Male" <?php if (isset($record) && $record->gender == 'Male') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['gender']) && $_POST['gender'] == 'Male') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>
                                            Male</option>
                                        <option value="Female" <?php if (isset($record) && $record->gender == 'Female') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['gender']) && $_POST['gender'] == 'Female') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>
                                            Female</option>
                                        <option value="Other" <?php if (isset($record) && $record->gender == 'Other') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['gender']) && $_POST['gender'] == 'Other') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>
                                            Other</option>

                                    </select>
                                    <span class='error_validate' style='color:red;'><?= form_error('gender') ?></span>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Learnership Type Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control learnship_id" name="learnship_id" id="learnship_id">
                                        <option value="" hidden>Select Learnership Type Name</option>
                                        <?php
                                        if (!empty($learnership)) {
                                            foreach ($learnership as $key => $learnship) { ?>
                                                <option value="<?= $learnship->id; ?>" <?php if (isset($record) && $record->learnship_id == $learnship->id) {
                                                                                            echo 'selected';
                                                                                        } else {
                                                                                            if (isset($_POST['learnship_id']) && $_POST['learnship_id'] == $learnship->id) {
                                                                                                echo 'selected';
                                                                                            }
                                                                                        } ?>><?= ucfirst($learnship->name); ?></option>
                                        <?php  }
                                        } ?>
                                    </select>
                                    <span class='error_validate' style='color:red;'><?= form_error('learnship_id') ?></span>
                                </div>

                                <div class="col-md-6">



                                    <label class="form-control-label">Learnership Sub Type<span style="color:red;font-weight:bold;"> *</span></label>



                                    <select class="form-control learnership_sub_type_id" name="learnershipSubType" id="learnership_sub_type_id">

                                        <?php
                                        if (!empty($learnershipSubType)) {
                                            foreach ($learnershipSubType as $key => $sublearnship) { ?>
                                                <option value="<?= $sublearnship->id; ?>" <?php if (isset($record) && $record->learnershipSubType == $sublearnship->id) {
                                                                                                echo 'selected';
                                                                                            } else {
                                                                                                if (isset($_POST['learnershipSubType']) && $_POST['learnershipSubType'] == $sublearnship->id) {
                                                                                                    echo 'selected';
                                                                                                }
                                                                                            } ?>><?= ucfirst($sublearnship->sub_type); ?></option>
                                        <?php  }
                                        } ?>

                                    </select>

                                    <label id="learnership_sub_type_id-error" class="error" for="learnership_sub_type_id"></label>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Class Name</label>

                                    <?php

                                    if (!empty($_GET['id'])) {



                                        //if($record->learner_classname == $classname->id){

                                    ?>

                                        <input type="hidden" name="classname" class="form-control" value="<?= $record->classname ?>">

                                        <input type="text" name="classname" class="form-control" value="<?= $record->classname ?>" readonly>

                                    <?php

                                    } else { ?>

                                        <select class="form-control learner_classname" name="classname">

                                            <option label="" value="" hidden>Select Your Class Name</option>

                                        </select>

                                    <?php } ?>



                                    <label id="classname-error" class="error" for="classname"></label>



                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Password<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="password" placeholder="Enter Your Password" class="form-control password" name="password" value="<?= (isset($record)) ? $record->password : ''; ?>" id="password">
                                    <label id="password-error" class="error" for="password"></label>
                                </div>
                                <!-- <div class="col-md-6">
                                    <label class="form-control-label">Class Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control classname" name="classname">
                                        <option label="" value="" hidden>Select Class Name</option>
                                        <?php
                                        foreach ($classname as $key => $value) {
                                        ?>
                                        <option value="<?= $value->class_name  ?>"
                                             <?php
                                                if (isset($record)) {

                                                    if ($record->classname == $value->class_name) { ?> selected="selected"
                                            <?php }
                                                } ?>
                                            ><?= $value->class_name  ?>
                                        </option>
                                        <?php }
                                        ?>
                                    </select>
                                    <label id="classname-error" class="error" for="classname"></label>
                                </div> -->
                                <div class="col-md-12">
                                    <h3 class="h6 text-uppercase mb-0">Address Information</h3>
                                </div>
                                <!-- <div class="col-md-6">

                                    <label class="form-control-label">province</label>

                                    <select class="form-control province" name="province">
                                        <option value="">Select Province</option>
                                        <?php
                                        foreach ($province as $key => $value) {
                                        ?>
                                        <option value="<?= $value->name  ?>" <?php
                                                                                if (isset($record)) {

                                                                                    if ($record->province == $value->name) { ?> selected="selected"
                                            <?php }
                                                                                } ?>><?= $value->name  ?></option>
                                        <?php
                                        }
                                        ?>

                                    </select>
                                    <span class='error_validate' style='color:red;'><?= form_error('province') ?></span>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">District</label>

                                    <select class="form-control district_option" name="district">
                                        <option value=""> Select Your District</option>
                                        <?= (isset($record)) ? '<option value=' . $record->district . '>' . $record->district . '</option>' : '<option>Select District</option>'; ?>

                                    </select>
                                    <span class='error_validate' style='color:red;'><?= form_error('district') ?></span>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Region</label>

                                    <select class="form-control" id="region" name="region">
                                        <option value="">Select Region</option>

                                        <?= (isset($record)) ? '<option value=' . $record->region . '>' . $record->region . '</option>' : '<option>Select District</option>'; ?>

                                    </select>
                                    <span class='error_validate' style='color:red;'><?= form_error('region') ?></span>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">City</label>

                                    <select class="form-control" name="city" id="city">
                                        <option value="">Select City</option>

                                        <?= (isset($record)) ? '<option value=' . $record->city . '>' . $record->city . '</option>' : '<option>Select District</option>'; ?>

                                    </select>
                                    <span class='error_validate' style='color:red;'><?= form_error('city') ?></span>
                                </div> -->
                                <div class="col-md-6">
                                    <label class="form-control-label">Province<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control province" name="province">
                                        <option label="" value="" hidden>Choose Your Province</option>
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
                                            foreach ($District as $key => $valued) {
                                                if ($record->province == $valued->province_id) {
                                        ?>
                                                    <option value="<?= $valued->id ?>" <?php
                                                                                        if (isset($record)) {

                                                                                            if ($record->district == $valued->name) { ?> selected="selected" <?php }
                                                                                                                                                        } ?>><?= $valued->name ?></option>
                                            <?php
                                                }
                                            }
                                        } else { ?>
                                            <option label="" value="" hidden>Select Your District</option>
                                        <?php } ?>
                                    </select>
                                    <label id="district-error" class="error" for="district"></label>
                                </div>

                                <!-- <div class="col-md-6">
                                    <label class="form-control-label">Region</label>
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
                                            <option label="" value="" hidden>Select Your Region</option>
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
                                            <option label="" value="" hidden>Select Your City</option>
                                        <?php
                                        } ?>
                                    </select>
                                    <label id="city-error" class="error" for="city"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Municipality<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control" name="municipality" id="municipality">

                                        <?php if (!empty($_GET['id'])) {
                                            foreach ($municipality as $key => $value) {
                                                if ($record->city == $value->city_id) {
                                        ?>
                                                    <option value="<?= $value->id ?>" <?php
                                                                                        if (isset($record)) {

                                                                                            if ($record->municipality == $value->municipality) { ?> selected="selected" <?php }
                                                                                                                                                                } ?>><?= $value->municipality ?></option>
                                            <?php
                                                }
                                            }
                                        } else { ?>
                                            <option label="" value="" hidden>Select Your Municipality</option>
                                        <?php
                                        } ?>
                                    </select>
                                    <label id="municipality-error" class="error" for="municipality"></label>
                                </div>
                                <div class="col-md-6">

                                    <label class="form-control-label">Suburb<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="text" placeholder="Enter Your Suburb" class="form-control" name="Suburb" value="<?php if (isset($record)) {
                                                                                                                                        echo $record->Suburb;
                                                                                                                                    } else {
                                                                                                                                        if (isset($_POST['Suburb'])) {
                                                                                                                                            echo set_value('Suburb');
                                                                                                                                        }
                                                                                                                                    } ?>">
                                    <span class='error_validate' style='color:red;'><?= form_error('Suburb') ?></span>
                                </div>
                                <div class="col-md-6">

<label class="form-control-label">Street Name<span style="color:red;font-weight:bold;"> *</span></label>

<input type="text" placeholder="Enter Your Street Name" class="form-control" name="Street_name"  id="Street_name" value="<?php if (isset($record)) {echo $record->Street_name;
                                                                                                                                    } else {
                                                                                                                                        if (isset($_POST['Street_name'])) {
                                                                                                                                            echo set_value('Street_name');
                                                                                                                                        }
                                                                                                                                    } ?>">
  <span class='error_validate'style='color:red;'><?= form_error('Street_name') ?></span>
</div>

                                <!-- <div class="col-md-6">

                                    <label class="form-control-label">Street Name</label>

                                    <input type="text" class="form-control" name="Street_name" placeholder="Street Name" value=" <?php if (isset($record)) {
                                                                                                                                        echo $record->Street_name;
                                                                                                                                    } else {
                                                                                                                                        if (isset($_POST['Street_name'])) {
                                                                                                                                            echo set_value('Street_name');
                                                                                                                                        }
                                                                                                                                    } ?>"  id="Street_name">
                                    <span class='error_validate'
                                        style='color:red;'><?= form_error('Street_name') ?></span>
                                    <label id="Street_name-error" class="error" for="Street_name"></label>
                                </div> -->

                                <div class="col-md-6">

                                    <label class="form-control-label">Street Number</label>

                                    <input type="number" placeholder="Enter Your Street Number" class="form-control" name="Street_number" value="<?php if (isset($record)) {
                                                                                                                                                        echo $record->Street_number;
                                                                                                                                                    } else {
                                                                                                                                                        if (isset($_POST['Street_number'])) {
                                                                                                                                                            echo set_value('Street_number');
                                                                                                                                                        }
                                                                                                                                                    } ?>">
                                    <span class='error_validate' style='color:red;'><?= form_error('Street_number') ?></span>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Employer Name</label>
                                    <select class="form-control" name="employer_name">
                                        <?php if (empty($_GET['id'])) { ?>
                                            <option value="" hidden>Select Employer Name</option>
                                        <?php } ?>
                                        <?php
                                        if (!empty($employer)) {
                                            foreach ($employer as $key => $employer_value) { ?>
                                                <option value="<?= $employer_value->employer_name; ?>" <?php if (isset($record) && $record->employer_name == $employer_value->id) {
                                                                                                            echo 'selected';
                                                                                                        } else {
                                                                                                            if (isset($_POST['employer_name']) && $_POST['employer_name'] == $employer_value->employer_name) {
                                                                                                                echo 'selected';
                                                                                                            }
                                                                                                        } ?>><?= ucfirst($employer_value->employer_name); ?></option>
                                        <?php  }
                                        } ?>
                                    </select>
                                    <label id="employer_name-error" class="error" for="employer_name"></label>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="h6 text-uppercase mb-0">Attach Document</h3>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">I.D. Copy</label>
                                    <input type="file" class="form-control" name="id_copy" value="">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Certificate Copy</label>
                                    <input type="file" class="form-control" name="certificate_copy" value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Contract Copy</label>
                                    <input type="file" class="form-control" name="contract_copy" value="">
                                </div>



                                <div class="col-md-12">
                                    <h3 class="h6 text-uppercase mb-0">Other Details</h3>
                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Learner Tax Number <span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="text" placeholder="Enter the Learner Tax Number" class="form-control"
                                       name="tax_reference" id="tax_reference" value="<?= (!empty($record->tax_reference)) ? $record->tax_reference : ''; ?>">
                                    <span class='error_validate' style='color:red;'><?= form_error('tax_reference') ?></span>
                                </div>


                                <div class="col-md-4">
                                    <label class="form-control-label">Assessment Status<span style="color:red;font-weight:bold;"> *</span></label>
                                    <div class="form-check-inline"><label class="form-check-inline"><input class="form-check-input" type="radio" name="assessment" value="yes" <?php if (isset($record) && (($record->assessment == 'yes') || ($record->assessment == 'Yes'))) {
                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                } else {
                                                                                                                                                                                    if (isset($_POST['assessment']) && $_POST['assessment'] == 'yes') {
                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                    }
                                                                                                                                                                                } ?>>Assessment Completed</label></div>
                                    <div class="form-check-inline"><label class="form-check-inline"><input class="form-check-input" type="radio" name="assessment" value="no" <?php if (isset($record) && (($record->assessment == 'no') || ($record->assessment == 'No'))) {
                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                } else {
                                                                                                                                                                                    if (isset($_POST['assessment']) && $_POST['assessment'] == 'no') {
                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                    }
                                                                                                                                                                                } ?>>Assessment Not Completed</label></div>
                                    <label id="assessment-error" class="error" for="assessment"></label>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control-label">Is the Learner Disabled ?<span style="color:red;font-weight:bold;"> *</span></label>
                                    <div class="form-check-inline"><label class="form-check-label"><input class="form-check-input" type="radio" name="disable" value="yes" <?php if (isset($record) && (($record->disable == 'yes') || ($record->disable == 'Yes'))) {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } else {
                                                                                                                                                                                if (isset($_POST['disable']) && $_POST['disable'] == 'yes') {
                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                }
                                                                                                                                                                            } ?>> Yes</label></div>
                                    <div class="form-check-inline"><label class="form-check-label"><input class="form-check-input" type="radio" name="disable" value="no" <?php if (isset($record) && (($record->disable == 'no') || ($record->disable == 'No'))) {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } else {
                                                                                                                                                                                if (isset($_POST['disable']) && $_POST['disable'] == 'no') {
                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                }
                                                                                                                                                                            } ?>> No</label></div>
                                    <label id="disable-error" class="error" for="disable"></label>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control-label">Is the Learner A U.I.F Beneficiary ?<span style="color:red;font-weight:bold;"> *</span></label>

                                    <div class="form-check-inline"><label class="form-check-inline"><input class="form-check-input" type="radio" name="utf_benefits" value="yes" <?php if (isset($record) && (($record->utf_benefits == 'yes') || ($record->utf_benefits == 'Yes'))) {
                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                    } else {
                                                                                                                                                                                        if (isset($_POST['utf_benefits']) && $_POST['utf_benefits'] == 'yes') {
                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                        }
                                                                                                                                                                                    } ?>> Yes</label></div>

                                    <div class="form-check-inline"><label class="form-check-inline"><input class="form-check-input" type="radio" name="utf_benefits" value="no" <?php if (isset($record) && (($record->utf_benefits == 'no') || ($record->utf_benefits == 'No'))) {
                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                } else {
                                                                                                                                                                                    if (isset($_POST['utf_benefits']) && $_POST['utf_benefits'] == 'no') {
                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                    }
                                                                                                                                                                                } ?>> No</label></div>
                                    <label id="utf_benefits-error" class="error" for="utf_benefits"></label>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control-label">The Learner Accepted For Training<span style="color:red;font-weight:bold;"> *</span></label><br>
                                    <div class="form-check-inline"><label class="form-check-inline" onclick="Beneficiary('yes','')"><input class="form-check-input" type="radio" name="learner_accepted_training" value="yes" <?php if (!empty($record->learner_accepted_training)) {
                                                                                                                                                                                                                                    if ((($record->learner_accepted_training == 'yes') || ($record->learner_accepted_training == 'Yes'))) {
                                                                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                } ?>> Yes</label></div>
                                    <div class="form-check-inline"><label class="form-check-inline" onclick="Beneficiary('no','<?php if (isset($record)) {
                                                                                                                                    echo $record->reason;
                                                                                                                                } else {
                                                                                                                                    echo '';
                                                                                                                                } ?>')"><input class="form-check-input" type="radio" name="learner_accepted_training" value="no" <?php if (!empty($record->learner_accepted_training)) {
                                                                                                                                                                                                                                        if ((($record->learner_accepted_training == 'no') || ($record->learner_accepted_training == 'No'))) {
                                                                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                    } ?>> No</label></div>
                                    <label id="learner_accepted_training-error" class="error" for="learner_accepted_training"></label>
                                </div>

                                <?php if (isset($record) && (($record->learner_accepted_training == 'no') || ($record->learner_accepted_training == 'No'))) { ?>
                                    <div class="col-md-12" id="textarea"><label class="form-control-label">Reason</label>
                                        <textarea rows="4" cols="50" name="reason" placeholder="Reason" id="reason" class="form-control"><?php if (isset($record)) {
                                                                                                                                                echo $record->reason;
                                                                                                                                            } ?></textarea><label id="reason-error" class="error" for="reason"></label>
                                    </div>
                                <?php } ?>
                                <div id="addtextarea" class="col-md-12">
                                </div>
                                <div class="col-md-12">
                                    <h3 class="h6 text-uppercase mb-0">Learner Banking Details</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Bank Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control bank_name" name="bank_name">
                                        <option label="Select Bank Name"></option>
                                        <option value="ABSA" <?php if (isset($record) && $record->bank_name == 'ABSA') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['bank_name']) && $_POST['bank_name'] == 'ABSA') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>ABSA</option>
                                        <option value="FNB" <?php if (isset($record) && $record->bank_name == 'FNB') {
                                                                echo 'selected';
                                                            } else {
                                                                if (isset($_POST['bank_name']) && $_POST['bank_name'] == 'FNB') {
                                                                    echo 'selected';
                                                                }
                                                            } ?>>FNB</option>
                                        <option value="Capitec" <?php if (isset($record) && $record->bank_name == 'Capitec') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['bank_name']) && $_POST['bank_name'] == 'Capitec') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>Capitec</option>
                                        <option value="Standard Bank" <?php if (isset($record) && $record->bank_name == 'Standard Bank') {
                                                                            echo 'selected';
                                                                        } else {
                                                                            if (isset($_POST['bank_name']) && $_POST['bank_name'] == 'Standard Bank') {
                                                                                echo 'selected';
                                                                            }
                                                                        } ?>>Standard Bank</option>
                                        <option value="Nedbank" <?php if (isset($record) && $record->bank_name == 'Nedbank') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['bank_name']) && $_POST['bank_name'] == 'Nedbank') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>Nedbank</option>
                                        <option value="Post Bank" <?php if (isset($record) && $record->bank_name == 'Post Bank') {
                                                                        echo 'selected';
                                                                    } else {
                                                                        if (isset($_POST['bank_name']) && $_POST['bank_name'] == 'Post Bank') {
                                                                            echo 'selected';
                                                                        }
                                                                    } ?>>Post Bank</option>
                                    </select>
                                    <label id="employer-Street-number-error" class="error" for="bank_name"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Bank Account Type (Cheque Or Savings)<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control" name="bank_account_type">
                                        <option label="" value="" hidden>Select Bank Account Type</option>
                                        <option value="Cheque" <?php if (isset($record) && $record->bank_account_type == 'Cheque') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['bank_account_type']) && $_POST['bank_account_type'] == 'Cheque') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>Cheque</option>
                                        <option value="Saving" <?php if (isset($record) && $record->bank_account_type == 'Saving') {
                                                                    echo 'selected';
                                                                } else {
                                                                    if (isset($_POST['bank_account_type']) && $_POST['bank_account_type'] == 'Saving') {
                                                                        echo 'selected';
                                                                    }
                                                                } ?>>Saving</option>
                                    </select>
                                    <label id="bank-account-type-error" class="error" for="bank_account_type"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Bank Account Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="number" placeholder="Enter Your Bank Account Number" class="form-control" name="bank_account_number" value="<?= (isset($record)) ? $record->bank_account_number : ''; ?>">
                                    <label id="bank-account-number-error" class="error" for="bank_account_number"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Branch Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Branch Name" class="form-control" name="branch_name" value="<?= (isset($record)) ? $record->branch_name : ''; ?>">
                                    <label id="branch-name-error" class="error" for="branch_name"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Branch Code<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Branch Code" class="form-control" name="branch_code" value="<?= (isset($record)) ? $record->branch_code : ''; ?>">
                                    <label id="branch-code-error" class="error" for="branch_code"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Upload Proof Of Banking<span style="color:red;font-weight:bold;"> *</span></label>
                                    <?php if (!empty($_GET['id'])) { ?>
                                        <input type="file" class="form-control" name="upload_proof_of_bankings">
                                    <?php } else {  ?>
                                        <input type="file" class="form-control" name="upload_proof_of_banking">
                                        <label id="upload-proof-of-banking-error" class="error" for="upload_proof_of_banking"></label>
                                    <?php } ?>
                                </div>

                                <div class="col-md-12">
                                    <h3 class="h6 text-uppercase mb-0">Learner Information</h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label"> Enrolment date </label>
                                    <input type="date" placeholder="Enter Your Enrolment" name="enrollment_date" class="form-control" value="" id="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Completion Date</label>
                                    <input type="date" placeholder="Enter Your  Completion Date" name="completion_date" class="form-control" value="" id="">
                                </div>
                            </div>

                            <div class="line"></div>

                            <div class="form-group row">

                                <div class="col-md-12">

                                    <div class="text-center">
                                        <?= (isset($record)) ? '<button type="submit" class="btn btn-primary">Update</button>' : '<button type="submit" class="btn btn-primary">Add</button>'; ?>
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
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> -->
<script type="text/javascript">

</script>



<script type="text/javascript">
    function Beneficiary(type, reason) {
        if (type == 'no') {
            $("#addtextarea").html('<div id="textarea"><label class="form-control-label">Reason</label><textarea rows="4" cols="50" name="reason"class=form-control  id="reason">' + reason + '</textarea><label id="reason-error" class="error" for="reason"></label></div>');
        }
        if (type == 'yes') {
            $("#textarea").remove();
        }
    }
</script>