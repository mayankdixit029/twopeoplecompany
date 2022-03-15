<?php

namespace App\Http\Controllers;
use App\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function create()
    {
        return view('community.create');
    }

    public function getAllQuestions(){
        $communities = Community::orderBy('created_at','desc')->paginate(3);

        return response()->json(['response_msg'=>'All Questions', 'communities' => $communities],200);
    }

    public function storeCommunity(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $community = new Community();
        $community->title = $request->title;
        $community->content = $request->content;
        $community->save();

        return response()->json(['response_msg'=> "Data has been added."],200);
    }

    public function updateCommunity($id, Request $request){

        $community = Community::find($id);
        $community->title = $request->title;
        $community->content = $request->content;
        $community->save();

        return response()->json(['response_msg'=> "Data has been updated."],200);
    }

    public function deleteCommunity($id){
        $community = Community::find($id);
        $community->delete();

        return response()->json(['response_msg'=> "Data has been deleted."],200);
    }
}
