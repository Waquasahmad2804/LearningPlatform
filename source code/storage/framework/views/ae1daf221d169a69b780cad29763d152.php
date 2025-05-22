

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Blog</h3>
                    <div class="card-actions">
                        <a href="<?php echo e(route('admin.blogs.index')); ?>" class="btn btn-primary">
                            <i class="ti ti-arrow-left"></i>
                            Back 
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('admin.blogs.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">

                            <div class="col-md-12">
                                <?php if (isset($component)) { $__componentOriginal405a67563ffd994716cfbe38d0ede7bf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal405a67563ffd994716cfbe38d0ede7bf = $attributes; } ?>
<?php $component = App\View\Components\InputBlock::resolve(['name' => 'title','placeholder' => 'Enter title','value' => $blog->title] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <?php if (isset($component)) { $__componentOriginal57ad134c43ab857c9a71cdd356631a04 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal57ad134c43ab857c9a71cdd356631a04 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.image-preview','data' => ['src' => ''.e(asset($blog->image)).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('image-preview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => ''.e(asset($blog->image)).'']); ?>
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
<?php $component = App\View\Components\InputFileBlock::resolve(['name' => 'image'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <input type="hidden" name="old_image" value="<?php echo e($blog->image); ?>">
                            </div>  

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" >Category</label>
                                    <select name="category" id="" class="form-control mt-2">
                                        <option value="">Select</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if($blog->blog_category_id == $category->id): echo 'selected'; endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('category'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('category')),'class' => 'mt-2']); ?>
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

                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <label for="" class="mb-2" >Description</label>
                                    <textarea name="description" class="editor"  ><?php echo $blog->description; ?></textarea>
                                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('description'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('description')),'class' => 'mt-2']); ?>
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

                            <div class="col-md-3">
                                <?php if (isset($component)) { $__componentOriginal02c8be0a552df5d5c2ef27fd4f1bfe95 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02c8be0a552df5d5c2ef27fd4f1bfe95 = $attributes; } ?>
<?php $component = App\View\Components\InputToggleBlock::resolve(['name' => 'status','label' => 'Status','checked' => $blog->status == 1] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
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
                                <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('status'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('status')),'class' => 'mt-2']); ?>
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

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">
                                <i class="ti ti-device-floppy"></i>  
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/blog/edit.blade.php ENDPATH**/ ?>