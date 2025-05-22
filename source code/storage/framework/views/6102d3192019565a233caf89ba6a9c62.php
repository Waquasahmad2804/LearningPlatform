

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Footer Link</h3>
                    <div class="card-actions">
                        <a href="<?php echo e(route('admin.footer-column-one.index')); ?>" class="btn btn-primary">
                            <i class="ti ti-arrow-left"></i>
                            Back 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.footer-column-one.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">

                            <div class="col-md-12">
                                <?php if (isset($component)) { $__componentOriginal405a67563ffd994716cfbe38d0ede7bf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal405a67563ffd994716cfbe38d0ede7bf = $attributes; } ?>
<?php $component = App\View\Components\InputBlock::resolve(['name' => 'title','placeholder' => 'Enter Title'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputBlock::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal405a67563ffd994716cfbe38d0ede7bf)): ?>
<?php $attributes = $__attributesOriginal405a67563ffd994716cfbe38d0ede7bf; ?>
<?php unset($__attributesOriginal405a67563ffd994716cfbe38d0ede7bf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal405a67563ffd994716cfbe38d0ede7bf)): ?>
<?php $component = $__componentOriginal405a67563ffd994716cfbe38d0ede7bf; ?>
<?php unset($__componentOriginal405a67563ffd994716cfbe38d0ede7bf); ?>
<?php endif; ?>
                                
                            </div>  

                            <div class="col-md-12">
                                <?php if (isset($component)) { $__componentOriginal405a67563ffd994716cfbe38d0ede7bf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal405a67563ffd994716cfbe38d0ede7bf = $attributes; } ?>
<?php $component = App\View\Components\InputBlock::resolve(['name' => 'url','placeholder' => 'Enter url'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputBlock::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal405a67563ffd994716cfbe38d0ede7bf)): ?>
<?php $attributes = $__attributesOriginal405a67563ffd994716cfbe38d0ede7bf; ?>
<?php unset($__attributesOriginal405a67563ffd994716cfbe38d0ede7bf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal405a67563ffd994716cfbe38d0ede7bf)): ?>
<?php $component = $__componentOriginal405a67563ffd994716cfbe38d0ede7bf; ?>
<?php unset($__componentOriginal405a67563ffd994716cfbe38d0ede7bf); ?>
<?php endif; ?>
                                
                            </div>  

                            <div class="col-md-3">
                                <?php if (isset($component)) { $__componentOriginal02c8be0a552df5d5c2ef27fd4f1bfe95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02c8be0a552df5d5c2ef27fd4f1bfe95 = $attributes; } ?>
<?php $component = App\View\Components\InputToggleBlock::resolve(['name' => 'status','label' => 'Status'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-toggle-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputToggleBlock::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02c8be0a552df5d5c2ef27fd4f1bfe95)): ?>
<?php $attributes = $__attributesOriginal02c8be0a552df5d5c2ef27fd4f1bfe95; ?>
<?php unset($__attributesOriginal02c8be0a552df5d5c2ef27fd4f1bfe95); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02c8be0a552df5d5c2ef27fd4f1bfe95)): ?>
<?php $component = $__componentOriginal02c8be0a552df5d5c2ef27fd4f1bfe95; ?>
<?php unset($__componentOriginal02c8be0a552df5d5c2ef27fd4f1bfe95); ?>
<?php endif; ?>
                                
                            </div>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">
                                <i class="ti ti-device-floppy"></i>  
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/footer/column-one/create.blade.php ENDPATH**/ ?>