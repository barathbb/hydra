<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Controllers\Controller;

use App\Hotelfooddaily;
use Illuminate\Http\Request;

class HotelfooddailyController extends Controller {
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
		$hotelfooddailies = Hotelfooddaily::orderBy('id', 'desc')->paginate(10);

		return view('hotelfooddailies.index', compact('hotelfooddailies'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('hotelfooddailies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$hotelfooddaily = new Hotelfooddaily();

		$hotelfooddaily->hotelid = $request->input("“hotelid");
        $hotelfooddaily->foodid = $request->input("foodid");
        $hotelfooddaily->price = $request->input("price");
        $hotelfooddaily->maximumquantity = $request->input("maximumquantity");

		$hotelfooddaily->save();

		return redirect()->route('hotelfooddailies.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hotelfooddaily = Hotelfooddaily::findOrFail($id);

		return view('hotelfooddailies.show', compact('hotelfooddaily'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hotelfooddaily = Hotelfooddaily::findOrFail($id);

		return view('hotelfooddailies.edit', compact('hotelfooddaily'));
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
		$hotelfooddaily = Hotelfooddaily::findOrFail($id);

		$hotelfooddaily->hotelid = $request->input("“hotelid");
        $hotelfooddaily->foodid = $request->input("foodid");
        $hotelfooddaily->price = $request->input("price");
        $hotelfooddaily->maximumquantity = $request->input("maximumquantity");

		$hotelfooddaily->save();

		return redirect()->route('hotelfooddailies.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$hotelfooddaily = Hotelfooddaily::findOrFail($id);
		$hotelfooddaily->delete();

		return redirect()->route('hotelfooddailies.index')->with('message', 'Item deleted successfully.');
	}

}
