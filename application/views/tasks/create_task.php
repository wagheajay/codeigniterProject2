<h1>Create Task</h1>

<?php $attributes = array('id' => 'create_task_form', 'class' => 'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>");?>

<?php echo form_open('tasks/create/'.$this->uri->segment(3).'', $attributes);?>


<div class="form-group">

 <?php  echo form_label("Task Name")."<br>";  ?>
<?php  $form_data = array(
   'class'=> 'form-control',
    'name'=> 'taskname',
    'placeholder' => 'enter task name'
);
?>

<?php echo form_input($form_data);?>
     
</div>

<div class="form-group">
 <?php  echo form_label("Task Description")."<br>";  ?>
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    'class'=> 'form-control',
    'name'=> 'taskbody'
    );
?>
<?php echo form_textarea($form_data);?>
     
</div>


<div class="form-group">
 

<?php  $form_data = array(
    'class'=> 'form-control',
    'name'=> 'due_date',
    'type'=> 'date'
    );
?>
<?php echo form_input($form_data);?>
     
</div>



<div class="form-group">

<?php  $form_data = array(
    
    'class'=> 'btn btn-primary',
    'name'=> 'submit',
    'value' => 'Create Task'
);
    ?>
     <?php echo form_submit($form_data);?>
     
</div>



<?php echo form_close();?>