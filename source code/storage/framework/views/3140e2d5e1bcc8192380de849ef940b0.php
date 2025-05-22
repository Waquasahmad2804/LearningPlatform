

<?php $__env->startSection('content'); ?>
   
    <section class="wsus__breadcrumb" style="background: url(<?php echo e(asset(config('settings.site_breadcrumb'))); ?>);">
        <div class="wsus__breadcrumb_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="wsus__breadcrumb_text">
                            <h1>Student Dashboard</h1>
                            <ul>
                                <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                <li>Student Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('frontend.student-dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-md-8 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="wsus__dashboard_contant">
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading relative">
                                <h5>Reviews</h5>
                                <p>Manage your reviews from here.</p>
                            </div>
                        </div>
                        <div class="wsus__dash_course_table">
                       <table class="table">
                        <thead>
                            <th>Course Name</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>Status</th>
                            <th>Action</th>

                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($review->course->title); ?></td>
                                <td><?php echo e($review->rating); ?></td>
                                <td><?php echo e($review->review); ?></td>
                                <td>
                                    <?php if($review->status == 1): ?>
                                    <span class="badge bg-success">Active</span>
                                    <?php else: ?>
                                    <span class="badge bg-danger">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a class="del delete-item" href="<?php echo e(route('student.review.destroy', $review->id)); ?>"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <tr>
                                <td colspan="5" class="text-center">No Data Found</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                        </table> 
                    </div>

                    </div>
                   
                </div>
                
            </div>
        </div>
    </section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/student-dashboard/review/index.blade.php ENDPATH**/ ?>