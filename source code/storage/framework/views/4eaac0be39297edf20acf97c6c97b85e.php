

<?php $__env->startSection('setting-content'); ?>
    <div class="col-12 col-md-9 d-flex flex-column">
        <form action="<?php echo e(route('admin.commission-settings.update')); ?>" method="POST">
            <div class="card-body">

                <h3 class="card-title mt-4">Commission Settings</h3>
                <?php echo csrf_field(); ?>
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="form-label">Instructor Commission Rate Per Sale (%)</div>
                        <input type="text" class="form-control" name="commission_rate"
                            value="<?php echo e(config('settings.commission_rate')); ?>">
                        <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('commission_rate'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('commission_rate')),'class' => 'mt-2']); ?>
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

            </div>
    </div>
    <div class="card-footer bg-transparent mt-auto">
        <div class="btn-list justify-content-end">

            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
    </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.setting.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/setting/commission-settings.blade.php ENDPATH**/ ?>