<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Levels</h3>
                    <div class="card-actions">
                        <a href="<?php echo e(route('admin.courses.create')); ?>" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Add new
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Instructor</th>
                                    <th>Status</th>
                                    <th>Approve</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                <td><?php echo e($course->title); ?></td>
                                <td><?php echo e($course->price); ?></td>
                                <td><?php echo e($course->instructor->name); ?></td>
                                <td>
                                    <?php if($course->is_approved == 'pending'): ?>
                                        <span class="badge bg-yellow text-yellow-fg">Pending</span>
                                    <?php elseif($course->is_approved == 'approved'): ?>
                                    <span class="badge bg-green text-green-fg">Approved</span>
                                    <?php elseif($course->is_approved == 'rejected'): ?>
                                    <span class="badge bg-red text-red-fg">Rejected</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <select name="" class="form-control update-approval-status" data-id="<?php echo e($course->id); ?>">
                                        <option <?php if($course->is_approved == 'pending'): echo 'selected'; endif; ?> value="pending">Pending</option>
                                        <option <?php if($course->is_approved == 'approved'): echo 'selected'; endif; ?> value="approved">Approved</option>
                                        <option <?php if($course->is_approved == 'rejected'): echo 'selected'; endif; ?> value="rejected">Rejected</option>
                                    </select>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.courses.edit', ['id' => $course->id, 'step' => 1])); ?>" class="btn-sm btn-primary">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                    </a>
                                    <a href="<?php echo e(route('admin.course-levels.destroy', $course->id)); ?>" class="text-red delete-item">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                                    </a>
                                </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="6" class="text-center">No Data Found!</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <?php echo e($courses->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('header_scripts'); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/admin/course.js']); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/course/course-module/index.blade.php ENDPATH**/ ?>