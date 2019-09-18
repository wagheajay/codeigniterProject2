<h1>Create Project</h1>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>");?>

<?php echo form_open('projects/create', $attributes);?>


<div class="form-group">

 <?php  echo form_label("Project Name")."<br>";  ?>
<?php  $form_data = array(
   'class'=> 'form-control',
    'name'=> 'projectname'
);
?>

<?php echo form_input($form_data);?>
     
</div>

<div class="form-group">
 <?php  echo form_label("Project Description")."<br>";  ?>
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    'class'=> 'form-control',
    'name'=> 'projectbody'
    );
?>
<?php echo form_textarea($form_data);?>
     
</div>



<div class="form-group">

<?php  $form_data = array(
    
    'class'=> 'btn btn-primary',
    'name'=> 'submit',
    'value' => 'Create'
);
    ?>
     <?php echo form_submit($form_data);?>
     
</div>



<?php echo form_close();?>