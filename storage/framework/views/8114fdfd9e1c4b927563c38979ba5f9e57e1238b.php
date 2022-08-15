<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
                aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $cat->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->items->count() > 0): ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('category.show', $category->slug)); ?>" id="<?php echo e($category->slug); ?>"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e($category->name); ?></a>
                                <div class="dropdown-menu" aria-labelledby="<?php echo e($category->slug); ?>">
                                    <?php $__currentLoopData = $category->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="dropdown-item" href="<?php echo e(route('category.show', $item->slug)); ?>"><?php echo e($item->name); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('category.show', $category->slug)); ?>"><?php echo e($category->name); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/site/partials/nav.blade.php ENDPATH**/ ?>