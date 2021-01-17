<?php

namespace Zhanang19\LaravelRules\Rules;

use Illuminate\Contracts\Validation\Rule as ValidationRule;

abstract class Rule implements ValidationRule
{
    protected function getTranslation(string $key, string $default): string
    {
        if (trans("validation.$key") !== "validation.$key") {
            return trans("validation.$key");
        }

        return $default;
    }
}
