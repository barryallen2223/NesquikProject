<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ubication;
class HomeController extends Controller
{

 public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Club 2G";
        $ubications = Ubication::all();
        $mapUbication = $ubications->makeHidden(['active', 'created_at', 'updated_at', 'deleted_at', 'created_by_id', 'photos', 'media']);
        $latitude =  6.245296;
        $longitude = -75.568670;
       $viewData["mapUbications"]= $mapUbication;
       $viewData["latitude"] = $latitude;
       $viewData["longitude"] = $longitude;
        return view('home.index') ->with("viewData",$viewData);
    }
 public function about()
 {
    $viewData = [];
    $viewData["title"] = "About us - Online Store";
    $viewData["subtitle"] = "About us";
    $viewData["description"] = "This is an about page ...";
    $viewData["author"] = "Developed by: Your Name";
    return view('home.about')->with("viewData", $viewData); 
 }

}
