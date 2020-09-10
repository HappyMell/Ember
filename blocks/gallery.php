<?php $gallery = get_field('gallery')?>

<section class="gallery-wrapper">
        <div class="gallery-wrapper__logo">
          <img
            src="<?php echo $gallery['logo']?>"
          />
        </div>
        <div class="gallery" id="gallery">
        <?php foreach($gallery['images'] as $image) { ?>
            <img
            src="<?php echo $image['image']?>"
          />
      <?php  }?>
        
        
        </div>
      </section>