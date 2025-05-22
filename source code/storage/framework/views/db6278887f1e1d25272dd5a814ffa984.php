

<?php $__env->startSection('content'); ?>
    <!--===========================
            BREADCRUMB START
        ============================-->
    <section class="wsus__breadcrumb" style="background: url(<?php echo e(asset(config('settings.site_breadcrumb'))); ?>);">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Blogs</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li>Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
            BREADCRUMB END
        ============================-->


    <!--===========================
            BLOG PAGE START
        ============================-->
    <section class="wsus__blog_page mt_95 xs_mt_75 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
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
                                    <span><img src="<?php echo e(asset('frontend/assets/images/user_icon_black.png')); ?>" alt="User" class="img-fluid"></span>
                                    By <?php echo e($blog->author->name); ?>

                                </li>
                                <li>
                                    <span><img src="<?php echo e(asset('frontend/assets/images/comment_icon_black.png')); ?>" alt="Comment" class="img-fluid"></span>
                                    <?php echo e($blog->comments()->count()); ?> Comments
                                </li>
                            </ul>
                            <a href="<?php echo e(route('blog.show', $blog->slug)); ?>" class="title"><?php echo e($blog->title); ?></a>
                            <p><?php echo e(Str::limit(strip_tags($blog->description), 120)); ?></p>
                            <a href="<?php echo e(route('blog.show', $blog->slug)); ?>" class="common_btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <div>No Blog Found</div>
                <?php endif; ?>
            </div>
            <div class="wsus__pagination mt_50 wow fadeInUp">
                
                <?php echo e($blogs->links()); ?>

            </div>
        </div>
    </section>
    <!--===========================
            BLOG PAGE END
        ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/pages/blog.blade.php ENDPATH**/ ?>