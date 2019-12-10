<?php


namespace App\Services\Impl;
use App\Repositories\PostViewRepository;
use App\Services\PostViewService;

class PostViewServiceImpl implements  PostViewService
{
 protected $postViewRepository ;
 public function __construct(PostViewRepository $PostViewRepository)
 {
     $this->postViewRepository = $PostViewRepository;
 }

    public function upViewPost($data)
    {
      $view =  $this->postViewRepository->create($data);
        $statusCode = 201;
        if (!$view)
            $statusCode = 500;
        $data = [
            'statusCode' => $statusCode,
            'view' => $view
        ];
        return $data;
    }

    public function getTopView()
    {
        $result = $this->postViewRepository->getTopView();
        return $result;
    }
}
