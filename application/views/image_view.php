<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 

    <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
    
</head>
<body>

<h2>Images Side by Side</h2>
<p>How to create side-by-side images with the CSS float property:</p>



<?php foreach($images as $image): ?> 

<div class="container">
  <div class="row">
    <div class="col-md-3">
       <div class="thumbnail">
      <a href="<?php echo base_url(); ?><?php echo "uploads/".$image->file_name ?>">
        <img src="<?php echo base_url(); ?><?php echo "uploads/".$image->file_name ?>" alt="Lights" style="width:100%">
        <div class="caption">
          <p><?php echo $image->file_name ?></p>
        </div>
       </a>
      </div>
    </div>
  </div>
</div>


 <?php endforeach;?>

    
</body>
</html>