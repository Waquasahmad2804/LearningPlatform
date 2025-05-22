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
                            <h1>Add Courses</h1>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Add Courses</li>
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


    <!--=============================
                DASHBOARD ADD COURSE START
            ==============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('frontend.instructor-dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="col-xl-9 col-md-8 wow fadeInRight">
                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading relative">
                                <h5>Add Courses</h5>
                                <p>Manage your courses and its update like live, draft and insight.</p>
                            </div>
                        </div>

                        <div class="dashboard_add_courses">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation ">
                                    <a href="" class="nav-link course-tab <?php echo e(request('step') == 1 ? 'active' : ''); ?>" data-step="1">Basic Infos</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="" class="nav-link course-tab <?php echo e(request('step') == 2 ? 'active' : ''); ?>" data-step="2">More Info</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="" class="nav-link course-tab <?php echo e(request('step') == 3 ? 'active' : ''); ?>" data-step="3">Course Contents</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="" class="nav-link course-tab <?php echo e(request('step') == 4 ? 'active' : ''); ?>" data-step="4" >Finish</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                               <?php echo $__env->yieldContent('course_content'); ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
                DASHBOARD ADD COURSE END
            ==============================-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('header_scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/frontend/course.js']); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/course/course-app.blade.php ENDPATH**/ ?>