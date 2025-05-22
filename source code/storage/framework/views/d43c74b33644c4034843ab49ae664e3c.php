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
                            <h1>Instructor Dashboard</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li>Instructor Dashboard</li>
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
            DASHBOARD COURSE START
        ============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('frontend.instructor-dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="col-xl-9 col-md-8 wow fadeInRight">
                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading relative">
                                <h5>Courses</h5>
                                <p>Manage your courses and its update like live, draft and insight.</p>
                                <a class="common_btn" href="<?php echo e(route('instructor.courses.create')); ?>">+ add course</a>
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
                                                    <th class="sale">
                                                        STUDENT
                                                    </th>
                                                    <th class="status">
                                                        STATUS
                                                    </th>
                                                    <th class="action">
                                                        ACTION
                                                    </th>
                                                </tr>

                                                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td class="image">
                                                            <div class="image_category">
                                                                <img src="<?php echo e(asset($course->thumbnail)); ?>" alt="img"
                                                                    class="img-fluid w-100">
                                                            </div>
                                                        </td>
                                                        <td class="details">
                                                            <p class="rating">
                                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                                    <?php if($i <= $course->reviews()->avg('rating')): ?>
                                                                        <i class="fas fa-star"></i>
                                                                    <?php else: ?>
                                                                        <i class="far fa-star"></i>
                                                                    <?php endif; ?>
                                                                <?php endfor; ?>

                                                                <span>(<?php echo e(number_format($course->reviews()->avg('rating'), 2) ?? 0); ?>

                                                                    Rating)</span>
                                                            </p>
                                                            <a class="title" href="#"><?php echo e($course->title); ?></a>

                                                        </td>
                                                        <td class="sale">
                                                            <p><?php echo e($course->enrollments()->count()); ?></p>
                                                        </td>
                                                        <td class="status">
                                                            <p class="active">Active</p>
                                                        </td>
                                                        <td class="action">
                                                            <a class="edit"
                                                                href="<?php echo e(route('instructor.courses.edit', ['id' => $course->id, 'step' => 1])); ?>"><i
                                                                    class="far fa-edit"></i></a>
                                                            <a class="del" href="#"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
            DASHBOARD COURSE END
        ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/course/index.blade.php ENDPATH**/ ?>