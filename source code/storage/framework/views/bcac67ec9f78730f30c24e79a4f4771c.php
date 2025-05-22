<section class="wsus__about_3 mt_120 xs_mt_100 ">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="wsus__about_3_img">

                    <img src="<?php echo e(asset($about?->image)); ?>" alt="About us" class="about_3_large img-fluid w-100">

                    <div class="text">
                        <h4> <span><?php echo e($about?->lerner_count); ?></span> <?php echo e($about?->lerner_count_text); ?></h4>
                        <img src="<?php echo e(asset($about?->lerner_image)); ?>" alt="Photo" class="img-fluid">
                    </div>

                    <div class="circle_box">
                        <svg viewBox="0 0 100 100">
                            <defs>
                                <path id="circle2" d="
                        M 50, 50
                        m -37, 0
                        a 37,37 0 1,1 74,0
                        a 37,37 0 1,1 -74,0"></path>
                            </defs>
                            <text>
                                <textPath xlink:href="#circle">
                                    <?php echo e($about?->rounded_text); ?>

                                </textPath>
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="wsus__about_3_text">
                    <div class="wsus__section_heading heading_left mb_15">
                        <h5>Learn More About Us</h5>
                        <h2><?php echo e($about?->title); ?></h2>
                    </div>
                    <?php echo $about?->description; ?>

                    <?php if($about?->button_text): ?>
                    <br>
                    <a class="common_btn" href="<?php echo e($about?->button_url); ?>"><?php echo e($about?->button_text); ?></a>
                    <?php endif; ?>

                    <?php if($about?->video_url): ?>
                    <div class="about_video">
                        <img src="<?php echo e(asset($about?->video_image)); ?>" alt="Video" class="img-fluid w-100">
                        <span>live</span>
                        <a class="play_btn venobox" data-autoplay="true" data-vbtype="video"
                            href="<?php echo e($about?->video_url); ?>">
                            <img src="<?php echo e(asset('frontend/assets/images/play_icon_white.png')); ?>" alt="Play" class="img-fluid">
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\Users\pc\Desktop\FinalYearProject\source code\resources\views/frontend/pages/home/sections/about-section.blade.php ENDPATH**/ ?>