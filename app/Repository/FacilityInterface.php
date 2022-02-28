<?php
namespace App\Repository;

interface FacilityInterface
{
    public function getAll();
    public function getBySlug(string $slug);
}