<?php
namespace app\Http\Controllers\admin;
use App\Models\Treasure;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminTreasureController extends Controller
{
 public function index()
 {
 $viewData = [];
 $viewData["title"] = "Admin Page - Búsquedas del Tesoro - Club 2G";
 $viewData["treasures"] = Treasure::all();
 return view('admin.treasure.index')->with("viewData", $viewData);
 }

 public function store(Request $request)
 {
    Treasure::validate($request);

 $newTreasure = new Treasure();
 $newTreasure->setName($request->input('name'));
 $newTreasure->setDescription($request->input('description'));
 $newTreasure->setPoints($request->input('points'));
 $newTreasure->setStartsAt($request->input('startsAt'));
 $newTreasure->setEndsAt($request->input('endsAt'));
 $newTreasure->save();

 return back();
 }

 public function delete($id)
 {
 Treasure::destroy($id);
 return back();
 } 

 public function edit($id)
 {
 $viewData = [];
 $viewData["title"] = "Admin Page - Edita las Búsquedas del Tesoro - Club 2G";
 $viewData["treasure"] = Treasure::findOrFail($id);
 return view('admin.treasure.edit')->with("viewData", $viewData);
 }

 public function update(Request $request, $id)
 {
    Treasure::validate($request);

 $treasure = Treasure::findOrFail($id); 
 $treasure->setName($request->input('name'));
 $treasure->setDescription($request->input('description'));
 $treasure->setPoints($request->input('points'));
 $treasure->setStartsAt($request->input('startsAt'));
 $treasure->setEndsAt($request->input('endsAt'));
 $treasure->save();


 $treasure->save();
 return redirect()->route('admin.treasure.index');
}
}