<section class="wsus__banner_3" style="background: url(<?php echo e(asset('frontend/assets/images/banner_3_bg.png')); ?>);">
    <div class="row justify-content-between">
        <div class="col-xl-6 col-lg-6 wow fadeInUp">
            <div class="wsus__banner_3_text">
                <?php if($hero?->label): ?>
                <h5><?php echo e($hero->label); ?></h5>
                <?php endif; ?>
                <h1><?php echo e($hero?->title); ?></h1>
                <p class="description"><?php echo e($hero?->subtitle); ?></p>
                <div class="wsus__banner_2_btn_area mt_60">
                    <?php if($hero?->button_text): ?>
                    <a class="common_btn" href="<?php echo e($hero->button_url); ?>"><?php echo e($hero->button_text); ?> <i class="far fa-arrow-right"
                            aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php if($hero?->button_text): ?>
                    <div class="play_btn_area">
                        <a class="play_btn venobox vbox-item" data-autoplay="true" data-vbtype="video"
                            href="<?php echo e($hero->video_button_url); ?>">
                            <img src="<?php echo e(asset('frontend/assets/images/play_icon.png')); ?>" alt="Play" class="img-fluid">
                        </a>
                        <h4><?php echo e($hero->video_button_text); ?></h4>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 wow fadeInRight">
            <div class="wsus__banner_3_img">
                <div class="img">
                    <img src="<?php echo e(asset($hero?->image)); ?>" alt="Banner" class="img-fluid">

                    <div class="text">
                        <h4><?php echo e($hero?->banner_item_title); ?></h4>
                        <p><?php echo e($hero?->banner_item_subtitle); ?></p>
                    </div>

                    <div class="circle_box">
                        <svg viewBox="0 0 100 100">
                            <defs>
                                <path id="circle" d="
                        M 50, 50
                        m -37, 0
                        a 37,37 0 1,1 74,0
                        a 37,37 0 1,1 -74,0"></path>
                            </defs>
                            <text>
                                <textPath xlink:href="#circle">
                                    <?php echo e($hero?->round_text); ?>

                                </textPath>
                            </text>
                        </svg>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <ul class="wsus__banner_features d-flex flex-wrap">
        <li class="green wow fadeInRight">
            <div class="icon">
                <img src="<?php echo e(asset($feature?->image_one)); ?>" alt="Features" class="img-fluid">
            </div>
            <div class="text">
                <h4><?php echo e($feature?->title_one); ?></h4>
                <p><?php echo e($feature?->subtitle_one); ?></p>
            </div>
        </li>
        <li class="pink wow fadeInRight">
            <div class="icon">
                <img src="<?php echo e(asset($feature?->image_two)); ?>" alt="Features" class="img-fluid">
            </div>
            <div class="text">
                <h4><?php echo e($feature?->title_two); ?></h4>
                <p><?php echo e($feature?->subtitle_two); ?></p>
            </div>
        </li>
        <li class="sky wow fadeInRight">
            <div class="icon">
                <img src="<?php echo e(asset($feature?->image_three)); ?>" alt="Features" class="img-fluid">
            </div>
            <div class="text">
                <h4><?php echo e($feature?->title_three); ?></h4>
                <p><?php echo e($feature?->subtitle_three); ?></p>
            </div>
        </li>
    </ul>
</section><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/pages/home/sections/hero-section.blade.php ENDPATH**/ ?>