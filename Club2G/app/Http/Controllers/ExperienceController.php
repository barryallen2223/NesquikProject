<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Experience; 
class ExperienceController extends Controller
{

 public function index()
 {
 $viewData = [];
 $viewData["title"] = "Búsquedas del Tesoro - Club 2G";
 $viewData["subtitle"] = "Lista de búsquedas del tesoro";
 $viewData["experience"] = Experience::all();
 return view('experience.index')->with("viewData", $viewData);
 }
 public function show($id)
 {
 $viewData = [];
 $experience = Experience::findOrFail($id); 
 $viewData["title"] = $experience->getName();
 $viewData["subtitle"] = $experience->getName()." - Treasure hunt information";
 $viewData["experience"] = $experience;
 return view('experience.show')->with("viewData", $viewData);
 }
}