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
            <?php echo e(__('Reservation')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="h-fit w-screen p-6 mt-4 mx-2 bg-white border-b border-gray-200 rounded-xl shadow-md sm:px-6 lg:px-8">

        <!-- Subtitle -->
        <h3 class="text-3xl">Edit <?php echo e($reservation->first_name); ?> <?php echo e($reservation->last_name); ?> Reservation</h3>

        <div class="flex mt-10 m-2 p-2">
            <a href="<?php echo e(route('admin.reservations.index')); ?>" class="bg-sky-500 hover:bg-sky-500/60 text-white px-4 py-2 rounded-lg">Index Reservation</a>
        </div>


        <!-- Form -->
        <div class="m-4">
            <form method="POST" action="<?php echo e(route('admin.reservations.update', $reservation->id)); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <!-- First Name -->
                <div class="mb-8">
                    <label for="first_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">First Name</label>
                    <input id="first_name" name="first_name" type="text" value="<?php echo e($reservation->first_name); ?>" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="First Name" required="" />
                </div>

                <!-- Last Name -->
                <div class="mb-8">
                    <label for="last_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Last Name</label>
                    <input id="last_name" name="last_name" type="text" value="<?php echo e($reservation->last_name); ?>" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Last Name" required="" />
                </div>

                <!-- Email -->
                <div class="mb-8">
                    <label for="email" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                    <input id="email" name="email" type="text" value="<?php echo e($reservation->email); ?>" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Email" required="" />
                </div>

                <!-- Reservation Date -->
                <div class="mb-8">
                    <label for="res_date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Reservation Date</label>
                    <input id="res_date" name="res_date" type="datetime-local" value="<?php echo e($reservation->res_date); ?>" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required="" />
                </div>

                <!-- Telephone Number -->
                <div class="mb-8">
                    <label for="tel_number" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Telephone Number</label>
                    <input id="tel_number" name="tel_number" type="number" value="<?php echo e($reservation->tel_number); ?>" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Telephone Number" required="" />
                </div>

                <!-- Table Id -->
                <div class="mb-8">
                    <label for="table_id" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Table</label>
                    <div>
                        <select id="table_id" name="table_id" class="form-multiselect block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $table): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($table->id); ?>" <?php if($table->id == $reservation->table_name): echo 'selected'; endif; ?>><?php echo e($table->table_name); ?> (<?php echo e($table->guest_number); ?> Guests)</option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <!-- Guest Number -->
                <div class="mb-8">
                    <label for="guest_
                    number" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Guest Number</label>
                    <input id="guest_number" name="guest_number" type="number" value="<?php echo e($reservation->guest_number); ?>" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Guest Number" required="" />
                </div>

                <!-- Button save and cancel -->
                <button type="submit" class="rounded-lg bg-sky-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-sky-500/60 focus:outline-none focus:ring-4 focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500/60 dark:focus:ring-sky-300 sm:w-auto">Update</button>

                <a href="<?php echo e(route('admin.reservations.index')); ?>" class="rounded-lg bg-rose-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-rose-500/60 focus:outline-none focus:ring-4 focus:ring-rose-300 dark:bg-rose-500 dark:hover:bg-rose-500/60 dark:focus:ring-rose-300 sm:w-auto">Cancel</a>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\foodnbeverage-app\resources\views/admin/reservations/edit.blade.php ENDPATH**/ ?>