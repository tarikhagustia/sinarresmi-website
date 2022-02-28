<?php

namespace App\Http\Controllers;

use App\Repository\FacilityRepository;

class FacilityController extends Controller
{
    protected $facilityRepository;

    public function __construct(FacilityRepository $facilityRepository)
    {
        $this->facilityRepository = $facilityRepository;
    }

    public function index()
    {
        $facilities = $this->facilityRepository->getAll();
        
        return view('facility', compact('facilities'));
    }

    public function show($name)
    {
        $facility = $this->facilityRepository->getBySlug($name);

        return view('facility_3d', compact('facility'));
    }
}
