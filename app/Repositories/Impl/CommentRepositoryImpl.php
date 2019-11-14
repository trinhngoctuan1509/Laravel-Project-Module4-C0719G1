<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 1:46 PM
 */

namespace App\Repositories\Impl;

use App\Comment;
use App\Repositories\CommentRepository;
use App\Repositories\Eloquent\EloquentRepository;

class CommentRepositoryImpl extends EloquentRepository  implements CommentRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Comment::class;
        return $model;
    }
    
}
