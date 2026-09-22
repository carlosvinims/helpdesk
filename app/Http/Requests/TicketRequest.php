<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class TicketRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:5', 'max:150'],
            'department_id' => ['required','exists:departments,id'],
            'requester_name' => ['required', 'string', 'min:3', 'max:100'],
            'priority'  => ['required', 'in:Baixa,Média,Alta,Urgente'],
            'description' => ['required', 'string', 'min:10', 'max:2000'],
            'status'  => ['required', 'in:Aberto,Em Atendimento,Concluído'],
        ];
    }

    protected function prepareForValidation(): void
{
    $this->merge([
        'status' => $this->status ?? 'Aberto',
    ]);
}

    public function messages(): array
    {
        return [
            'title.required' => 'O campo titulo é obrigatório',
            'title.min'     => 'O campo titulo deve ter no minimo 5 caracteres.',
            'requester_name.required' => 'Este campo é obrígatorio.',
            'requester_name.min'     => 'Este campo deve ter no minimo 3 caracteres.',
            'priority.required'  =>  'O campo prioridade é obrígatorio.',
            'priority.in'  => 'O campo prioridade só pode ter uma das prioridade Baixa,Media,Alta ou Urgente',
            'description.required' => 'O campo descrição é obrigatório.',
            'description.min'  => 'O campo descrição deve ter no minimo 10 caracteres.',
            'status.required' => 'O status é obrigatório.',
            'status.in' => 'O status deve ser Aberto, Em Atendimento ou Concluído.',
        ];
    }
}
