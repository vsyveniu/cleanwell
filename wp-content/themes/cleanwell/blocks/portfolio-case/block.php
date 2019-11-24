<div class="box">
    <div class="box">
        <?php block_field('title'); ?>
    </div>
    <div class="tile  container is-ancestor">

            <div class="tile is-vertical is-4">

                    <div class="tile is-parent is-vertical">
                            <figure class="tile is-child image box is-flex">
                                <img src="<?php block_field('image-1');?>">
                            </figure>
                            <figure class="tile box is-child image is-flex">
                                <img src="<?php block_field('image-2');?>">
                            </figure>
                    </div>
            </div>
        <div class="tile is-parent is-4 is-vertical" style="background-image: url('<?php echo(get_template_directory_uri() . "/images/empty_state.png");?>'); background-repeat: no-repeat;
                background-size: 100%;">
            <figure class="tile image box is-flex">
                <img src="<?php block_field('image-3');?>">
            </figure>
        </div>

        <div class="tile is-vertical is-4">
            <div class="tile is-parent">
                <figure class="tile is-child box image is-flex">
                    <img src="<?php block_field('image-4');?>">
                </figure>
            </div>
            <div class="tile is-parent">
                <figure class="tile is-child box is-flex image">
                    <img src="<?php block_field('image-5');?>">
                </figure>
            </div>

        </div>



    </div>



    <div class="box">
        <?php block_field('text'); ?>
    </div>
</div>
