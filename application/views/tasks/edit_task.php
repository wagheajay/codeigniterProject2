<h1>Edit Task</h1>

<?php $attributes = array('id' => 'edit_task_form', 'class' => 'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>");?>

<?php echo form_open('tasks/edit/'.$this->uri->segment(3).'', $attributes);?>


<div class="form-group">

 <?php  echo form_label("Task Name")."<br>";  ?>
<?php  $form_data = array(
   'class'=> 'form-control',
    'name'=> 'taskname',
    'value' => $the_task->task_name

);
?>

<?php echo form_input($form_data);?>
     
</div>

<div class="form-group">
 <?php  echo form_label("Task Description")."<br>";  ?>
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    'class'=> 'form-control',
    'name'=> 'taskbody',
    'value' => $the_task->task_body

    );
?>
<?php echo form_textarea($form_data);?>
     
</div>


<div class="form-group">
 

<?php  $form_data = array(
    'class'=> 'form-control',
    'name'=> 'due_date',
    'type'=> 'date',
    'value' => $the_task->due_date
    );
?>
<?php echo form_input($form_data);?>
     
</div>



<div class="form-group">

<?php  $form_data = array(
    
    'class'=> 'btn btn-primary',
    'name'=> 'submit',
    'value' => 'Update Task'
);
    ?>
     <?php echo form_submit($form_data);?>
     
</div>



<?php echo form_close();?>