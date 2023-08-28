<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use App\Models\Chalengge;
use App\Tables\Chalengges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ProtoneMedia\Splade\Facades\Toast;

class ChalenggeController extends Controller
{
    public function index()
    {
        return view('chalengge.index', [
            'categories' => \App\Models\Category::with('category_chalengges')->get()
        ]);
    }

    public function show(Chalengge $chalengge)
    {
        $chalengge->loadMissing(['chalengger:id,username']);
        return view('chalengge.show', compact('chalengge'));
    }

    public function checkAnswer(Request $request, Chalengge $chalengge) {
        if(User::where('id', auth()->user()->id)->whereRelation('chalengges', 'chalengge_id', $chalengge->id)->doesntExist() && 
              $chalengge->answer == $request->answer){

                $nilai = auth()->user()->nilai + $chalengge->point;
  
                User::where('username', auth()->user()->username)->update(['nilai' => $nilai]);
  
                DB::table('chalengge_user')->insert([
                    'user_id' => auth()->user()->id,
                    'chalengge_id' => $chalengge->id,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ]);
            return Toast::success('The answer is correct!')->centerTop()->autoDismiss(5);
        } elseif (User::where('id', auth()->user()->id)->whereRelation('chalengges', 'chalengge_id', $chalengge->id)->exists()) {  
            return Toast::warning('You was answered this chalengge!')->centerTop()->autoDismiss(5);
            } else {
                return Toast::danger('The answer is incorrect!')->centerTop()->autoDismiss(5);
                }
      }

    public static function finished($id) {
        $check = User::where('id', auth()->user()->id)
            ->whereRelation('chalengges', 'chalengge_id', $id)
            ->exists();
        return ($check) ? true : false;
    }
}