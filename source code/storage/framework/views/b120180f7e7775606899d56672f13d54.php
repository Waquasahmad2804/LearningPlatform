<?php $__env->startSection('course_content'); ?>
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="add_course_basic_info">
        <form action="" class="more_info_form course-form" > 
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e(request()?->id); ?>">
            <input type="hidden" name="current_step" value="2">
            <input type="hidden" name="next_step" value="3">

            <div class="row">
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Capacity</label>
                        <input type="text" placeholder="Capacity" name="capacity" value="<?php echo e($course?->capacity); ?>">
                        <p>leave blank for unlimited</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_input">
                        <label for="#">Course Duration (Minutes)*</label>
                        <input type="text" placeholder="300" name="duration" value="<?php echo e($course->duration); ?>">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_more_info_checkbox">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="qna" <?php if($course?->qna === 1): echo 'checked'; endif; ?> value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Q&A</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" <?php if($course?->certificate === 1): echo 'checked'; endif; ?> name="certificate" value="1" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">Completion Certificate</label>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="add_course_more_info_input">
                        <label for="#">Category *</label>
                        <select class="select_2" name="category">
                            <option value=""> Please Select </option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($category->subCategories->isNotEmpty()): ?>
                                <optgroup label="<?php echo e($category->name); ?>">
                                   <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                        <option <?php if($course?->category_id == $subCategory->id): echo 'selected'; endif; ?> value="<?php echo e($subCategory->id); ?>"><?php echo e($subCategory->name); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </optgroup>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </select>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="add_course_more_info_radio_box">
                        <h3>Level</h3>
                        <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" <?php if($level->id == $course->course_level_id): echo 'checked'; endif; ?> value="<?php echo e($level->id); ?>" name="level" id="id-<?php echo e($level->id); ?>">
                            <label class="form-check-label" for="id-<?php echo e($level->id); ?>">
                                <?php echo e($level->name); ?>

                            </label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="add_course_more_info_radio_box">
                        <h3>Language</h3>
                        <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check">
                            <input class="form-check-input" <?php if($language->id == $course->course_language_id): echo 'checked'; endif; ?> type="radio" name="language"
                                value="<?php echo e($language->id); ?>"
                                id="id-<?php echo e($language->id); ?>">
                            <label class="form-check-label" for="id-<?php echo e($language->id); ?>">
                                <?php echo e($language->name); ?>

                            </label>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="col-xl-12">
                    <button type="submit" class="common_btn">Save</button>
                </div>
            </div>
        </form> 
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.instructor-dashboard.course.course-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/course/more-info.blade.php ENDPATH**/ ?>