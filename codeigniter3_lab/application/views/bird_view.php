<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1><?php echo $heading ?></h1>

<div>
	<img src="<?php echo base_url() . "pictures/" . $picture ?>" alt="" style="float:right;">
	<div style="padding:10px;"><?php echo $content; ?></div>
</div>

