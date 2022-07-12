<?php

namespace App\Interfaces;

interface OrderInterface 
{
    public function listAll();
    public function listById($id);
    public function listByStatus($status);
    // public function create(array $data);
    // public function update($id, array $data);
    public function toggle($id, $status);
}