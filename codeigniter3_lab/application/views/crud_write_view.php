<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>Create New Letter</h1>

<?php echo form_open_multipart('crud/write') ?>

<div class="form-group">
  <label for="letter">Letter</label>
  <input type="text" name="letter" class="form-control" value="<?php echo set_value('letter') ?>">
  <?php echo form_error('letter') ?>
</div>

<div class="form-group">
  <label for="description">Description</label>
  <textarea name="description" rows="8" cols="8" class="form-control"><?php echo set_value('description') ?></textarea>
  <?php echo form_error('description') ?>
</div>

<div class="form-group">
	<input type="file" name="userfile" size="20" />
</div>

<div class="form-group">

	<div class="file_upload">
		<h3>Your file was successfully uploaded!</h3>

		<ul>
			<?php foreach ($upload_data as $item => $value):?>

				<li><?php echo $item;?>: <?php echo $value;?></li>

			<?php endforeach; ?>
		</ul>

		<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>
	</div>


	<input type="submit" class="btn">
	
</div>


</form>
