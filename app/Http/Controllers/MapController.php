<?php

namespace App\Http\Controllers;

use Request;
use phpGPX\phpGPX;

class MapController extends Controller
{
    public function gpx(Request $request){

    	$gpx = new phpGPX();
        $file = $gpx->load('files/Route201809181324westkust.gpx');

        // XML
        //$file->save('files/output.gpx', phpGPX::XML_FORMAT);
            
        //JSON
        //$file->save('files/output.json', phpGPX::JSON_FORMAT);

        foreach ($file->tracks as $track)
        {
            // Statistics for whole track
            $track->stats->toArray();

            foreach ($track->segments as $segment)
            {
                // Statistics for segment of track
                $segment->stats->toArray();

                dd($segment);
                //dd(count($segment->points));
                //dd($segment->points[0]->latitude);
            }
        }

    	return view("map");
    }
}
