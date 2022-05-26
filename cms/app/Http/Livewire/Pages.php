<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Livewire\Component;

class Pages extends Component
{
    public $modalFormVisible = false;
    public $slug;
    public $title;
    public $content;
   
    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => ['required', Rule::unique('pages', 'slug')],
            'content' => 'required',
        ];
    }
    
    public function updatedTitle($value)
    {
        $this->slug = Str::slug($value);
    }

    
    public function create()
    {
        $this->validate();
        Page::create($this->modelData());  
        $this->modalFormVisible = false;
    }
    
    public function createShowModal()
    {
        $this->modalFormVisible = true;
    }
    
    public function modelData()
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
        ];
    }
    
    public function render()
    {
        return view('livewire.pages');
    }
}
