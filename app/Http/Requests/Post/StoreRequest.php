<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation()
    {
            //Laravel 5 
            //'slug' => Str::of($this->title)->slug();
            //'slug' => Str::of($this->title)->slug()->append('-adicional');
            //Laravel 7
            //$this->merge(['slug'=>Str::slug($this->title)]);
            //Laravel 9
            $this->merge(['slug' => str($this->title)->slug()]);
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title"=>"required|min:5|max:500",
            "content"=>"required|min:5",
            "category_id"=>"required|integer",
            "description"=>"required|min:5|max:500",
            "posted"=>"required",
            "slug"=>"required|min:5",
        ];
    }
}
