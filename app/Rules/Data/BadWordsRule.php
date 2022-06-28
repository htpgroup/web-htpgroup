<?php

namespace App\Rules\Data;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BadWordsRule implements Rule
{
    private $max_words;

    /**
     * Create a new rule instance.
     *
     * @param  int  $max_words
     * @return void
     */
    public function __construct($max_words = 500)
    {
        $this->max_words = $max_words;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //Todo check is good word

        return str_word_count($value) <= $this->max_words;
    }

    /**
     * Validates for bad words.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  array  $parameters
     * @param  object  $validator
     * @return bool
     */
    public function validate($attribute, $value, $parameters, $validator)
    {
        if (! is_string($value)) {
            return true;
        }

        $words = count($parameters) === 0 ?
            config('bad-word') :
            Arr::only(config('bad-word'), $parameters);

        //Arr::flatten https://dev.to/cooldashing24/flatten-array-using-arr-flatten-in-laravel-1d4f
        return ! Str::contains(strtolower($value), Arr::flatten($words));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Nội dung không phù hợp';
    }
}
