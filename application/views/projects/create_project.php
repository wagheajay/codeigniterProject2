<h1>Create Project</h1>



<?php
//this will add attributes to form like id="login_form" class="form_horizontal"

$attributes = array('id' => 'create_form', 'class' => 'form_horizontal');
?>

<?php echo validation_errors("<p class='bg-danger'>");?>

<?php
//createing form using codeigniter
//this will open form
echo form_open('projects/create', $attributes);
// this will do like
//<form action=""></form>
?>

<!-- this class is from bootstrap -->
<div class="form-group">
 <?php  echo form_label("Project Name")."<br>";  ?>
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
   

    'class'=> 'form-control',
    'name'=> 'projectname',


    );
    ?>

     
     <?php echo form_input($form_data); //means input type text?>
     
</div>

<div class="form-group">
 <?php  echo form_label("Project Description")."<br>";  ?>
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
   

    'class'=> 'form-control',
    'name'=> 'projectbody',


    );
    ?>

     
     <?php echo form_textarea($form_data); //means input type text?>
     
</div>


<!-- this class is from bootstrap -->
<div class="form-group">
<!-- this way we can apply class to form input fields -->
<?php  $form_data = array(
    
    'class'=> 'btn btn-primary',
    'name'=> 'submit',
    'value' => 'Create'

    );
    ?>
     <?php echo form_submit($form_data); //means input type submit btn?>
     
</div>



<?php
//this will close form
echo form_close();
?>