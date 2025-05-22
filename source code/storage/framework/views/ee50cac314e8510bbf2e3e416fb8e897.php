<?php $__env->startSection('content'); ?>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Instructor Requests</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Status</th>
                              <th>Document</th>
                              <th>Action</th>
                              <th class="w-1"></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $instructorsRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                              <td><?php echo e($instructor->name); ?></td>
                              <td >
                                <?php echo e($instructor->email); ?>

                              </td>
                              <td >
                                <?php if($instructor->approve_status === 'pending'): ?>
                                   <span class="badge bg-yellow text-yellow-fg">Pending</span> 
                                <?php elseif($instructor->approve_status === 'rejected'): ?>
                                <span class="badge bg-red text-yellow-fg">Rejected</span> 

                                <?php endif; ?>
                              </td>
                              <td>
                                <a href="<?php echo e(route('admin.instructor-doc-download', $instructor->id)); ?>" class="text-muted">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-download"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </a>
                              </td>
                              <td >
                                <form method="POST" action="<?php echo e(route('admin.instructor-requests.update', $instructor->id)); ?>" class="status-<?php echo e($instructor->id); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <select name="status" class="form-control" onchange="$('.status-<?php echo e($instructor->id); ?>').submit()">
                                        <option <?php if($instructor->approve_status === 'pending'): echo 'selected'; endif; ?> value="pending">Pending</option>
                                        <option <?php if($instructor->approve_status === 'approved'): echo 'selected'; endif; ?> value="approved">Approve</option>
                                        <option <?php if($instructor->approve_status === 'rejected'): echo 'selected'; endif; ?> value="rejected">Reject</option>
                                    </select>
                                </form>
                              </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="5" class="text-center">No Data Available!</td>
                              </tr>
                            <?php endif; ?>
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/instructor-request/index.blade.php ENDPATH**/ ?>