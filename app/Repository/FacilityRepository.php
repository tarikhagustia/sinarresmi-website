<?php

namespace App\Repository;

use Exception;

class FacilityRepository implements FacilityInterface
{
    public function getAll()
    {
        return $this->readFile();
    }

    public function getBySlug(string $slug)
    {
        $data = collect($this->readFile());
        $facility = $data->firstWhere('slug', $slug);

        if (!$facility)
            throw new Exception('Facility not found');

        return $facility;
    }

    private function readFile()
    {
        return json_decode(file_get_contents('facilities.json'));
    }
}
