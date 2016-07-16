<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Controllers\Controller;

use App\FOOD;
use Illuminate\Http\Request;

class FoodController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}
	use AuthenticatesAndRegistersUsers, ThrottlesLogins;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$foods = FOOD::orderBy('id', 'desc')->paginate(10);

		return view('foods.index', compact('foods'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('foods.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$food = new FOOD();

		$food->name = $request->input("“name");
        $food->cuisine_id = $request->input("cuisine_id");

		$food->save();

		return redirect()->route('foods.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$food = FOOD::findOrFail($id);

		return view('foods.show', compact('food'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$food = FOOD::findOrFail($id);

		return view('foods.edit', compact('food'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$food = FOOD::findOrFail($id);

		$food->name = $request->input("“name");
        $food->cuisine_id = $request->input("cuisine_id");

		$food->save();

		return redirect()->route('foods.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$food = FOOD::findOrFail($id);
		$food->delete();

		return redirect()->route('foods.index')->with('message', 'Item deleted successfully.');
	}

}
