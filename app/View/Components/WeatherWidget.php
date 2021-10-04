<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Http;

class WeatherWidget extends Component
{
    public $place = '';
    public $current = '';
    public $location = '';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($place='Bangalore')
    {
        $this->place = $place;
        $api = 'http://api.weatherapi.com/v1/current.json?key=a6481a54909b45098c673239210410&q='.$place;

        $response = Http::get($api);
        // dd($response->json());
        $this->current = $response->json()['current'];
        $this->location = $response->json()['location'];
        

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.weather-widget');
    }
}
