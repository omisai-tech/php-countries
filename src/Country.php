<?php

namespace Omisai\Countries;

abstract class Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2;

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3;

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric;

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode;

    /**
     * Capital city
     */
    public string $capital;

    /**
     * Continent
     *
     * AF: Africa
     * AN: Antarctica
     * AS: Asia
     * EU: Europe
     * NA: North America
     * OC: Oceania
     * SA: South America
     */
    public string $continent;

    /**
     * English name of the country
     */
    public string $en;

    /**
     * Hungarian name of the country
     */
    public string $hu;

    /**
     * German name of the country
     */
    public string $de;

    /**
     * Spanish name of the country
     */
    public string $es;

    /**
     * Italian name of the country
     */
    public string $it;

    /**
     * French name of the country
     */
    public string $fr;

    public function getName(string $locale = 'en'): string
    {
        $allowedLocales = ['en', 'hu', 'de', 'es', 'it', 'fr'];
        if (!in_array($locale, $allowedLocales)) {
            throw new \InvalidArgumentException("Invalid locale: $locale");
        }

        return $this->{$locale};
    }

    public function __get($property)
    {
        if (method_exists($this, $method = 'get'.ucfirst($property))) {
            return $this->$method();
        }

        trigger_error('Undefined property: '.$property, E_USER_ERROR);

        return null;
    }
}
