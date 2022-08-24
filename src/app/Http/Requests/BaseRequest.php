<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * User FormRequest
 */
class BaseRequest extends FormRequest
{
    /**
     * Autorize
     */
    public function authorize()
    {
        return true;
    }
}
