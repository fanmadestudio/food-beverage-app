<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tables') }}
        </h2>
    </x-slot>

    <div class="h-fit w-screen p-6 mt-4 mx-2 bg-white border-b border-gray-200 rounded-xl shadow-md sm:px-6 lg:px-8">

        <!-- Subtitle -->
        <h3 class="text-3xl">Table</h3>

        <div class="flex justify-end mt-10 m-2 p-2">
            <a href="{{ route('admin.tables.create') }}" class="bg-sky-500 hover:bg-sky-500/60 text-white px-4 py-2 rounded-lg">New Table</a>
        </div>

        <!-- Table -->
        <div class="mt-10 mb-10 mx-6 overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="text-center">
                        <th scope="col" class="py-3 px-6">
                            Table Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Guest Number
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Status
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Location
                        </th>

                        <!-- Title with dropdown -->
                        <!-- <th scope="col" class="py-3 px-6">
                            <div class="flex items-center">
                                Price
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                                        <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z"></path>
                                    </svg></a>
                            </div>
                        </th> -->

                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tables as $table)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $table->table_name }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $table->guest_number }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $table->status->name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $table->location->name }}
                        </td>
                        <td class="py-4 px-6 text-right">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.tables.edit', $table->id) }}" class="bg-sky-500 hover:bg-sky-500/50 rounded-xl px-4 py-2 font-medium text-white dark:text-white hover:underline">Edit</a>
                                <form class="bg-red-500 hover:bg-red-500/50 rounded-xl px-4 py-2 font-medium text-white dark:text-white hover:underline" method="POST" action="{{ route('admin.tables.destroy', $table->id) }}" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-admin-layout>