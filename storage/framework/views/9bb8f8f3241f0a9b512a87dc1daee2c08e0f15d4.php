<?php $__env->startSection('title'); ?> <?php echo e($pageTitle); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> <?php echo e($pageTitle); ?></h1>
            <p><?php echo e($subTitle); ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h2 class="page-header"><i class="fa fa-globe"></i> <?php echo e($order->order_number); ?></h2>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Date: <?php echo e($order->created_at->toFormattedDateString()); ?></h5>
                        </div>
                    </div>
                    <div class="row invoice-info">
                        <div class="col-4">Placed By
                            <address><strong><?php echo e($order->user->fullName); ?></strong><br>Email: <?php echo e($order->user->email); ?></address>
                        </div>
                        <div class="col-4">Ship To
                            <address><strong><?php echo e($order->first_name); ?> <?php echo e($order->last_name); ?></strong><br><?php echo e($order->address); ?><br><?php echo e($order->city); ?>, <?php echo e($order->country); ?> <?php echo e($order->post_code); ?><br><?php echo e($order->phone_number); ?><br></address>
                        </div>
                        <div class="col-4">
                            <b>Order ID:</b> <?php echo e($order->order_number); ?><br>
                            <b>Amount:</b> <?php echo e(config('settings.currency_symbol')); ?><?php echo e(round($order->grand_total, 2)); ?><br>
                            <b>Payment Method:</b> <?php echo e($order->payment_method); ?><br>
                            <b>Payment Status:</b> <?php echo e($order->payment_status == 1 ? 'Completed' : 'Not Completed'); ?><br>
                            <b>Order Status:</b> <?php echo e($order->status); ?><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Qty</th>
                                    <th>Product</th>
                                    <th>SKU #</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->id); ?></td>
                                            <td><?php echo e($item->product->name); ?></td>
                                            <td><?php echo e($item->product->sku); ?></td>
                                            <td><?php echo e($item->quantity); ?></td>
                                            <td><?php echo e(config('settings.currency_symbol')); ?><?php echo e(round($item->price, 2)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/admin/orders/show.blade.php ENDPATH**/ ?>