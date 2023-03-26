<?php
namespace app\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminHomeController extends Controller
{
 public function index()
 {  
    $viewData = [];
    $viewData["title"] = "Admin Page - Admin - Club 2G";
    return view('admin.home.index')->with("viewData", $viewData);
}
}
