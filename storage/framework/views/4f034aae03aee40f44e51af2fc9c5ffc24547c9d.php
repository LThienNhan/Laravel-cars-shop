<?php $__env->startSection('title', 'Orders'); ?>
<?php $__env->startSection('content'); ?>
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">My Account - Orders</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <main class="col-sm-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Order No.</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Order Amount</th>
                                <th scope="col">Qty.</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <th scope="row"><?php echo e($order->order_number); ?></th>
                                    <td><?php echo e($order->first_name); ?></td>
                                    <td><?php echo e($order->last_name); ?></td>
                                    <td><?php echo e(config('settings.currency_symbol')); ?><?php echo e(number_format(round($order->grand_total, 2))); ?></td>
                                    <td><?php echo e($order->item_count); ?></td>
                                    <td><span class="badge badge-success"><?php echo e(strtoupper($order->status)); ?></span></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <div class="col-sm-12">
                                    <p class="alert alert-warning">No orders to display.</p>
                                </div>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/site/pages/account/orders.blade.php ENDPATH**/ ?>