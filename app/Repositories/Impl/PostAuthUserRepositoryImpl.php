<?php


namespace App\Repositories\Impl;
use App\Repositories\PostAuthUserRepository;
use Tymon\JWTAuth\Facades\JWTAuth;

class PostAuthUserRepositoryImpl implements PostAuthUserRepository
{

    protected $user;

    public  function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }



    // Get all Post By User --- Auth   and Sort Desc
    public function getPostByUser()
    {
        $post = $this->user->post()->with('user','categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions','post_availability_status')->orderBy('created_at','desc')->paginate(3);
        return $post;
    }

    // Get Post By ID  --- Auth
    public function findPostById($id)
    {
        $post = $this->user->post()->with('user','categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions','post_availability_status')->find($id);
        return $post;
    }

   // Add New Post  --- Auth
    public function create($data)
    {

        try {
            $object = $this->user->post()->create($data);
        } catch (\Exception $e) {
            return null;
        }
        return $object;

    }

    // Update Post  --- Auth
    public function update($data, $object)
    {
        $object->update($data);
        return $object;
    }

    // Delete Post  --- Auth
    public function destroy($object)
    {
        $object->delete();
    }

    //Search Title ---Auth
    public function searchTitlePostAuth($data)
    {
        $input = $data['searchWord'];
        $result = $this->user->post()->with('user','categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions','post_availability_status')
            ->where('title','like','%'.$input.'%')->paginate(3);
        return $result;
    }
}
