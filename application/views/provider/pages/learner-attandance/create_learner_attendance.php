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
                        <h3 class="h6 text-uppercase mb-0"><?= $name ?> Learner Attendance</h3>
                    </div>
                    <?php
                    if (!empty($this->session->flashdata('error'))) { ?>
                        <div style="color:red;text-align:center"><?= $this->session->flashdata('error'); ?></div>
                    <?php } ?>

                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateAttendanceForm">
                            <!-- <div class="line"></div> -->
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">I.D Number<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your ID" class="form-control id_number" value="" id="learner_id" name="learner_id">

                                    <label id="" class="error" for="id_number"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Learner Name<span style="color:red;font-weight:bold;"> *</span> </label>
                                    <input type="text" placeholder="Enter Your Learner Name" class="form-control" value="" id="learner_name" name="learner_name" readonly>
                                    <label id="" class="error" for=""></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Learner Surname<span style="color:red;font-weight:bold;"> *</span> </label>
                                    <input type="text" placeholder="Enter Your Learner Surname" class="form-control" value="" id="learner_surname" name="learner_surname" readonly>
                                    <label id="" class="error" for=""></label>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-control-label">Learnership Type Name</label>
                                    <input type="text" placeholder="Learnership Type Name" class="form-control" value="" id="learnship_id" name="learnship_id" readonly>
                                    <input type="hidden" placeholder="Learnership Type Name" class="form-control" value="" id="learnship_ids" name="learnship_ids" readonly>
                                    <!-- <select class="form-control learnship_id" name="learnship_id" id="learnship_id">
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
                                    </select> -->
                                    <span class='error_validate' style='color:red;'><?= form_error('learnship_id') ?></span>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Learnership Sub Type<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Learnership Sub Type Name" class="form-control" value="" id="learnership_sub_type_id" name="learnership_sub_type_id" readonly>
                                    <input type="hidden" placeholder="Learnership Type Name" class="form-control" value="" id="learnership_sub_type_ids" name="learnership_sub_type_ids" readonly>
                                    <!-- 
                                    <select class="form-control learnership_sub_type_id" name="learnership_sub_type_id" id="learnership_sub_type_id">
                                    </select> -->
                                    <label id="learnership_sub_type_id-error" class="error" for="learnership_sub_type_id"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Class Name</label>
                                    <input type="text" placeholder="Class Name" class="form-control" value="" id="learner_classname" name="learner_classname" readonly>

                                    <!-- <?php

                                            if (!empty($_GET['id'])) {
                                            ?>
                                        <input type="hidden" name="learner_classname" class="form-control" value="<?= $class_name->id ?>">

                                        <input type="text" name="learnerclassname" class="form-control" value="<?= $class_name->class_name ?>" readonly>
                                    <?php
                                            } else { ?>
                                        <input type="text" placeholder="Class Name" class="form-control" value="" id="learner_classname" name="learner_classname" readonly>

                                    <?php } ?> -->
                                    <label id="classname-error" class="error" for="classname"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your date" class="form-control" value="" id="date" name="date">
                                    <label id="" class="error" for=""></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Reason for Not Attending</label>
                                    <input type="text" placeholder="Reason for Not Attending" class="form-control" value="" id="reason_not_attend" name="reason_not_attend">



                                    <label id="-error" class="error" for="reason_not_attend"></label>

                                </div>
                                <div class="col-md-6">

                                    <label class="form-control-label">Upload Proof </label>

                                    <input type="file" class="form-control" name="doctor_note" id="doctor_note" value="">
                                    <label id="error" class="error" for="doctor_note"></label>
                                </div>

                                <input type="hidden" name="created_by" value="<?php echo adminid(); ?>">
                            </div>
                            <div class="line"></div>
                            <div class="form-group row" id="assessorfield">
                            </div>
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
<script type="text/javascript">
    $(function() {
        $("#date").datepicker({
            dateFormat: 'yy'
        });
    });
</script>