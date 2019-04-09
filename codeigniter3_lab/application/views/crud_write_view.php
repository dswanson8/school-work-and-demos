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
	<label for="address">Address:</label>
	<div class="col-6">
		<input type="text" class="form-control" name="address" value="<?php echo set_value('address') ?>">
	</div>
	<?php echo form_error('address') ?>
</div>

<div class="form-group">
	<label for="phone">Phone:</label>
	<div class="col-6">
		<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone') ?>">
	</div>
	<?php echo form_error('phone') ?>
</div>

<div class="form-group">

	<input type="submit" class="btn">
	
</div>


</form>
