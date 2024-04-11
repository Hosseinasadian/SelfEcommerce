<?php

namespace Pishehgostar\Product\Requests\Admin\ProductGroup;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $productGroupId = $this->route('product_group')->id;
        return [
            'name'=>['required',Rule::unique('product_groups','name')->ignore($productGroupId)]
        ];
    }
}
