<div id="gallery" style="padding:50px 0px; display:inline-block; position: relative; left: 50%; transform: translateX(-50%);">
    <?php
        arsort($images);
        foreach($images as $file => $date)  { ?>
            <div class="image" style="display: inline-block; padding:10px;">
                <a target="_blank" href="<?php echo $FOLDER.$file ?>">
                    <img style="width: 300px" src="<?php echo $FOLDER.$file ?>">
                </a>
            </div>
        <?php   }  ?>
</div>