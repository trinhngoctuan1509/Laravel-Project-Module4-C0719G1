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


    public function searchPostGeneral($conditionsOfSearchPostGeneral);

    public function getAllPosts();
    public function findByIdAllpost($id);

    public function searchPostBasic($data);

    public function searchPostByTitle($keywordOfSearchPostByTitle);

    public function searchPostByFengshui($conditionsOfSearchPostByFengshui);

    public function getAllPostOfUserByUserId($id);
    public function getNumberOfPostOfUserByUserId($id);

    // function get bài đăng đang chờ duyệt
    public function getPostApproval();
    // function get bài đăng đang đã duyệt
    public function getPostAppred();
    //search post đang chờ duyệt
    public function searchPostApproval($data);
    //search post đang đã duyệt
    public function searchPostAppred($data);

    public function getPostDetailApproval($id);

    public function changeStatusPostAppvoral($id);

    public function changeStatusPostAppved($id);
}
