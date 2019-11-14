<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 2:24 PM
 */

namespace App\Services;

interface PostService
{
    public function getAll();

    public function findById($id);

    public function create($request);

    public function update($request, $id);

    public function destroy($id);

    public function searchPostAdvanced($searchConditionsPostAdvanced);
}
