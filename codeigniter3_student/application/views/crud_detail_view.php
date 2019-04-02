<h1>Crud Details</h1>

<?php if($results): ?>

<?php foreach($results as $row): ?>

    <h3><?php echo $row->letter; ?></h3>
    <div><?php echo $row->description; ?></div>

    <div class="">
        <a href="<?php echo base_url() ?>crud/edit/<?php echo $row->id;?>" class="btn btn-primary btn-lg">Edit</a>
        <a href="<?php echo base_url() ?>crud/delete/<?php echo $row->id;?>" class="btn btn-warning btn-lg confirm">Delete</a>
    </div>

<?php endforeach; ?>

<?php endif; ?>
