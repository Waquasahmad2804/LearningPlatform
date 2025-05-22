<?php $__env->startSection('course_content'); ?>
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="add_course_basic_info">
        <form action="<?php echo e(route('instructor.courses.update')); ?>" method="post" class="more_info_form course-form" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($course->id); ?>">
            <input type="hidden" name="current_step" value="1">
            <input type="hidden" name="next_step" value="2">
            <div class="row">
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Title *</label>
                        <input type="text" placeholder="Title" name="title" value="<?php echo e($course->title); ?>">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Seo description</label>
                        <input type="text" placeholder="Seo description" name="seo_description" value="<?php echo e($course->seo_description); ?>">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Thumbnail *</label>
                        <input type="file" name="thumbnail">
                    </div>
                </div>
            <div class="col-xl-6">

                <div class="add_course_basic_info_imput">
                    <label for="#">Demo Video Storage <b>(optional)</b></label>
                    <select class="storage" name="demo_video_storage">
                        <option value=""> Please Select </option>
                        <option <?php if($course->demo_video_storage == 'upload'): echo 'selected'; endif; ?> value="upload"> Upload </option>
                        <option <?php if($course->demo_video_storage == 'youtube'): echo 'selected'; endif; ?> value="youtube"> Youtube </option>
                        <option <?php if($course->demo_video_storage == 'vimeo'): echo 'selected'; endif; ?> value="vimeo"> Vimeo </option>
                        <option <?php if($course->demo_video_storage == 'external_link'): echo 'selected'; endif; ?> value="external_link"> External Link </option>
                    </select>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="add_course_basic_info_imput upload_source <?php echo e($course->demo_video_storage == 'upload' ? '' : 'd-none'); ?>">
                    <label for="#">Path</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                          </a>
                        </span>
                        <input id="thumbnail" class="form-control source_input" type="text" name="file" value="<?php echo e($course->demo_video_source); ?>">
                      </div>
                </div>
                <div class="add_course_basic_info_imput external_source <?php echo e($course->demo_video_storage != 'upload' ? '' : 'd-none'); ?>">
                    <label for="#">Path</label>
                    <input type="text" name="url" class="source_input" value="<?php echo e($course->demo_video_source); ?>">
                </div>


            </div>
                <div class="col-xl-6">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Price *</label>
                        <input type="text" placeholder="Price" name="price" value="<?php echo e($course->price); ?>">
                        <p>Put 0 for free</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add_course_basic_info_imput">
                        <label for="#">Discount Price</label>
                        <input type="text" placeholder="Price" name="discount" value="<?php echo e($course->discount); ?>">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="add_course_basic_info_imput mb-0">
                        <label for="#">Description</label>
                        <textarea rows="8" placeholder="Description" name="description" class="editor"><?php echo $course->description; ?></textarea>
                        <button type="submit" class="common_btn mt_20">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
     $('#lfm').filemanager('file');
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontend.instructor-dashboard.course.course-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/course/edit.blade.php ENDPATH**/ ?>