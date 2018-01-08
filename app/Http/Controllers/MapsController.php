<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Model\Endereco;
    use Excel;
    use Illuminate\Support\Facades\DB;
    use League\Geotools\Coordinate\Ellipsoid;
use Toin0u\Geotools\Facade\Geotools;
    use Geocode;
    use Geocoder\Laravel\Facades\Geocoder;
    class MapsController extends Controller
    {


        public function getFile()
        {
            return 'file/REDES_ATIVAS_MERCK.csv';
        }

        
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            
        }

        public function getMapa()
        {

          return View('maps');


        }


public function exportData(){

$endereco=DB::table('enderecos')->select('latitude','longitude')->get();



return View("maps",compact('endereco'));
  


}

 public function import(Request $request)
    {
 


     
      }
   }