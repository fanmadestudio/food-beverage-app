<nav class="flex justify-center">
    <nav class="px-4 py-3 w-1312">
        <div class="flex justify-between items-center">
            <a href="<?php echo e(route('index')); ?>" class="flex items-center mx-4 gap-2">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.logo','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </a>
            <div class="hidden md:flex mx-4 gap-2">
                <a href="#menu_section" class="block text-slate-700 hover:text-slate-700 px-3 py-2 bg-transparent focus:ring-2 focus:ring-slate-700/50 focus:rounded-xl">Menu</a>
                <a href="#secret_menu" class="block text-slate-700 hover:text-slate-700 px-3 py-2 bg-transparent focus:ring-2 focus:ring-slate-700/50 focus:rounded-xl">Secret Menu</a>
                <a href="<?php echo e(route('menus.index')); ?>" class="text-white hover:text-grey-700 px-2 py-2 flex gap-2 bg-green-500 rounded-xl border-2 border-green-500 hover:bg-green-400 hover:border-green-400 hover:text-white">
                    New Menu!
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
                        <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
                    </svg>
                </a>

            </div>
            <div class="flex mx-4 gap-2">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.login-btn','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.login-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="block md:hidden" id="mobile-menu">
            <div class="flex flex-col">
                <a href="#menu_section" class="text-slate-700 block px-3 py-2 rounded-md font-medium">Menu</a>
                <a href="#secret_menu" class="text-slate-700 block px-3 py-2 rounded-md font-medium">Secret Menu</a>
                <a href="<?php echo e(route('menus.index')); ?>" class="text-white hover:text-grey-700 px-2 py-2 flex gap-2 bg-green-500 rounded-xl border-2 border-green-500 hover:bg-green-400 hover:border-green-400 hover:text-white">
                    New Menu!
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-ringing" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                        <path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727"></path>
                        <path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727"></path>
                    </svg>
                </a>
            </div>
        </div>
        <!-- End Mobile Menu -->
    </nav>
</nav><?php /**PATH D:\laragon\www\foodnbeverage-app\resources\views/components/frontend/navbar.blade.php ENDPATH**/ ?>