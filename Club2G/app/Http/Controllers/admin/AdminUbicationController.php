<?php
namespace app\Http\Controllers\admin;
use App\Models\Ubication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminUbicationController extends Controller
{
 public function index()
 {
 $viewData = [];
 $viewData["title"] = "Admin Page - Ubicaciones - Club 2G";
 $viewData["ubications"] = Ubication::all();
 return view('admin.ubication.index')->with("viewData", $viewData);
 }

 public function store(Request $request)
 {
    Ubication::validate($request);

 $newUbication = new Ubication();
 $newUbication->setName($request->input('name'));
 $newUbication->setAddress($request->input('address'));
 $newUbication->setDetails($request->input('details'));
 $newUbication->setLatitud($request->input('latitud'));
 $newUbication->setLongitud($request->input('longitud'));
 $newUbication->save();

 return back();
 }

 public function delete($id)
 {
 Ubication::destroy($id);
 return back();
 } 

 public function edit($id)
 {
 $viewData = [];
 $viewData["title"] = "Admin Page - Edita las Búsquedas del Tesoro - Club 2G";
 $viewData["ubication"] = Ubication::findOrFail($id);
 return view('admin.ubication.edit')->with("viewData", $viewData);
 }

 public function update(Request $request, $id)
 {
    Ubication::validate($request);

 $ubication = Ubication::findOrFail($id); 
 $ubication->setName($request->input('name'));
 $ubication->setAddress($request->input('address'));
 $ubication->setDetails($request->input('details'));
 $ubication->setLatitud($request->input('latitud'));
 $ubication->setLongitud($request->input('longitud'));
 $ubication->save();


 $ubication->save();
 return redirect()->route('admin.ubication.index');
}
}