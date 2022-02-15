<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();

        return Inertia::render('Index',  ['data' => $game]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {

        if($request->hasFile('img_game')){
            $filename = $request['img_game']->getClientOriginalName();
            $request['img_game']->storeAs('games',$filename,'public');
        }

        if (!isset($filename)) {
            $filename= NULL;
        }

        DB::transaction(function () use ($request, $filename) {
            $save = Game::updateOrCreate([
                'name_game'=>$request->name_game,

            ],
            [
                'url_game'=>$request->url_game,
                'description'=>$request->description,
                'url_image_game'=>$filename,
                'status'=>'active'
            ]
        );
        });



       return Inertia::location('/games');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::whereId($id)->first();
         return Inertia::render('Update',  ['data' => $game]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Game::whereId($id)->delete();
        return Inertia::location('/games');
    }
}
