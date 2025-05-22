<?php $__env->startSection('course_content'); ?>
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <div class="dashboard_add_course_finish">
            <form action="#" class="more_info_form">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e(@$course?->id); ?>">
                <input type="hidden" name="current_step" value="4">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="add_course_more_info_input">
                            <label for="#">Message for Reviewer</label>
                            <textarea rows="7" placeholder="Message for Reviewer" name="message"><?php echo @$course?->message_for_reviewer; ?></textarea>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="add_course_more_info_input mb-0">
                            <label for="#">Status *</label>
                            <select class="select_2" required name="status">
                                <option value=""> Please Select </option>
                                <option <?php if(@$course?->status == 'active'): echo 'selected'; endif; ?> value="active">Active</option>
                                <option <?php if(@$course?->status == 'inactive'): echo 'selected'; endif; ?> value="inactive">InActive</option>
                                <option <?php if(@$course?->status == 'draft'): echo 'selected'; endif; ?> value="draft">Draft</option>
                            </select>
                            <button type="submit" class="common_btn mt_25">save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.instructor-dashboard.course.course-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/course/finish.blade.php ENDPATH**/ ?>