<?php


namespace App\Repositories;


interface BillRepositoryInterface
{
    public function store($bill);
    public function findById($id);
}
