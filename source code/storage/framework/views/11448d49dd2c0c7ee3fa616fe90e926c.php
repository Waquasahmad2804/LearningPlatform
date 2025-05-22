

<?php $__env->startSection('setting-content'); ?>
    <div class="col-12 col-md-9 d-flex flex-column">
        <form action="<?php echo e(route('admin.logo-settings.update')); ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">

                <h3 class="card-title mt-4">Logo & Favicon Settings</h3>
                <?php echo csrf_field(); ?>
                <div class="row g-3">
                    <div class="col-md-12">
                        <?php if (isset($component)) { $__componentOriginal57ad134c43ab857c9a71cdd356631a04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57ad134c43ab857c9a71cdd356631a04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image-preview','data' => ['src' => ''.e(asset(config('settings.site_logo'))).'','style' => 'width: 300px']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image-preview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset(config('settings.site_logo'))).'','style' => 'width: 300px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $attributes = $__attributesOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $component = $__componentOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__componentOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalfc98141502394717cdef24d0b9a4bdfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa = $attributes; } ?>
<?php $component = App\View\Components\InputFileBlock::resolve(['name' => 'site_logo'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-file-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputFileBlock::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $attributes = $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $component = $__componentOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <?php if (isset($component)) { $__componentOriginal57ad134c43ab857c9a71cdd356631a04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57ad134c43ab857c9a71cdd356631a04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image-preview','data' => ['src' => ''.e(asset(config('settings.site_footer_logo'))).'','style' => 'width: 300px']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image-preview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset(config('settings.site_footer_logo'))).'','style' => 'width: 300px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $attributes = $__attributesOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $component = $__componentOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__componentOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalfc98141502394717cdef24d0b9a4bdfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa = $attributes; } ?>
<?php $component = App\View\Components\InputFileBlock::resolve(['name' => 'site_footer_logo'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-file-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputFileBlock::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $attributes = $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $component = $__componentOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <?php if (isset($component)) { $__componentOriginal57ad134c43ab857c9a71cdd356631a04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57ad134c43ab857c9a71cdd356631a04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image-preview','data' => ['src' => ''.e(asset(config('settings.site_favicon'))).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image-preview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset(config('settings.site_favicon'))).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $attributes = $__attributesOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $component = $__componentOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__componentOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalfc98141502394717cdef24d0b9a4bdfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa = $attributes; } ?>
<?php $component = App\View\Components\InputFileBlock::resolve(['name' => 'site_favicon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-file-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputFileBlock::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $attributes = $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $component = $__componentOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
                    </div>
                    <div class="col-md-12">
                        <?php if (isset($component)) { $__componentOriginal57ad134c43ab857c9a71cdd356631a04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57ad134c43ab857c9a71cdd356631a04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image-preview','data' => ['src' => ''.e(config('settings.site_breadcrumb')).'','style' => 'width: 300px']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image-preview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(config('settings.site_breadcrumb')).'','style' => 'width: 300px']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $attributes = $__attributesOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__attributesOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal57ad134c43ab857c9a71cdd356631a04)): ?>
<?php $component = $__componentOriginal57ad134c43ab857c9a71cdd356631a04; ?>
<?php unset($__componentOriginal57ad134c43ab857c9a71cdd356631a04); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalfc98141502394717cdef24d0b9a4bdfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa = $attributes; } ?>
<?php $component = App\View\Components\InputFileBlock::resolve(['name' => 'site_breadcrumb'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-file-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\InputFileBlock::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $attributes = $__attributesOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__attributesOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa)): ?>
<?php $component = $__componentOriginalfc98141502394717cdef24d0b9a4bdfa; ?>
<?php unset($__componentOriginalfc98141502394717cdef24d0b9a4bdfa); ?>
<?php endif; ?>
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

<?php echo $__env->make('admin.setting.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/setting/logo-settings.blade.php ENDPATH**/ ?>