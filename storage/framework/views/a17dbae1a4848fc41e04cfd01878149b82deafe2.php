<header class="section-header">
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <a href="<?php echo e(url('/')); ?>">
                            <img class="logo" src="<?php echo e(asset('frontend/images/logo-dark.png')); ?>" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="<?php echo e(route('checkout.cart')); ?>" class="icontext">
                                <div class="icon-wrap icon-xs bg2 round text-secondary"><i
                                        class="fa fa-shopping-cart"></i></div>
                                <div class="text-wrap">
                                    <small><?php echo e($cartCount); ?> items</small>
                                </div>
                            </a>
                        </div>
                        <?php if(auth()->guard()->guest()): ?>
                            <div class="widget-header">
                                <a href="<?php echo e(route('login')); ?>" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-primary round text-white"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap"><span>Login</span></div>
                                </a>
                            </div>
                            <div class="widget-header">
                                <a href="<?php echo e(route('register')); ?>" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-success round text-white"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap"><span>Register</span></div>
                                </a>
                            </div>
                        <?php else: ?>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo e(Auth::user()->full_name); ?> <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('account.orders')); ?>">Orders</a>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <?php echo e(__('Logout')); ?>

                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo $__env->make('site.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</header>
<?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/site/partials/header.blade.php ENDPATH**/ ?>