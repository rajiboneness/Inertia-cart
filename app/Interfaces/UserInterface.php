<?php

namespace App\Interfaces;

interface UserInterface 
{
    public function listAll();
    public function listById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function toggle($id);
    public function deleteUser($id);
    public function addressById($id);
    public function addressCreate(array $data);
    public function updateProfile(array $data);
    public function updatePassword(array $data);
    public function orderDetails();
    public function recommendedProducts();
    public function wishlist();
    public function couponList();
}