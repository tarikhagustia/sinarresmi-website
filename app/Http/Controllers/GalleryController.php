<?php

namespace App\Http\Controllers;

use App\Repository\GalleryRepository;

class GalleryController extends Controller
{
    protected $galleryRepository;

    public function __construct(GalleryRepository $galleryRepository)
    {
        $this->galleryRepository = $galleryRepository;
    }

    public function index()
    {
        $galleries = $this->galleryRepository->getAll();
        
        return view('gallery', compact('galleries'));
    }
}
