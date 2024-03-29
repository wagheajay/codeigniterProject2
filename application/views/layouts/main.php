<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Main Layout</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" > </script>
<script src="<?php echo base_url();?>assets/js/jquery.js" /> </script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 -->



</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">AJ's Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php  echo base_url();?>">Home <span class="sr-only">(current)</span></a></li>


        <?php if ($this->session->userdata('logged_in')):?>
        
            <li><a href="<?php echo base_url(); ?>projects">Projects</a></li>
       
            <?php elseif(!$this->session->userdata('logged_in')): ?>
      
      <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
      <?php endif;?>

      <li><a href="<?php echo base_url(); ?>upload/">Upload Image</a></li>
      <li><a href="<?php echo base_url(); ?>upload/get_all_image/">All Images</a></li>

  
        
        
      </ul>
    

      <!-- this will hide logout link when user is not logged in -->
      <?php if ($this->session->userdata('logged_in')):?>
         <ul class="nav navbar-nav navbar-right">
         
                  <li><a href="<?php echo base_url(); ?>users/logout">LogOut</a></li>
          </ul>
            
       
      
      
      <?php endif;?>
    
      
    </div><!-- /.n8vbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>







    <div class="container">

        <div class="col-xs-3" style="background-color: #18c5c2;">

            <?php $this->load->view('/users/login_view'); ?>



        </div>

        <div class="col-xs-9">

             
            <?php $this->load->view($main_view); ?>
             

        </div>

    </div>

</body>

</html>