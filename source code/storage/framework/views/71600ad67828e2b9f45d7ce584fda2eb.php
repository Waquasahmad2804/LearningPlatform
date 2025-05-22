<?php
    $footer = \App\Models\Footer::first();
    $socialLinks = \App\Models\SocialLink::where('status', 1)->get();
    $footerColumnOne = \App\Models\FooterColumnOne::where('status', 1)->get();
    $footerColumnTwo = \App\Models\FooterColumnTwo::where('status', 1)->get();
?>
<footer class="footer_3" style="background: url(<?php echo e(asset('frontend/assets/images/footer_3_bg.jpg')); ?>);">
    <div class="footer_3_overlay pt_120 xs_pt_100">
        <div class="wsus__footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 wow fadeInUp">
                        <div class="wsus__footer_3_logo_area">
                            <a class="logo" href="index.html">
                                <img src="<?php echo e(asset(config('settings.site_footer_logo'))); ?>" alt="EduCore" class="img-fluid">
                            </a>
                            <p><?php echo e($footer?->description); ?></p>
                            <h2>Follow Us On</h2>
                            <ul class="d-flex flex-wrap">
                                <?php $__currentLoopData = $socialLinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($socialLink->url); ?>" target="_blank">
                                    <img src="<?php echo e(asset($socialLink->icon)); ?>" alt="" style="width: 20px !important; height: 20px !important;">
                                </a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3 wow fadeInUp">
                        <div class="wsus__footer_link">
                            <h2>Help Links</h2>
                            <ul>
                                <?php $__currentLoopData = $footerColumnOne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footerColumn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($footerColumn->url); ?>"><?php echo e($footerColumn->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-md-3 wow fadeInUp">
                        <div class="wsus__footer_link">
                            <h2>More Links</h2>
                            <ul>
                                <?php $__currentLoopData = $footerColumnTwo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footerColumn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e($footerColumn->url); ?>"><?php echo e($footerColumn->title); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="wsus__footer_3_subscribe">
                            <h3>Connect With Us</h3>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo e(asset('frontend/assets/images/mail.png')); ?>" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Email us:</h4>
                                        <a href="mailto:<?php echo e($footer?->email); ?>"><?php echo e($footer?->email); ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo e(asset('frontend/assets/images/call_icon_white.png')); ?>" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Call us:</h4>
                                        <a href="callto:<?php echo e($footer?->phone); ?>"><?php echo e($footer?->phone); ?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo e(asset('frontend/assets/images/location_icon_white.png')); ?>" alt="Call" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h4>Address:</h4>
                                        <p><?php echo e($footer?->address); ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wsus__footer_copyright_area mt_140 xs_mt_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wsus__footer_copyright_text text-center" style="display: block;">
                            <p><?php echo e($footer?->copyright); ?></p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>