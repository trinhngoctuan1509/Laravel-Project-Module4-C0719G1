<?php


namespace App\Repositories;


interface TrafficRepository extends Repository
{
 public function totalView();
 public function countViewDate($data);
}
