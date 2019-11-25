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
    public function searchPostByTitle($keywordOfSearchPostByTitle);
    public function searchPostByFengshui($conditionsOfSearchPostByFengshui);
    public function getAllPost();
    public function findByIdAllpost($id);
    public function searchPostBasic($data);
    public function getAllPostOfUserByUserId($id);
    public function getNumberOfPostOfUserByUserId($id);

    // function get bài đăng đang chờ duyệt
    public function getPostApproval();
    // function get bài đăng đang đã
    public function getPostAppred();
}
