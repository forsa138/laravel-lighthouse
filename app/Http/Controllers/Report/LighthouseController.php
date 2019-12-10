<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\PHP;


//use GuzzleHttp\Psr7\Response;
//use \GuzzleHttp\encoded;

class LighthouseController extends Controller
{
//    public $endpoint="localhost:3000/report/"+ $url;

    public function report(Request $request)
    {
        $url = $request->input('url');

        $endpoint="localhost:3000/report/".urlencode($url);

        $client = new Client();
        $res = $client->getAsync($endpoint);

        $data=$res->wait()->getBody();
        $obj = json_decode($data, true);

        $performance = $obj['data']['categories']['performance']['score'] ;
        echo "Performance: $performance \n <br>";

        $accessibility = $obj['data']['categories']['accessibility']['score'];
        echo "Accessibility: $accessibility \n <br>";

        $best_practices = $obj['data']['categories']['best-practices']['score'];
        echo "Best Practices: $best_practices \n <br>";

        $seo = $obj['data']['categories']['seo']['score'];
        echo "SEO: $seo \n <br>";

        $pwa = $obj['data']['categories']['pwa']['score'];
        echo "Progressive Web App: $pwa \n <br>";



        ###muestra categorias del json
        //return ($obj["data"]['categories']);
        //return $res->wait()->getBody();


    }


}
