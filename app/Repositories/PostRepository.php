<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 1:42 PM
 */

namespace App\Repositories;


interface PostRepository extends Repository
{
    public function searchPostGeneral($conditionsOfSearchPostGeneral);
}
