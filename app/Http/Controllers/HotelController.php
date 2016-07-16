<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Controllers\Controller;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller {
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
		$hotels = Hotel::orderBy('id', 'desc')->paginate(10);

		return view('hotels.index', compact('hotels'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('hotels.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$hotel = new Hotel();

		$hotel->name = $request->input("name");
        $hotel->address = $request->input("address");
        $hotel->pincode = $request->input("pincode");
        $hotel->cityid = $request->input("cityid");
        $hotel->latitude = $request->input("latitude");
        $hotel->longitude = $request->input("longitude");
        $hotel->phonenumber = $request->input("phonenumber");
        $hotel->openingtime = $request->input("openingtime");
        $hotel->closingtime = $request->input("closingtime");
        $hotel->workingdays = $request->input("workingdays");
        $hotel->image = $request->input("image");

		$hotel->save();

		return redirect()->route('hotels.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hotel = Hotel::findOrFail($id);

		return view('hotels.show', compact('hotel'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hotel = Hotel::findOrFail($id);

		return view('hotels.edit', compact('hotel'));
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
		$hotel = Hotel::findOrFail($id);

		$hotel->name = $request->input("name");
        $hotel->address = $request->input("address");
        $hotel->pincode = $request->input("pincode");
        $hotel->cityid = $request->input("cityid");
        $hotel->latitude = $request->input("latitude");
        $hotel->longitude = $request->input("longitude");
        $hotel->phonenumber = $request->input("phonenumber");
        $hotel->openingtime = $request->input("openingtime");
        $hotel->closingtime = $request->input("closingtime");
        $hotel->workingdays = $request->input("workingdays");
        $hotel->image = $request->input("image");

		$hotel->save();

		return redirect()->route('hotels.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$hotel = Hotel::findOrFail($id);
		$hotel->delete();

		return redirect()->route('hotels.index')->with('message', 'Item deleted successfully.');
	}

}
