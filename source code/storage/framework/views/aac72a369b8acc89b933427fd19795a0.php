

<?php $__env->startSection('content'); ?>
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

    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('frontend.instructor-dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-md-8 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="wsus__dashboard_contant">
                        <table class="table">
                            <thead>
                                <th>Course Name</th>
                                <th>Purchase By</th>
                                <th>Price</th>
                                <th>Commission</th>
                                <th>Earning</th>

                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($orderItem->course->title); ?></td>
                                        <td><?php echo e($orderItem->order->customer->name); ?></td>
                                        <td><?php echo e($orderItem->price); ?></td>
                                        <td><?php echo e($orderItem->commission_rate ?? 0); ?>%</td>
                                        <td><?php echo e(calculateCommission($orderItem->price, $orderItem->commission_rate)); ?>

                                            <?php echo e($orderItem->order->currency); ?></td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                    <tr>
                                        <td>No Data Found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/order/index.blade.php ENDPATH**/ ?>