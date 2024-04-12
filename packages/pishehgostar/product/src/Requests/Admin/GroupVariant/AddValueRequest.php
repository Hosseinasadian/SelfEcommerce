<?php

namespace Pishehgostar\Product\Requests\Admin\GroupVariant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddValueRequest extends FormRequest
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
        $groupVariantId = $this->route('group_variant')->id;
        return [
            'name'=>['required',Rule::unique('group_variant_values')->where('group_variant_id',$groupVariantId)],
        ];
    }
}
