<?php
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
?>
<div class="center-page">
	<?php echo form_open($this->uri->uri_string()); ?>
	<div class="form-group">
		<?php echo form_label('Password', $password['id']); ?>
		<?php echo form_password($password, '', 'class="form-control"'); ?>
		<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
	</div>

	<div class="form-group">
		<?php echo form_label('New email address', $email['id']); ?>
		<?php echo form_input($email, '', 'class="form-control"'); ?>
		<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
	</div>


	<?php echo form_submit('change', 'Send confirmation email', 'class="btn btn-info"'); ?>
	<?php echo form_close(); ?>
</div>
