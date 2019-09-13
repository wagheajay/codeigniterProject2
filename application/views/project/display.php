
<div class="col-xs-9">
    <!-- showing project name from controller to view -->
<h3>Project Name : <?php echo $project_data->project_name; ?></h3>
<p>Date Created  : <?php echo $project_data->date_created; ?></p>

<h3>Description</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
</div>


<div class="col-xs-3">




<ul class="list-group">
    <h4>
        Project Actions
    </h4>


    <li class="list-group-item"><a href="<?php echo base_url();?>task/create">Create Task</a></li>
    <li class="list-group-item"><a href="<?php echo base_url();?>task/edit">Edit Task</a></li>
    <li class="list-group-item"><a href="<?php echo base_url();?>task/delete">Delete Task</a></li>

</ul>
</div>