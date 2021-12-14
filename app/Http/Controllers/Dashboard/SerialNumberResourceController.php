<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SerialNumber;
use Carbon\Carbon;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SerialNumberResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->reflash();
        return redirect()->route('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SerialNumber  $serialNumber
     * @return \Illuminate\Http\Response
     */
    public function show(SerialNumber $serialNumber)
    {
        return view('dashboard.serial-numbers.show', [
            'serialNumber' => $serialNumber,
            'qrCode' => QrCode::size(300)->generate($serialNumber->serial_number),

            // need imagick extension installed
            // 'qrCode' => QrCode::format('png')->size(300)->generate($serialNumber->serial_number),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SerialNumber  $serialNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(SerialNumber $serialNumber)
    {
        return view('dashboard.serial-numbers.edit', [
            'serialNumber' => $serialNumber,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SerialNumber  $serialNumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SerialNumber $serialNumber)
    {
        $validated = $request->validate([
            'serial_number' => 'required|unique:serial_numbers,serial_number,'.$serialNumber->id,
            'product_serial_id' => 'required|exists:product_serials,id',
        ]);

        $serialNumber->update($validated);

        return redirect()->route('dashboard.product-serials.show', $validated['product_serial_id'])->with('success', 'Serial Number updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SerialNumber  $serialNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(SerialNumber $serialNumber)
    {
        $serialNumber->delete();

        return redirect()->route('dashboard.product-serials.show', $serialNumber->product_serial_id)->with('success', 'Serial Number deleted successfully');
    }
}
