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

                        <h3 class="h6 text-uppercase mb-0"><?= $name ?> NEW MARKSHEET</h3>

                    </div>

                    <?php

                    if ((!empty($this->session->flashdata('error'))) && ($this->session->flashdata('error') != 'error')) { ?>

                        <div style="color:red;text-align:center"><?= $this->session->flashdata('error'); ?></div>

                    <?php } ?>

                    <div class="card-body">

                        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateLearnerMarksForm">

                            <!-- <div class="line"></div> -->

                            <div class="form-group row">

                                <div class="col-md-6">

                                    <label class="form-control-label">Training Provider<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="text" name="training_provider" class="form-control" value="<?php if (!empty($training)) {
                                                                                                                echo $training->company_name;
                                                                                                            } ?>" readonly>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Year<span style="color:red;font-weight:bold;"> *</span></label>

                                    <input type="number" placeholder="Enter Your Year" name="year" class="form-control" value="<?= (isset($record)) ? $record->year : '';  ?>" <?php if (!empty($_GET['id'])) {
                                                                                                                                                                                    echo 'readonly';
                                                                                                                                                                                } ?>>

                                </div>


                                <div class="col-md-6">
                                    <label class="form-control-label">Learnership Type Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <?php if (!empty($_GET['id'])) { ?>
                                        <input type="hidden" name="learnship_id" class="form-control" value="<?= $learnership->id  ?>" readonly>
                                        <input type="text" name="learnshipdd_id" class="form-control" value="<?= $learnership->name  ?>" readonly>

                                    <?php  } else { ?>
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
                                        </select><?php } ?>
                                    <span class='error_validate' style='color:red;'><?= form_error('learnship_id') ?></span>
                                </div>

                                <div class="col-md-6">



                                    <label class="form-control-label">Learnership Sub Type<span style="color:red;font-weight:bold;"> *</span></label>


                                    <?php

                                    if (!empty($_GET['id'])) {

                                        //  print_r($class_name);  

                                        //if($record->learner_classname == $classname->id){

                                    ?>
                                        <input type="hidden" name="learnership_sub_type_id" class="form-control" value="<?= $learner_ship_SubType->id ?>">

                                        <input type="text" name="learnerclassname" class="form-control" value="<?= $learner_ship_SubType->sub_type ?>" readonly>

                                    <?php

                                    } else { ?>
                                        <select class="form-control learnership_sub_type_id" name="learnership_sub_type_id" id="learnership_sub_type_id">



                                        </select>
                                    <?php } ?>
                                    <label id="learnership_sub_type_id-error" class="error" for="learnership_sub_type_id"></label>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Class Name<span style="color:red;font-weight:bold;"> *</span></label>

                                    <?php

                                    if (!empty($_GET['id'])) {

                                        //  print_r($class_name);  

                                        //if($record->learner_classname == $classname->id){

                                    ?>

                                        <input type="hidden" name="learner_classname" class="form-control" value="<?= $class_name->id ?>">

                                        <input type="text" name="learnerclassname" class="form-control" value="<?= $class_name->class_name ?>" readonly>

                                    <?php

                                    } else { ?>

                                        <select class="form-control learner_classname" name="learner_classname">

                                            <option value="" hidden>Select Your Class Name</option>

                                        </select>

                                    <?php } ?>



                                    <label id="classname-error" class="error" for="classname"></label>



                                </div>

                                <div class="col-md-6">

                                    <label class="form-control-label">Facilitator<span style="color:red;font-weight:bold;"> *</span></label>
                                    <?php

                                    if (!empty($_GET['id'])) {


                                    ?>
                                        <input type="hidden" name="facilitator_id" value="" class="form-control facilitators" id="facilitator">
                                        <input type="text" name="facilitator" value="<?= $facilitator_data->fullname ?>" class="form-control facilitator" id="facilitator" readonly>
                                    <?php
                                    } else { ?>
                                        <input type="hidden" name="facilitator_id" value="" class="form-control facilitators" id="facilitator">
                                        <input type="text" name="facilitator" value="" class="form-control facilitator" id="facilitator" readonly>
                                    <?php } ?>

                                </div>

                                <div class="col-md-6">

                                    <?php if (!empty($_GET['id'])) { ?>

                                        <label class="form-control-label"> Replace Mark Sheet</label>

                                        <input type="file" name="attachments" class="form-control">

                                        <?php if (!empty($record->attachment)) { ?>

                                            <!-- <a href="<?= BASEURL . 'uploads/learner/import_learnermarks/' . $record->attachment ?>" download class="btn btn-sm btn-info">Download <i class="fa fa-download" aria-hidden="true"></i></a> -->

                                        <?php }
                                    } else { ?>

                                        <label class="form-control-label"> Mark Sheet<span style="color:red;font-weight:bold;"> *</span></label>

                                        <input type="file" name="attachment" class="form-control">


                                        <label id="attachment-error" class="error" for="attachment"></label>

                                    <?php } ?>

                                </div>

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