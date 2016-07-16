<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller {
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
		$orders = Order::orderBy('id', 'desc')->paginate(10);

		return view('orders.index', compact('orders'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('orders.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$order = new Order();

		$order->profileid = $request->input("“profileid");
        $order->hotels = $request->input("hotels");
        $order->dineparcel = $request->input("dineparcel");
        $order->dinecount = $request->input("dinecount");

		$order->save();

		return redirect()->route('orders.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$order = Order::findOrFail($id);

		return view('orders.show', compact('order'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$order = Order::findOrFail($id);

		return view('orders.edit', compact('order'));
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
		$order = Order::findOrFail($id);

		$order->profileid = $request->input("“profileid");
        $order->hotels = $request->input("hotels");
        $order->dineparcel = $request->input("dineparcel");
        $order->dinecount = $request->input("dinecount");

		$order->save();

		return redirect()->route('orders.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$order = Order::findOrFail($id);
		$order->delete();

		return redirect()->route('orders.index')->with('message', 'Item deleted successfully.');
	}

}
