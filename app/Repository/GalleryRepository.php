<?php

namespace App\Repository;

class GalleryRepository
{
    public function getAll()
    {
        return $this->readFile();
    }

    private function readFile()
    {
        return json_decode(file_get_contents('galleries.json'));
    }
}
