<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chapter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo e(@$editMode ?
        route('instructor.course-content.update-chapter', @$chapter->id) :
        route('instructor.course-content.store-chapter', $id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo e(@$chapter?->title); ?>" required>

            </div>
            <div class="form-group text-end">
                <button type="submit" class="btn btn-primary"><?php echo e(@$editMode ? 'Update' : 'Create'); ?></button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\laragon\www\edu-core\resources\views/frontend/instructor-dashboard/course/partials/course-chapter-modal.blade.php ENDPATH**/ ?>