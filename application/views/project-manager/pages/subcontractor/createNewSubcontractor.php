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

<div class="container-fluid px-xl-5">
   <section class="py-5">
      <div class="row">
         <!-- Form Elements -->
         <div class="col-lg-12 mb-1">
            <div class="card">
               <div class="card-header">
                  <h3 class="h6 text-uppercase mb-0">Create Sub Contractor</h3>
               </div>
               <div class="card-body">
                  <form class="form-horizontal" method="post" id="createNewSubcontractor" enctype="multipart/form-data">
                     <!-- <div class="line"></div> -->
                     <div class="form-group row">
                        <div class="col-md-12">
                           <h3 class="h6 text-uppercase mb-0">Personal Information<span style="color:red;font-weight:bold;"> *</span></h3>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">
                           Company Name<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" placeholder="Enter Company Name" class="form-control" name="company_name" id="company_name" value="<?php if (isset($record)) {
                              echo $record->company_name;
                              } else {
                              if (isset($_POST['company_name'])) {
                                  echo set_value('company_name');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('company_name') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">
                           Contractor First Name<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" placeholder="Enter Contractor First Name" class="form-control" name="first_name" id="first_name" value="<?php if (isset($record)) {
                              echo $record->first_name;
                              } else {
                              if (isset($_POST['first_name'])) {
                                  echo set_value('first_name');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('first_name') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Contractor Last Name<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" placeholder="Enter Contractor Last Name" class="form-control" name="last_name" id="last_name" value="<?php if (isset($record)) {
                              echo $record->last_name;
                              } else {
                              if (isset($_POST['last_name'])) {
                                  echo set_value('last_name');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('last_name') ?></span>
                        </div>
                        <div class="col-md-6">
                           <span style="position: absolute;top: 47px;z-index: 1;padding: 8px;border-right: 1px solid #ccc;">+27</span>
                           <label class="form-control-label">Mobile Number<span style="color:red;font-weight:bold;"> *</span></label>
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
                           <label class="form-control-label">Email Address<span style="color:red;font-weight:bold;"> *</span></label>
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
                           <label class="form-control-label">Company Registration Number<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" placeholder="Enter Company Registration Number" class="form-control" name="company_req_no" id="company_req_no" value="<?php if (isset($record)) {
                              echo $record->company_req_no;
                              } else {
                              if (isset($_POST['company_req_no'])) {
                                  echo set_value('company_req_no');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('company_req_no') ?></span>
                        </div>
                        
                        <div class="col-md-6">
                           <label class="form-control-label">Subcontractor Type of Work<span style="color:red;font-weight:bold;"> *</span></label>
                           <select class="form-control work_type" name="work_type" id="work_type">
                              <option value="" hidden>Select Subcontractor Type of Work</option>
                              
                           </select>
                           <span class='error_validate' style='color:red;'><?= form_error('work_type') ?></span>
                        </div>
                      
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
                           <label class="form-control-label">City<span style="color:red;font-weight:bold;"> *</span></label>
                           <select class="form-control" name="city" id="city">
                              <?php if (!empty($_GET['id'])) {
                                 foreach ($city as $key => $value) {
                                     if ($record->province == $value->province_id) {
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
                           <label class="form-control-label">Street Name<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" placeholder="Enter Your Street Name" class="form-control" name="street_name"  id="street_name" value="<?php if (isset($record)) {echo $record->Street_name;
                              } else {
                                  if (isset($_POST['street_name'])) {
                                      echo set_value('street_name');
                                  }
                              } ?>">
                           <span class='error_validate'style='color:red;'><?= form_error('street_name') ?></span>
                        </div>
                       
                        <div class="col-md-6">
                           <label class="form-control-label">Street Number</label>
                           <input type="number" placeholder="Enter Your Street Number" class="form-control" name="street_number" value="<?php if (isset($record)) {
                              echo $record->street_number;
                              } else {
                              if (isset($_POST['street_number'])) {
                                  echo set_value('street_number');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('street_number') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Suburb<span style="color:red;font-weight:bold;"> *</span></label>
                           <input type="text" placeholder="Enter Your Suburb" class="form-control" name="suburb" value="<?php if (isset($record)) {
                              echo $record->suburb;
                              } else {
                              if (isset($_POST['suburb'])) {
                                  echo set_value('suburb');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('suburb') ?></span>
                        </div>
                       
                        <div class="col-md-6">
                           <label class="form-control-label">Subcontractor Total Value</label>
                           <input type="number" placeholder="Enter Subcontractor Total Value" class="form-control" name="subcontractor_total" value="<?php if (isset($record)) {
                              echo $record->subcontractor_total;
                              } else {
                              if (isset($_POST['subcontractor_total'])) {
                                  echo set_value('subcontractor_total');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('subcontractor_total') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Payment Milestone Description</label>
                           <input type="text" placeholder="Enter Payment Milestone Description" class="form-control" name="payment_milestone_description" value="<?php if (isset($record)) {
                              echo $record->payment_milestone_description;
                              } else {
                              if (isset($_POST['payment_milestone_description'])) {
                                  echo set_value('payment_milestone_description');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('payment_milestone_description') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Payment Milestone Value</label>
                           <input type="number" placeholder="Enter Payment Milestone Value" class="form-control" name="payment_milestone_value" value="<?php if (isset($record)) {
                              echo $record->payment_milestone_value;
                              } else {
                              if (isset($_POST['payment_milestone_value'])) {
                                  echo set_value('payment_milestone_value');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('payment_milestone_value') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Project Date</label>
                           <input type="date" placeholder="Enter Project Date" class="form-control" name="project_date" value="<?php if (isset($record)) {
                              echo $record->project_date;
                              } else {
                              if (isset($_POST['project_date'])) {
                                  echo set_value('project_date');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('project_date') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Milestone Description</label>
                           <input type="text" placeholder="Enter Milestone Description" class="form-control" name="milestone_description" value="<?php if (isset($record)) {
                              echo $record->milestone_description;
                              } else {
                              if (isset($_POST['milestone_description'])) {
                                  echo set_value('milestone_description');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('milestone_description') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Date To Complete</label>
                           <input type="date" placeholder="Enter Date To Complete" class="form-control" name="complete_date" value="<?php if (isset($record)) {
                              echo $record->complete_date;
                              } else {
                              if (isset($_POST['complete_date'])) {
                                  echo set_value('complete_date');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('complete_date') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">BEE Certificate</label>
                           <input type="file" placeholder="BEE Certificate" class="form-control" name="bee_certificate" value="<?php if (isset($record)) {
                              echo $record->bee_certificate;
                              } else {
                              if (isset($_POST['bee_certificate'])) {
                                  echo set_value('bee_certificate');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('bee_certificate') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Tax Clearance Certificate</label>
                           <input type="file" placeholder="Tax Clearance Certificate" class="form-control" name="tax_clearance_certificate" value="<?php if (isset($record)) {
                              echo $record->tax_clearance_certificate;
                              } else {
                              if (isset($_POST['tax_clearance_certificate'])) {
                                  echo set_value('tax_clearance_certificate');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('tax_clearance_certificate') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Company Registration Certificate</label>
                           <input type="file" placeholder="Company Registration Certificate" class="form-control" name="company_registration_certificate" value="<?php if (isset($record)) {
                              echo $record->company_registration_certificate;
                              } else {
                              if (isset($_POST['company_registration_certificate'])) {
                                  echo set_value('company_registration_certificate');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('company_registration_certificate') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Proof of Address</label>
                           <input type="file" placeholder="Proof of Address" class="form-control" name="proof_of_address" value="<?php if (isset($record)) {
                              echo $record->proof_of_address;
                              } else {
                              if (isset($_POST['proof_of_address'])) {
                                  echo set_value('proof_of_address');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('proof_of_address') ?></span>
                        </div>
                        <div class="col-md-6">
                           <label class="form-control-label">Proof of Banking</label>
                           <input type="file" placeholder="Proof of Banking" class="form-control" name="proof_of_banking" value="<?php if (isset($record)) {
                              echo $record->proof_of_banking;
                              } else {
                              if (isset($_POST['proof_of_banking'])) {
                                  echo set_value('proof_of_banking');
                              }
                              } ?>">
                           <span class='error_validate' style='color:red;'><?= form_error('proof_of_banking') ?></span>
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