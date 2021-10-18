<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\State;
use App\Models\City;

class DependetCountry extends Component
{

    public $countries;
    public $states;
    public $cities;

    public $selectedcountry = null;
    public $selectedState = null;

    public function mount(){
        $this->countries = Country::all();
    }

    //funcion para actualizar los estados en base a el country
    public function updatedSelectedCountry($country){
        if(!is_null($this->selectedcountry)){
            $this->states = State::where('country_id',$country)->get();
        }
    }

    //funcion para actualizar las ciudaddes en base al estado seleccionado
    public function updatedSelectedState($state){
        if(!is_null($this->selectedState)){
            $this->cities = City::where('state_id',$state)->get();
        }
    }

    public function render()
    {
        return view('livewire.dependet-country');
    }
}
