<?php

namespace App\Http\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $title;
    public $body;
    public $postId;

    public function render()
    {
        $posts = ModelsPost::query()
            ->latest()
            ->get();

        return view('livewire.post', compact('posts'));
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($this->postId) {
            $post = ModelsPost::query()
                ->findOrFail($this->postId);
            $post->update($validated);
        } else {
            ModelsPost::query()
                ->create($validated);
        }

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = ModelsPost::findOrFail($id);
        $this->title = $post->title;
        $this->body = $post->body;
        $this->postId = $post->id;
    }

    public function delete($id)
    {
        ModelsPost::find($id)->delete();
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->body = '';
        $this->postId = '';
    }
}
