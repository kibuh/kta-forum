<?php

namespace App\Http\Controllers;
use App\Model\Reply;

class LikeController extends Controller
{

          /**
     * Create a new AuthController instance.
     *  only those logged in can like
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }
    
    public function likeIt(Reply $reply){

        $reply->like()->create([
            'user_id'=>auth()->id
            //'user_id'=>'1'
        ]);
    }

    public function unlikeIt(Reply $reply){

         $reply->like()->where(['user_id',auth()->id])->first()->delete();
       // $reply->like()->where('user_id','1')->first()->delete();
    }

}
