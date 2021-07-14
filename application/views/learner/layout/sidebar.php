<?php
$learner_id = $_SESSION['learner']['id'];
$learner = $this->db->where('id',  $learner_id)->get('learner')->result();
$organisation = $this->db->where('id', $learner[0]->organization)->get('organisation')->result();
$plan = $this->db->where('id', $organisation[0]->packageId)->get('plan')->result();
?>


<div id="sidebar" class="sidebar py-3">
   <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family"> <?php $learner_id =$_SESSION['learner']['id'];

$learner = $this->common->accessrecord('learner', [], array('id'=>$learner_id), 'row');

echo $learner_nm=$learner->first_name.' '.$learner->surname;

?> </div>
   <ul class="sidebar-menu list-unstyled">
      <li class="sidebar-list-item"><a href="<?= base_url() . 'learner-Dashboard' ?>" title="From Here You Can See Dashboard" class="sidebar-link text-white active"><i class="o-home-1 mr-3 text-gray"></i><span>Dashboard</span></a></li>
      <li class="sidebar-list-item"><a href="<?= base_url() ?>learner-attachments " title="From Here You Can See Attachments"class="sidebar-link text-white"><i class="o-home-1 mr-3 text-gray"></i><span>My Attachments</span></a></li>
      <!-- <li class="sidebar-list-item">
         <?php $arrayfeatures = explode("%@#$", $plan[0]->feature);
         if (in_array("Learner Performance Management", $arrayfeatures)) {
         ?>
            <a href="#" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My Performance</span></a>
         <?php } else { ?>
            <a onclick="subscriptionMessage()" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My Performance</span></a>
         <?php } ?>
      </li> -->

      <!-- <li class="sidebar-list-item">
         <?php $arrayfeatures = explode("%@#$", $plan[0]->feature);
         if (in_array("Attendance Management", $arrayfeatures)) {
         ?>
            <a href="<?= BASEURL ?>learner-attendance-list" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My attendance</span></a>
         <?php } else { ?>
            <a onclick="subscriptionMessage()" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My attendance</span></a>
         <?php } ?>
      </li> -->

      <li class="sidebar-list-item">
         <a href="#" data-toggle="collapse" title="From Here You Can Manage Complaints And Suggestions" data-target="#pages8" aria-expanded="false" aria-controls="pages7" class="sidebar-link text-white">
            <i class="o-wireframe-1 mr-3 text-gray"></i><span>Complaints and Suggestions</span></a>
         <div id="pages8" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
               <li class="sidebar-list-item"><a href="<?= BASEURL ?>learner-complaints-suggestion" title="From Here You Can Create Complaints And Suggestion" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Create New Complaints/Suggestions</span></a></li>
               <li class="sidebar-list-item"><a href="<?= BASEURL ?>learner-complaint-list" title="From Here You Can See Complaints List" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My Complaints</span></a></li>
               <li class="sidebar-list-item"><a href="<?= BASEURL ?>learner-suggestion-list" title="From Here You Can See Suggestion List" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My Suggestion</span></a></li>
            </ul>
         </div>
      </li>

      <li class="sidebar-list-item">
         <a href="#" data-toggle="collapse" title="From Here You Can Manage Dropout" data-target="#pages81" aria-expanded="false" aria-controls="pages71" class="sidebar-link text-white">
            <i class="o-wireframe-1 mr-3 text-gray"></i><span>Drop Out</span></a>
         <div id="pages81" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
               <li class="sidebar-list-item">
                  <?php $arrayfeatures = explode("%@#$", $plan[0]->feature);
                  if (in_array("Drop Out Management", $arrayfeatures)) {
                  ?>
                     <a href="<?= BASEURL ?>learner-drop-out"  title="Resign from Training" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Resign from Training </span></a>
                  <?php } else { ?>
                     <a onclick="subscriptionMessage()"  title="Resign from Training" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>Resign from Training</span></a>
                  <?php } ?>
               </li>

            </ul>
         </div>
      </li>


      <li class="sidebar-list-item">
         <?php $arrayfeatures = explode("%@#$", $plan[0]->feature);
         if (in_array("Stipend Management", $arrayfeatures)) {
         ?>
            <a href="<?= BASEURL ?>learner-stipends-list" title="From Here You Can See Stipends History " class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My Stipends History</span></a>
         <?php } else { ?>
            <a onclick="subscriptionMessage()" title="From Here You Can See Stipends History" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>My Stipends History</span></a>
         <?php } ?>
      </li>
      <li class="sidebar-list-item">
         <?php $arrayfeatures = explode("%@#$", $plan[0]->feature);
            if (in_array("Stipend Management", $arrayfeatures)) {
            ?>
           <a href="<?= BASEURL ?>learner-live-class-List" title="From Here You Can See Live Class List" class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>E-Learning</span></a>
                <?php } else { ?>
            <a onclick="subscriptionMessage()" title="From Here You Can See Live Class List " class="sidebar-link text-white"><i class="o-paperwork-1 mr-3 text-gray"></i><span>E-Learning</span></a>
         <?php } ?>

      </li>

      <!-- *************************** -->

      <li class="sidebar-list-item">
         <a href="#" data-toggle="collapse" title="From Here You Can Assessments" data-target="#pages6" aria-expanded="false" aria-controls="pages6" class="sidebar-link text-white">
            <i class="o-code-window-1 mr-3 text-gray"></i><span>Assessment</span></a>
         <div id="pages6" class="collapse">
            <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">

               <li class="sidebar-list-item">
                  <?php $arrayfeatures = explode("%@#$", $plan[0]->feature);
                  if (in_array("Learner Performance Management", $arrayfeatures)) {
                  ?>
                     <a href="<?= BASEURL ?>learner-assessment-list" title="From Here You Can See Assessment List" class="sidebar-link text-white pl-lg-5">My Assessments</a>
                  <?php } else { ?>
                     <a onclick="subscriptionMessage()" title="From Here You Can See Assessment List" class="sidebar-link text-white pl-lg-5">My Assessments</a>
                  <?php } ?>
               </li>
            </ul>
         </div>
      </li>
      <!-- *************************** -->

   </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
   function subscriptionMessage() {
      Swal.fire({
         title: 'Membership Required ',
         text: "A membership required to use these features. Just go explore membership, subscribe and use features.",
         icon: 'error',

      })
   }
</script>