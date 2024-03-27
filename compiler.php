<?php

$csvFilePath = 'countries.csv';
$destinationDirectory = 'src/Models/';

if (!file_exists($destinationDirectory)) {
    mkdir($destinationDirectory, 0777, true);
}

function getClassName($string)
{
    $string = ucwords(strtolower($string));
    $string = preg_replace('/[^A-Za-z0-9]/', '', $string);

    return $string;
}

if (($handle = fopen($csvFilePath, 'r')) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $className = getClassName($data[8]);

        $classContent = "<?php
namespace Omisai\\Countries\\Models;

use Omisai\\Countries\\Country;
use Omisai\\Countries\\Continent;

class $className extends Country
{
    /**
     * ISO 3166-1 alpha-2 code
     */
    public string \$alpha2 = \"{$data[0]}\";

    /**
     * ISO 3166-1 alpha-3 code
     */
    public string \$alpha3 = \"{$data[1]}\";

    /**
     * ISO 3166-1 numeric code
     */
    public string \$numeric = \"{$data[2]}\";

    /**
     * FIPS code
     * Federal Information Processing Standard
     */
    public string \$fipCode = \"{$data[3]}\";

    /**
     * Capital city
     */
    public string \$capital = \"{$data[4]}\";

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
    public string \$continent = \"{$data[7]}\";

    /**
     * English name of the country
     */
    public string \$en = \"{$data[8]}\";

    /**
     * Hungarian name of the country
     */
    public string \$hu = \"{$data[9]}\";

    /**
     * German name of the country
     */
    public string \$de = \"{$data[10]}\";

    /**
     * Spanish name of the country
     */
    public string \$es = \"{$data[11]}\";

    /**
     * Italian name of the country
     */
    public string \$it = \"{$data[12]}\";

    /**
     * French name of the country
     */
    public string \$fr = \"{$data[13]}\";
    \n}
";

        $filePath = $destinationDirectory . $className . '.php';

        file_put_contents($filePath, $classContent);
    }

    fclose($handle);
}

echo "PHP files have been generated successfully.\n";
