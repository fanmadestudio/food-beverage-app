<div class="m-8">
    <div class="grid grid-cols-2 justify-items-center">

        <!-- Left Section -->
        <div class="p-2">
            <h1 class="mb-4 font-extrabold tracking-tight leading-snug text-slate-700 lg:text-5xl md:text-4xl sm:text-3xl">Hello, <mark class="px-2 rounded-xl text-white font-['Dancing_Script'] font-extrabold text-5xl bg-gradient-to-r from-sky-500 to-green-400">Food & Beverage</mark> serving best meal for you</h1>
            <p class="text-lg font-normal text-slate-700 lg:text-xl mb-4">We are Food & beverage best in town, We are serving best meal with you</p>
            <div class="flex justify-end items-center mb-4">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.search-btn','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.search-btn'); ?>
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
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.ordernow-btn','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.ordernow-btn'); ?>
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

        <!-- Right Section -->
        <div class="p-2">
            <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- <img class="rounded-full" src="https://dummyimage.com/460x460/dedede/000000&text=Your+Image" /> -->
            <img class="rounded-full" src="<?php echo e(Storage::url($menu->image)); ?>" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<div class="p-2">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus perferendis consequatur placeat eius iure velit. Ab eos quaerat dolor laboriosam nemo iste similique, laudantium culpa pariatur eius amet aliquam sequi?
</div><?php /**PATH D:\laragon\www\foodnbeverage-app\resources\views/components/frontend/header/show.blade.php ENDPATH**/ ?>