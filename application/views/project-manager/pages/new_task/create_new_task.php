<div class="container-fluid px-xl-5">
    <section class="py-5">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-12 mb-1">
                <div class="card">
                    <div class="card-header">
                        <?php if(!empty($_GET['id'])){
                           $name = 'Update';
                        }else{
                           $name = "Create";
                        } ?> 
                     <h3 class="h6 text-uppercase mb-0"><?= $name ?> New Task</h3>
                    </div>
                    <?php 
                       if (!empty($this->session->flashdata('error'))) { ?>
                        <div style="color:red;text-align:center"><?= $this->session->flashdata('error'); ?></div>
                    <?php } ?>
                   
                    <div class="card-body">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" id="CreateTaskForm">
                            <!-- <div class="line"></div> -->
                            <div class="form-group row">
                            <div class="col-md-6">
                                    <label class="form-control-label">Select Project<span style="color:red;font-weight:bold;"> *</span></label>
                                     <select class="form-control" name="project" id="project">

                                        <option value="" label="" hidden>Select Project</option>
                                        <?php foreach($project  as $pro){?>
                                            <option value="<?=$pro['id']?>" <?php if(!empty($record) && $record->project == $pro['id']){ echo 'selected'; }?>><?=$pro['project_name']?></option>
                                        <?php } ?>
                                     </select>

                                    <label id="" class="error" for="project"></label>

                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Task Name<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Task Name" class="form-control" value="<?php if(!empty($record)){ echo $record->task_name ; }?>" id="task_name" name="task_name">
                                    <label id="" class="error-task_name" for="task_name"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Task Description<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Task Description" class="form-control" value="<?php if(!empty($record)){ echo $record->task_desc ; }?>" id="task_desc" name="task_desc">
                                    <label id="" class="error-task_desc" for="task_desc"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Task Owner<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="text" placeholder="Enter Your Task Owner" class="form-control" value="<?php if(!empty($record)){ echo $record->task_owner ; }?>" id="task_owner" name="task_owner">
                                    <label id="" class="error" for="task_owner"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Task Status<span style="color:red;font-weight:bold;"> *</span></label>
                                     <select class="form-control" name="task_status" id="task_status">

                                        <option value="" hidden>Select Status</option>
                                        <option <?php if(!empty($record) && $record->task_status == 'Started'){ echo 'selected'; }?> value="Started">Started</option>
                                         <option <?php if(!empty($record) && $record->task_status == 'Inprogress'){ echo 'selected'; }?> value="Inprogress">In progress</option>
                                         <option <?php if(!empty($record) && $record->task_status == 'Completed'){ echo 'selected'; }?> value="Completed">Completed</option>

                                     </select>

                                    <label id="" class="error" for="task_status"></label>

                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Planned  Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Planned  Start Date"  class="form-control" value="<?php if(!empty($record)){ echo $record->planned_start_date ; }?>" id="planned_start_date" name="planned_start_date">
                                    <label id="" class="error" for="planned_start_date"></label>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Actual  Start Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Actual  Start Date" class="form-control" value="<?php if(!empty($record)){ echo $record->actual_start_date ; }?>" id="actual_start_date" name="actual_start_date">
                                    <label id="" class="error" for="actual_start_date"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-control-label">Planned  End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Planned  End Date" class="form-control" value="<?php if(!empty($record)){ echo $record->planned_end_date ; }?>" id="planned_end_date" name="planned_end_date">
                                    <label id="" class="error" for="planned_end_date"></label>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-control-label">Actual  End Date<span style="color:red;font-weight:bold;"> *</span></label>
                                    <input type="date" placeholder="Enter Your Actual  End Date" class="form-control" value="<?php if(!empty($record)){ echo $record->actual_end_date ; }?>" id="actual_end_date" name="actual_end_date">
                                    <label id="" class="error" for="actual_end_date"></label>
                                </div>
                                
                              
                               
                                <div class="col-md-6">
                                    <label class="form-control-label">Task Status Colors<span style="color:red;font-weight:bold;"> *</span></label>
                                     <!-- <select class="form-control" name="task_status_colour"  id="">

                                        <option value="" hidden>Select Colors</option>
                                        <option <?php if(!empty($record) && $record->task_status_colour == 'Red'){ echo 'selected'; }?> value="Red">Red</option>
                                         <option <?php if(!empty($record) && $record->task_status_colour == 'Amber'){ echo 'selected'; }?> value="Amber">Amber</option>
                                         <option <?php if(!empty($record) && $record->task_status_colour == 'Green'){ echo 'selected'; }?> value="Green">Green</option>

                                     </select> -->
                                     <input type="text" placeholder="Status Color" class="form-control" value="<?php if(!empty($record)){ echo $record->task_status_colour ; }?>" id="task_status_colour" name="task_status_colour" readonly>
                                    
                                    <label id="" class="error" for="task_status_colour"></label>

                                </div>
                                


                                

                                
                              <input type="hidden" name="created_by" value="<?php echo  $_SESSION['projectmanager']['id']; ?>">
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
