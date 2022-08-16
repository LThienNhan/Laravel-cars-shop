
<?php $__env->startSection('title', $category->name); ?>
<?php $__env->startSection('content'); ?>
<section class="section-pagetop bg-dark">
<div class="container clearfix">
<h2 class="title-page"><?php echo e($category->name); ?></h2>
</div>
</section>
<section class="section-content bg padding-y">
<div class="container">
<div id="code_prod_complex">
<div class="row">

<?php $__empty_1 = true; $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-md-4">
        <figure class="card card-product">
            <?php if($product->images->count() > 0): ?>
                <div class="img-wrap padding-y">
                <a href="<?php echo e(route('product.show', $product->slug)); ?>">
                    <img style="width:100%" src="<?php echo e(asset('images/'.$product->images->first()->full)); ?>" alt="<?php echo e($product->name); ?>">
                </a></div>
            <?php else: ?>
                <div class="img-wrap padding-y"><img src="https://via.placeholder.com/176" alt=""></div>
        <?php endif; ?>
            <figcaption class="info-wrap">
                <h4 class="title"><a href="<?php echo e(route('product.show', $product->slug)); ?>"><?php echo e($product->name); ?></a></h4>
            </figcaption>
            <div class="bottom-wrap">
                <a href="<?php echo e(route('product.show', $product->slug)); ?>" class="btn btn-sm btn-success float-right">View Details</a>
                <?php if($product->sale_price != 0): ?>
                    <div class="price-wrap h5">
                        <span class="price"> <?php echo e(config('settings.currency_symbol').number_format($product->sale_price)); ?> </span>
                        <del class="price-old"> <?php echo e(config('settings.currency_symbol').number_format($product->price)); ?></del>
                    </div>
                <?php else: ?>
                    <div class="price-wrap h5">
                        <span class="price"> <?php echo e(config('settings.currency_symbol').number_format($product->price)); ?> </span>
                    </div>
                <?php endif; ?>
            </div>
        </figure>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No Products found in <?php echo e($category->name); ?>.</p>
<?php endif; ?>
</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/site/pages/category.blade.php ENDPATH**/ ?>