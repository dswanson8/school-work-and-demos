<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>My CI App</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">

    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

   	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>js/jquery-2.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/bootbox.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
          // console.log("lets go");

          // fade message if it exists
          if ($('#message').length) {
              $('#message').delay(2000).fadeOut({}, 2000);
          }

          // show bootbox confirm on any link using .confirm class; if yes, will continue to href link
          $(".confirm").click(function(){
            var url = $(this).attr('href')
            bootbox.confirm("Are you sure?", function(result) {
              if(result == true){
                document.location = url;
              }else{
                location.reload();
              }
            });
            return false;

          }); // \ confirm click


      }); // \ doc ready

    </script>

  </head>

  <body class="metro">
<div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">My CI App</a>
        </div>



        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">

          <li class="active"><a href="<?php echo base_url();?>home/test">test</a></li>

            <!-- dropdown -->
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Crud<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url()?>crud">Crud Main</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url()?>crud/read">Read</a></li>
                <li><a href="<?php echo base_url()?>crud/write">Write</a></li>
                <li><a href="<?php echo base_url()?>crud/update">update</a></li>
              </ul>
            </li>
      		<!-- \ dropdown -->


            <!-- dropdown -->
            <?php if ($this->tank_auth->is_logged_in()): ?>
            <?php $username = $this->tank_auth->get_username(); ?>

             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b><i class="fa fa-user"> </i><?php echo $username ?></b><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url()?>auth/change_password">Change Password</a></li>
                <li><a href="<?php echo base_url()?>auth/change_email">Change Email</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url()?>auth/logout">Logout</a></li>
              </ul>
            </li>
            <!-- \ dropdown -->


            <!-- Logged In -->
            <?php else: ?>

                <li><a href="<?php echo base_url()?>auth/login"><i class="fa fa-user"></i> Login</a></li>

            <?php endif; ?>

          </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>

<?php

$message = $this->session->flashdata('message');
if ($message) {
    echo "\n<h3 id=\"message\" class=\"alert alert-info\">$message</h3>";
}


 ?>
