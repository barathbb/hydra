<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;

use App\Hotelfooddefault;
use Illuminate\Http\Request;

class HotelfooddefaultController extends Controller {
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
		$hotelfooddefaults = Hotelfooddefault::orderBy('id', 'desc')->paginate(10);

		return view('hotelfooddefaults.index', compact('hotelfooddefaults'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('hotelfooddefaults.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$hotelfooddefault = new Hotelfooddefault();

		$hotelfooddefault->hotel_id = $request->input("hotel_id");
        $hotelfooddefault->food_id = $request->input("food_id");
        $hotelfooddefault->price = $request->input("price");
        $hotelfooddefault->recurringtype = $request->input("recurringtype");
        $hotelfooddefault->recurringcount = $request->input("recurringcount");
        $hotelfooddefault->maximumquality = $request->input("maximum quality");
        $hotelfooddefault->photos = $request->input("photos");

		$hotelfooddefault->save();

		return redirect()->route('hotelfooddefaults.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hotelfooddefault = Hotelfooddefault::findOrFail($id);

		return view('hotelfooddefaults.show', compact('hotelfooddefault'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hotelfooddefault = Hotelfooddefault::findOrFail($id);

		return view('hotelfooddefaults.edit', compact('hotelfooddefault'));
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
		$hotelfooddefault = Hotelfooddefault::findOrFail($id);

		$hotelfooddefault->hotel_id = $request->input("hotel_id");
        $hotelfooddefault->food_id = $request->input("food_id");
        $hotelfooddefault->price = $request->input("price");
        $hotelfooddefault->recurringtype = $request->input("recurringtype");
        $hotelfooddefault->recurringcount = $request->input("recurringcount");
        $hotelfooddefault->maximumquality = $request->input("maximumquality");
        $hotelfooddefault->photos = $request->input("photos");

		$hotelfooddefault->save();

		return redirect()->route('hotelfooddefaults.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$hotelfooddefault = Hotelfooddefault::findOrFail($id);
		$hotelfooddefault->delete();

		return redirect()->route('hotelfooddefaults.index')->with('message', 'Item deleted successfully.');
	}

}
