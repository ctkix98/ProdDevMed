<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Carbon;

class DureeManifestation implements ValidationRule
{
    protected $startDate;
    protected $endDate;

    public function __construct($start, $end){
        $this->startDate = Carbon::createFromFormat('Y-m-d', $start);
        $this->endDate = Carbon::createFromFormat('Y-m-d', $end);
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        $startDayThree = $this ->startDate->copy()->addDays(3);
        $startDayFive = $this ->startDate->copy()->addDays(5);

        //avec Carbon, je ne peux pas utilise <= et >=
        if ($this->endDate->lessThan($startDayThree) || $this->endDate->greaterThan($startDayFive)) {
            $fail("La date de fin doit être entre {$startDayThree->format('d.m.Y')} et {$startDayFive->format('d.m.Y')}.");
        }
    }

}
