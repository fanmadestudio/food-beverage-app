<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Table') }}
        </h2>
    </x-slot>

    <div class="h-fit w-screen p-6 mt-4 mx-2 bg-white border-b border-gray-200 rounded-xl shadow-md sm:px-6 lg:px-8">

        <!-- Subtitle -->
        <h3 class="text-3xl">Edit {{ $table->name }}</h3>

        <div class="flex mt-10 m-2 p-2">
            <a href="{{ route('admin.tables.index') }}" class="bg-sky-500 hover:bg-sky-500/60 text-white px-4 py-2 rounded-lg">Index Table</a>
        </div>


        <!-- Form -->
        <div class="m-4">
            <form method="POST" action="{{ route('admin.tables.update', $table->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Table Name -->
                <div class="mb-8">
                    <label for="table_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Table Name</label>
                    <input id="table_name" name="table_name" type="text" value="{{ $table->table_name }}" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Menu Name" required="" />
                </div>

                <!-- Guest Number -->
                <div class="mb-8">
                    <label for="guest_number" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Guest Number</label>
                    <input id="guest_number" name="guest_number" type="text" value="{{ $table->guest_number }}" placeholder="Menu's Description" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required="" />
                </div>

                <!-- Status -->
                <div class="mb-8">
                    <label for="status" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Status</label>
                    <div>
                        <select id="status" name="status" class="form-multiselect block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            @foreach (App\Enums\TableStatus::cases() as $status )
                            <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Location -->
                <div class="mb-8">
                    <label for="location" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Location</label>
                    <div>
                        <select id="location" name="location" class="form-multiselect block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                            @foreach (App\Enums\TableLocation::cases() as $location)
                            <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Button save and cancel -->
                <button type="submit" class="rounded-lg bg-sky-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-sky-500/60 focus:outline-none focus:ring-4 focus:ring-sky-300 dark:bg-sky-500 dark:hover:bg-sky-500/60 dark:focus:ring-sky-300 sm:w-auto">Update</button>

                <a href="{{ route('admin.tables.index') }}" class="rounded-lg bg-rose-500 mr-3 px-5 py-2 text-center text-sm font-medium text-white hover:bg-rose-500/60 focus:outline-none focus:ring-4 focus:ring-rose-300 dark:bg-rose-500 dark:hover:bg-rose-500/60 dark:focus:ring-rose-300 sm:w-auto">Cancel</a>
            </form>
        </div>
    </div>
</x-admin-layout>