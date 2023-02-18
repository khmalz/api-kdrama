<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KDramaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'max:50'],
            'year' => ['required', 'numeric', 'max_digits:4', 'date_format:Y'],
            'type' => ['required', 'string', 'alpha'],
            'episodes' => ['required', 'integer'],
            'genres' => ['required', 'array', 'min:1'],
            'released' => ['required', 'date']
        ];
    }
}