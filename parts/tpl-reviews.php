<?php
if ( function_exists('get_field') ) {
    $title  = get_sub_field('title');
    $gallery  = get_sub_field('gallery');

}
?>
<section id="reviews" class="reviews">
    <div class="container">
        <?php if(!empty($title)) : ?>
            <h2><?=$title?></h2>
        <?php endif; ?>

        <?php if(!empty($gallery)) : ?>
            <div class="swiper slider">
                <div class="swiper-wrapper">
                    <?php foreach ($gallery as $key=>$item):?>
                        <?php $mime_type = $item['mime_type']; ?>
                         <div class="swiper-slide">
                       <?php if (str_contains($mime_type, 'image/') !== false): ?>
                           <figure>
                               <img src="<?=$item['url']?>" alt="<?=get_bloginfo();?>" width="100%" height="100%">
                           </figure>
                       <?php elseif (str_contains($mime_type, 'video/') !== false): ?>
                           <figure class="video-card">
                               <video  playsinline webkit-playsinline controls preload="metadata" preload="auto" width="100%" height="100%">
                                   <source type="video/mp4" src="<?php echo esc_url($item['url']); ?>">
                               </video>
                           </figure>
                    <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-button-next nav">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.593 5.61751C16.2125 5.9962 16.2125 6.61018 16.593 6.98887L24.6733 15.0305H3.64098C3.10286 15.0305 2.66663 15.4646 2.66663 16.0002C2.66663 16.5357 3.10286 16.9699 3.64098 16.9699H24.6733L16.593 25.0115C16.2125 25.3901 16.2125 26.0041 16.593 26.3828C16.9735 26.7615 17.5905 26.7615 17.971 26.3828L27.7146 16.6858C28.0951 16.3072 28.0951 15.6932 27.7146 15.3145L17.971 5.61751C17.5905 5.23882 16.9735 5.23882 16.593 5.61751Z" fill="#E62E34" />
                    </svg>
                </div>
                <div class="swiper-button-prev nav">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0736 5.61751C14.4541 5.9962 14.4541 6.61018 14.0736 6.98887L5.99329 15.0305H27.0256C27.5637 15.0305 28 15.4646 28 16.0002C28 16.5357 27.5637 16.9699 27.0256 16.9699H5.9933L14.0736 25.0115C14.4541 25.3901 14.4541 26.0041 14.0736 26.3828C13.693 26.7615 13.0761 26.7615 12.6956 26.3828L2.95201 16.6858C2.5715 16.3072 2.5715 15.6932 2.95201 15.3145L12.6956 5.61751C13.0761 5.23882 13.693 5.23882 14.0736 5.61751Z" fill="#E62E34" />
                    </svg>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>