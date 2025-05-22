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
                            <h1>Shopping Cart</h1>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Shopping Cart</li>
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
        CART VIEW START
    ============================-->
    <section class="wsus__cart_view mt_120 xs_mt_100 pb_120 xs_pb_100">
        <?php if(count($cart) > 0): ?>
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp">
                    <div class="cart_list">
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="pro_img">Product</th>

                                        <th class="pro_name"></th>

                                        <th class="pro_tk">Price</th>

                                        <th class="pro_icon">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="<?php echo e(asset($item->course->thumbnail)); ?>" alt="product"
                                                class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="<?php echo e(route('courses.show', $item->course->slug)); ?>"><?php echo e($item->course->title); ?></a>
                                        </td>
                                        <td class="pro_tk">
                                            <?php if($item->course->discount > 0): ?>
                                            <del><h6>$<?php echo e($item->course->price); ?></h6></del> <h6>$<?php echo e($item->course->discount); ?></h6>
                                            <?php else: ?>
                                            <h6>$<?php echo e($item->course->price); ?></h6>
                                            <?php endif; ?>
                                        </td>
                                        <td class="pro_icon">
                                            <a href="<?php echo e(route('remove-from-cart', $item->id)); ?>"><i class="fal fa-times" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <p>No data Found</p>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xxl-7 col-md-5 col-lg-6 wow fadeInUp"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="continue_shopping">
                        <a href="<?php echo e(route('courses.index')); ?>" class="common_btn">continue shopping</a>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-7 col-lg-6 wow fadeInUp"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <div class="total_price">
                        <div class="subtotal_area">
                            <h5>Total<span>$<?php echo e(cartTotal()); ?></span></h5>
                            <a href="<?php echo e(route('checkout.index')); ?>" class="common_btn">proceed checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="container text-center">
           <img style="width: 180px !important" src="<?php echo e(asset('default-files/empty-cart.png')); ?>" alt="">
           <h6 class="mt-2">Your cart is empty</h6>
           <a href="<?php echo e(route('home')); ?>" class="common_btn mt-3">Go Home</a>
        </div>
        <?php endif; ?>
    </section>
    <!--===========================
        CART VIEW END
    ============================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/pages/cart.blade.php ENDPATH**/ ?>