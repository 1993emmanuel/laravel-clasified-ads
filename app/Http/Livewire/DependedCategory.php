<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;

class DependedCategory extends Component
{   

    public $categories;
    public $subCategories;
    public $childCategories;

    public $selectedCategory = null;
    public $selectedSubCategory = null;

    public function mount(){
        $this->categories = Category::all();
    }

    //actualizar las sub categorias dependiendo de la categoria seleccionada
    public function updatedSelectedCategory($category){
        if(!is_null($this->selectedCategory)){
            $this->subCategories = SubCategory::where('category_id',$category)->get();
        }
    }

    //funcion para actualzar los child despues de seleccionar una sub categoria
    public function updatedSelectedSubCategory($category){
        if(!is_null($this->selectedSubCategory)){
            $this->childCategories = ChildCategory::where('sub_category_id',$category)->get();
        }
    }


    public function render()
    {
        return view('livewire.depended-category');
    }
}
