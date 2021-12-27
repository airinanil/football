<?php
namespace App\Http\Controllers;
use App\Models\clubmodel;
use App\Models\playermodel;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class playercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
    
        $getclubname=request('clubname');
     
     
     $club=new clubmodel();
    
     $club->clubname=$getclubname;
    
    $save= $club->save();
     if($save)
     {
         return redirect('/club')->with('success',"Inserted successfully");
     }
     else
     {
         return back()->with('fail',"Not Inserted");
     }





  
    }
    public function storeplayer(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'age' => 'required',
            
            'club' => 'required',
            'goal' => 'required'
            
        ]);


    
        $getname=request('name');
        $getage=request('age');
        $getclub=request('club');
        $getgoal=request('goal');
     
     
     $player=new playermodel();
    
     $player->name=$getname;
     $player->age=$getage;
     $player->club=$getclub;
     $player->goal=$getgoal;

     $player->save();
    return back();

  
    }




    public function storeg(Request $request)
    {
        $getcategory= request('clubname');
        $category=new clubmodel();
        $category->clubname=$getcategory;
        $category->save();
        return view('playerdetails');
    }
    public function playerclub()
    {
$bcategory=clubmodel::all();
return view('playerdetails',compact('bcategory'));

    }



    public function index()
    {
        $players=playermodel::paginate(10);
        return view('playerview',compact('players'));
    }
    public function clubview()
    {
        $clubs=clubmodel::all();
        return view('clubview',compact('clubs'));
    }

    public function search(Request $request)
    {
        $search=$request['search']??"";
        if($search!="")
        {
            $players=playermodel::where('name','LIKE',"%$search%")->orWhere('club','LIKE',"%$search%" )->orderBy('goal','desc')->paginate(10);

        }
        else{
            $players=playermodel::paginate(10);
        }
        $players=compact('players','search');
        return view('playerview')->with($players);
    }
   
    public function sort()
    {
        $players=playermodel::all()->sortByDesc('goal')->skip(0)->take(10)->values();
    
return view('searchview',compact('players'));
 
    }
       



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            return view('playerdetails');
        


    }
    public function createclub()
    {
        
            return view('club');
        


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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