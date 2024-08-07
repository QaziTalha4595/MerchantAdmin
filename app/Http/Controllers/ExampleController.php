<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class ExampleController extends Controller
{

    public function index() {
        echo "<br>ABC Controller.";
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // public function Hello()
    // {
    //     return view('api.Hello'); // Ensure this view file exists
    // }


}
