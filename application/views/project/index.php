


<p class="bg-success">

<?php if($this->session->flashdata('project_created')): ?>

<?php echo $this->session->flashdata('project_created'); ?>

<?php endif; ?>


<?php if($this->session->flashdata('project_deleted')): ?>

<?php echo $this->session->flashdata('project_deleted'); ?>

<?php endif; ?>


<?php if($this->session->flashdata('task_updated')): ?>

<?php echo $this->session->flashdata('task_updated'); ?>

<?php endif; ?>


<?php if($this->session->flashdata('task_created')): ?>

<?php echo $this->session->flashdata('task_created'); ?>

<?php endif; ?>


<?php if($this->session->flashdata('task_deleted')): ?>

<?php echo $this->session->flashdata('task_deleted'); ?>

<?php endif; ?>


</p>




<a class="btn btn-primary pull-right" href="<?php echo base_url();?>projects/create/">Create Project</a>



<?php if(sizeof($projects) == 0):?>



<h2 class="text text-center text-danger">No Projects Found ! Create New</h2>

<?php else: ?>

<h1>Projects</h1>
<table class="table table-hover  table-bordered">

    <tr>
        <th>
            Sr.no
        </th>
        <th>
            Project Name
        </th>
        <th>
            Project Body
        </th>
    </tr>
    
</thead>

<tbody>





<?php  $count = $this->uri->segment(3); //add this line befor loop eg foreach loop here?>

<?php  foreach($projects as $project):?>

<tr>


    <!-- showing id as parameter  as projects/display/project_id as parameter link using concatination     -->
<?php  echo "<td class='text-primary' >". ++$count ."</td>"; ?>
<?php  echo "<td class='text-primary' >". $project->project_name ."</td>"; ?>
<?php  echo "<td>". $project->project_body ."</td>"; ?>
<td>
<a class="btn btn-primary pull-left" href=<?php echo base_url()."projects/display/".$project->id  ?>>View</a>
<a class="btn btn-danger pull-right" href=<?php echo base_url()."projects/delete/".$project->id  ?>>Delete</a>
    
</td>


<?php  endforeach;?>

</tr>


</tbody>

</table>

<!-- <ul class="pagination">
  <li><a href="#"><</a></li>
  <li class="active"><a href="#">1</a></li>
  <li ><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">></a></li>
</ul> -->
<?php echo $this->pagination->create_links(); ?>

<?php endif;?>








