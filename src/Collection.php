<?php

namespace Omisai\Countries;

class Collection
{
    protected $countries = [];

    public function __construct()
    {
        $this->loadCountries();
    }

    protected function loadCountries(): void
    {
        $directory = new \DirectoryIterator(__DIR__ . '/Models');
        foreach ($directory as $fileinfo) {
            if ($fileinfo->isFile() && $fileinfo->getExtension() === 'php') {
                $className = $fileinfo->getBasename('.php');
                $classFullName = "Omisai\\Countries\\Models\\$className";
                if (class_exists($classFullName)) {
                    $this->countries[] = new $classFullName();
                }
            }
        }
    }

    public function getCountries(): array
    {
        return $this->countries;
    }

    public function getCountryByAlpha2(string $alpha2): ?Country
    {
        foreach ($this->countries as $country) {
            if ($country->alpha2 === $alpha2) {
                return $country;
            }
        }

        return null;
    }

    public function validateLocale(string $locale): void
    {
        $allowedLocales = ['en', 'hu', 'de', 'es', 'it', 'fr'];
        if (!in_array($locale, $allowedLocales)) {
            throw new \InvalidArgumentException("Invalid locale: $locale");
        }
    }

    public function getCountriesName(string $locale = 'en'): array
    {
        $this->validateLocale($locale);

        $result = [];
        foreach ($this->countries as $country) {
            $result[$country->alpha2] = $country->getName($locale);
        }

        return $result;
    }

    public function getCountriesAlpha2(string $locale = 'en'): array
    {
        $this->validateLocale($locale);

        $result = [];
        foreach ($this->countries as $country) {
            $result[$country->getName($locale)] = $country->alpha2;
        }

        return $result;
    }

    public function getCountryByAlpha3(string $alpha3): ?Country
    {
        foreach ($this->countries as $country) {
            if ($country->alpha3 === $alpha3) {
                return $country;
            }
        }

        return null;
    }

    public function getCountriesAlpha3(string $locale = 'en'): array
    {
        $this->validateLocale($locale);

        $result = [];
        foreach ($this->countries as $country) {
            $result[$country->getName($locale)] = $country->alpha3;
        }

        return $result;
    }

    public function getCountryByNumeric(string $numeric): ?Country
    {
        foreach ($this->countries as $country) {
            if ($country->numeric === $numeric) {
                return $country;
            }
        }

        return null;
    }

    public function getCountriesNumeric(string $locale = 'en'): array
    {
        $this->validateLocale($locale);

        $result = [];
        foreach ($this->countries as $country) {
            $result[$country->getName($locale)] = $country->numeric;
        }

        return $result;
    }

    public function getCountryByFipCode(string $fipCode): ?Country
    {
        foreach ($this->countries as $country) {
            if ($country->fipCode === $fipCode) {
                return $country;
            }
        }

        return null;
    }

    public function getCountriesFipCode(string $locale = 'en'): array
    {
        $this->validateLocale($locale);

        $result = [];
        foreach ($this->countries as $country) {
            $result[$country->getName($locale)] = $country->fipCode;
        }

        return $result;
    }

    public function getCountryByDial(string $dial): ?Country
    {
        foreach ($this->countries as $country) {
            if ($country->dial === $dial) {
                return $country;
            }
        }

        return null;
    }

    public function getCountriesDial(string $locale = 'en'): array
    {
        $this->validateLocale($locale);

        $result = [];
        foreach ($this->countries as $country) {
            $result[$country->getName($locale)] = $country->dial;
        }

        return $result;
    }

    public function getCountryByCapital(string $capital): ?Country
    {
        foreach ($this->countries as $country) {
            if ($country->capital === $capital) {
                return $country;
            }
        }

        return null;
    }

    public function getCountriesByContinent(string $continent): array
    {
        $allowedContinents = ['AF', 'AN', 'AS', 'EU', 'NA', 'OC', 'SA'];
        if (!in_array($continent, $allowedContinents)) {
            throw new \InvalidArgumentException("Invalid continent code: $continent");
        }

        $result = [];
        foreach ($this->countries as $country) {
            if ($country->continent === $continent) {
                $result[] = $country;
            }
        }

        return $result;
    }

    public function getCountryByName(string $name, string $locale = 'en'): ?Country
    {
        $this->validateLocale($locale);

        foreach ($this->countries as $country) {
            if ($country->{$locale} === $name) {
                return $country;
            }
        }

        return null;
    }
}
