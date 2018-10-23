<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <title>CiBlog</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">CiBlog</a>
        </div>
        <div id="navbar">
        <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li><a href="<?php echo base_url(); ?>about">About</a></li>
         <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
