

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
                        <div class="wsus__dashboard_contant_top">
                            <div class="wsus__dashboard_heading relative">
                                <h5>Withdrawals</h5>
                                <p>Manage your payouts here.</p>
                                <a class="common_btn" href="<?php echo e(route('instructor.withdraw.request-payout')); ?>">+ Request Payout</a>
                            </div>
                        </div>
                       <table class="table">
                        <thead>
                            <th>Course Name</th>
                            <th>Purchase By</th>
                            <th>Price</th>
                            <th>Commission</th>
                            <th>Earning</th>

                        </thead>
                        <tbody>
                            
                        </tbody>
                        </table> 

                    </div>
                   
                </div>
                
            </div>
        </div>
    </section>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/withdraw/index.blade.php ENDPATH**/ ?>