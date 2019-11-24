<div class="columns is-4 video_review_item">
    <div class="column video">
        <?php block_field('video'); ?>
    </div>
    <div class="column">
        <div class="">
            <figure class="image is-128x128">
                <img class="is-rounded" src="<?php block_field('image'); ?>">
            </figure>
            <div class="">
                <?php block_field('name');?>
            </div>
            <div>
                <a class="" href="<?php block_field('social-link');?>">
                    <figure class="image is-64x64">
                        <img  class="" src="<?php block_field('social-icon');?>">
                    </figure>
                </a>

            </div>
        </div>
        <div class="box">
            <?php block_field('text'); ?>
        </div>
        <div>
            <button>readfull</button>
        </div>
    </div>
</div>

