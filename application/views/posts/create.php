<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label >Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="add title">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea class="form-control" id="editor1" name="body" placeholder="Password"> </textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>