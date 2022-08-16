
<?php $__env->startSection('title', 'Shopping Cart'); ?>
<?php $__env->startSection('content'); ?>
<section class="section-pagetop bg-dark">
<div class="container clearfix">
<h2 class="title-page">Cart</h2>
</div>
</section>
<section class="section-content bg padding-y border-top">
<div class="container">
<div class="row">
    <div class="col-sm-12">
        <?php if(Session::has('message')): ?>
            <p class="alert alert-success"><?php echo e(Session::get('message')); ?></p>
        <?php endif; ?>
    </div>
</div>
<div class="row">
    <main class="col-sm-9">
        <?php if(\Cart::isEmpty()): ?>
            <p class="alert alert-warning">Your shopping cart is empty.</p>
        <?php else: ?>
            <div class="card">
                <table class="table table-hover shopping-cart-wrap">
                    <thead class="text-muted">
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col" width="120">Quantity</th>
                        <th scope="col" width="120">Price</th>
                        <th scope="col" class="text-right" width="200">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = \Cart::getContent(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <figure class="media">
                                    <figcaption class="media-body">
                                        <h6 class="title text-truncate"><?php echo e(Str::words($item->name,20)); ?></h6>
                                        <?php $__currentLoopData = $item->attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key  => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <dl class="dlist-inline small">
                                                <dt><?php echo e(ucwords($key)); ?>: </dt>
                                                <dd><?php echo e(ucwords($value)); ?></dd>
                                            </dl>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </figcaption>
                                </figure>
                            </td>
                            <form action="<?php echo e(route('checkout.cart.update', $item->id)); ?>" method="POST" role="form" id="update">
                            <?php echo e(csrf_field()); ?>

                            <td>
                                <input name="qty" type="number" value="<?php echo e($item->quantity); ?>" class="form-control quantity" />
                            </td>
                        
                            <td>
                                <div class="price-wrap">
                                    <var class="price"><?php echo e(config('settings.currency_symbol'). number_format($item->price)); ?></var>
                                    <small class="text-muted">each</small>
                                </div>
                            </td>
                            <td class="text-right">
                                <a href="<?php echo e(route('checkout.cart.remove', $item->id)); ?>" class="btn btn-outline-danger"><i class="fa fa-times"></i> </a>
                                <button type="submit" class="btn btn-outline-danger">Update</button>
                            </td>
                            </form>
                        </tr>
                            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </main>
    <aside class="col-sm-3">
        <a href="<?php echo e(route('checkout.cart.clear')); ?>" class="btn btn-danger btn-block mb-4">Clear Cart</a>
        <p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
        <dl class="dlist-align h4">
            <dt>Total:</dt>
            <dd class="text-right"><strong><?php echo e(config('settings.currency_symbol')); ?><?php echo e(number_format(\Cart::getSubTotal())); ?></strong></dd>
        </dl>
        <hr>
        <figure class="itemside mb-3">
            <aside class="aside"><img src="<?php echo e(asset('frontend/images/icons/pay-visa.png')); ?>"></aside>
            <div class="text-wrap small text-muted">
                Pay 84.78 AED ( Save 14.97 AED ) By using ADCB Cards.
            </div>
        </figure>
        <figure class="itemside mb-3">
            <aside class="aside"> <img src="<?php echo e(asset('frontend/images/icons/pay-mastercard.png')); ?>"> </aside>
            <div class="text-wrap small text-muted">
                Pay by MasterCard and Save 40%.
                <br> Lorem ipsum dolor
            </div>
        </figure>
        <a href="<?php echo e(route('checkout.index')); ?>" class="btn btn-success btn-lg btn-block">Proceed To Checkout</a>
    </aside>
</div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/site/pages/cart.blade.php ENDPATH**/ ?>