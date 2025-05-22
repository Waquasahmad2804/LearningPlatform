

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
                            <h1>Become a Instructor</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li>Become a Instructor</li>
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
                    DASHBOARD OVERVIEW START
                ============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('frontend.student-dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-md-8">
                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading relative">
                                <h5>Courses</h5>
                                <p>Manage your courses and its update like live, draft and insight.</p>
                            </div>
                        </div>


                        <div class="wsus__dash_course_table">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="image">
                                                        COURSES
                                                    </th>
                                                    <th class="details">

                                                    </th>
                                                    
                                                    <th class="action">
                                                        ACTION
                                                    </th>
                                                </tr>
                                                <?php $__empty_1 = true; $__currentLoopData = $enrollments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td class="image">
                                                        <div class="image_category">
                                                            <img src="<?php echo e(asset($enrollment->course->thumbnail)); ?>" alt="img" class="img-fluid w-100">
                                                        </div>
                                                    </td>
                                                    <td class="details">
                                                        <p class="rating">
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star" aria-hidden="true"></i>
                                                            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                                            <i class="far fa-star" aria-hidden="true"></i>
                                                            <span>(5.0)</span>
                                                        </p>
                                                        <a class="title" href="<?php echo e(route("student.course-player.index", $enrollment->course->slug)); ?>">
                                                            <?php echo e($enrollment->course->title); ?>

                                                            
                                                        </a>
                                                        <div class="text-muted">By <?php echo e($enrollment->course->instructor->name); ?></div>

                                                        <?php
                                                            $watchedLessonCount = \App\Models\WatchHistory::where(['user_id' => user()->id, 'course_id' => $enrollment->course->id, 'is_completed' => 1])->count();
                                                            $lessonCount = $enrollment->course->lessons()->count();
                                                        ?>
                                                        
                                                        <?php if($lessonCount == $watchedLessonCount): ?>
                                                        <a target="_blank" href="<?php echo e(route('student.certificate.download', $enrollment->course->id)); ?>" class="btn btn-sm btn-warning">Download Certificate</a>
                                                        <?php endif; ?>
                                                    </td>
                                                    
                                                    
                                                    <td class="">
                                                        <a class="common_btn" href="<?php echo e(route("student.course-player.index", $enrollment->course->slug)); ?>" >Watch Course</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="5" class="text-center">No Data Found!</td>
                                                </tr>
                                                <?php endif; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===========================
                    DASHBOARD OVERVIEW END
                ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/student-dashboard/enrolled-course/index.blade.php ENDPATH**/ ?>