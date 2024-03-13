<?php
namespace App\Http\Controllers;

use App\Traits\ApiResponser;

class ApiControler extends Controller
{
    use ApiResponser;
    
public function __construct() {
    $this->middleware('auth:api');
}
    
}

?>