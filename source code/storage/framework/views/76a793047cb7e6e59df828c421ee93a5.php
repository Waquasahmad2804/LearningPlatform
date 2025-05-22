

<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Database Clear</h3>
                   
                </div>
                <div class="card-body">
                    
                        <div class="alert alert-danger">
                            <h4 class="alert-heading">Warning!</h4>
                            <p>Are you sure you want to clear all the database? This action cannot be undone.</p>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary db-clear" type="submit" >
                                <i class="ti ti-skull me-1"></i>
                                Clear Database
                            </button>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/database-clear/index.blade.php ENDPATH**/ ?>