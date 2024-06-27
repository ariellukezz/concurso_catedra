<?php
namespace App\Http\Controllers;
use App\Models\Ubigeo;
use Illuminate\Http\Request;

class UbigeoController extends Controller
{

    public function getUbigeo(Request $request) {


        $res = Ubigeo::where('departamento', 'like', "%$request->term%")
        ->orWhere('provincia', 'like', "%$request->term%")
        ->orWhere('distrito', 'like', "%$request->term%")
        ->orWhereRaw("CONCAT(departamento, '/', provincia, '/', distrito) like ?", ["%$request->term%"])
        ->limit(50);

        return $res;

    }

}
