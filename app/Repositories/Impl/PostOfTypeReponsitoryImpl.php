<?php


namespace App\Repositories\Impl;
use App\PostOfType;
use App\Repositories\PostOfTypeReponsitory;
use App\Repositories\Eloquent\EloquentRepository;

class PostOfTypeReponsitoryImpl extends EloquentRepository implements PostOfTypeReponsitory
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {

        $model = PostOfType::class;
        return $model;
    }

    public function getAllPostOfType()
    {
        $postOfTypes = $this->model->all();
        return $postOfTypes;
    }

    public function deletePostOfType($id)
    {
        $postOfType = $this->model->where('id','=',$id)->delete();
        return $postOfType;
    }

    public function editPostOfType($data)
    {
        $postOfTypeId = $data['postOfTypeId'];
        $postOfTypeName = $data['postOfTypeName'];
        $postOfTypeCode = $data['postOfTypeCode'];
        $postOfType = PostOfType::find($postOfTypeId);
        $postOfType->postOfTypeName = $postOfTypeName;
        $postOfType->postOfTypeCode = $postOfTypeCode;
        $postOfType->save();
        return $postOfType;
    }

    public function createNewPostOfType($data){
        $postOfTypeName = $data['postOfTypeName'];
        $postOfTypeCode = $data['postOfTypeCode'];
        $postOfType = new PostOfType();
        $postOfType->postOfTypeName = $postOfTypeName;
        $postOfType->postOfTypeCode = $postOfTypeCode;
        $postOfType->save();
        return $postOfType;
    }
}
