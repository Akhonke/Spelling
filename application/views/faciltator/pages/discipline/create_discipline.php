<div class="container-fluid px-xl-5">
    <section class="py-5">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-12 mb-1">
                <div class="card">
                    <?php if (!empty($_GET['id'])) {
                        $name = 'Update';
                    } else {
                        $name = "Create";
                    } ?>
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0"><?= $name ?> Issue </h3>
                    </div>
                    <?php
                    if ((!empty($this->session->flashdata('error'))) && ($this->session->flashdata('error') != 'error')) { ?>
                        <div style="color:red;text-align:center"><?= $this->session->flashdata('error'); ?></div>
                    <?php } ?>
                    <?php
                    if (!empty($this->session->flashdata('classname'))) { ?>
                        <div style="color:red;text-align:center"><?= $this->session->flashdata('classname'); ?></div>
                    <?php } ?>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateissueForm">
                            <!-- <div class="line"></div> -->
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label class="form-control-label">Learner I.D<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Learner I.D" name="learner_id" id="learner_id" class="form-control learner_id" value="<?php if (!empty($issue)) {
                                                                                                                                                                    echo $issue->learner_id;
                                                                                                                                                                } ?>">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Learner Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Learner Name" name="learner_name" id="learner_name" class="form-control" value="<?= (isset($issue)) ? $issue->learner_name : '';  ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Learner Surname<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Learner Surname" name="learner_surname" id="learner_surname" class="form-control" value="<?= (isset($issue)) ? $issue->learner_surname : '';  ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Date of Incident<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Date Of Incidence" name="date_of_incident" class="form-control" value="<?= (isset($issue)) ? $issue->date_of_incident : '';  ?>" <?php if (!empty($_GET['id'])) {
                                                                                                                                                                                                                echo 'readonly';
                                                                                                                                                                                                            } ?>>

                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Current Status of Incident<span style="color:red;font-weight:bold;"> *</span></label>
                                    <?php if (empty($_GET['id'])) { ?>
                                        <select class="form-control issue_status" name="issue_status" id="issue_status">
                                            <option value="" hidden>Select status of Incident</option>
                                            <option value="pending">Pending</option>
                                            <option value="complete">Complete</option>
                                        </select>
                                    <?php } else {
                                    ?>
                                        <input type="text" name="issue_status" class="form-control" value="<?php echo $learner_ship_SubType->sub_type; ?>" readonly>
                                        <input type="hidden" name="issue_status" class="form-control" value="<?php echo $learner_ship_SubType->id; ?>">
                                    <?php  } ?>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Outcome of Incident<span style="color:red;font-weight:bold;"> *</span></label>
                                    <?php
                                    if (!empty($_GET['id'])) { ?>
                                        <input type="hidden" name="outcome" class="form-control" value="<?php echo $class_name->id; ?>">
                                        <input type="text" name="outcome" class="form-control" value="<?php echo $class_name->class_name; ?>" readonly>
                                    <?php } else { ?>
                                        <select class="form-control outcome" name="outcome">
                                            <option value="" hidden>Select Your Outcome</option>
                                            <option value="warning_letter_issued">Warning Letter Issued</option>
                                            <option value="Learner_expelled">Learner Expelled</option>
                                        </select>
                                    <?php } ?>
                                    <label id="classname-error" class="error" for="outcome"></label>
                                </div>
                                <div class="col-md-6">
                                    <?php if (!empty($_GET['id'])) { ?>
                                        <label class="form-control-label"> Replace Warning Letter<span style="color:red;font-weight:bold;"> *</span></label>
                                        <input type="file" name="attachments" class="form-control">
                                        <?php if (!empty($record->attachment)) { ?>
                                        <?php }
                                    } else { ?>
                                        <label class="form-control-label"> Upload Warning Letter<span style="color:red;font-weight:bold;"> *</span></label>
                                        <input type="file" name="warning_letter" id="warning_letter" class="form-control">
                                        <label id="warning_letter-error" class="error" for="warning_letter"></label>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6">
                                    <?php if (!empty($_GET['id'])) { ?>
                                        <label class="form-control-label"> Replace Evidence<span style="color:red;font-weight:bold;"> *</span></label>
                                        <input type="file" name="evidence[]" class="form-control">
                                        <?php if (!empty($record->attachment)) { ?>
                                        <?php }
                                    } else { ?>
                                        <label class="form-control-label">Upload Expulsion Letter<span style="color:red;font-weight:bold;"> *</span></label>
                                        <input type="file" name="evidence[]" id="evidence" class="form-control" multiple="multiple">
                                        <label id="evidence-error" class="error" for="evidence"></label>
                                    <?php } ?>
                                </div>
                                <div class="col-md-12">
                                    <?php if (!empty($_GET['id'])) { ?>
                                        <label class="form-control-label">Replace Incident Description<span style="color:red;font-weight:bold;"> *</span></label>
                                        <input type="textarea" name="incidence_desc" class="form-control">
                                        <?php if (!empty($record->attachment)) { ?>
                                        <?php }
                                    } else { ?>
                                        <label class="form-control-label">Incident Description<span style="color:red;font-weight:bold;"> *</span></label>
                                        <textarea type="textarea" name="incidence_desc" id="incidence_desc" class="form-control" rows="5" id="comment" placeholder="enter Incident Description"></textarea>
                                        <label id="incidence_desc-error" class="error" for="incidence_desc"></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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