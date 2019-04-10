<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2>Give us a hint. Give us a clue. Just tell us where this place is</h2>

<div class="writeView">

	<div class="writeView__col-one">
		
	
		<?php echo form_open_multipart('crud/write') ?>

			<div class="form-group">
			  <label for="letter">Post Title</label>
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
				<input type="submit" class="btn btn-primary">
			</div>

		</form>

	</div>


	<div class="writeView__col-two">
		<form action="">
			<h3>Upload an image to go along with your post.</h3>
			<div>

				<div class="form-group">
					<?php 
						$attributes = array('name' => 'file_upload_form', 'id' => 'file_upload_form');
	                    echo form_open_multipart($this->uri->uri_string(), $attributes);
					?>
					<p><input class="btn btn-secondary" name="file_name" id="file_name" readonly="readonly" type="file" /></p>
					<p class="button_container"><input class="btn btn-primary" name="file_upload" value="Upload" type="submit" /></p>

					<div>
						
						<?php 
							if (isset($success) && strlen($success)) {
			                    echo '<div class="success">';
			                    echo '<p>' . $success . '</p>';
			                    echo '</div>';
			                }
						 ?>
						 
					</div>
				</div>

			</div>
		</form>
	</div>

</div>
