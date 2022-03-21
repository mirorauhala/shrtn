<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UrlHostNot implements Rule
{
    private string $notHost;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(string $notHost)
    {
        $this->notHost = $notHost;
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
        $givenUrl = parse_url($value);
        return optional($givenUrl)['host'] !== $this->notHost;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Link cannot have host ' . $this->notHost;
    }
}
