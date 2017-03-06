<?php

namespace Buuum;

/**
 * Class GooglePlaces
 * https://developers.google.com/places/web-service/autocomplete
 *
 */
class GooglePlaces
{
    /**
     *
     * @var string
     */
    protected $urlPlaces = 'https://maps.googleapis.com/maps/api/place/autocomplete/json?';

    /**
     *
     * @var string
     */
    protected $urlDetails = 'https://maps.googleapis.com/maps/api/place/details/json?';

    /**
     * Google Places Api Key
     * @var
     */
    protected $apiKey;

    /**
     * The language code, indicating in which language the results should be returned, if possible.
     * Searches are also biased to the selected language; results in the selected language may be given a higher ranking.
     * https://developers.google.com/maps/faq#languagesupport
     *
     * @var string
     */
    protected $lang = 'es';

    /**
     * The types of place results to return.
     * https://developers.google.com/places/web-service/autocomplete#place_types
     *
     * @var string
     */
    protected $type = 'geocode';

    /**
     * A grouping of places to which you would like to restrict your results.
     * Currently, you can use components to filter by up to 5 countries.
     * Countries must be passed as a two character, ISO 3166-1 Alpha-2 compatible country code.
     * For example: components=country:fr
     *
     * @var array
     */
    protected $components = [];

    /**
     * The distance (in meters) within which to return place results
     *
     * @var int
     */
    protected $radius;

    /**
     * The point around which you wish to retrieve place information. Must be specified as latitude,longitude.
     *
     * @var string
     */
    protected $location;


    /**
     * GooglePlaces2 constructor.
     * @param string $apiKey
     */
    function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     */
    public function setLang(string $lang)
    {
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param array $components
     */
    public function setComponents(array $components)
    {
        $this->components = $components;
    }

    /**
     * @param string $input
     * @return mixed
     */
    public function search(string $input)
    {
        # exemple: https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Vict&types=(cities)&language=pt_BR&key=YOUR_API_KEY
        $stringComponents = $this->componentsToString();
        $url = $this->urlPlaces . 'input=' . urlencode($input) . "&types=" . $this->type . '&radius=' . $this->radius . '&location=' . $this->location . '&components=' . $stringComponents . '&language=' . $this->lang . '&key=' . $this->apiKey . '&sensor=false';
        return $this->getRequest($url);

    }

    /**
     * @param string $placeId
     * @return mixed
     */
    public function getDetailsFromPlaceId(string $placeId)
    {
        $url = $this->urlDetails . 'placeid=' . $placeId . '&language=' . $this->lang . '&key=' . $this->apiKey . '&sensor=false';
        return $this->getRequest($url);
    }

    /**
     * @param string $url
     * @return mixed
     */
    private function getRequest(string $url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }

    /**
     * convierte el array de components en string, para enviar en la url
     * @return string
     */
    private function componentsToString()
    {
        $components = [];
        foreach ($this->components as $variable => $valor) {
            $components[] = $variable . ':' . $valor;
        }
        return implode('|', $components);
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius)
    {
        $this->radius = $radius;
    }

}