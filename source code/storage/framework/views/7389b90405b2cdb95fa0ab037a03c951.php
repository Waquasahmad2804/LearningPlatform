<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sort Chapter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="" method="POST">
            <?php echo csrf_field(); ?>
            <ul class="item_list chapter_sortable_list ">
                <?php $__currentLoopData = $chapters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chapter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="" data-course-id="<?php echo e($chapter->course_id); ?>" data-chapter-id="<?php echo e($chapter->id); ?>">
                        <span><?php echo e($chapter->title); ?></span>
                        <div class="add_course_content_action_btn">
                            <a class="arrow dragger" href="javascript:;"><i class="ti ti-arrows-maximize"></i></a>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </form>
    </div>
</div>

<script>
    var base_url = $(`meta[name="base_url"]`).attr('content');
    var csrf_token = $(`meta[name="csrf_token"]`).attr('content');
    $('.btn-close').on('click', function() {
        window.location.reload();
    })
    /** sort chapter list */
    if ($('.chapter_sortable_list li').length) {
        $('.chapter_sortable_list').sortable({
            items: "li",
            containment: "parent",
            cursor: "move",
            handle: ".dragger",
            forcePlaceholderSize: true,
            update: function(event, ui) {
                let orderIds = $(this).sortable("toArray", {
                    attribute: "data-chapter-id",
                });

                let courseId = ui.item.data("course-id");

                $.ajax({
                    method: 'POST',
                    url: base_url + `/admin/course-content/${courseId}/sort-chapter`,
                    data: {
                        _token: csrf_token,
                        order_ids: orderIds
                    },
                    success: function(data) {
                        notyf.success(data.message);
                    },
                    error: function(xhr, status, error) {
                        notyf.error(data.error);
                    }
                })

            }
        });
    }
</script>
<?php /**PATH C:\laragon\www\edu-core\resources\views/admin/course/course-module/partials/course-chapter-sort-modal.blade.php ENDPATH**/ ?>