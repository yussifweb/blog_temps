<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="<?php echo base_url(); ?>images/media/netkid.jpg">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

     <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!--Font Awesome Local-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fontawesome-web/css/all.css">

     <!--Ckeditor PlugIn-->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

     <!-- Optional JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/top.js"></script> 


        <title>IceTunezGh</title>
    </head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	<nav class="navbar navbar-expand-lg navbar-dark bg-own mb-5">
      <div class="container">
        <a class="navbar-brand mr-auto" href="<?php echo base_url(); ?>"><img class="rounded-circle"
        src="<?php echo base_url(); ?>images/media/netkid.jpg" width="40" height="40" alt=""></a>
      <span class="navbar-brand mr-5"><a class="h1 name" href="<?php echo base_url(); ?>">IceTunezGh</a></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
      <?php if($this->session->userdata('logged_in')) : ?>
      <li class="nav-item dropdown">
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>about">Users</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Log Out</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url(); ?>posts/create">Post</a>
          <a class="dropdown-item" href="<?php echo base_url(); ?>categories/create">Category</a>
          <a class="dropdown-item" href="users/register">User</a>
        </div>
        </li>
       <?php endif; ?>
        </ul>
      
      <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/categories/posts/1'); ?>">News</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Music</a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo site_url('/categories/posts/2'); ?>">Uncategorized</a>
          <a class="dropdown-item" href="<?php echo site_url('/categories/posts/3'); ?>">Instrumentals</a>
          <a class="dropdown-item" href="<?php echo site_url('/categories/posts/4'); ?>">DJ Mixes</a>
          <a class="dropdown-item" href="<?php echo site_url('/categories/posts/5'); ?>">Albums</a>
        </div>
     
        </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Videos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://awaga.epizy.com">About</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<main role="full main" class="container">
  <div class="row">
    <div class="col-md-8 mb-5">

        <!-- Flash messages -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_updated')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
      <?php endif; ?>

      <?php if($this->session->flashdata('category_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
      <?php endif; ?>

