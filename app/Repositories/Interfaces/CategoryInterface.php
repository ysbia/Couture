<?php
namespace App\Repositories\Interfaces;

interface CategoryInterface
{
    public function getProductsByCategory($category);
}