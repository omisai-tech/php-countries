<?php

namespace Omisai\Countries\Models;

use Omisai\Countries\Country;

class BritishIndianOceanTerritory extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string $alpha2 = 'IO';

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string $alpha3 = 'IOT';

    /**
     * ISO 3166-1 numeric code
     */
    public string $numeric = '86';

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string $fipCode = 'IO';

    /**
     * Telephone country code
     */
    public string $callingCode = '246';

    /**
     * @deprecated - will be removed in next major version. Use callingCode instead.
     */
    public string $dial = '246';

    /**
     * Capital city
     */
    public string $capital = 'Diego Garcia';

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
    public string $continent = 'AS';

    /**
     * English name of the country
     */
    public string $en = 'British Indian Ocean Territory';

    /**
     * Hungarian name of the country
     */
    public string $hu = 'Brit Indiai-óceáni Terület';

    /**
     * German name of the country
     */
    public string $de = 'Britisches Territorium des Indischen Ozeans';

    /**
     * Spanish name of the country
     */
    public string $es = 'Territorio Británico del Océano Índico';

    /**
     * Italian name of the country
     */
    public string $it = "Territorio britannico dell'Oceano Indiano";

    /**
     * French name of the country
     */
    public string $fr = "Territoire britannique de l'océan Indien";

    /**
     * Portuguese name of the country
     */
    public string $pt = 'Território Britânico do Oceano Índico';

    /**
     * Dutch name of the country
     */
    public string $nl = 'British Indian Ocean Territory';

    /**
     * Danish name of the country
     */
    public string $da = 'Britisk territorium i Det Indiske Ocean';

    /**
     * Swedish name of the country
     */
    public string $sv = 'Brittiska territoriet i Indiska oceanen';

    /**
     * Norwegian name of the country
     */
    public string $no = 'Det britiske territoriet i Indiahavet';

    /**
     * Polish name of the country
     */
    public string $pl = 'Brytyjskie Terytorium Oceanu Indyjskiego';

    /**
     * Czech name of the country
     */
    public string $cs = 'Britské indickooceánské území';

    /**
     * Slovak name of the country
     */
    public string $sk = 'Britské indickooceánske územie';

    /**
     * Slovenian name of the country
     */
    public string $sl = 'Britansko ozemlje v Indijskem oceanu';

    /**
     * Croatian name of the country
     */
    public string $hr = 'Britanski teritorij Indijskog oceana';
}
