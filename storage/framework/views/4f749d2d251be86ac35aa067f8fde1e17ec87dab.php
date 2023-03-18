<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="container-fluid">
            <div class="card card-outline card-info">



                <div class="card-header">
                    <h3 class="card-title">
                        <?php echo e(__('adminPanel.Create Category')); ?>

                    </h3>
                </div>
                <div class="card-body">

                    <?php echo $__env->make('Admin.section.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <form action="<?php echo e(route('blogCategories.store')); ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label  for="name"><?php echo e(__('adminPanel.Category Name')); ?></label>
                            <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="form-control" id="name" placeholder="insert name " >
                        </div>
                        <div class="form-group">
                            <label  for="color"><?php echo e(__('adminPanel.Category Color')); ?></label>
                            <input type="color" id="color" name="color" value="#ff0000">

                        </div>





                        <div class="form-group">
                            <label  for="description"><?php echo e(__('adminPanel.description')); ?></label>
                            <textarea name="description"  id="description" class="form-control">
                </textarea>

                        </div>


                        
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-12 form-group">
                                <label class="form-label" for="seoTitle"><?php echo e(__('adminPanel.Seo Title')); ?></label>
                                <input type="text" class="form-control" name="seoTitle" value="<?php echo e(old('seoTitle')); ?>">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="form-label" for="seoDescription"><?php echo e(__('adminPanel.Seo Description')); ?></label>
                                <input type="text" class="form-control" name="seoDescription" value="<?php echo e(old('seoDescription')); ?>">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label class="form-label" for="seoKeyword"><?php echo e(__('adminPanel.Seo Keyword')); ?></label>
                                <input type="text" class="form-control" name="seoKeyword" value="<?php echo e(old('seoKeyword')); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\ustashow\ustashow\resources\views/Admin/blogcategory/create.blade.php ENDPATH**/ ?>