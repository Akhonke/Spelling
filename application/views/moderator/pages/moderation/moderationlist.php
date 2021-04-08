<div class="container-fluid px-xl-5">
    <section class="py-5">
        <div class="row">
            <!-- Form Elements -->
            <div class="col-lg-12 mb-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="h6 text-uppercase mb-0">My Moderation Reports</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Serial No.</th>
                                    <th>Moderator Name</th>
                                    <th>Moderator Surname</th>
                                    <th>Moderation Number</th>
                                    <th>Moderation Date</th>
                                    <th>Learnership Type</th>
                                    <th>Learnership Sub Type</th>
                                    <th>Classname</th>
                                    <th>Unit Standards</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                if (!empty($moderation_report)) {
                                    foreach ($moderation_report as $key => $value) {
                                        $learnership_sub_type = $this->common->accessrecord(' learnership_sub_type', [], ['id' => $value['learnership_sub_type']], 'row');
                                        if (!empty($learnership_sub_type)) {
                                            $sub_type = $learnership_sub_type->sub_type;
                                        } else {
                                            $sub_type = "";
                                        }
                                        $learnership = $this->common->accessrecord(' learnership', [], ['id' => $value['learnship_id']], 'row');
                                        if (!empty($learnership)) {
                                            $learnership_name = $learnership->name;
                                        } else {
                                            $learnership_name = "";
                                        }
                                        $class_name = $this->common->accessrecord('class_name', [], ['id' => $value['classname']], 'row');
                                        if (!empty($class_name)) {
                                            $classname = $class_name->class_name;
                                        } else {
                                            $classname = "";
                                        }
                                        $unitsarr = explode(",", $value['unit_statndards']);
                                        $standards[] = '';
                                        foreach ($unitsarr as $key => $unit) {
                                            $stan = $this->common->accessrecord('units', [], ['id' => $unit], 'row');
                                            if (!empty($stan)) {
                                                $standards[$key] = $stan->title;
                                            }
                                        }
                                        $standards_val = implode(",", $standards);
                                        $i++;
                                ?>
                                        <tr id="del-<?= $value['id'] ?>" class="filters">
                                            <td><?= $i ?></td>
                                            <td><?= $value['moderator_name'] ?></td>
                                            <td><?= $value['moderator_surname'] ?></td>
                                            <td><?= $value['moderation_number'] ?></td>
                                            <td><?= $value['moderation_date'] ?></td>
                                            <td><?= $learnership_name ?></td>
                                            <td><?= $sub_type ?></td>
                                            <td><?= $value['classname'] ?></td>
                                            <td><?= $standards_val ?></td>
                                            <td>
                                                <a href="internal-moderator-user_listing?id=<?= $value['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-view"></i>View</a>
                                                <a href="javascript:;" class="btn btn-danger btn-sm" style="margin:5px 0 0" onclick="deleterecord('moderation_report&behalf','id',<?= $value['id'] ?>)"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                <?php
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