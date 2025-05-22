<?php $__env->startSection('course_content'); ?>
    <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
        <form action="" class="course-form more_info_form">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e(request()?->id); ?>">
            <input type="hidden" name="current_step" value="3">
            <input type="hidden" name="next_step" value="4">
        </form>
        <div class="add_course_content">
            <div class="add_course_content_btn_area d-flex flex-wrap justify-content-between">
                <a class="common_btn dynamic-modal-btn" href="#" data-id="<?php echo e($courseId); ?>"> Add New Chapter</a>
                <a class="common_btn sort_chapter_btn" data-id="<?php echo e($courseId); ?>" href="javascript:;">Short Chapter</a>
            </div>
            <div class="accordion" id="accordionExample">
                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-<?php echo e($chapter->id); ?>" aria-expanded="true"
                                aria-controls="collapse-<?php echo e($chapter->id); ?>">
                                <span><?php echo e($chapter->title); ?></span>
                            </button>
                            <div class="add_course_content_action_btn">
                                <div class="dropdown">
                                    <div class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="far fa-plus"></i>
                                    </div>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li class="add_lesson" data-chapter-id="<?php echo e($chapter->id); ?>"
                                            data-course-id="<?php echo e($chapter->course_id); ?>"><a class="dropdown-item"
                                                href="javascript:;">
                                                Add Lesson</a>
                                        </li>
                                    </ul>
                                </div>
                                <a class="edit edit_chapter" data-course-id="<?php echo e($chapter->course_id); ?>" data-chapter-id="<?php echo e($chapter->id); ?>" href="#"><i class="far fa-edit"></i></a>
                                <a class="del delete-item" href="<?php echo e(route('instructor.course-content.destory-chapter', $chapter->id)); ?>"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </h2>
                        <div id="collapse-<?php echo e($chapter->id); ?>" class="accordion-collapse collapse"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="item_list sortable_list">
                                    <?php $__currentLoopData = $chapter->lessons ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lesson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="" data-lesson-id="<?php echo e($lesson->id); ?>" data-chapter-id="<?php echo e($chapter->id); ?>">
                                        <span><?php echo e($lesson->title); ?></span>
                                        <div class="add_course_content_action_btn">
                                            <a class="edit_lesson" data-lesson-id="<?php echo e($lesson->id); ?>" data-chapter-id="<?php echo e($chapter->id); ?>"
                                                data-course-id="<?php echo e($chapter->course_id); ?>" class="edit" href="javascript:;"><i class="far fa-edit"></i></a>
                                            <a class="del delete-item" href="<?php echo e(route('instructor.course-content.destroy-lesson', $lesson->id)); ?>"><i class="fas fa-trash-alt"></i></a>
                                            <a class="arrow dragger" href="javascript:;"><i class="fas fa-arrows-alt"></i></a>
                                        </div>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.instructor-dashboard.course.course-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/course/course-content.blade.php ENDPATH**/ ?>