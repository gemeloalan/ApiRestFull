<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use GuzzleHttp\Middleware;

use ApiResponser;
use Illuminate\Http\Request;

class SaleController extends ApiControler
{
    
    public function __construct() {
        $this->middleware('client.credentials')->except(['index']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::get();
        return $this->successResponse($sales,200);
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
    public function store(StoreSaleRequest $request)
    {
       $request->validated();

        $create = Sale::create($request->all());

        return $this->successResponse($create,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
