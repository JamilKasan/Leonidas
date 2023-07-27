<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::query()->get();
        $addresses = [];
        foreach ($vendors as $vendor)
        {
            $coords = $vendor->coordinates;
//            return explode(',', $coords);
            $info = ['long' => explode(',', $coords)['1'], 'lat' => explode(',', $coords)['0'], 'info' => '<b>' .  $vendor->name.   '</b><br>' . $vendor->address];
            array_push($addresses, $info);
        }
        return view('vendors.index', compact('vendors', 'addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
