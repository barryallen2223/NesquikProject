<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Treasure; 
class TreasureController extends Controller
{

 public function index()
 {
 $viewData = [];
 $viewData["title"] = "Búsquedas del Tesoro - Club 2G";
 $viewData["subtitle"] = "Lista de búsquedas del tesoro";
 $viewData["treasures"] = Treasure::all();
 return view('treasure.index')->with("viewData", $viewData);
 }
 public function show($id)
 {
     

 $viewData = [];
 $treasure = Treasure::findOrFail($id); 
 $viewData["title"] = $treasure->getName();
 $viewData["subtitle"] = $treasure->getName()." - Treasure hunt information";
 $viewData["treasure"] = $treasure;
 return view('treasure.show')->with("viewData", $viewData);
 }


}