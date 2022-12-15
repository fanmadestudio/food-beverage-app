<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Tables')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="h-fit w-screen p-6 mt-4 mx-2 bg-white border-b border-gray-200 rounded-xl shadow-md sm:px-6 lg:px-8">

        <!-- Subtitle -->
        <h3 class="text-3xl">Tables</h3>

        <div class="flex mt-10 m-2 p-2">
            <a href="<?php echo e(route('admin.tables.index')); ?>" class="bg-sky-500 hover:bg-sky-500/60 text-white px-4 py-2 rounded-lg">Index Tables</a>
        </div>


        <!-- Form -->
        <div class="m-4">
            <form method="POST" action="<?php echo e(route('admin.tables.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <!-- Table Name -->
                <div class="mb-8">
                    <label for="table_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Table Name</label>
                    <input id="table_name" name="table_name" type="text" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Table Name" required="" />
                </div>

                <!-- Guest Number -->
                <div class="mb-8">
                    <label for="guest_number" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Guest Number</label>
                    <input id="guest_number" name="guest_number" type="number" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Guest Number" required="" />
                </div>

                <!-- Status -->
                <div class="mb-8">
                    <label for="status" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Status</label>
                    <div>
                        <select id="status" name="status" class="form-multiselect block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            <?php $__currentLoopData = App\Enums\TableStatus::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($status->value); ?>"><?php echo e($status->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Location -->
                <div class="mb-8">
                    <label for="location" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Location</label>
                    <div>
                        <select id="location" name="location" class="form-multiselect block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            <?php $__currentLoopData = App\Enums\TableLocation::cases(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($location->value); ?>"><?php echo e($location->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Button save and cancel -->
                <button type="submit" class="rounded-lg bg-sky-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-sky-500/60 focus:outline-none focus:ring-4 focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500/60 dark:focus:ring-sky-300 sm:w-auto">Save</button>

                <a href="<?php echo e(route('admin.tables.index')); ?>" class="rounded-lg bg-rose-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-rose-500/60 focus:outline-none focus:ring-4 focus:ring-rose-300 dark:bg-rose-500 dark:hover:bg-rose-500/60 dark:focus:ring-rose-300 sm:w-auto">Cancel</a>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\foodnbeverage-app\resources\views/admin/tables/create.blade.php ENDPATH**/ ?>