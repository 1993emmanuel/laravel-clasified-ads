<div class="grid grid-cols-6 gap-6">
    <div class="col-span-6 sm:col-span-3 md:col-span-2">
        <label for="country_id" class="block text-sm font-medium text-gray-700">
            Country
        </label>
        <select
            wire:model="selectedcountry"
            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            name="country_id">
            @foreach ($countries as $country )
                <option value="{{$country->id}}">{{$country->name}}</option>
            @endforeach
        </select>
        @error('country_id')<span class="error">{{$message}}</span>@enderror
    </div>
    @if (!is_null($selectedcountry))
        <div class="col-span-6 sm:col-span-3 md:col-span-2">
            <label for="state_id" class="block text-sm font-medium text-gray-700">
                State
            </label>
            <select
                wire:model="selectedState"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                name="state_id">
                @foreach ( $states as $state )
                    <option value="{{$state->id}}">{{$state->name}}</option>
                @endforeach
            </select>
            @error('state_id')<span class="error">{{$message}}</span>@enderror
        </div>
    @endif
    @if (!is_null($selectedState))
        <div class="col-span-6 sm:col-span-3 md:col-span-2">
            <label for="city_id" class="block text-sm font-medium text-gray-700">
                City
            </label>
            <select
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                name="city_id">
                @foreach ($cities as $city )
                    <option value="{{$city->id}}">{{$city->name}}</option>
                @endforeach
            </select>
            @error('city_id')<span class="error">{{$message}}</span>@enderror
        </div>
    @endif
</div>