<?php

namespace App\Http\Livewire;

use App\Models\location;
use Livewire\Component;

class MapLocation extends Component
{
    public $long, $lat;

    public function loadLocation()
    {
        # code...
        $locations = location::orderBy('created_at', 'desc');

        $customLocation = [];

        foreach ($locations as $loc) {
            # code...
            $customLocation[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$loc->long, $loc->lat],
                    'type' => 'Point'
                ],
                "properties" => [
                    "locationId" => $loc->id,
                    "title" => $loc->title,
                    "image" => $loc->image,
                    "description" => $loc->description
                ]
            ];
        }
    }

    public function render()
    {
        return view('livewire.map-location');
    }
}
