

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Orders</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Paid Amount</th>
                                    <th>Currency</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td>
                                        <?php echo e($loop->iteration); ?>

                                    </td>
                                <td>
                                    <div>
                                        <?php echo e($order->customer->name); ?>

                                    </div>
                                    <small><?php echo e($order->customer->email); ?></small>
                                </td>
                                <td>
                                    <?php echo e($order->total_amount); ?>

                                </td>
                                <td>
                                    <?php echo e($order->paid_amount); ?>

                                </td>
                                <td>
                                    <?php echo e($order->currency); ?>

                                </td>
                                <td>
                                    <?php if($order->status == 'pending'): ?>
                                    <span class="badge bg-yellow text-yellow-fg"><?php echo e($order->status); ?></span>
                                    <?php else: ?>
                                    <span class="badge bg-green text-green-fg"><?php echo e($order->status); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('admin.orders.show', $order->id)); ?>" class="btn-sm btn-primary">
                                        <i class="ti ti-eye"></i>
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
                        <?php echo e($orders->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/order/index.blade.php ENDPATH**/ ?>