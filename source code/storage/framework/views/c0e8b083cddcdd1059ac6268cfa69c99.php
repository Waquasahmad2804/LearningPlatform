<section class="wsus__brand mt_45 pt_120 xs_pt_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wsus__brand_slider_area wow fadeInUp">
                    <h6>Our Partners</h6>
                    <div class="marquee_animi">
                        <ul class="d-flex flex-wrap">
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e($brand->url); ?>">
                                    <img src="<?php echo e(asset($brand->image)); ?>" alt="brand" class="img-fluid w-100">
                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/pages/home/sections/brand-section.blade.php ENDPATH**/ ?>