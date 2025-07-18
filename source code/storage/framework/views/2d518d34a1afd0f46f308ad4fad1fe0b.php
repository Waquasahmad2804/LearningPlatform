<section class="wsus__category_4 mt_190 xs_mt_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_35">
                    <h5>Categories</h5>
                    <h2>Explore Categories</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $featuredCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xxl-3 col-md-6 col-lg-4 wow fadeInUp">
                <a href="<?php echo e(route('courses.index', ['main_category' => $category->slug])); ?>" class="wsus__single_category_4">
                    <div class="icon">
                        <img src="<?php echo e(asset($category->image)); ?>" alt="category" class="img-fluid w-100">
                    </div>
                    <div class="text">
                        <h4><?php echo e($category->name); ?></h4>
                        <p><?php echo e($category?->active_course_count); ?> Course</p>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
       
    </div>
</section><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/pages/home/sections/category-section.blade.php ENDPATH**/ ?>