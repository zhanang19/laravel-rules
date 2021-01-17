<?php

namespace Zhanang19\LaravelRules\Rules;

class LinkedinUrl extends Rule
{
    public function passes($attribute, $value): bool
    {
        return (bool)preg_match(
            '/^(http|https):\/\/([a-z]{2,3}\.)*linkedin\.com\/.*$/',
            $value
        );
    }

    public function message(): string
    {
        return $this->getTranslation('linkedin_url', 'The :attribute is invalid');
    }
}
