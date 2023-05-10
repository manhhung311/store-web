<?php
namespace App\Repositories;
 
interface IRepository {
	
	public function getAll();
	
	//public function findById($id);
	
    public function find($name);

    public function add($product);

    public function delete($product);
}