<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Highlight') }}
        </h2>
    </x-slot>

    <div class="h-fit w-screen p-6 mt-4 mx-2 bg-white border-b border-gray-200 rounded-xl shadow-md sm:px-6 lg:px-8">

        <!-- Subtitle -->
        <h3 class="text-3xl">Preview Highlight</h3>



        <!-- Preview Highlight -->
        <div class="p-2 mb-4">
            <!-- <img class="rounded-full" src="https://dummyimage.com/460x460/dedede/000000&text=Your+Image" /> -->
            <img class="mx-auto rounded-full w-60 h-60 shadow-lg" src="{{ Storage::url($highlights->image) }}" />
        </div>
        <div class="p-2">
            <h3 class="mx-auto text-start">Highlight Feature</h3>
            <h4 class="mx-auto text-start">
                Current highlight will appearred in this preview image. This highlight collected from last menu input.
                But ifyou want to highlight the best seller menu, please contact developer.
            </h4>
        </div>

    </div>
</x-admin-layout>