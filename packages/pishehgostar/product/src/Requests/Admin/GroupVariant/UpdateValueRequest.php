<?php

namespace Pishehgostar\Product\Requests\Admin\GroupVariant;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateValueRequest extends FormRequest
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
        $groupVariantValueId = $this->route('value')->id;
        return [
            'name'=>['required',Rule::unique('group_variant_values')->ignore($groupVariantValueId)->where('group_variant_id',$groupVariantId)],
        ];
    }
}
