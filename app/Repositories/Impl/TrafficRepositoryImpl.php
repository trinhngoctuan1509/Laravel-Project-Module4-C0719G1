<?php


namespace App\Repositories\Impl;
use App\Traffic;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\TrafficRepository;

class TrafficRepositoryImpl extends EloquentRepository implements TrafficRepository
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Traffic::class;
        return $model;
    }


    public function totalView()
    {
        $totalView = $this->model->all()->count();
        return $totalView;
    }

    public function countViewDate($data)
    {
        $viewDate = $this->model->whereBetween('created_at',[$data['DateStart'],[$data['DateEnd']]])->get()->count();
        return $viewDate;
    }
}
