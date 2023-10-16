<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobOfferUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // 今回は使用しないのでtrueを返す
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:50',
            'occupation_id' => 'required|exists:occupations,id',
            'due_date' => 'required|after_or_equal:today',
            'description' => 'required|string|max:2000',
            'is_published' => 'nullable|boolean',
            'due_date' => 'required|date',
        ];
    }

    public function attributes()
    {
        return [
            'description' => '詳細',
        ];
    } 
}
