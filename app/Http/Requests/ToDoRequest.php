<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ToDoRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }
    public function rules():array
    {
        return [
            'title' => 'required|max:50|min:3',
            'text' => 'required|min:5',
        ];
    }
    public function messages():array
    {
        return [
            'title.max' => 'Todo title should not be greater than 50 characters',
            'title.min' => 'Todo title should not be less than 3 characters',
            'title.required' => 'Todo title is required',
            'text.min' => 'Todo text should not be less than 5 characters',
            'text.required' => 'Todo text is required',
        ];
    }
}
