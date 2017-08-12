<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Request $request)
    {



    }


    public function fetchAllCharacters(Request $request)
    {
        $characters = Character::All();
        return response()->json($characters,200);
    }


    public function fetchCharacter(Request $request,$id)
    {
        $character = Character::where('id',$id)->first();
        return response()->json($character,200);
    }

    public function addCharacter(Request $request)
    {
        $newCharacter = $request->json()->all();
        $character = new Character($newCharacter);
        $character->save();
        return response()->json(['message' => 'Character added succesfull!'],200);
    }


    public function deleteCharacter(Request $request,$id)
    {
        $character = Character::where('id',$id)->first();
        if($character)
        {
            $character->delete();

            return response()->json(['message' => 'Character deleted succesfull!'],200);
        }
        else
        {
            return response()->json(['message' => 'Something went wrong!'],400);
        }



    }

    public function updateCharacter(Request $request,$id)
    {
        $oldCharacter = Character::where('id',$id)->first();
        if($oldCharacter)
        {
            $newCharacter = $newCharacter = $request->json()->all();
           if( $oldCharacter->update($newCharacter) )
           {
               return response()->json(['message' => 'Character updated succesfull!'],200);
           }


        }
    }
}
