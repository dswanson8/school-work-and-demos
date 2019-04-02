<h1>Crud Read</h1>

<?php if($results): ?>

<?php foreach($results as $row): ?>

    <h3><?php echo $row->letter; ?></h3>

<?php endforeach; ?>

<?php endif; ?>
