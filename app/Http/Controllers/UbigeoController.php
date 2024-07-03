<?php
namespace App\Http\Controllers;
use App\Models\Ubigeo;
use Illuminate\Http\Request;
use DB;
class UbigeoController extends Controller
{

    public function getUbigeo(Request $request) {

        $res = Ubigeo::select('reniec as value',DB::raw("CONCAT(reniec,' - ',departamento, '/', provincia, '/', distrito) AS label"))
            ->where('departamento', 'like', "%$request->term%")
            ->orWhere('provincia', 'like', "%$request->term%")
            ->orWhere('distrito', 'like', "%$request->term%")
            ->orWhereRaw("CONCAT(departamento, '/', provincia, '/', distrito) like ?", ["%$request->term%"])
            ->orWhereRaw("CONCAT(reniec,' - ',departamento, '/', provincia, '/', distrito) like ?", ["%$request->term%"])
            ->orWhereRaw("CONCAT(reniec,'-',departamento, '/', provincia, '/', distrito) like ?", ["%$request->term%"])
            ->orWhere('reniec', 'like', "%$request->term%")
            ->take(50)
            ->get();

        $this->response['datos'] = $res;
        return response()->json($this->response, 200);

    }

}
