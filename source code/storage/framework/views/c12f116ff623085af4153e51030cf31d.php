

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blogs</h3>
                    <div class="card-actions">
                        <a href="<?php echo e(route('admin.blogs.create')); ?>" class="btn btn-primary">
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><img width="100" src="<?php echo e(asset($blog->image)); ?>" alt=""></td>
                                        <td><?php echo e($blog->title); ?></td>
                                        <td><?php echo e($blog->category->name); ?></td>
                                        <td>
                                            <?php if($blog->status == 1): ?>
                                               <span class="badge bg-lime text-lime-fg">Active</span> 
                                            <?php else: ?> 
                                               <span class="badge bg-red text-red-fg">Inactive</span> 
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                           
                                            <a href="<?php echo e(route('admin.blogs.edit', $blog->id)); ?>"
                                                class="btn-sm btn-primary">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            
                                            <a href="<?php echo e(route('admin.blogs.destroy', $blog->id)); ?>"
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

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Desktop\FinalYearProject\source code\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>