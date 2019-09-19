


<p class="bg-success">
<?php if($this->session->flashdata('project_created')): ?>

<?php echo $this->session->flashdata('project_created'); ?>

<?php endif; ?>


</p>




<a class="btn btn-primary pull-right" href="<?php base_url();?>projects/create/">Create Project</a>



<?php if(sizeof($projects) == 0):?>



<h2 class="text text-center text-danger">No Projects Found ! Create New</h2>

<?php else: ?>

<h1>Projects</h1>
<table class="table table-hover  table-bordered">

    <tr>
        <th>
            Project Name
        </th>
        <th>
            Project Body
        </th>
    </tr>
    
</thead>

<tbody>






<?php  foreach($projects as $project):?>
<tr>
    <!-- showing id as parameter  as projects/display/project_id as parameter link using concatination     -->
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

<?php endif;?>








