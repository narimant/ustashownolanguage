<?php $__env->startSection('content'); ?>

<div id="content" class="site-content" tabindex="-1">
    <div class="bg-primary py-4 py-lg-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div>
                        <h1 class="mb-1 text-white display-4"><?php echo e($category->name); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="container">
            <div class="tutor-wrap tutor-courses-wrap tutor-container">
                <div class="tutor-wrap tutor-wrap-parent tutor-courses-wrap tutor-container course-archive-page" data-tutor_courses_meta="{&quot;course_filter&quot;:true,&quot;supported_filters&quot;:{&quot;category&quot;:&quot;category&quot;,&quot;difficulty_level&quot;:&quot;difficulty_level&quot;},&quot;loop_content_only&quot;:false,&quot;column_per_row&quot;:&quot;3&quot;,&quot;course_per_page&quot;:&quot;9&quot;,&quot;show_pagination&quot;:true}">

                    <div class="tutor-d-block tutor-d-lg-none tutor-mb-32">
                        <div class="tutor-d-flex tutor-align-center tutor-justify-between">
                            <span class="tutor-fs-3 tutor-fw-medium tutor-color-black"><?php echo e(__('messages.Courses')); ?></span>
                            <a href="#" class="tutor-iconic-btn tutor-iconic-btn-secondary tutor-iconic-btn-md" tutor-toggle-course-filter=""><span class="tutor-icon-slider-vertical"></span></a>
                        </div>
                    </div>
                    <div class="row course-archive-page">
                        <div class="tutor-course-filter tutor-course-filter-container col-xl-3 col-lg-3 col-md-4 col-12 mb-4 mb-lg-0">
                            <div class="tutor-course-filter" tutor-course-filter="">
                                <form method="get" >
                                    <div class="mb-3 tutor-d-block tutor-d-lg-none tutor-text-right">
                                        <a href="#" class="tutor-iconic-btn tutor-mr-n8" tutor-hide-course-filter=""><span class="tutor-icon-times" area-hidden="true"></span></a>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h4 class="mb-0"><?php echo e(__('messages.Filter')); ?></h4>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="dropdown-header px-0 mb-2"><?php echo e(__('messages.Category')); ?></h4>
                                            <div class="ms-n4">
                                                <div class="tutor-course-filter-nested-terms ps-4">
                                                    <?php $__currentLoopData = $AllCourseCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $CourseCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="form-check mb-1">
                                                        <input type="checkbox" id="tutor-course-filter-category-29" class="form-check-input" name="filter[]" value="29">
                                                        <label class="form-check-label" for="tutor-course-filter-category-29"><?php echo e($CourseCategory->name); ?></label>
                                                    </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                            </div>
                                            <div class="border-top text-center pt-3">
                                                <button class="btn btn-success btn-block btn-sm"><?php echo e(__('messages.Apply filter')); ?></button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8 col-12 col-xl-9 tutor-pagination-wrapper-replaceable" tutor-course-list-container="">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="tab-pane-grid" role="tabpanel" aria-labelledby="tab-pane-grid">
                                    <div class="tutor-courses tutor-courses-loop-wrap tutor-courses-layout-3 row row-cols-lg-3 row-cols-md-2 row-cols-12">
                                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="tutor-card tutor-course-card">
                                            <div class="card mb-4 card-hover">

                                                <a href="<?php echo e(route('course.single',['courseSlug'=>$course->slug])); ?>" class="card-img-top">
                                                    <img  src="<?php echo e($course->images['tumbnail']); ?>" class="card-img-top rounded-top-md wp-post-image" alt="<?php echo e($course->title); ?>" >
                                                <div class="card-body">
                                                    <h4 class="mb-2 text-truncate-line-2 ">
                                                        <a href="https://geeks.madrasthemes.com/courses/happy-course/" class="text-inherit">Happy Course</a>
                                                    </h4>

                                                    <ul class="mb-3 list-inline">
                                                        <li class="list-inline-item"><i class="far fa-clock me-1"></i><span class="tutor-meta-level"> 6</span><span class="tutor-meta-value tutor-color-secondary tutor-mr-4"> hours</span><span class="tutor-meta-level"> 20</span><span class="tutor-meta-value tutor-color-secondary tutor-mr-4"> minutes</span></li>
                                                        <li class="list-inline-item"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect><rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect><rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect></svg><span class="align-middle"> Expert</span></li>
                                                    </ul>
                                                    <div class="lh-1">
                                                        <span class="fs-6 text-muted">No ratings yet</span>
                                                    </div>
                                                </div>

                                                <div class="card-footer">

                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <img width="24" height="24" src="https://geeks.madrasthemes.com/wp-content/uploads/2022/06/make-768x628-1-24x24.jpg" class="avatar avatar-24 photo rounded-circle avatar-xs" alt="Sex on the Beach" decoding="async" loading="lazy" srcset="https://geeks.madrasthemes.com/wp-content/uploads/2022/06/make-768x628-1-24x24.jpg 24w, https://geeks.madrasthemes.com/wp-content/uploads/2022/06/make-768x628-1-150x150.jpg 150w, https://geeks.madrasthemes.com/wp-content/uploads/2022/06/make-768x628-1-300x300.jpg 300w, https://geeks.madrasthemes.com/wp-content/uploads/2022/06/make-768x628-1-100x100.jpg 100w, https://geeks.madrasthemes.com/wp-content/uploads/2022/06/make-768x628-1-48x48.jpg 48w, https://geeks.madrasthemes.com/wp-content/uploads/2022/06/make-768x628-1-96x96.jpg 96w" sizes="(max-width: 24px) 100vw, 24px"> </div>
                                                        <div class="col ms-2">
                                                            <span>Sex on the Beach</span>
                                                        </div>
                                                        <div class="col-auto">
                                        <span class="tutor-course-wishlist">
                                        <a href="javascript:;" class="cart-required-login save-bookmark-btn tutor-iconic-btn" data-course-id="7488">
                                        <i class="tutor-icon-bookmark-line"></i>
                                        </a> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>

                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center mt-4">
                                <?php echo e($courses->links()); ?>

                            </div>
                          </div>
                    </div>
                </div>
            </div> </div>
    </div>
</div>

    <?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend.frontendlayout.frontendmaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ustashow\ustashow\resources\views/frontend/categorypagecourse.blade.php ENDPATH**/ ?>