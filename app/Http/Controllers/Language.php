<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\languages;

class Language extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try { 
            $languages = languages::with('language_encoding')->get();        
        }catch (\Exception $e) {
            dd($e->getMessage());
        }
        return response()->json($languages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function language_show( $id)
    {
        try { 
            $language_id = $id;
            $languages = languages::where("id", $language_id)->with('language_encoding')->first();        
        }catch (\Exception $e) {
            dd($e->getMessage());
        }


        return response()->json($languages);
    }


    public function user_language_show( $user_id, $language_id)
    {
        try { 
            $user_languages = languages::where(["id" => $language_id , "user_id" => $user_id])->with('language_encoding')->get();        
        }catch (\Exception $e) {
            dd($e->getMessage());
        }

        return response()->json($user_languages);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
