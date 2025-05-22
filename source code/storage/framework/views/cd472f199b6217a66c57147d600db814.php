<?php $__env->startSection('content'); ?>
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                       Dashboard 
                    </h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                    <path d="M12 3v3m0 12v3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e(config('settings.currency_icon')); ?><?php echo e($todaysOrder); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                Today's Orders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                    <path d="M12 3v3m0 12v3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e(config('settings.currency_icon')); ?><?php echo e($thisWeekOrders); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                This weeks Orders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                    <path d="M12 3v3m0 12v3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e(config('settings.currency_icon')); ?><?php echo e($thisMonthOrders); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                Monthly Orders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                    <path d="M12 3v3m0 12v3" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e(config('settings.currency_icon')); ?><?php echo e($thisYearOrders); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                This Year's Orders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <i class="ti ti-shopping-cart"></i>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e($totalOrders); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                Total Orders
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <i class="ti ti-certificate"></i>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e($pendingCourses); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                Pending Courses
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <i class="ti ti-certificate-off"></i>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e($rejectedCourses); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                Rejected Courses
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span
                                                class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                                <i class="ti ti-certificate"></i>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <b><?php echo e($totalCourses); ?></b>
                                            </div>
                                            <div class="text-secondary">
                                                Total Courses
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <canvas id="orderChart" style="height: 300px"></canvas>
            </div>

            <div class="mt-4">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recent Courses</h3>
                            </div>
                            <div class="card-table table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Course</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $recentCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>

                                                    <a href="#" class="ms-1"
                                                        aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="icon">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M9 15l6 -6"></path>
                                                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464">
                                                            </path>
                                                            <path
                                                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463">
                                                            </path>
                                                        </svg>
                                                        <?php echo e(Str::limit($course->title, 40)); ?>

                                                    </a>
                                                </td>
                                                <td class="text-secondary">
                                                    <?php if($course->is_approved == 'approved'): ?>
                                                        <span class="badge bg-success text-white">Approved</span>
                                                    <?php elseif($course->is_approved == 'pending'): ?>
                                                        <span class="badge bg-warning text-white">Pending</span>
                                                    <?php elseif($course->is_approved == 'rejected'): ?>
                                                        <span class="badge bg-danger text-white">Rejected</span>
                                                    <?php endif; ?>

                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Recent Blogs</h3>
                          </div>
                          <div class="card-table table-responsive">
                              <table class="table table-vcenter">
                                  <thead>
                                      <tr>
                                          <th>Title</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $__currentLoopData = $recentBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <tr>
                                              <td>

                                                  <a href="<?php echo e(route('admin.blogs.edit', $blog->id)); ?>" class="ms-1"
                                                      aria-label="Open website"><!-- Download SVG icon from http://tabler-icons.io/i/link -->
                                                      <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                          height="24" viewBox="0 0 24 24" fill="none"
                                                          stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round" class="icon">
                                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                          <path d="M9 15l6 -6"></path>
                                                          <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464">
                                                          </path>
                                                          <path
                                                              d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463">
                                                          </path>
                                                      </svg>
                                                      <?php echo e(Str::limit($blog->title, 50)); ?>

                                                  </a>
                                              </td>
                                              <td class="text-secondary">
                                                  <?php if($blog->status == 1): ?>
                                                      <span class="badge bg-success text-white">Active</span>
                                                  <?php else: ?>
                                                      <span class="badge bg-danger text-white">Inactive</span>
                                                  <?php endif; ?>

                                              </td>

                                          </tr>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Recent Orders</h3>
                            </div>
                            <div class="card-table table-responsive">
                                <table class="table table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Invoice</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $recentOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                              <td>
                                                <a href="<?php echo e(route('admin.orders.show', $order->id)); ?>">
                                                  #<?php echo e($order->invoice_id); ?>

                                                </a>
                                              </td>
                                                <td class="text-start">
                                                    <?php echo e($order->customer->name); ?> 
                                                </td>
                                              <td>
                                                <?php echo e($order->total_amount); ?> <?php echo e($order->currency); ?>

                                              </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('orderChart').getContext('2d');
        const orderChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                        label: 'Order Amount (<?php echo e(config('settings.currency_icon')); ?>)',
                        data: <?php echo json_encode($monthlyOrderSums, 15, 512) ?>,
                        backgroundColor: 'rgba(0, 84, 166, 0.7)',
                        borderColor: 'rgb(0, 84, 166)',
                        borderWidth: 1,
                        yAxisID: 'y'
                    },
                    {
                        label: 'Order Count',
                        data: <?php echo json_encode($monthlyOrderCounts, 15, 512) ?>,
                        backgroundColor: 'rgba(255, 99, 132, 0.6)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        type: 'line',
                        yAxisID: 'y1'
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        begainAtZero: true,
                        title: {
                            display: true,
                            text: 'Order Amount (<?php echo e(config('settings.currency_icon')); ?>)'
                        },
                        position: 'left'
                    },
                    y1: {
                        begainAtZero: true,
                        title: {
                            display: true,
                            text: 'Order Count'
                        },
                        position: 'right',
                        grid: {
                            drawOnChartArea: false
                        }
                    }
                }
            }
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\edu-core\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>