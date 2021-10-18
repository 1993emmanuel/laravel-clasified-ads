<div>
    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">Featured Image</label>
        <div class="mt-1 flex items-center">
            @if ($featuredImage)
                <div class="m-2 p-2">
                    PhotoPreview
                    <img src="{{$featuredImage->temporaryUrl()}}" class="w-28 h-28 rounded">
                </div>
            @endif
            <input 
                wire:model="featuredImage"
                type="file" id="featured_image" name="featured_image" 
                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"/>
        </div>
    </div>

    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">Image One</label>
        <div class="mt-1 flex items-center">
            @if ($imageOne)
                <div class="m-2 p-2">
                    PhotoPreview
                    <img src="{{$imageOne->temporaryUrl()}}" class="w-28 h-28 rounded">
                </div>
            @endif
            <input 
                wire:model="imageOne"
                type="file" id="image_one" name="image_one" 
                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"/>
        </div>
    </div>

    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">Image Two</label>
        <div class="mt-1 flex items-center">
            @if ($imageTwo)
                <div class="m-2 p-2">
                    PhotoPreview
                    <img src="{{$imageTwo->temporaryUrl()}}" class="w-28 h-28 rounded">
                </div>
            @endif
            <input 
                wire:model="imageTwo"
                type="file" id="image_two" name="image_two" 
                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"/>
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Image Three</label>
        <div class="mt-1 flex items-center">
            @if ($imageThree)
                <div class="m-2 p-2">
                    PhotoPreview
                    <img src="{{$imageThree->temporaryUrl()}}" class="w-28 h-28 rounded">
                </div>
            @endif
            <input 
                wire:model="imageThree"
                type="file" id="image_three" name="image_three" 
                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"/>
        </div>
    </div>
</div>
