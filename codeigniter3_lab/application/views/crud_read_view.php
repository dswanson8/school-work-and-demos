<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<div class="places">

    <div class="places__container">

        <div class="heading">
            <h1>Places to Eat!</h1>
        </div>

        <?php if($results): ?>

            <?php foreach($results as $row): ?>


            <div class="main">
                <h3><?php echo $row->letter; ?></h3>
                <div class="main__description">
                    <?php echo $row->description; ?> 
                </div>
                <div class="main__button">
                    <a href="<?php echo base_url(); ?>crud/detail/<?php echo $row->lid?>" class="btn btn-success btn-sm">Read More...</a> 
                </div>
            </div>


            <?php endforeach; ?>

        <?php endif; ?>
        
    </div>

</div>


