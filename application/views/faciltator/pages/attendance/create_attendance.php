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
                  <h3 class="h6 text-uppercase mb-0"><?= $name ?> ATTENDANCE </h3>
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
                  <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateAttendanceForm">
                     <!-- <div class="line"></div> -->
                     <div class="form-group row">
                        <div class="col-md-6">
                           <label class="form-control-label">Training Provider<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" name="training_provider" class="form-control" value="<?php if (!empty($training)) {
                              echo $training->company_name;
                              } ?>" readonly>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Week Starting Date<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="date" placeholder="Enter Your Week Starting Date" name="week_start_date" class="form-control" value="<?= (isset($record)) ? $record->week_start_date : '';  ?>" <?php if (!empty($_GET['id'])) {
                              echo 'readonly';
                              } ?>>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Week Ending Date<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="date" placeholder="Enter Your Week Ending Date" name="week_date" class="form-control" value="<?= (isset($record)) ? $record->week_date : '';  ?>" <?php if (!empty($_GET['id'])) {
                              echo 'readonly';
                              } ?>>
                        </div>
                        <!-- <div class="col-md-6">
                           <label class="form-control-label">Year<span style="color:red;font-weight:bold;"> *</span></label>
                           
                           <input type="number" placeholder="Enter Your Year" name="year" class="form-control" value="<?= (isset($record)) ? $record->year : '';  ?>" <?php if (!empty($_GET['id'])) {
                              echo 'readonly';
                              } ?>>
                           
                           </div> -->
                        <div class="col-md-6">
                           <label class="form-control-label">Learnership Type Name<span style="color:red;font-weight:bold;"> *</span></label>
                           <select class="form-control learnship_id" name="learnship_id" id="learnship_id">
                              <option value="" hidden>Select Learnership Type Name</option>
                              <?php
                                 if (!empty($learnership)) {
                                     foreach ($learnership as $key => $learnship) { ?>
                              <option value="<?= $learnship->id; ?>" <?php if (isset($record) && $record->learnership_id == $learnship->id) {
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
                           <select class="form-control learnership_sub_type_id" name="learnership_sub_type" id="learnership_sub_type_id">
                              <!-- <option value="" hidden>Select Learnership Sub Type</option> -->
                              <?php
                                 if (!empty($learnershipSubType)) {
                                     foreach ($learnershipSubType as $key => $sublearnship) { ?>
                              <option value="<?= $sublearnship->id; ?>" <?php if (isset($record) && $record->learnership_sub_type == $sublearnship->id) {
                                 echo 'selected';
                                 } else {
                                 if (isset($_POST['learnership_sub_type_id']) && $_POST['learnership_sub_type_id'] == $sublearnship->id) {
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
                              ?>
                           <input type="hidden" name="learner_classname" class="form-control" value="<?= $class_name->id ?>">
                           <input type="text" name="learnerclassname" class="form-control" value="<?= $class_name->class_name ?>" readonly>
                           <?php
                              } else { ?>
                           <select class="form-control learner_classname" name="learner_classname">
                              <option label="" value="" hidden>Select Your Class Name</option>
                           </select>
                           <?php } ?>
                           <label id="classname-error" class="error" for="classname"></label>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label" id="">Facilitator<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" name="facilitator" class="form-control" value="<?php if (!empty($facilitator)) {
                              echo $facilitator->fullname;
                              } ?>" readonly>
                           <label id="facilirator-error" class="error" for="facilirator"></label>
                        </div>
                        <div class="col-md-6">
                           <?php if (!empty($_GET['id'])) { ?>
                           <label class="form-control-label"> Replace Attendance Sheet<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="file" name="attachments" class="form-control">
                           <?php if (!empty($record->attachment)) { ?>
                           <?php }
                              } else { ?>
                           <label class="form-control-label"> Attendance Sheet<span style="color:red;font-weight:bold;"> *</span></label>
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
<script></script>