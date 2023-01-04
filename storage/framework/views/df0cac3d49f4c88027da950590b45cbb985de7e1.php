<?php if (isset($component)) { $__componentOriginal157c97262dbcb79e1dedb0b19b873d308943d778 = $component; } ?>
<?php $component = App\View\Components\FrontendGuestLayout::resolve([] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend-guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\FrontendGuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="m-8">
            <div class="grid grid-cols-2 justify-items-center">

                <!-- Left Section -->
                <div class="my-auto flex-none">
                    <h1 class="mb-4 font-extrabold tracking-tight leading-loose text-slate-700 lg:text-5xl md:text-4xl sm:text-3xl">Hello, <mark class="px-2 rounded-xl text-white font-['Dancing_Script'] font-extrabold text-5xl bg-gradient-to-r from-sky-500 to-green-400 shadow-md shadow-slate-300 ">Food & Beverage</mark> serving best meal for you</h1>
                    <p class="text-lg font-normal text-slate-700 lg:text-xl mb-4">We are Food & beverage best in town, We are serving best meal with you</p>
                    <div class="flex justify-end items-center mb-4">
                       
                    </div>
                </div>


                <!-- Right Section -->
                <div class="p-2">
                    <!-- <img class="rounded-full" src="https://dummyimage.com/460x460/dedede/000000&text=Your+Image" /> -->
                    <img class="rounded-full h-112 w-112 shadow-lg shadow-slate-600 dark:shadow-slate-50 dark:shadow-lg" src="<?php echo e(Storage::url($highlights->image)); ?>" />
                </div>

            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal157c97262dbcb79e1dedb0b19b873d308943d778)): ?>
<?php $component = $__componentOriginal157c97262dbcb79e1dedb0b19b873d308943d778; ?>
<?php unset($__componentOriginal157c97262dbcb79e1dedb0b19b873d308943d778); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\foodnbeverage-app\resources\views/frontend/menus/index.blade.php ENDPATH**/ ?>