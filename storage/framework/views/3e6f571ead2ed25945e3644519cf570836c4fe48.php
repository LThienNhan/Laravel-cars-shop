<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <ul class="app-menu">
        <li>
            <a class="app-menu__item <?php echo e(Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo e(Route::currentRouteName() == 'admin.orders.index' ? 'active' : ''); ?>" href="<?php echo e(route('admin.orders.index')); ?>">
                <i class="app-menu__icon fa fa-bar-chart"></i>
                <span class="app-menu__label">Orders</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo e(Route::currentRouteName() == 'admin.products.index' ? 'active' : ''); ?>" href="<?php echo e(route('admin.products.index')); ?>">
                <i class="app-menu__icon fa fa-shopping-bag"></i>
                <span class="app-menu__label">Products</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo e(Route::currentRouteName() == 'admin.brands.index' ? 'active' : ''); ?>" href="<?php echo e(route('admin.brands.index')); ?>">
                <i class="app-menu__icon fa fa-briefcase"></i>
                <span class="app-menu__label">Brands</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo e(Route::currentRouteName() == 'admin.categories.index' ? 'active' : ''); ?>" href="<?php echo e(route('admin.categories.index')); ?>">
                <i class="app-menu__icon fa fa-tags"></i>
                <span class="app-menu__label">Categories</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo e(Route::currentRouteName() == 'admin.attributes.index' ? 'active' : ''); ?>" href="<?php echo e(route('admin.attributes.index')); ?>">
                <i class="app-menu__icon fa fa-th"></i>
                <span class="app-menu__label">Attributes</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item <?php echo e(Route::currentRouteName() == 'admin.settings' ? 'active' : ''); ?>" href="<?php echo e(route('admin.settings')); ?>">
                <i class="app-menu__icon fa fa-cogs"></i>
                <span class="app-menu__label">Settings</span>
            </a>
        </li>
    </ul>
</aside>
<?php /**PATH E:\Xampp\htdocs\Laravel-cars-shop\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>