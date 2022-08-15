<?php $__env->startSection('title'); ?> <?php echo e($pageTitle); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-tags"></i> <?php echo e($pageTitle); ?></h1>
            <p><?php echo e($subTitle); ?></p>
        </div>
        <a href="<?php echo e(route('admin.categories.create')); ?>" class="btn btn-primary pull-right">Add Category</a>
    </div>
    <?php echo $__env->make('admin.partials.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Name </th>
                                <th> Slug </th>
                                <th class="text-center"> Parent </th>
                                <th class="text-center"> Featured </th>
                                <th class="text-center"> Menu </th>
                                <th class="text-center"> Order </th>
                                <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($category->id != 1): ?>
                                    <tr>
                                        <td><?php echo e($category->id); ?></td>
                                        <td><?php echo e($category->name); ?></td>
                                        <td><?php echo e($category->slug); ?></td>
                                        <td><?php echo e($category->parent->name); ?></td>
                                        <td class="text-center">
                                            <?php if($category->featured == 1): ?>
                                                <span class="badge badge-success">Yes</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">No</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php if($category->menu == 1): ?>
                                                <span class="badge badge-success">Yes</span>
                                            <?php else: ?>
                                                <span class="badge badge-danger">No</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo e($category->order); ?>

                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Second group">
                                                <a href="<?php echo e(route('admin.categories.edit', $category->id)); ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo e(route('admin.categories.delete', $category->id)); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('backend/js/plugins/jquery.dataTables.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('backend/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>