<div class="column is-one-third box">
    <div>
        <figure>
            <img src="<?php block_field('image');?>">
        </figure>
    </div>
    <div>
        <div>
            <?php block_field('name');?>
        </div>
        <div></div>
        <div>
            <?php block_field('text');?>
        </div>
    </div>
    <div>
        <?php block_field('price');?>
    </div>
    <div>
        <button class="button">order</button>
        <a  class="button" href="<?php block_field('link')?>">link</a>
    </div>

</div>
