
<!-- this will run if login condition success -->
<p class="bg-success">
<?php if($this->session->flashdata('login_success')): ?>

<?php echo $this->session->flashdata('login_success'); ?>

<?php endif; ?>

<!-- this will show user registerd flash message -->
<?php  echo $this->session->flashdata('User_Registerd');  ?>



</p>

<!-- this will run if login condition failed -->
<p class="bg-danger">


<?php if($this->session->flashdata('login_failed')): ?>

<?php echo $this->session->flashdata('login_failed'); ?>



<?php endif; ?>

<?php //this will flash no access when user try to access some pages without Login ?>
<?php if($this->session->flashdata('no_access')): ?>

<?php echo $this->session->flashdata('no_access'); ?>
<?php endif; ?>

</p>


<?php if(!$this->session->userdata('logged_in')):  ?>

<div class="jumbotron">
    <h2 class="text-center ">Welcome To AJ's Web</h2>
</div>
<?php endif;  ?>




<?php  if (isset($projects)):?>


<?php  if($this->session->userdata('logged_in')):  ?>

<h2><?php  echo $this->session->userdata('username')." Your Projects"?></h2>

<?php  endif;  ?>


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
<a class="btn btn-primary pull-left" href=<?php echo base_url()."projects/"; ?>>View</a>

    
</td>


<?php  endforeach;?>


</tr>


</tbody>

</table>
<?php endif; ?>
