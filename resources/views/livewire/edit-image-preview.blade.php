<div>
    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">Featured Image</label>
        <div class="mt-1 flex items-center">
            <div class="w-full flex">
                @if ($oldFeaturedImage)
                    <div class="m-2 p-2 flex">
                        Old Featured Image: 
                        <img src="{{ Storage::url($oldFeaturedImage) }}" class="w-28 h-28 rounded">
                    </div>
                @endif
                @if ($featuredImage)
                    <div class="m-2 p-2">
                        New Featured Image: 
                        <img src="{{$featuredImage->temporaryUrl()}}" class="w-28 h-28 rounded">
                    </div>
                @endif
            </div>
            
            <input 
                wire:model="featuredImage"
                type="file" id="featured_image" name="featured_image" id="featured_image"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
        </div>
    </div>

    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">Image One</label>
        <div class="mt-1 flex items-center">
            <div class="w-full flex">
                @if ($oldImageOne)
                    <div class="m-2 p-2 flex">
                        Old Image One: 
                        <img src="{{ Storage::url($oldImageOne) }}" class="w-28 h-28 rounded">
                    </div>
                @endif
                @if ($imageOne)
                    <div class="m-2 p-2">
                        New Image One:
                        <img src="{{$imageOne->temporaryUrl()}}" class="w-28 h-28 rounded">
                    </div>
                @endif
            </div>
            <input 
                wire:model="imageOne"
                type="file" id="image_one" name="image_one" 
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
        </div>
    </div>

    <div class="col-span-6 md:col-span-3">
        <label class="block text-sm font-medium text-gray-700">Image Two</label>
        <div class="mt-1 flex items-center">
            <div class="w-full flex">
                @if ($oldImageTwo)
                    <div class="m-2 p-2 flex">
                        Old Featured Image: 
                        <img src="{{ Storage::url($oldImageTwo) }}" class="w-28 h-28 rounded">
                    </div>
                @endif
                @if ($imageTwo)
                    <div class="m-2 p-2">
                        New Featured Image: 
                        <img src="{{$imageTwo->temporaryUrl()}}" class="w-28 h-28 rounded">
                    </div>
                @endif
            </div>
            <input 
                wire:model="imageTwo"
                type="file" id="image_two" name="image_two" 
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
        </div>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Image Three</label>
        <div class="mt-1 flex items-center">
            <div class="w-full flex">
                @if ($oldImageThree)
                    <div class="m-2 p-2 flex">
                        Old Featured Image: 
                        <img src="{{ Storage::url($oldImageThree) }}" class="w-28 h-28 rounded">
                    </div>
                @endif
                @if ($imageThree)
                    <div class="m-2 p-2">
                        New Featured Image: 
                        <img src="{{$imageThree->temporaryUrl()}}" class="w-28 h-28 rounded">
                    </div>
                @endif
            </div>
            <input 
                wire:model="imageThree"
                type="file" id="image_three" name="image_three" 
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"/>
        </div>
    </div>
</div>

