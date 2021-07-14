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

                        <h3 class="h6 text-uppercase mb-0"><?= $name ?> Marksheet</h3>

                    </div>

                    <?php

                    if (!empty($this->session->flashdata('error'))) { ?>

                        <div style="color:red;text-align:center"><?= $this->session->flashdata('error'); ?></div>

                    <?php } ?>

                    <div class="card-body">
                        

                        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateLearnerMarksForm">

                            <!-- <div class="line"></div> -->

                            <div class="form-group row">

                                <div class="col-md-6">

                                    <label class="form-control-label">Training Provider</label>

                                    <input type="text" name="training_provider" class="form-control" value="<?php if (!empty($training)) {
                                                                                                                echo $training->company_name;
                                                                                                            } ?>" readonly>

                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Date<span style="color:red;font-weight:bold;">*</span></label>
                                    <input type="date" placeholder="Enter Your Date" name="date" class="form-control" value="<?= (isset($record)) ? $record->date : '';  ?>" id="">
                                </div>
                                <div class="col-md-6">

                                    <label class="form-control-label">Year<span style="color:red;font-weight:bold;"> *</span></label>
                                    <!-- <select class="form-control " name="year">
                                        <option value="" hidden>Select Year</option>
                                        <?php
                                        if (!empty($record)) {
                                            foreach ($record as $key => $value) { ?>
                                                <option value="<?= $value->year; ?>" ><?= $value->year; ?></option>
                                        <?php  }
                                        } ?>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                    </select> -->
                                    <input type="year" placeholder="Enter Your Year" name="year" class="form-control" value="<?= (isset($record)) ? $record->year : '';  ?>"<?php if (!empty($_GET['id'])) {
                                                                                                                                                                                    echo 'readonly';
                                                                                                                                                                                } ?>>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Learnership Sub Type<span style="color:red;font-weight:bold;"> *</span></label>

                                    <?php if (empty($_GET['id'])) { ?>

                                        <select class="form-control learnshipsubtype" name="learnership_sub_type">

                                            <option value="" hidden>Select Learnership sub type</option>

                                            <?php

                                            foreach ($learnershipSubType as $skey => $shipSubType) { ?>

                                                <option value="<?php echo $shipSubType->id; ?>" <?php if (isset($record) && $record->learnership_sub_type == $shipSubType->id) {
                                                                                                    echo 'selected';
                                                                                                } else {
                                                                                                    if (isset($_POST['learnership_sub_type']) && $_POST['learnership_sub_type'] == $shipSubType->id) {
                                                                                                        echo 'selected';
                                                                                                    }
                                                                                                }; ?>><?php echo $shipSubType->sub_type; ?></option>

                                            <?php  } ?>

                                        </select>

                                    <?php } else {

                                    ?>

                                        <input type="text" name="learnershipsubtype" class="form-control" value="<?php echo $learner_ship_SubType->sub_type; ?>" readonly>

                                        <input type="hidden" name="learnership_sub_type" class="form-control" value="<?php echo $learner_ship_SubType->id; ?>">

                                    <?php

                                    } ?>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Class Name<span style="color:red;font-weight:bold;"> *</span></label>

                                    <?php

                                    if (!empty($_GET['id'])) { ?>

                                        <input type="hidden" name="learner_classname" class="form-control" value="<?= $class_name->id ?>">

                                        <input type="text" name="learnerclassname" class="form-control" value="<?= $class_name->class_name ?>" readonly>

                                    <?php

                                    } else { ?>

                                        <select class="form-control classname" name="learner_classname">

                                            <option label="Select Your Class Name" hidden></option>

                                        </select>

                                    <?php } ?>

                                    <label id="classname-error" class="error" for="classname"></label>



                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Facilitator</label>

                                    <input type="text" placeholder="Enter Your Facilitator" name="facilirator" class="form-control" value="<?php if (!empty($facilitator)) {
                                                                                                                                                echo $facilitator->fullname;
                                                                                                                                            } ?>" readonly>

                                </div>

                                <div class="col-md-6">

                                    <?php if (!empty($_GET['id'])) { ?>

                                        <label class="form-control-label"> Replace Mark Sheet</label>

                                        <input type="file" name="attachments" class="form-control">

                                        <?php if (!empty($record->attachment)) { ?>

                                            <!-- <a href="<?= BASEURL . 'uploads/learner/import_learnermarks/' . $record->attachment ?>" download class="btn btn-sm btn-info">Download <i class="fa fa-download" aria-hidden="true"></i></a> -->

                                        <?php }
                                    } else { ?>

                                        <label class="form-control-label">Upload Mark Sheet<span style="color:red;font-weight:bold;"> *</span> </label>

                                        <input type="file" name="attachment" class="form-control">

                                        <label id="attachment-error" class="error" for="attachment"></label>

                                    <?php } ?>

                                </div>

                            </div>

                            <div class="line"></div>

                            <div class="form-group row">

                                <div class="col-md-12">

                                    <div class="text-center">

                                        <button type="submit" class="btn btn-primary">Add</button>

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