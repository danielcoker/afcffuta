<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => ['required', 'max:255', 'unique:posts,title'],
            'body' => 'required',
            'thumbnail' => ['required','file'],
            'banner' => ['required', 'file', 'image']
        ];
    }

    public function title(): string
    {
        return $this->get('title');
    }

    public function body(): string
    {
        return $this->get('body');
    }

    public function thumbnail()
    {
        return $this->file('thumbnail');
    }

    public function banner()
    {
        return $this->file('banner');
    }
}
