<h1>Crud Read</h1>

<?php if($results): ?>

<?php foreach($results as $row): ?>

    <h3><?php echo $row->letter; ?></h3>
    <a href="<?php echo base_url(); ?>crud/detail/<?php echo $row->id?>" class="btn btn-success btn-sm">Read More...</a>

<?php endforeach; ?>

<?php endif; ?>
