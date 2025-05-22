
<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="<?php echo e($blog->seo_title); ?>">
    <meta property="og:description" content="<?php echo e($blog->seo_description); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:image" content="<?php echo e(asset($blog->image)); ?>">
    <meta property="og:type" content="Blog">
<?php $__env->stopPush(); ?>
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
                            <h1>Blog details</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li>Blog details</li>
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
        BLOG DETAILS START
    ============================-->
    <section class="wsus__blog_details mt_120 xs_mt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 wow fadeInLeft">
                    <div class="wsus__blog_details_area">
                        <div class="wsus__blog_details_thumb">
                            <img src="<?php echo e(asset($blog->image)); ?>" alt="Blog" class="img-fluid w-100">
                        </div>
                        <div class="wsus__blog_details_header">
                            <ul class="d-flex flex-wrap">
                                <li>
                                    <span class="author">
                                        <img src="<?php echo e($blog->author->image ? asset($blog->author->image) : asset('default-files/avatar.png')); ?>" alt="user" class="img-fluid">
                                    </span>
                                    By <?php echo e($blog->author->name); ?>

                                </li>
                                <li>
                                    <span>
                                        <img src="<?php echo e(asset('frontend/assets/images/calendar_gray.png')); ?>" alt="calendar" class="img-fluid">
                                    </span>
                                    <?php echo e(date('M d, Y', strtotime($blog->created_at))); ?>

                                </li>
                                <li>
                                    <span>
                                        <img src="<?php echo e(asset('frontend/assets/images/bookmark_icon.png')); ?>" alt="bookmark" class="img-fluid">
                                    </span>
                                    <?php echo e($blog->category->name); ?>

                                </li>
                                <li>
                                    <span>
                                        <img src="<?php echo e(asset('frontend/assets/images/comment_icon_gray.png')); ?>" alt="bookmark" class="img-fluid">
                                    </span>
                                    <?php echo e($blog->comments()->count()); ?> Comments
                                </li>
                            </ul>
                            <h2><?php echo e($blog->title); ?></h2>
                        </div>
                        <div class="wsus__blog_details_text">
                           <?php echo $blog->description; ?>

                        </div>
                        <div class="wsus__blog_det_tags_share d-flex flex-wrap mt_50">
                           
                            <ul class="share d-flex flex-wrap align-items-center">
                                <li><span>share:</span></li>
                                <li class="ez-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="ez-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="ez-x"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="ez-reddit"><a href="#"><i class="fab fa-reddit"></i></a></li>
                            </ul>
                        </div>
                        <div class="wsus__blog_det_author">
                            <div class="img">
                                <img src="<?php echo e($blog->author->image ? asset($blog->author->image) : asset('default-files/avatar.png')); ?>" alt="Author" class="img-fluid">
                            </div>
                            <div class="text">
                                <h3><?php echo e($blog->author->name); ?></h3>
                                <h5>Digital Marketing</h5>
                                <p>Sed mi leo, accumsan vel ante at, viverra placerat nulla. Donec pharetra rutrum sed
                                    allium lectus fermentum enim Nam maximus.</p>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="wsus__blog_comment_area mt_75">
                            <h2>Comments</h2>
                            <?php $__currentLoopData = $blog->comments()->orderBy('id', 'desc')->get() ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="wsus__blog_single_comment">
                                <div class="img">
                                    <img src="<?php echo e($comment->user->image ? asset($comment->user->image) : asset('default-files/avatar.png')); ?>" alt="Comments" class="img-fluid">
                                </div>
                                <div class="text">
                                    <h4><?php echo e($comment->user->name); ?></h4>
                                    <h6><?php echo e(date('M d, Y', strtotime($comment->created_at))); ?></h6>
                                    <p><?php echo e($comment->comment); ?></p>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                        <?php if(auth()->guard()->check()): ?>
                        <div class="wsus__blog_comment_input_area mt_75">
                            <h2>Post a Comment</h2>
                            <p>Please add your comment here</p>
                            <form action="<?php echo e(route('blog.comment.store', $blog->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    
                                    <div class="col-xl-12">
                                        <textarea rows="5" placeholder="Leave a comment" name="comment"></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        
                                        <button type="submit" class="common_btn">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php else: ?>
                        <div class="alert alert-info text-center">You need to login to comment</div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInRight">
                    <div class="wsus__blog_sidebar wsus__sidebar">
                        <form action="<?php echo e(route('blog.index')); ?>" class="wsus__sidebar_search" method="get">
                            <input type="text" placeholder="Search Here..." name="search">
                            <button type="submit">
                                <img src="<?php echo e(asset('frontend/assets/images/search_icon.png')); ?>" alt="Search" class="img-fluid">
                            </button>
                        </form>
                        <div class="wsus__sidebar_recent_post">
                            <h3>Recent Posts</h3>
                            <ul class="d-flex flex-wrap">
                                <?php $__currentLoopData = $recentBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="w-100">
                                    <a href="<?php echo e(route('blog.show', $blog->slug)); ?>" class="img">
                                        <img src="<?php echo e(asset($blog->image)); ?>" alt="Blog" class="img-fluid">
                                    </a>
                                    <div class="text">
                                        <p>
                                            <span>
                                                <img src="<?php echo e(asset('frontend/assets/images/calendar_blue.png')); ?>" alt="Clander" class="img-fluid">
                                            </span>
                                            <?php echo e(date('M d, Y', strtotime($blog->created_at))); ?>

                                        </p>
                                        <a href="<?php echo e(route('blog.show', $blog->slug)); ?>" class="title"><?php echo e($blog->title); ?></a>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </ul>
                        </div>
                        <div class="wsus__sidebar_blog_category">
                            <h3>Categories</h3>
                            <ul>
                                <?php $__currentLoopData = $blogCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(route('blog.index', ['category' => $category->slug])); ?>"><?php echo e($category->name); ?> <span>(<?php echo e($category->blogs_count); ?>)</span></a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
        BLOG DETAILS END
    ============================-->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/gh/shakilahmed0369/ez-share/dist/ez-share.min.js"></script>

<script>
    $(function() {
      $('#starRating li').on('click', function() {
        var $starRating = $('#starRating').find('.active').length;

        $('#rating').val($starRating);
      })
    })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/pages/blog-detail.blade.php ENDPATH**/ ?>