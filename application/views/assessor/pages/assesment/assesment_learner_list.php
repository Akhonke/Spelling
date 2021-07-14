<div class="container-fluid px-xl-5">
    <section class="py-5">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-12 mb-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">Attendance List</h3>
                    </div>
                    <div class="card-body">

                    <div>
                    <?php 
                      $learnership_sub_type = $this->common->accessrecord(' learnership_sub_type', [], ['id' => $assessment_record->learnership_sub_type], 'row');
                      if (!empty($learnership_sub_type)) {
                          $sub_type = $learnership_sub_type->sub_type;
                      } else {
                          $sub_type = "";
                      }
                      $learnership = $this->common->accessrecord(' learnership', [], ['id' =>$assessment_record->learnship_id], 'row');
                      if (!empty($learnership)) {
                          $learnership_name = $learnership->name;
                      } else {
                          $learnership_name = "";
                      }
                    
                    ?>
                        <p>Class Name  : <span><?=$assessment_record->classname ?></span></p>
                        <p>Assessor Name  : <span><?=$assessment_record->assesor_fullname ?>   <?=$assessment_record->assesor_surname ?></span></p>
                        <p>Assessment Date  : <span><?=$assessment_record->assesment_date ?></span></p>
                        <p>Assessment Number  : <span><?=$assessment_record->assesment_number ?></span></p>
                        <p>Assessment Learnership Type  : <span><?=$learnership_name ?></span></p>
                        <p>Assessment Learnership Sub Type  : <span><?=$sub_type ?></span></p>
                    </div>
                        <table class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Learner  Name</th>
                                    <th>Learner Surname</th>
                                    <th>Learner I.D Number</th>
                                    <th>Performance</th>
                                    <th>Overall Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                if (!empty($learner_record)) {
                                    foreach ($learner_record as $key => $value) {
                                        $learnerdata = $this->common->accessrecord('learner', [], ['id' => $value['learner_id']], 'row');

                                        if (!empty($learnerdata)) {
                                            $learner_name = $learnerdata->first_name;
                                            $learner_surname = $learnerdata->surname;
                                            $ID_number = $learnerdata->id_number;

                                        } else {
                                            $learner_name = "";
                                            $learner_surname = "";
                                        }
                                       
                                ?>
                                        <tr id="del-<?= $value['id'] ?>" class="filters">
                                            <td><?= $i ?></td>
                                            <td><?= $learner_name ?></td>
                                            <td><?= $learner_surname ?></td>
                                            <td><?= $ID_number ?></td>
                                            <td><?= $value['review'] ?></td>
                                            <td><?= $value['overallcmnt'] ?></td>
                                        </tr>
                                <?php $i++;
                                    }
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>