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
                    <!-- <img class="rounded-full" src="https://dummyimage.com/460x460/dedede/000000&text=Your+Image" /> -->
                    <img class="rounded-full h-112 w-112 shadow-lg shadow-slate-600 dark:shadow-slate-50 dark:shadow-lg" src="<?php echo e(Storage::url($highlights->image)); ?>" />
                </div>

            </div>
        </div>

        <!-- Our Menu Section -->
        <div id="menu_section" class="max-w-7xl mx-auto p-8 px-4 sm:px-6 md:px-8 ">
            <h2 class="text-center text-slate-700 font-semibold lg:mb-4 lg:text-5xl md:text-4xl sm:text-3xl md:my-3 sm:my-1">Our Food & Beverages</h2>

            <!-- Carousel Section -->
            <div class="flex min-h-screen items-center justify-center dark:bg-neutral-900">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="group relative items-center justify-center rounded-3xl overflow-hidden cursor-pointer hover:shadow-xl hover:shadow-black/30 transition-shadow">
                        <div class="h-96 w-72">
                            <img class="h-full w-full object-cover group-hover:rotate-3 group-hover:scale-125 transition-transform duration-500" src="<?php echo e(Storage::url($menu->image)); ?>" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute inset-0 flex flex-col items-center justify-center px-9 text-center translate-y-[50%] group-hover:translate-y-0 transition-all">
                            <!-- Title -->
                            <h1 class="text-2xl font-bold text-white"><?php echo e($menu->name); ?></h1>

                            <!-- Subtitle must be 12 Character -->
                            <p class="text-lg italic text-white mb-3 opacity-0 group-hover:opacity-100 transition-opacity"><?php echo e($menu->description); ?></p>
                            <button class="rounded-full bg-neutral-900 shadow shadow-black/60 py-2 px-3.5 text-sm capitalize text-white duration-300">Order Now</button>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <!-- Carousel by Tailwind CSS Snippets https://www.youtube.com/watch?v=rouUtUIZgxU -->

                </div>
            </div>
        </div>

        <!-- Reservation Form Section -->
        <div id="formorder" class="max-w-7xl mx-auto p-8 px-4 sm:px-6 md:px-8 ">
            <h2 class="text-center text-slate-700 font-semibold lg:mb-4 lg:text-5xl md:text-4xl sm:text-3xl md:my-3 sm:my-1">Reservation Form</h2>

            <!-- Form Section -->
            <section class="container mx-auto px-8 overflow-hidden">
                <div class="flex flex-wrap justify-center gap-12 md:gap-6 lg:gap-20">
                    <div class="md:flex-1 md:max-w-sm flex">
                        <img class="mx-auto" src="<?php echo e(asset('img/cute-boy-girl-restaurant.svg')); ?>" alt="Image by mamewmy https://www.freepik.com/free-vector/cute-couple-barista-apron-standing-with-arms-crossed-cartoon-character-illustration_12158635.htm#query=chef&position=25&from_view=search&track=sph" />
                    </div>
                    <form class="relative border-2 border-neutral-900 p-6 rounded-lg grid gap-8 md:flex-1 md:max-w-lg my-4 md:my-12 lg:my-16 bg-white dark:bg-neutral-800 w-full ">
                        <h4 id="contact" class="text-2xl font-bold">Choose your best date!</h4>

                        <!-- Name Input -->
                        <div class="relative">
                            <input id="name" type="text" class="peer form-input w-full border-4 border-amber-400 rounded-xl focus:ring-4 dark:focus:ring-offset-2 focus:ring-amber-400 focus:border-amber-400 focus:outline-none dark:bg-amber-400 dark:text-neutral-900 placeholder-transparent" placeholder="Your Name" required="">
                            <label for="name" class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-neutral-900
                            peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300">Your Name</label>
                        </div>

                        <!-- Email Input -->
                        <div class="relative">
                            <input id="email" type="text" class="peer form-input w-full border-4 border-amber-400 rounded-xl focus:ring-4 dark:focus:ring-offset-2 focus:ring-amber-400 focus:border-amber-400 focus:outline-none dark:bg-amber-400 dark:text-neutral-900 placeholder-transparent" placeholder="Your Email" required="">
                            <label for="email" class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-neutral-900
                            peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300">Your Email</label>
                        </div>

                        <!-- Telephone Number Input -->
                        <div class="relative">
                            <input id="tel_number" type="number" class="peer form-input w-full border-4 border-amber-400 rounded-xl focus:ring-4 dark:focus:ring-offset-2 focus:ring-amber-400 focus:border-amber-400 focus:outline-none dark:bg-amber-400 dark:text-neutral-900 placeholder-transparent" placeholder="Your Telephone Number" required="">
                            <label for="tel_number" class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2 peer-placeholder-shown:left-4 peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-neutral-900
                            peer-focus:-top-4 peer-focus:left-2 peer-focus:text-neutral-600 dark:peer-focus:text-neutral-300">Your Telephone Number</label>
                        </div>

                        <!-- Reservation Date Input -->
                        <div class="relative mt-4">
                            <label for="res_date" class="text-neutral-500 text-sm font-bold uppercase absolute -top-4 left-2 -translate-y-1/2">Reservation Date</label>
                            <input id="res_date" type="datetime-local" class="peer form-input w-full border-4 border-amber-400 rounded-xl focus:ring-4 dark:focus:ring-offset-2 focus:ring-amber-400 focus:border-amber-400 focus:outline-none dark:bg-amber-400 dark:text-neutral-900 placeholder-transparent" required="">
                        </div>

                        <div class="mx-auto">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.formorder-btn','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.formorder-btn'); ?>
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
                    </form>
                </div>
            </section>

            <!-- Form Section by Coding in Public https://www.youtube.com/watch?v=xpGNcQDmV2A -->
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal157c97262dbcb79e1dedb0b19b873d308943d778)): ?>
<?php $component = $__componentOriginal157c97262dbcb79e1dedb0b19b873d308943d778; ?>
<?php unset($__componentOriginal157c97262dbcb79e1dedb0b19b873d308943d778); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\foodnbeverage-app\resources\views/index.blade.php ENDPATH**/ ?>