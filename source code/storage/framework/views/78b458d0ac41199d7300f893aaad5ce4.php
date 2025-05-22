<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Sub Categories of: (<?php echo e($course_category->name); ?>)</h3>
                    <div class="card-actions">
                        <a href="<?php echo e(route('admin.course-categories.index')); ?>"
                            class="btn btn-dark">
                            <i class="ti ti-arrow-left"></i>
                            Back
                        </a>

                        <a href="<?php echo e(route('admin.course-sub-categories.create', $course_category->id)); ?>"
                            class="btn btn-primary">
                            <i class="ti ti-plus"></i>
                            Add new
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><img src="<?php echo e(asset($category->image)); ?>" alt=""></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td>
                                            <?php if($category->status == 1): ?>
                                                <span class="badge bg-lime text-lime-fg">Yes</span>
                                            <?php else: ?>
                                                <span class="badge bg-red text-red-fg">No</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('admin.course-sub-categories.edit', [
                                                'course_category' => $course_category->id,
                                                'course_sub_category' => $category->id,
                                            ])); ?>"
                                                class="btn-sm btn-primary">
                                                <i class="ti ti-edit"></i>
                                            </a>

                                            <a href="<?php echo e(route('admin.course-sub-categories.destroy', [
                                                'course_category' => $course_category->id,
                                                'course_sub_category' => $category->id,
                                            ])); ?>"
                                                class="text-red delete-item">
                                                <i class="ti ti-trash-x"></i>
                                            </a>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/course/course-sub-category/index.blade.php ENDPATH**/ ?>