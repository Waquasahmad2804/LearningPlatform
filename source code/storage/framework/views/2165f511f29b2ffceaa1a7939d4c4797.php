<section class="blog_4 mt_110 xs_mt_90 pt_120 xs_pt_100 pb_120 xs_pb_100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft">
                <div class="wsus__section_heading heading_left mb_50">
                    <h5>Latest blogs</h5>
                    <h2>Our Latest News Feed.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row blog_4_slider">
        <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-xl-6 wow fadeInUp">
                <div class="wsus__single_blog_4">
                    <a href="<?php echo e(route('blog.show', $blog->slug)); ?>" class="wsus__single_blog_4_img">
                        <img src="<?php echo e(asset($blog->image)); ?>" alt="Blog" class="img-fluid">
                        <span class="date"><?php echo e(date('M d, Y', strtotime($blog->created_at))); ?></span>
                    </a>
                    <div class="wsus__single_blog_4_text">
                        <ul>
                            <li>
                                <span><img src="<?php echo e(asset('frontend/assets/images/user_icon_black.png')); ?>"
                                        alt="User" class="img-fluid"></span>
                                By <?php echo e($blog->author->name); ?>

                            </li>
                            <li>
                                <span><img src="<?php echo e(asset('frontend/assets/images/comment_icon_black.png')); ?>"
                                        alt="Comment" class="img-fluid"></span>
                                <?php echo e($blog->comments()->count()); ?> Comments
                            </li>
                        </ul>
                        <a href="<?php echo e(route('blog.show', $blog->slug)); ?>" class="title"><?php echo e($blog->title); ?></a>
                        <p><?php echo e(Str::limit(strip_tags($blog->description), 120)); ?></p>
                        <a href="<?php echo e(route('blog.show', $blog->slug)); ?>" class="common_btn">Read More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div>No Blog Found</div>
        <?php endif; ?>

    </div>
</section>
<?php /**PATH C:\Users\pc\Desktop\FinalYearProject\source code\resources\views/frontend/pages/home/sections/blog-section.blade.php ENDPATH**/ ?>