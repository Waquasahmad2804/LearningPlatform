   <?php
       $topbar = \App\Models\TopBar::first();
       $categories = \App\Models\CourseCategory::whereNull('parent_id')->where('status', 1)->get();
       $customPages = \App\Models\CustomPage::where('status', 1)->where('show_at_nav', 1)->get();
   ?>
   <!--===========================
        HEADER START
    ============================-->
   <header class="header_3">
       <div class="row">
           <div class="col-xxl-4 col-lg-7 col-md-8 d-none d-md-block">
               <ul class="wsus__header_left d-flex flex-wrap">
                   <li><a href="mailto:<?php echo e($topbar?->email); ?>"><i class="fas fa-envelope"></i> <?php echo e($topbar?->email); ?></a></li>
                   <li><a href="callto:<?php echo e($topbar?->phone); ?>"><i class="fas fa-phone-alt"></i> <?php echo e($topbar?->phone); ?></a>
                   </li>
               </ul>
           </div>
           <div class="col-xxl-5 col-lg-7 d-none d-xxl-block">
               <div class="wsus__header_center">
                   <p> <span><?php echo e($topbar?->offer_name); ?></span> <?php echo e($topbar?->offer_short_description); ?> <a
                           href="<?php echo e($topbar?->offer_button_url); ?>"><?php echo e($topbar?->offer_button_text); ?></a></p>
               </div>
           </div>
           <div class="col-xxl-3 col-lg-5 col-md-4">

           </div>
       </div>
   </header>
   <!--===========================
        HEADER END
    ============================-->


   <!--===========================
        MAIN MENU 3 START
    ============================-->
   <nav class="navbar navbar-expand-lg main_menu main_menu_3">
       <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
           <img src="<?php echo e(asset(config('settings.site_logo'))); ?>" alt="EduCore" class="img-fluid">
       </a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <div class="menu_category">
               <div class="icon">
                   <img src="<?php echo e(asset('frontend/assets/images/grid_icon.png')); ?>" alt="Category" class="img-fluid">
               </div>
               Category
               <ul>
                   <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <li>
                           <a href="<?php echo e(route('courses.index', ['main_category' => $category->slug])); ?>">
                               <span>
                                   <img src="<?php echo e(asset($category->image)); ?>" alt="Category" class="img-fluid">
                               </span>
                               <?php echo e($category->name); ?>

                           </a>
                           <?php if($category->subCategories->count() > 0): ?>
                               <ul class="category_sub_menu">
                                   <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <li><a
                                               href="<?php echo e(route('courses.index', ['category' => $subCategory->id])); ?>"><?php echo e($subCategory->name); ?></a>
                                       </li>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                               </ul>
                           <?php endif; ?>
                       </li>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               </ul>
           </div>
           <ul class="navbar-nav m-auto">
               <li class="nav-item">
                   <a class="nav-link active" href="<?php echo e(url('/')); ?>">Home</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo e(route('courses.index')); ?>">Courses</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo e(route('about.index')); ?>">About</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">Blogs</a>
               </li>

               <li class="nav-item">
                   <a class="nav-link" href="<?php echo e(route('contact.index')); ?>">contact us</a>
               </li>
               <?php $__currentLoopData = $customPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo e(route('custom-page', $page->slug)); ?>"><?php echo e($page->title); ?></a>
                   </li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </ul>

           <div class="right_menu">
               <div class="menu_search_btn">
                   <img src="<?php echo e(asset('frontend/assets/images/search_icon.png')); ?>" alt="Search" class="img-fluid">
               </div>
               <ul>
                   <li>
                       <a class="menu_signin" href="<?php echo e(route('cart.index')); ?>">
                           <span>
                               <img src="<?php echo e(asset('frontend/assets/images/cart_icon_black.png')); ?>" alt="cart"
                                   class="img-fluid">
                           </span>
                           <b class="cart_count"><?php echo e(cartCount()); ?></b>
                       </a>
                   </li>

                   <li>
                    <?php if(!auth()->guard('web')->check()): ?>
                       <a class="common_btn" href="<?php echo e(route('login')); ?>">Sign in</a>
                    <?php endif; ?>
                    <?php if(user()?->role == 'student'): ?>
                        <a class="common_btn" href="<?php echo e(route('student.dashboard')); ?>">Dashboard</a>
                    <?php endif; ?>
                    <?php if(user()?->role == 'instructor'): ?>
                        <a class="common_btn" href="<?php echo e(route('instructor.dashboard')); ?>">Dashboard</a>
                    <?php endif; ?>
                   </li>
               </ul>
           </div>

       </div>
   </nav>
   <div class="wsus__menu_3_search_area">
       <form action="<?php echo e(route('courses.index')); ?>">
           <input type="text" placeholder="Search School, Online....." name="search">
           <button class="common_btn" type="submit">Search</button>
           <span class="close_search"><i class="far fa-times"></i></span>
       </form>
   </div>
   <!--===========================
        MAIN MENU 3 END
    ============================-->


   <!--============================
        MOBILE MENU START
    ==============================-->
   <div class="mobile_menu_area">
       <div class="mobile_menu_area_top">
           <a class="mobile_menu_logo" href="<?php echo e(url('/')); ?>">
               <img src="<?php echo e(asset(config('settings.site_logo'))); ?>" alt="<?php echo e(config('settings.site_title')); ?>">
           </a>
           <div class="mobile_menu_icon d-block d-lg-none" data-bs-toggle="offcanvas"
               data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
               <span class="mobile_menu_icon"><i class="far fa-stream menu_icon_bar"></i></span>
           </div>
       </div>

       <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions">
           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                   class="fal fa-times"></i></button>
           <div class="offcanvas-body">

               <ul class="mobile_menu_header d-flex flex-wrap">
                   <li><a href="<?php echo e(route('cart.index')); ?>"><i class="far fa-shopping-basket"></i> <span class="cart_count"><?php echo e(cartCount()); ?></span></a>
                   </li>
                   <li><a href="<?php echo e(route('login')); ?>"><i class="far fa-user"></i></a></li>
               </ul>

               <form class="mobile_menu_search" action="<?php echo e(route('courses.index')); ?>">
                   <input type="text" placeholder="Search" name="search">
                   <button type="submit"><i class="far fa-search"></i></button>
               </form>

               <div class="mobile_menu_item_area">
                   <nav>
                       <div class="nav nav-tabs" id="nav-tab" role="tablist">
                           <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                               data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                               aria-selected="true">menu</button>
                           <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                               data-bs-target="#nav-profile" type="button" role="tab"
                               aria-controls="nav-profile" aria-selected="false">Categories</button>
                       </div>
                   </nav>
                   <div class="tab-content" id="nav-tabContent">
                       <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                           aria-labelledby="nav-home-tab" tabindex="0">
                           <ul class="main_mobile_menu">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo e(url('/')); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('courses.index')); ?>">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('about.index')); ?>">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('blog.index')); ?>">Blogs</a>
                            </li>
             
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('contact.index')); ?>">contact us</a>
                            </li>
                            <?php $__currentLoopData = $customPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('custom-page', $page->slug)); ?>"><?php echo e($page->title); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </ul>
                       </div>
                       <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                           tabindex="0">
                           <ul class="main_mobile_menu">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <li class="mobile_dropdown">
                                   <a href="javascript:;">
                                       <span>
                                           <img src="<?php echo e(asset($category->image)); ?>" alt="Category"
                                               class="img-fluid">
                                       </span>
                                       <?php echo e($category->name); ?>

                                   </a>
                                   <?php if($category->subCategories->count() > 0): ?>
                                   <ul class="inner_menu">
                                       <?php $__currentLoopData = $category->subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <li><a href="<?php echo e(route('courses.index', ['category' => $subCategory->id])); ?>"><?php echo e($subCategory->name); ?></a></li>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      
                                   </ul>
                                   <?php endif; ?>
                               </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          

                               




                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--============================
        MOBILE MENU END
    ==============================-->
<?php /**PATH C:\Users\pc\Desktop\FinalYearProject\source code\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>