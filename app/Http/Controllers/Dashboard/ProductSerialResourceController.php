<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSerial\StoreProductSerialRequest;
use App\Http\Requests\ProductSerial\UpdateProductSerialRequest;
use App\Models\ProductSerial;
use App\Models\SerialNumber;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductSerialResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product-serials.index', [
            'productSerials' => ProductSerial::with('product')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.product-serials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductSerialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductSerialRequest $request)
    {
        $productSerial = ProductSerial::create($request->validated());

        $this->storeSn($productSerial);

        return redirect()->route('dashboard.product-serials.index')->with('success', 'Product Serial created successfully.');
    }

    private function storeSn($productSerial)
    {
        $now = Carbon::now('utc')->toDateTimeString();
        $serialNumbers = [];
        for ($i = 0; $i < $productSerial['qty']; $i++) {
            $serialNumbers[] = [
                // implement the custom serial number generation logic here
                // 'serial_number' => "",
                'serial_number' => $productSerial['id'] . '-' . $now . '-' . $i,
                'product_serial_id' => $productSerial['id'],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        SerialNumber::insert($serialNumbers);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSerial  $productSerial
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSerial $productSerial)
    {
        return view('dashboard.product-serials.show', [
            'productSerial' => $productSerial,
            'serialNumbers' => $productSerial->serialNumbers()->paginate(10),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSerial  $productSerial
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSerial $productSerial)
    {
        return view('dashboard.product-serials.edit', [
            'productSerial' => $productSerial,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductSerialRequest  $request
     * @param  \App\Models\ProductSerial  $productSerial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductSerialRequest $request, ProductSerial $productSerial)
    {
        $productSerial->update($request->validated());

        return redirect()->route('dashboard.product-serials.index')->with('success', 'Product Serial updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSerial  $productSerial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSerial $productSerial)
    {
        $productSerial->delete();

        return redirect()->route('dashboard.product-serials.index')->with('success', 'Product Serial deleted successfully.');
    }
}
