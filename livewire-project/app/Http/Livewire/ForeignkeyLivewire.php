<?php

namespace App\Http\Livewire;

use App\Models\FoodCategories;
use App\Models\FoodNutritions;
use App\Models\Foods;
use Livewire\Component;
use Livewire\WithPagination;

class ForeignkeyLivewire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $foods;
    public $food_id, $food_name, $food_category, $food_nutrition;
    public $food_categories, $food_nutritions;    
    public $search = '';
    public $selectedCategories = [];
    public $selectedNutritions = [];
    public $newCategory, $newNutrition;

    // This method runs once. Good for initializations.
    public function mount()
    {
        $this->foods = Foods::join('food_categories', 'foods.categories_id', '=', 'food_categories.id')
                            ->join('food_nutritions', 'foods.nutritions_id', '=', 'food_nutritions.id')
                            ->select('foods.*', 'food_categories.category AS food_category', 'food_nutritions.nutrition AS food_nutrition')->oldest()->paginate(5);
        $this->food_categories = FoodCategories::all();
        $this->food_nutritions = FoodNutritions::all();
    }

    public function render()
    {
        $this->mount();
        $this->applyFilter();
        return view('livewire.foreignkey-livewire', ['foods' => $this->foods]);
    }

    public function applyFilter()
    {
        $query = Foods::join('food_categories', 'foods.categories_id', '=', 'food_categories.id')
            ->join('food_nutritions', 'foods.nutritions_id', '=', 'food_nutritions.id')
            ->select('foods.*', 'food_categories.category AS food_category', 'food_nutritions.nutrition AS food_nutrition');

        if (!empty($this->selectedCategories)) {
            $query->whereIn('food_categories.category', $this->selectedCategories);
        }

        if (!empty($this->selectedNutritions)) {
            $query->whereIn('food_nutritions.nutrition', $this->selectedNutritions);
        }

        if ($this->search) {
            $query->where('food_name', 'like', '%' . $this->search . '%');
        }
        $this->foods = $query->oldest()->paginate(5);
    }

    private function resetInputFields(){
        $this->food_name = '';
        $this->food_category = '';
        $this->food_nutrition = '';
        $this->newCategory = '';
        $this->newNutrition = '';
    }

    public function store()
    {
        // Validate the data
        $validatedData = $this->validate([
            'food_name' => 'required',
            'food_category' => 'required',
            'food_nutrition' => 'required',
        ]);
  
        // Find the IDs of selected category
        $category = FoodCategories::where('category', $this->food_category)->first();

        //Find the nutrition based on the ID of selected nutrition
        $nutrition = FoodNutritions::where('id', $this->food_nutrition)->first();

        // Create a new food record with the foreign key references
        Foods::create([
            'food_name' => $validatedData['food_name'],
            'categories_id' => $category->id,
            'nutritions_id' => $nutrition->id,
        ]);

        $this->showAlert('Food Created Successfully.');

        $this->resetInputFields();
    }

    public function showNutritionModal() {
        $this->showAlert('Test');
        $this->emit('showNutritionModal');
    }

    public function addNewCategory() {
         // Validate the data
         $validatedData = $this->validate([
            'newCategory' => 'required',
        ]);
  
        FoodCategories::create($validatedData);

        $this->showAlert('New Category Added Successfully.');

        $this->resetInputFields();
    }

    public function addNewNutrition() {
         // Validate the data
         $validatedData = $this->validate([
            'newNutrition' => 'required',
        ]);
  
        FoodNutritions::create(['nutrition' => $validatedData['newNutrition']]);

        $this->showAlert('New Nutrition Added Successfully.');

        $this->resetInputFields();
    }

    public function get_data($id)
    {
        $selected_food = Foods::join('food_categories', 'foods.categories_id', '=', 'food_categories.id')
                            ->join('food_nutritions', 'foods.nutritions_id', '=', 'food_nutritions.id')
                            ->select('foods.*', 'food_categories.category AS food_category', 'food_nutritions.nutrition AS food_nutrition')
                            ->where('foods.id', $id)
                            ->first();
        $this->food_id = $id;
        $this->food_name = $selected_food->food_name;
        $this->food_category = $selected_food->food_category;
        $this->food_nutrition = $selected_food->nutritions_id;
    }

    public function cancel()
    {
        $this->resetInputFields();
    }

    public $category, $nutrition;
    public function update()
    {
        $validatedData = $this->validate([
            'food_name' => 'required',
            'food_category' => 'required',
            'food_nutrition' => 'required',
        ]);
  
        // Find the IDs of selected category and nutrition
        $category = FoodCategories::where('category', $this->food_category)->first();

        // Find the nutrition based on the selected ID of nutrition
        $nutrition = FoodNutritions::where('id', $this->food_nutrition)->first();

        // Create a new food record with the foreign key references
        $selected_food = Foods::find($this->food_id);
        $selected_food->update([
            'food_name' => $validatedData['food_name'],
            'categories_id' => $category->id,
            'nutritions_id' => $nutrition->id,
        ]);

        $this->showAlert('Food Updated Successfully.');

        $this->resetInputFields();
        $this->emit('hideEditModal'); // Emit another event to hide the modal
    }

    public function delete()
    {
        Foods::find($this->food_id)->delete();
        $this->showAlert('Food Deleted Successfully.');
        
        $this->emit('hideDeleteModal'); 
    }

    public function showAlert($message)
    {
        session()->flash('message', $message);
        $this->emit('hideAlert');
    }
}
