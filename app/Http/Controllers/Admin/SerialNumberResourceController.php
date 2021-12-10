<?php

namespace App\Http\Controllers\Admin;

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
    public function index()
    {
        return view('admin.serial-numbers.index', [
            'serialNumbers' => SerialNumber::with(['product'])->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.serial-numbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'serial_number' => 'required|unique:serial_numbers',
            'product_id' => 'required|exists:products,id',
            'production_date' => 'required|date',
            'expiration_date' => 'required|date|after_or_equal:production_date',
            'product_count' => 'required|numeric|min:1',
        ]);

        $now = Carbon::now('utc')->toDateTimeString();
        $serialNumbers = [];
        for ($i = 0; $i < $validated['product_count']; $i++) {
            $serialNumbers[] = [
                // implement the custom serial number generation logic here
                // 'serial_number' => "",
                'serial_number' => $validated['product_id'] . '-' . $now . '-' . $i,

                'product_id' => $validated['product_id'],
                'production_date' => $validated['production_date'],
                'expiration_date' => $validated['expiration_date'],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        SerialNumber::insert($serialNumbers);

        return redirect()->route('admin.serial-numbers.index')->with('success', 'Serial Number created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SerialNumber  $serialNumber
     * @return \Illuminate\Http\Response
     */
    public function show(SerialNumber $serialNumber)
    {
        return view('admin.serial-numbers.show', [
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
        return view('admin.serial-numbers.edit', [
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
            'product_id' => 'required|exists:products,id',
            'production_date' => 'required|date',
            'expiration_date' => 'required|date|after_or_equal:production_date',
        ]);

        $serialNumber->update($validated);

        return redirect()->route('admin.serial-numbers.index')->with('success', 'Serial Number updated successfully');
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

        return redirect()->route('admin.serial-numbers.index')->with('success', 'Serial Number deleted successfully');
    }
}
