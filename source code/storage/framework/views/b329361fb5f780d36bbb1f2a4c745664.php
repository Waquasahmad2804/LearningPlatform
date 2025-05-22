

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
                                <h5>Orders</h5>
                                <p>Manage your Orders from here.</p>
                            </div>
                        </div>
                        <div class="wsus__dash_course_table">

                            <table class="table">
                                <thead>

                                    <th>No.</th>
                                    <th>Invoice</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($loop->iteration); ?></td>
                                            <td><?php echo e($order->invoice_id); ?></td>
                                            <td><?php echo e($order->total_amount); ?> <?php echo e($order->currency); ?></td>
                                            <td><span class="badge bg-success text-green-fg"><?php echo e($order->status); ?></span>
                                            </td>
                                            <td><a href="<?php echo e(route('student.orders.show', $order->id)); ?>">view</a></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <tr>
                                            <td>No Data Found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="wsus__pagination mt_50 wow fadeInUp">
                                <?php echo e($orders->withQueryString()->links()); ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/student-dashboard/order/index.blade.php ENDPATH**/ ?>