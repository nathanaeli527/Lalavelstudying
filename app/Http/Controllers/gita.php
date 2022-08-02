<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Guiter;

class gita extends Controller
{

    private static function getdata()
    {
        
        return[
                ["id"=>1,"name"=>"piano","brand"=>"fender"],
                ["id"=>2,"name"=>"petson","brand"=>"kisenya"],
                ["id"=>3,"name"=>"website","brand"=>"kasulu ttc"],
            ];
        
    }


    private static function getcomment()
    {

        return[
               ["id"=>1,"comment" =>"kaka kunavitu haviko sawa hapa"],
               ["id"=>2,"comment" =>"Hakuna kitu kibaya kama kukusa utii"],
               ["id"=>3,"comment" =>"karibu katika kujenga taifa"],
               ["id"=>4,"comment" =>"Best of all"],
            ];
    }
  
    public function index()
    {
     return view('guiters.index',[
            'guiters'=>Guiter::all(),
            'userinput' => "kisenya famiilt",
            'comment'   => self::getcomment(),
         ]);
    }

    
    public function create()
    {
       
        return view('guiters.create');
    }

    public function store(Request $request)
    {
        $request ->validate([
            'guiter_name' => 'required',
            'brand'       => 'required',
            'year'        => ['required','interger'],
        ]);
        
        $guiter = new Guiter();
        $guiter->name = $request->input('guiter_name');
        $guiter->brand = $request->input('brand');
        $guiter->Year_made = $request->input('year');
        $guiter ->save();

        return redirect()->route('guiters.index');
    }

    public function show($guiter)
    {
        $guiters = Guiter::all();
        $index   = array_search($guiter,array_column($guiters, 'id'));
        if($index === false)
        {
            abort(404);
        }
        
        return view('guiters.show', [
            'guiter'=>$guiters[$index]
        ]);

        
    }

    
    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        
    }

  
    public function destroy($id)
    {
        
    }
}
