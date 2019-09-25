
<div class="col-xs-9">
    <!-- showing project name from controller to view -->
<h3>Project Name : <?php echo $project_data->project_name; ?></h3>
<p>Date Created  : <?php echo $project_data->date_created; ?></p>

<h3 class="text-primary" >Description</h3>
<p><?php echo $project_data->project_body; ?></p>



<h3>Tasks</h3>

<ul>
<?php if($completed_task):  ?>

     <?php foreach($completed_task as $task): ?>

<li>
       <a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->id ?>">
     
      <h4> <?php echo $task->task_name?> </h4> 
    
       </a>

      <?php  endforeach; ?>

<?php else:?>
  <h4 class="text-danger">There are no tasks..</h4>

<?php endif;  ?>
</li>

</ul>
</div>


<div class="col-xs-3">




<ul class="list-group">
    <h4>
        Project Actions
    </h4>


    <li class="list-group-item"><a href="<?php echo base_url();?>tasks/create/<?php echo $project_data->id ?>">Create Task</a></li>
    <li class="list-group-item"><a href="<?php echo base_url();?>projects/edit/<?php echo $project_data->id ?>">Edit Project</a></li>
    <li class="list-group-item"><a href="<?php echo base_url();?>projects/delete/<?php echo $project_data->id ?>">Delete Project</a></li>

</ul>
</div>