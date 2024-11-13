<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
        return [
            'question' => 'required|string',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'option_e' => 'required|string',
            'correct_answer' => 'required|string',
            'packet' => 'required|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'question.required' => 'Pertanyaan harus diisi',
            'option_a.required' => 'Opsi A harus diisi',
            'option_b.required' => 'Opsi B harus diisi',
            'option_c.required' => 'Opsi C harus diisi',
            'option_d.required' => 'Opsi D harus diisi',
            'option_e.required' => 'Opsi E harus diisi',
            'correct_answer.required' => 'Jawaban benar harus diisi',
            'packet.required' => 'Paket soal harus diisi',
        ];
    }
}
