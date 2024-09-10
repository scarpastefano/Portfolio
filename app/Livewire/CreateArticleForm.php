<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\Concerns\SupportsDefaultModels;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    public $images = [];
    public $temporary_images;

    #[Validate('required|min:5|max:20')]
    public $title;
    #[Validate('required|min:10|max:500')]
    public $description;
    public $url;
    public $post;

    public function store(){
        $this->validate();
        $this->post = Post::create([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
        ]);

        if(count($this->images) > 0){
            foreach ($this->images as $image) {
                $this->post->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Progetto creato con successo');
        $this->cleanForm();
    }

    protected function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->url = '';
        $this->images = [];
    }

    public function updatedTemporaryImages(){
        if(count($this->temporary_images) + count($this->images) > 6){
            throw ValidationException::withMessages(['temporary_images' => 'Hai caricato troppe immagini']);
        } else{

            if($this->validate(
                [
                'temporary_images.*' => 'image|max:1024',
                ])) {
                    foreach($this->temporary_images as $image){
                        $this->images[] = $image;
                    }
                }
        }
    }

    public function removeImage($key){
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}
