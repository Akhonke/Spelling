<div class="container-fluid px-xl-5">
    <section class="py-5">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-12 mb-1">
                <div class="card">
                    <div class="card-header">
                        <?php if (!empty($_GET['id'])) {
                            $name = 'Update';
                        } else {
                            $name = "Create";
                        } ?>
                        <h3 class="h6 text-uppercase mb-0"><?= $name ?> Project</h3>
                    </div>
                    <?php
                    if (!empty($this->session->flashdata('error'))) { ?>
                        <div style="color:red;text-align:center"><?= $this->session->flashdata('error'); ?></div>
                    <?php } ?>

                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateProjectForm">
                            <!-- <div class="line"></div> -->
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Project Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Project Name" id="project_name" name="project_name" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                    echo $record->project_name;
                                                                                                                                                                } ?>">
                                    <label id="" class="error" for=""></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Project Type<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control " name="project_type" id="project_type">
                                        <option value="" hidden>Choose Your Project Type</option>

                                        <option value="Learnership" <?php if (!empty($record) && $record->project_type == "Learnership") {
                                                                        echo 'selected';
                                                                    } ?>>
                                            Learnership </option>
                                        <option value="Skills_Program" <?php if (!empty($record) && $record->project_type == "Skills_Program") {
                                                                            echo 'selected';
                                                                        } ?>>
                                            Skills Program</option>
                                        <option value="Bursary" <?php if (!empty($record) && $record->project_type == "Bursary") {
                                                                    echo 'selected';
                                                                } ?>>
                                            Bursary </option>
                                        <option value="wil" <?php if (!empty($record) && $record->project_type == "wil") {
                                                                echo 'selected';
                                                            } ?>>
                                            WIL (Workplace Integrated Learning </option>
                                        <option value="Internship" <?php if (!empty($record) && $record->project_type == "Internship") {
                                                                        echo 'selected';
                                                                    } ?>>
                                            Internship </option>
                                    </select>
                                    <label id="" class="error" for=""></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Province<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control province" name="province" id="province" placeholder="Choose Your Province">
                                        <option value="" hidden>Choose Your Province</option>
                                        <?php foreach ($province as $pro) { ?>
                                            <option value="<?= $pro->name ?>" <?php if (!empty($record) && $record->province == $pro->name) {
                                                                                    echo 'selected';
                                                                                } ?>> <?= $pro->name ?> </option>
                                        <?php } ?>
                                    </select>
                                    <label id="" class="error" for=""></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">District<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control district_option" name="district" id="district">
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

                                            <option label="" value="" hidden>Select Your District</option>

                                        <?php } ?>
                                    </select>
                                    <label id="district-error" class="error" for="district"></label>
                                </div>

                                <!-- <div class="col-md-6">
                                    <label class="form-control-label">Region<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control" id="region" name="region">
                                        <?php if (!empty($_GET['id'])) {

                                            foreach ($region as $key => $value) {

                                                $project = $this->common->accessrecord('district', [], ['name' => $value->district_id], 'row');

                                                if ($record->province == $value->province_id && $record->district == $project->id) {

                                        ?>

                                                    <option value="<?= $value->id ?>" <?php

                                                                                        if (isset($record)) {



                                                                                            if ($record->region == $value->id) { ?> selected="selected" <?php }
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

                                                $dist = $this->common->accessrecord('district', [], ['name' => $value->district_id], 'row');
                                                $reg = $this->common->accessrecord('region', [], ['region' => $value->region_id], 'row');

                                                if ($record->province == $value->province_id && $record->district == $dist->id && $record->region == $reg->id) {
                                        ?>
                                                    <option value="<?= $value->id ?>" <?php
                                                                                        if (isset($record)) {

                                                                                            if ($record->city == $value->city) { ?> selected="selected" <?php }
                                                                                                                                                } ?>><?= $value->city ?></option>
                                            <?php
                                                }
                                            }
                                        } else { ?>
                                            <option value="" hidden>Select Your City</option>
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
                                                $dist = $this->common->accessrecord('district', [], ['name' => $valuemn->district_id], 'row');
                                                $reg = $this->common->accessrecord('region', [], ['region' => $valuemn->region_id], 'row');
                                                $city = $this->common->accessrecord('city', [], ['city' => $valuemn->city_id], 'row');
                                                if ($record->city == $city->id) {
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
                                    <label class="form-control-label">Planned Project Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Planned Project Start Date" name="planned_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                        echo $record->planned_start_date;
                                                                                                                                                                    } ?>" id="planned_start_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Actual Project Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Actual Project Start Date" name="actual_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                    echo $record->actual_start_date;
                                                                                                                                                                } ?>" id="actual_start_date">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Planned Project End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Planned Project End Date" name="planned_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                    echo $record->planned_end_date;
                                                                                                                                                                } ?>" id="planned_end_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Actual Project End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Actual Project End Date" name="actual_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                echo $record->actual_end_date;
                                                                                                                                                            } ?>" id="actual_end_date">
                                </div>
                                <div class="col-md-12">
                                    <h3 class="h5 text-uppercase mb-1">Project Owner<span style="color:red;font-weight:bold;"> *</span></h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">First Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your First Name" name="project_owner_name" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                    echo $record->project_owner_name;
                                                                                                                                                } ?>" id="project_owner_name">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Surname<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Surname" name="project_owner_surname" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                        echo $record->project_owner_surname;
                                                                                                                                                    } ?>" id="project_owner_surname">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Email<span style="color:red;font-weight:bold;"> *</span> </label>
                                    <input type="email" placeholder="Enter Your Email" name="project_owner_email" id="project_owner_email" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                            echo $record->project_owner_email;
                                                                                                                                                                        } ?>">
                                </div>
                                <div class="col-md-6">
                                    <span style="position: absolute;top: 47px;z-index: 1;padding: 8px;border-right: 1px solid #ccc;">+27</span>
                                    <label class="form-control-label">Mobile Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="number" placeholder="Enter Your Mobile Number" name="mobile_number" id="mobile_number" class="form-control" value="<?= (isset($record)) ? $record->project_owner_mobile : ''; ?>" style="position: relative;padding-left: 50px;" pattern="[0-9]{9}" title="Mobile number 9 digit with 0-9">
                                </div>

                                <div class="col-md-6">
                                    <span style="position: absolute;top: 47px;z-index: 1;padding: 8px;border-right: 1px solid #ccc;">+27</span>
                                    <label class="form-control-label">Landline Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="number" placeholder="Enter Your Landline Number" name="landline_number" id="landline_number" class="form-control" value="<?= (isset($record)) ? $record->project_owner_landline : ''; ?>" style="position: relative;padding-left: 50px;" pattern="[0-9]{9}" title="Landline number 9 digit with 0-9">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">I.D Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your I.D" class="form-control id_number" name="id_number" value="<?php if (!empty($record)) {
                                                                                                                                                echo $record->project_owner_id_number;
                                                                                                                                            } ?>" id="id_number">

                                    <label id="" class="error" for=""></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Gender<span style="color:red;font-weight:bold;"> *</span></label>
                                    <select class="form-control" name="gender" id="gender">

                                        <option value="" hidden>Select Gender</option>
                                        <option value="Male" <?php if (!empty($record) && $record->project_owner_gender == 'Male') {
                                                                    echo 'selected';
                                                                } ?>>Male</option>
                                        <option value="Female" <?php if (!empty($record) && $record->project_owner_gender == 'Female') {
                                                                    echo 'selected';
                                                                } ?>>Female</option>
                                        <option value="Other" <?php if (!empty($record) && $record->project_owner_gender == 'Other') {
                                                                    echo 'selected';
                                                                } ?>>Other</option>

                                    </select>

                                    <label id="gender-error" class="error" for="gender"></label>

                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">D.O.B.<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Date Of Birth" name="dob" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                            echo $record->project_owner_dob;
                                                                                                                                        } ?>" id="dob">
                                </div>
                                <div class="col-md-12">
                                    <h3 class="h5 text-uppercase mb-1">Project Timelines</h3>
                                </div>



                                <div class="col-md-12">
                                    <p class="text-uppercase mb-1">Pre Implementation Phase</p>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Pre Implementation Phase Planned Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Pre Implementation Phase Start Date" name="pre_implement_planned_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                            echo $record->pre_implement_planned_start_date;
                                                                                                                                                                                        } ?>" id="pre_implement_planned_start_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Pre Implementation Phase Actual Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Pre Implementation Phase Start Date" name="pre_implement_actual_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                            echo $record->pre_implement_actual_start_date;
                                                                                                                                                                                        } ?>" id="pre_implement_actual_start_date">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Pre Implementation Phase Planned End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Pre Implementation Phase End Date" name="pre_implement_planned_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                        echo $record->pre_implement_planned_end_date;
                                                                                                                                                                                    } ?>" id="pre_implement_planned_end_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Pre Implementation Phase Actual End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Pre Implementation Phase End Date" name="pre_implement_actual_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                        echo $record->pre_implement_actual_end_date;
                                                                                                                                                                                    } ?>" id="pre_implement_actual_end_date">
                                </div>


                                <div class="col-md-12">
                                    <p class="text-uppercase mb-1">Implementation Phase</p>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label"> Implementation Phase Planned Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your  Implementation Phase Start Date" name="implement_planned_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                        echo $record->implement_planned_start_date;
                                                                                                                                                                                    } ?>" id="implement_planned_start_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label"> Implementation Phase Actual Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your  Implementation Phase Start Date" name="implement_actual_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                    echo $record->implement_actual_start_date;
                                                                                                                                                                                } ?>" id="implement_actual_start_date">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label"> Implementation Phase Planned End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your  Implementation Phase End Date" name="implement_planned_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                    echo $record->implement_planned_end_date;
                                                                                                                                                                                } ?>" id="implement_planned_end_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label"> Implementation Phase Actual End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your  Implementation Phase End Date" name="implement_actual_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                echo $record->implement_actual_end_date;
                                                                                                                                                                            } ?>" id="implement_actual_end_date">
                                </div>


                                <div class="col-md-12">
                                    <p class="text-uppercase mb-1">Closeout Phase</p>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label"> Closeout Phase Planned Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Closeout Phase Start Date" name="closeout_planned_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                                echo $record->closeout_planned_start_date;
                                                                                                                                                                            } ?>" id="closeout_planned_start_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label"> Closeout Phase Actual Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Closeout Phase Start Date" name="closeout_actual_start_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                            echo $record->closeout_actual_start_date;
                                                                                                                                                                        } ?>" id="closeout_actual_start_date">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label"> Closeout Phase Planned End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Closeout Phase End Date" name="closeout_planned_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                            echo $record->closeout_planned_end_date;
                                                                                                                                                                        } ?>" id="closeout_planned_end_date">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label"> Closeout Phase Actual End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Closeout Phase End Date" name="closeout_actual_end_date" class="form-control" value="<?php if (!empty($record)) {
                                                                                                                                                                        echo $record->closeout_actual_end_date;
                                                                                                                                                                    } ?>" id="closeout_actual_end_date">
                                </div>





                                <input type="hidden" name="created_by" value="<?php echo $_SESSION['projectmanager']['id']; ?>">
                            </div>
                            <div class="line"></div>
                            <div class="form-group row" id="assessorfield">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary"><?= $name ?></button>
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