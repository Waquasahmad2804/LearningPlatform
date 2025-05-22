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
                            <h1>Our Courses</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li>Our Courses</li>
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
        COURSES PAGE START
    ============================-->
    <section class="wsus__courses mt_120 xs_mt_100 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-8 order-2 order-lg-1 wow fadeInLeft">
                    <div class="wsus__sidebar">
                        <form action="<?php echo e(route('courses.index')); ?>">
                            <div class="wsus__sidebar_search">
                                <input type="text" placeholder="Search Course" name="search" value="<?php echo e(request()->search ?? ''); ?>">
                                <button type="submit">
                                    <img src="<?php echo e(asset('frontend/assets/images/search_icon.png')); ?>" alt="Search" class="img-fluid">
                                </button>
                            </div>

                            <div class="wsus__sidebar_category">
                                <h3>Categories</h3>
                                <ul class="categoty_list">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="active"><?php echo e($category->name); ?>

                                        <div class="wsus__sidebar_sub_category">
                                            <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="<?php echo e($subCategory->id); ?>"
                                                    id="category-<?php echo e($subCategory->id); ?>" name="category[]" <?php if(
                                                    is_array(request()->category) ?
                                                    in_array($subCategory->id, request()->category ?? []):
                                                    $subCategory->id == request()->category
                                                    ): echo 'checked'; endif; ?>>
                                                <label class="form-check-label" for="category-<?php echo e($subCategory->id); ?>">
                                                    <?php echo e($subCategory->name); ?>

                                                </label>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          
                                        </div>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </ul>
                            </div>

                            <div class="wsus__sidebar_course_lavel">
                                <h3>Difficulty Level</h3>
                                <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?php echo e($level->id); ?>" name="level[]" id="level-<?php echo e($level->id); ?>" <?php if(in_array($level->id, request()->level ?? [])): echo 'checked'; endif; ?> >
                                    <label class="form-check-label" for="level-<?php echo e($level->id); ?>">
                                        <?php echo e($level->name); ?>

                                    </label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>

                            <div class="wsus__sidebar_course_lavel rating">
                                <h3>Rating</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultr1">
                                    <label class="form-check-label" for="flexCheckDefaultr1">
                                        <i class="fas fa-star"></i> 5 star
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultr2">
                                    <label class="form-check-label" for="flexCheckDefaultr2">
                                        <i class="fas fa-star"></i> 4 star or above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultr3">
                                    <label class="form-check-label" for="flexCheckDefaultr3">
                                        <i class="fas fa-star"></i> 3 star or above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultr4">
                                    <label class="form-check-label" for="flexCheckDefaultr4">
                                        <i class="fas fa-star"></i> 2 star or above
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultr5">
                                    <label class="form-check-label" for="flexCheckDefaultr5">
                                        <i class="fas fa-star"></i> 1 star or above
                                    </label>
                                </div>
                            </div>

                          

                            <div class="wsus__sidebar_course_lavel duration">
                                <h3>Language</h3>
                                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?php echo e($language->id); ?>" name="language[]" id="language-<?php echo e($language->id); ?>" <?php if(in_array($language->id, request()->language ?? [])): echo 'checked'; endif; ?>>
                                    <label class="form-check-label" for="language-<?php echo e($language->id); ?>">
                                        <?php echo e($language->name); ?>

                                    </label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>

                            <div class="wsus__sidebar_rating">
                                <h3>Price Range</h3>
                                <div class="range_slider"></div>
                            </div>
                            <br>
                            <div class="row">
                                <button type="submit" class="common_btn">Search</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 order-lg-1">
                    <div class="wsus__page_courses_header wow fadeInUp">
                        <p>Showing <span>1-<?php echo e($courses->count()); ?></span> Of <span><?php echo e($courses->total()); ?></span> Results</p>
                        
                        <form action="<?php echo e(route('courses.index')); ?>">
                            <p>Sort-by:</p>
                            <select class="select_js" name="order" onchange="this.form.submit()">
                                <option value="desc" <?php if(request()->order == 'desc'): echo 'selected'; endif; ?>>New to Old</option>
                                <option value="asc" <?php if(request()->order == 'asc'): echo 'selected'; endif; ?>>Old to New</option>
                            </select>
                        </form>
                    </div>
                    <div class="row">
                        <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="wsus__single_courses_3">
                                <div class="wsus__single_courses_3_img">
                                    <img src="<?php echo e(asset($course->thumbnail)); ?>" alt="Courses" class="img-fluid">
                                    
                                    <span class="time"><i class="far fa-clock"></i> <?php echo e(convertMinutesToHours($course->duration)); ?></span>
                                </div>
                                <div class="wsus__single_courses_text_3">
                                    <div class="rating_area">
                                        <!-- <a href="#" class="category">Design</a> -->
                                        <p class="rating">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                            <?php if($i <= $course->reviews()->avg('rating')): ?>
                                            <i class="fas fa-star"></i>
                                            <?php else: ?>
                                            <i class="far fa-star"></i>
                                            <?php endif; ?>  
                                               
                                            <?php endfor; ?>
                                            
                                            <span>(<?php echo e(number_format($course->reviews()->avg('rating'), 2) ?? 0); ?> Rating)</span>
                                        </p>
                                    </div>
    
                                    <a class="title" href="<?php echo e(route('courses.show', $course->slug)); ?>"><?php echo e($course->title); ?></a>
                                    <ul>
                                        <li><?php echo e($course->lessons()->count()); ?> Lessons</li>
                                        <li><?php echo e($course->enrollments()->count()); ?> Student</li>
                                    </ul>
                                    <a class="author" href="#">
                                        <div class="img">
                                            <img src="<?php echo e(asset($course->instructor->image)); ?>" alt="Author" class="img-fluid">
                                        </div>
                                        <h4><?php echo e($course->instructor->name); ?></h4>
                                    </a>
                                </div>
                                <div class="wsus__single_courses_3_footer">
                                    <a class="common_btn add_to_cart" href="#" data-course-id="<?php echo e($course->id); ?>">Add to Cart<i class="far fa-arrow-right"></i></a>
                                    <p>
                                        <?php if($course->discount > 0): ?>
                                        <del>$<?php echo e($course->price); ?></del> $<?php echo e($course->discount); ?>

                                        <?php else: ?>
                                        $<?php echo e($course->price); ?>

                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <p>No data Found</p>
                        <?php endif; ?>
                    </div>
                    <div class="wsus__pagination mt_50 wow fadeInUp">
                        <?php echo e($courses->withQueryString()->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
        COURSES PAGE END
    ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\FinalYearProject\source code\resources\views/frontend/pages/course-page.blade.php ENDPATH**/ ?>