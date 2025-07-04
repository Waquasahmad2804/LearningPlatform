

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

                            <div class="card card-lg border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="h3">Company</p>
                                            <address>
                                               <?php echo e(config('settings.site_name')); ?><br>
                                                <?php echo e(config('settings.phone')); ?><br>
                                                <?php echo e(config('settings.location')); ?><br>
                                                
                                            </address>
                                        </div>
                                        <div class="col-6 text-end">
                                            <p class="h3">Client</p>
                                            <address>
                                                <?php echo e($order->customer->name); ?><br>
                                                <?php echo e($order->customer->email); ?>

                                            </address>
                                        </div>
                                        <div class="col-12 my-5">
                                            <h4>Invoice #<?php echo e($order->invoice_id); ?></h4>
                                        </div>
                                    </div>
                                    <table class="table table-transparent table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 1%"></th>
                                                <th>Product</th>
                                                <th class="text-center" style="width: 1%">Qnt</th>
                                                <th class="text-end" style="width: 4%">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>
                                                    <p class="strong mb-1"><?php echo e($item->course->title); ?></p>
                                                    <div class="text-secondary">By <?php echo e($item->course->instructor->name); ?></div>
                                                </td>
                                                <td class="text-center">
                                                    1
                                                </td>
                                                <td class="text-end"><?php echo e($item->price); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td colspan="3" class="strong text-end">Subtotal</td>
                                                <td class="text-end"><?php echo e($order->total_amount); ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="strong text-end">Paid Amount</td>
                                                <td class="text-end"><?php echo e($order->paid_amount); ?> <?php echo e($order->currency); ?></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                    <p class="text-secondary text-center mt-5">Thank you very much for doing business with us. We look
                                        forward to working with
                                        you again!</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/student-dashboard/order/show.blade.php ENDPATH**/ ?>