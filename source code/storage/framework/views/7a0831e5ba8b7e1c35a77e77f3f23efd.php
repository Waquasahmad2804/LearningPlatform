<?php
    $categoryOne = \App\Models\CourseCategory::where('id', $latestCourses?->category_one)->first();
    $categoryTwo = \App\Models\CourseCategory::where('id', $latestCourses?->category_two)->first();
    $categoryThree = \App\Models\CourseCategory::where('id', $latestCourses?->category_three)->first();
    $categoryFour = \App\Models\CourseCategory::where('id', $latestCourses?->category_four)->first();
    $categoryFive = \App\Models\CourseCategory::where('id', $latestCourses?->category_five)->first();

?>
<section class="wsus__courses_3 pt_120 xs_pt_100 mt_120 xs_mt_90 pb_120 xs_pb_100">

    <div class="container">

        <div class="row">
            <div class="col-xl-6 m-auto wow fadeInUp">
                <div class="wsus__section_heading mb_45">
                    <h5>Featured Courses</h5>
                    <h2>Latest Bundle Courses.</h2>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-xxl-6 col-xl-8 m-auto">
                <div class="wsus__filter_area mb_15">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <?php if($categoryOne): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-<?php echo e($categoryOne->id); ?>-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($categoryOne->id); ?>" type="button"
                                    role="tab" aria-controls="pills-home"
                                    aria-selected="true"><?php echo e($categoryOne->name); ?></button>
                            </li>
                        <?php endif; ?>

                        <?php if($categoryTwo): ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-<?php echo e($categoryTwo->id); ?>-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($categoryTwo->id); ?>" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"><?php echo e($categoryTwo->name); ?></button>
                        </li>
                    <?php endif; ?>

                    <?php if($categoryThree): ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-<?php echo e($categoryThree->id); ?>-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($categoryThree->id); ?>" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"><?php echo e($categoryThree->name); ?></button>
                        </li>
                    <?php endif; ?>

                    <?php if($categoryFour): ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-<?php echo e($categoryFour->id); ?>-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($categoryFour->id); ?>" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"><?php echo e($categoryFour->name); ?></button>
                        </li>
                    <?php endif; ?>

                    <?php if($categoryFive): ?>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-<?php echo e($categoryFive->id); ?>-tab"
                                data-bs-toggle="pill" data-bs-target="#pills-<?php echo e($categoryFive->id); ?>" type="button"
                                role="tab" aria-controls="pills-home"
                                aria-selected="true"><?php echo e($categoryFive->name); ?></button>
                        </li>
                    <?php endif; ?>


                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <?php if($categoryOne): ?>
            <div class="tab-pane fade show active" id="pills-<?php echo e($categoryOne->id); ?>" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    <?php $__currentLoopData = $categoryOne->courses()->latest()->take(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="<?php echo e(asset($course->thumbnail)); ?>" alt="Courses" class="img-fluid">
                                
                                <span class="time"><i class="far fa-clock"></i> <?php echo e(convertMinutesToHours($course->duration)); ?></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <?php for($i = 1; $i <= $course->reviews()->avg('rating'); $i++): ?>
                                        <i class="fas fa-star"></i>
                                        <?php endfor; ?>
                                        
                                        <span>(<?php echo e($course->reviews()->avg('rating')); ?> Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="<?php echo e(route('courses.show', $course->slug)); ?>"><?php echo e($course->title); ?></a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
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
                                    <del>$<?php echo e($course->discount); ?></del> $<?php echo e($course->price); ?>

                                    <?php else: ?>
                                    $<?php echo e($course->price); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if($categoryThree): ?>
            <div class="tab-pane fade" id="pills-<?php echo e($categoryThree->id); ?>" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    <?php $__currentLoopData = $categoryThree->courses()->latest()->take(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-md-6 col-lg-4">
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if($categoryFour): ?>
            <div class="tab-pane fade" id="pills-<?php echo e($categoryFour->id); ?>" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    <?php $__currentLoopData = $categoryFour->courses()->latest()->take(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="<?php echo e(asset($course->thumbnail)); ?>" alt="Courses" class="img-fluid">
                                
                                <span class="time"><i class="far fa-clock"></i> <?php echo e(convertMinutesToHours($course->duration)); ?></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="<?php echo e(route('courses.show', $course->slug)); ?>"><?php echo e($course->title); ?></a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
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
                                    <del>$<?php echo e($course->discount); ?></del> $<?php echo e($course->price); ?>

                                    <?php else: ?>
                                    $<?php echo e($course->price); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if($categoryFive): ?>
            <div class="tab-pane fade" id="pills-<?php echo e($categoryFive->id); ?>" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="row">
                    <?php $__currentLoopData = $categoryFive->courses()->latest()->take(8)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-md-6 col-lg-4">
                        <div class="wsus__single_courses_3">
                            <div class="wsus__single_courses_3_img">
                                <img src="<?php echo e(asset($course->thumbnail)); ?>" alt="Courses" class="img-fluid">
                                
                                <span class="time"><i class="far fa-clock"></i> <?php echo e(convertMinutesToHours($course->duration)); ?></span>
                            </div>
                            <div class="wsus__single_courses_text_3">
                                <div class="rating_area">
                                    <!-- <a href="#" class="category">Design</a> -->
                                    <p class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>(4.8 Rating)</span>
                                    </p>
                                </div>

                                <a class="title" href="<?php echo e(route('courses.show', $course->slug)); ?>"><?php echo e($course->title); ?></a>
                                <ul>
                                    <li>24 Lessons</li>
                                    <li>38 Student</li>
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
                                    <del>$<?php echo e($course->discount); ?></del> $<?php echo e($course->price); ?>

                                    <?php else: ?>
                                    $<?php echo e($course->price); ?>

                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="row mt_60 wow fadeInUp">
                    <div class="col-12 text-center">
                        <a class="common_btn" href="#">Browse More Courses <i
                                class="far fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/pages/home/sections/courses-section.blade.php ENDPATH**/ ?>