
<?php $__env->startSection('title', $product->name); ?>
<?php $__env->startSection('content'); ?>
<section class="section-pagetop bg-dark">
<div class="container clearfix">
<h2 class="title-page"><?php echo e($product->name); ?></h2>
</div>
</section>
<section class="section-content bg padding-y border-top" id="site">
<div class="container">
<div class="row">
<div class="col-sm-12">
<?php if(Session::has('message')): ?>
<p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
<?php endif; ?>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="row no-gutters">
<aside class="col-sm-5 border-right">
<article class="gallery-wrap">
    <?php if($product->images->count() > 0): ?>
        <div class="img-big-wrap">
            <div class="padding-y">
                <a href="<?php echo e(asset('images/'.$product->images->first()->full)); ?>" data-fancybox="">
                    <img style="width:100%;height:100%" src="<?php echo e(asset('images/'.$product->images->first()->full)); ?>" alt="">
                </a>
            </div>
        </div>
    <?php else: ?>
        <div class="img-big-wrap">
            <div>
                <a href="https://via.placeholder.com/176" data-fancybox=""><img src="https://via.placeholder.com/176"></a>
            </div>
        </div>
    <?php endif; ?>
        <?php if($product->images->count() > 0): ?>
        <div class="img-small-wrap">
            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-gallery">
                    <img src="<?php echo e(asset('images/'.$product->images->first()->full)); ?>" alt="">
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</article>
</aside>
<aside class="col-sm-7">
<article class="p-5">
    <h3 class="title mb-3"><?php echo e($product->name); ?></h3>
    <dl class="row">
        <dt class="col-sm-3">SKU</dt>
        <dd class="col-sm-9"><?php echo e($product->sku); ?></dd>
        <dt class="col-sm-3">Weight</dt>
        <dd class="col-sm-9"><?php echo e($product->weight); ?> Kilogam</dd>
    </dl>
    <div class="mb-3">
        <?php if($product->sale_price > 0): ?>
            <var class="price h3 text-danger">
                <span class="currency"><?php echo e(config('settings.currency_symbol')); ?></span><span class="num" id="productPrice"><?php echo e(number_format($product->sale_price)); ?></span>
                <del class="price-old"> <?php echo e(config('settings.currency_symbol')); ?><?php echo e(number_format($product->price)); ?></del>
            </var>
        <?php else: ?>
            <var class="price h3 text-success">
                <span class="currency"><?php echo e(config('settings.currency_symbol')); ?></span><span class="num" id="productPrice"><?php echo e(number_format($product->price)); ?></span>
            </var>
        <?php endif; ?>
    </div>
    <hr>
    <form action="<?php echo e(route('product.add.cart')); ?>" method="POST" role="form" id="addToCart">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-12">
                <dl class="dlist-inline">
                    <?php $__currentLoopData = $attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                            <dt><?php echo e($attribute->name); ?>: </dt>
                            <dd>
                                <select class="form-control form-control-sm option" style="width:180px;" name="<?php echo e(strtolower($attribute->name )); ?>">
                                    <option data-price="0" value="0"> Select a <?php echo e($attribute->name); ?></option>
                                    <?php $__currentLoopData = $product->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attributeValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($attributeValue->attribute_id == $attribute->id): ?>
                                            <option
                                                data-price="<?php echo e($attributeValue->price); ?>"
                                                value="<?php echo e($attributeValue->value); ?>"> <?php echo e(ucwords($attributeValue->value . ' +'. $attributeValue->price)); ?>

                                            </option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </dd>
                   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </dl>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <dl class="dlist-inline">
                    <dt>Quantity: </dt>
                    <dd>
                        <input class="form-control" type="number" min="1" value="1" max="<?php echo e($product->quantity); ?>" name="qty" style="width:70px;">
                        <input type="hidden" name="productId" value="<?php echo e($product->id); ?>">
                        <input type="hidden" name="price" id="finalPrice" value="<?php echo e($product->sale_price != '' ? $product->sale_price : $product->price); ?>">
                    </dd>
                </dl>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add To Cart</button>
    </form>
</article>
</aside>
</div>
</div>
</div>
<div class="col-md-12">
<article class="card mt-4">
<div class="card-body">
<?php echo $product->description; ?>

</div>
</article>
</div>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
$(document).ready(function () {
$('#addToCart').submit(function (e) {
if ($('.option').val() == 0) {
e.preventDefault();
alert('Please select an option');
}
});
$('.option').change(function () {
$('#productPrice').html("<?php echo e($product->sale_price != '' ? $product->sale_price : $product->price); ?>");
let extraPrice = $(this).find(':selected').data('price');
let price = parseFloat($('#productPrice').html());
let finalPrice = (Number(extraPrice) + price).toFixed(2);
$('#finalPrice').val(finalPrice);
$('#productPrice').html(finalPrice);
});
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('site.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/site/pages/product.blade.php ENDPATH**/ ?>