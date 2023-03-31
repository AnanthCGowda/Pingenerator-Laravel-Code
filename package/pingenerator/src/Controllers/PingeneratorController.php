<?php 

namespace Ananth\Pingenerator\Controllers;

use App\Http\Controllers\Controller;

use Ananth\Pingenerator\PinGenerate;

class PingeneratorController extends Controller
{
	public function index()
	{
		return view("pingenerator::pingenerate");
	}

	public function generator()
	{

		$pinobject = new PinGenerate();

		$pin = $pinobject->generator();

		return response()->json(['success' => true, 'data' => $pin]);
	}
	
}

?>