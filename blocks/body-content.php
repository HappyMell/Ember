<?php $body_content = get_field('body_content');
       $title_with_text = $body_content['title_with_text'];
       $menu = $body_content['menu'];
       $blog = $body_content['blogs'];
       $form = $body_content['reservation_form'];
       $contact = $body_content['contact'];
?>


<section class="content-wrapper">
        <div class="button-wrapper">
          <button class="lrg-button hvr-sweep-to-right"><a href="<?php echo $body_content['reserve_button']['url']?>"><?php echo $body_content['reserve_button']['title']?></a></button>
        </div>
        <div class="content-body">
          <div class="content-body__container">
          <?php if ($body_content['featured_heading']) { ?>
               <h1>
               <?php echo $body_content['featured_heading']?>
             </h1>
        <?php  }?>


         <?php if ($title_with_text) { ?>      

           <h1 class="story-header">
              <?php echo $title_with_text['title']?>
            </h1>
            <div class="content">
              <div class="text-block">
              <?php echo $title_with_text['text']?>
              </div>
            </div> 
         <?php }?>

         <?php if ($menu) {?>
            <h1 class="menu-header">
              <?php echo $menu['title']?>
            </h1>
            <div class="content">
              <div class="menu-intro">
                <p>
                  <?php echo $menu['menu_intro']?>
                </p>
              </div>
              <div class="menu">
                  <?php if (is_array($menu['menus'])) { ?>

                  
                  <?php foreach( $menu['menus'] as $menus){ ?>
                    <div>
                  <h3 class="menu-title"><?php echo $menus['courses']?></h3>
                  <ul class="menu-list">
                      <?php foreach($menus['items'] as $item) {?>
                        <li class="menu-list__item">
                      <p class="text-block"><?php echo $item['description']?></p>
                      <p class="price"><?php echo $item['price']?></p>
                    </li>
                      <?php }; ?>                  
                   </ul>
                </div>
                 <?php };?> 
                      <?php };?>                    
              </div>
            </div>
         <?php }; ?>


        <?php if($blog){ ?>
            <h1 class="story-header">
              News
            </h1>
            <div class="news-wrapper">
              <div class="blog-grid">
                  <?php foreach($blog as $post) { 
                    setup_postdata($post);
                      ?>
                      <div class="blog-grid__item">
                  <a class="cards" href="<?php the_permalink($post); ?>">
                    <img
                      src="<?php echo get_the_post_thumbnail_url($post->ID)?>"
                    />
                    <h5><?php echo get_the_title($post->ID); ?></h5>
                    <p><?php echo get_the_time('j, F, Y')?></p>
                  </a>
                </div>

                  <?php }?>
          
              </div>
            </div>
                    <?php wp_reset_postdata(); ?>
      <?php  }?>

      <?php if($form){ ?>
        <h1 class="story-header">
              <?php echo $form['title']?>
            </h1>
            <div class="content">
              <div class="form-intro">
                <p>
                  <?php echo $form['form_intro']?>
                </p>
              </div>
              <div class="form-block">
               <?php echo $form['form']?>
              </div>

     <?php }?>


        <?php if($contact){ ?>
          <h1 class="story-header">
              <?php echo $contact['title']?>
            </h1>

            <div class="content">
              <div class="menu-intro">
                <p>
                 <?php echo $contact['contact_intro']?>
                </p>
              </div>
              <?php $location = $contact['location']?>
              <div class="contact-grid">
                <div>
                  <h5><?php echo $location['title']?></h5>
                  <p>
                    <?php echo $location['address']?>
                  </p>
                </div>
                <div>
                <?php $contactInfo = $contact['contact']?>
                  <h5><?php echo $contactInfo['title']?></h5>
                  <p>
                    <a href="<?php echo $contactInfo['phone_number']['url']?>"><?php echo $contactInfo['phone_number']['title']?></a> <br />
                    <a href="<?php echo $contactInfo['email']['url']?>"><?php echo $contactInfo['email']['title']?></a> <br />
                  </p>
                </div>
                <div>
                <?php $lunch = $contact['lunch_times']?>
                  <h5><?php $lunch['title']?></h5>
                  <p>
                    <?php echo $lunch['days']?><br />
                    <?php echo $lunch['time']?> <br />
                  </p>
                </div>
                <div>
                <?php $dinner = $contact['dinner_times']?>
                  <h5><?php $dinner['title']?></h5>
                  <p>
                    <?php echo $dinner['days']?> <br />
                    <?php echo $dinner['time']?> <br />
                  </p>
                </div>
              </div>
              <h3><?php echo $contact['message_title']?></h3>
              <div class="form-block">
               
                <?php echo $contact['reservation_form']?>
                
              </div>
            </div>
       <?php }?>

          </div>
        </div>
        <footer class="footer">
          <div class="footer__container">
            <p>1282 High St, Armadale</p>
            <a class="phone" href="#">(03) 9382 7271</a>
          </div>
        </footer>
      </section>