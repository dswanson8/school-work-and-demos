
<?php if($results): ?>

<?php foreach($results as $row): ?>
	

	<div class="places">

		<div class="places__container">

    		<h2 class="singlePage_heading"><?php echo $row->letter; ?></h2>
			

		    <div class="main">
		        <div class="main__description"><p><?php echo $row->description; ?></p></div>
			    <div class="blog_author">
			        <p>Post created by <span><?php echo $row->username; ?></span></p>
			    </div>
			    <div class="main__config">
			        <a href="<?php echo base_url() ?>crud/edit/<?php echo $row->lid;?>" class="btn btn-primary btn-lg">Edit</a>
			        <a href="<?php echo base_url() ?>crud/delete/<?php echo $row->lid;?>" class="btn btn-warning btn-lg confirm">Delete</a>
			    </div>
		    </div>

		</div>

	</div>



<?php endforeach; ?>

<?php endif; ?>
