<div class="places">
    <div class="places__container">

        <div class="heading">
            <h1>Places to Eat!</h1>
        </div>

        <?php if($results): ?>

            <?php foreach($results as $row): ?>


                <div class="places__main">
                    <h3><?php echo $row->letter; ?></h3>
                    <a href="<?php echo base_url(); ?>crud/detail/<?php echo $row->lid?>" class="btn btn-success btn-sm">Read More...</a>
                </div>
                <hr>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>
