<h1>Create Project</h1>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>");?>

<?php echo form_open('projects/edit/'.$project_data->id.'', $attributes);?>


<div class="form-group">

 <?php  echo form_label("Project Name")."<br>";  ?>
<?php  $form_data = array(
   'class'=> 'form-control',
    'name'=> 'projectname',
    'value' => $project_data->project_name
);
?>

<?php echo form_input($form_data);?>
     
</div>

<div class="form-group">
 <?php  echo form_label("Project Description")."<br>";  ?>
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    'class'=> 'form-control',
    'name'=> 'projectbody',
    'value' => $project_data->project_body
    );
?>
<?php echo form_textarea($form_data);?>
     
</div>



<div class="form-group">

<?php  $form_data = array(
    
    'class'=> 'btn btn-primary',
    'name'=> 'submit',
    'value' => 'Update'
);
    ?>
     <?php echo form_submit($form_data);?>
     
</div>



<?php echo form_close();?>