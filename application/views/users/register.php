<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="">Zipcode</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Zipcode">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
    </div>
    <button type="submit" class="btn btn-primary">Reister</button>


<?php echo form_close(); ?>