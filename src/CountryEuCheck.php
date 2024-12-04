<?php

namespace DonCamillo11\CountryEuCheck;

use Illuminate\Support\Facades\File;

class CountryEuCheck
{
    public function checkEuMembership($country) : bool
    {
        $euCountries = File::json(dirname(__FILE__).'/../data/eu-country-list.json');
        if(array_key_exists($country, $euCountries) || in_array($country, $euCountries)) {
            return true;
        }
        return false;
    }
}
