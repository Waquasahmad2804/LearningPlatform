

<?php $__env->startSection('content'); ?>
    <!--===========================
                    BREADCRUMB START
                ============================-->
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
    <!--===========================
                    BREADCRUMB END
                ============================-->


    <!--===========================
                    DASHBOARD OVERVIEW START
                ============================-->
    <section class="wsus__dashboard mt_90 xs_mt_70 pb_120 xs_pb_100">
        <div class="container">
            <div class="row">
                <?php echo $__env->make('frontend.instructor-dashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-xl-9 col-md-8 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="row">
                        <div class="col-xl-4 col-sm-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="wsus__dash_earning">
                                <h6>Current Ballance</h6>
                                <h3><?php echo e(config('settings.currency_icon')); ?> <?php echo e($currentBallance); ?></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="wsus__dash_earning">
                                <h6>Peding Payout</h6>
                                <h3><?php echo e(config('settings.currency_icon')); ?> <?php echo e($pendingBallance); ?></h3>
                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <div class="wsus__dash_earning">
                                <h6>Total Payout</h6>
                                <h3><?php echo e(config('settings.currency_icon')); ?> <?php echo e($totalPayout); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="wsus__dashboard_contant">
                        
                        <div class="wsus__dashboard_contant_top d-flex flex-wrap justify-content-between">
                            <div class="wsus__dashboard_heading">
                                <h5>Request Payout</h5>
                            </div>
                           
                        </div>

                        <form action="<?php echo e(route('instructor.withdraw.request-payout.create')); ?>" method="POST" class="wsus__dashboard_profile_update" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-xl-12">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><b>Gateway</b></td>
                                            <td><?php echo e(user()?->gatewayInfo->gateway); ?></td>
                                        </tr>
                                        <tr>
                                            <td><b>Information</b></td>
                                            <td><?php echo user()?->gatewayInfo->information; ?></td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <div class="wsus__dashboard_profile_update_info">
                                        <label>Payout Amount</label>
                                        <input type="text" placeholder="Enter your amount" name="amount" value="">
                                        <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('amount'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('amount')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="common_btn">Request Payout</button>
                                </div>
                               
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--===========================
                    DASHBOARD OVERVIEW END
                ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/withdraw/request-payout.blade.php ENDPATH**/ ?>