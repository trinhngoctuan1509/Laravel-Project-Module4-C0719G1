<?php


namespace App\Services;


interface TrafficService
{
    public function addView($data);
    public function totalView();
    public function countViewDate($data);


}
