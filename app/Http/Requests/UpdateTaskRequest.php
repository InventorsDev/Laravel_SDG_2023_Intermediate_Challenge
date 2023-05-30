<?php

namespace App\Http\Requests;

use App\Enum\TaskStatusEnum;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            'title' => ['filled', Rule::unique('tasks')->ignore($this->task)],
            'description' => 'filled|string',
            'dueDate' => 'filled|string',
            'status' => 'filled|in:' . TaskStatusEnum::PENDING . ',' . TaskStatusEnum::COMPLETED . ',' . TaskStatusEnum::CANCELLED,
        ];
    }
}
