<?php

namespace App\Http\Requests;

use App\Rules\DureeManifestation;
use Date;
use Illuminate\Support\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        $start = $this->input('start'); // Récupérer la date de début
        $end = $this->input('end'); // Récupérer la date de fin

        return [
            'start' => ['bail', 'required', 'date', 'after:today'],
            'end' => ['required', 'date', new DureeManifestation($start, $end)],
            'lieu' => ['required', 'regex:/^[A-Z][a-z]{2,}$/'],
        ];
    }
    public function messages(): array
    {
        return [
            'start.required' => 'La date de début est obligatoire.',
            'start.after' => "La date doit être après aujourd'hui",
            'end.required' => 'La date de fin est obligatoire.',
            'lieu.required' => 'Le lieu est obligatoire.',
            'lieu.regex' => 'Le format du lieu est invalide. Il doit commencer par une majuscule et être suivi de lettres minuscules.',
        ];
    }



}
