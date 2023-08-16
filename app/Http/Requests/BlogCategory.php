<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategory extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'blog_category_name_tr' => 'required',
            'blog_category_url_tr' => 'required',
            'blog_category_detail_no' => 'required',
            'blog_category_name_en' => 'required',
            'blog_category_url_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'blog_category_name_tr' => 'Blog kategori ismi boş bırakılamaz.',
            'blog_category_url_tr' => 'Blog kategori linki boş bırakılamaz.',
            'blog_category_detail_no' => 'Blog kategori sırası boş bırakılamaz.',
            'blog_category_name_en' => 'Blog kategori ingilizce ismi boş bırakılamaz.',
            'blog_category_url_en' => 'Blog kategori ingilizce linki boş bırakılamaz.',
        ];
    }
}
