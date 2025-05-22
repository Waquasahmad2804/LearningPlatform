

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Levels</h3>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>User</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                    <th></th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                        <div><?php echo e($review->course->title); ?></div>
                                        <div class="text-muted"><?php echo e($review->course->instructor->name); ?></div>
                                    </td>
                                <td>
                                    <div><?php echo e($review->user->name); ?></div>
                                    <div class="text-muted"><?php echo e($review->user->email); ?></div>
                                </td>
                                <td><?php echo e($review->rating); ?></td>
                                <td style="width: 600px"><?php echo e($review->review); ?></td>
                                <td>
                                    <?php if($review->status == 1): ?>
                                        <span class="badge bg-lime text-lime-fg">Approved</span>
                                    <?php else: ?>
                                        <span class="badge bg-red text-red-fg">Pending</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('admin.reviews.update', $review->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                    <select name="status" class="form-control" onchange="this.form.submit()">
                                        <option <?php if($review->status == 0): echo 'selected'; endif; ?> value="0">Pending</option>
                                        <option <?php if($review->status == 1): echo 'selected'; endif; ?> value="1">Approved</option>
                                    </select>
                                    </form>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.reviews.destroy', $review->id)); ?>" class="text-red delete-item">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                                    </a>
                                </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7" class="text-center">No Data Found!</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        <?php echo e($reviews->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/review/index.blade.php ENDPATH**/ ?>