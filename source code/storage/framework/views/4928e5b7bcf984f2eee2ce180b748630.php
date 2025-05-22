<section class="wsus__testimonial pt_120 xs_pt_80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_40">
                    <h5>Testimonial</h5>
                    <h2>See what your students say</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row testimonial_slider">
        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 wow fadeInUp">
                <div class="wsus__single_testimonial">
                    <p class="rating">
                        <?php for($i = 1; $i <= $testimonial->rating; $i++): ?>
                            <i class="fas fa-star"></i>
                        <?php endfor; ?>

                    </p>
                    <p class="description"><?php echo e($testimonial->review); ?></p>

                    <div class="wsus__testimonial_footer">
                        <div class="img">
                            <img src="<?php echo e(asset($testimonial->user_image)); ?>" alt="user" class="img-fluid">
                        </div>
                        <h3>
                            <?php echo e($testimonial->user_name); ?>

                            <span><?php echo e($testimonial->user_title); ?></span>
                        </h3>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php /**PATH C:\Users\pc\Desktop\FinalYearProject\source code\resources\views/frontend/pages/home/sections/testimonial-section.blade.php ENDPATH**/ ?>