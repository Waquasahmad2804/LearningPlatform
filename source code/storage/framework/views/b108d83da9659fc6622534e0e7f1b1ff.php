<section class="wsus__video mt_120 xs_mt_100">
    <img src="<?php echo e(asset($video?->background)); ?>" alt="Video" class="img-fluid w-100">
    <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
        href="<?php echo e($video?->video_url); ?>">
        <img src="<?php echo e(asset('frontend/assets/images/play_icon_white.png')); ?>" alt="Play" class="img-fluid">
    </a>
    <div class="text wow fadeInLeft">
        <p><?php echo e($video?->description); ?></p>
        <a href="<?php echo e($video?->button_url); ?>"><?php echo e($video?->button_text); ?> <i class="far fa-arrow-right"></i></a>
    </div>
</section><?php /**PATH C:\Users\pc\Desktop\FinalYearProject\source code\resources\views/frontend/pages/home/sections/video-section.blade.php ENDPATH**/ ?>