<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 10/06/2016
 * Time: 15:37
 */
namespace App\Core\Contracts;

interface BaseRepositoryInterface {

    public function all();

    public function create(array $attributes);


    public function updated($id, array $attributes);


    public function find($id);


    public function deleted($id);
}