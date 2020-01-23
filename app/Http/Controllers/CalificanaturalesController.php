<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Naturales;
use App\Naturales_ranking;
use Illuminate\Http\Request;

class CalificanaturalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
     //   $naturales = Naturales::get();

     //   return view('naturales', ['naturales' => $naturales]);

      //  return view('admin.naturales.index');
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
       // dd($request);
       $user = Auth::user();

        $naturales_ranking = new Naturales_ranking;

        $naturales_ranking->no_lic_corredor = $request->input('el_no_lic_pn');  //   $request->name;
        $naturales_ranking->user_qualifier_id = $user->id;
        $naturales_ranking->calificacion = $request->input('rating') / 2.0;
        $naturales_ranking->user_qualifier_comment = $request->input('el_comment');
        $naturales_ranking->recomendacion = $request->input('el_porcentaje');
        
        
        $result = Naturales::select('nombre_idoneidad','id_natural')->where('no_lic_pn',$request->input('el_no_lic_pn'))->first();
        $nombre = $result->nombre_idoneidad;
        $idn = $result->id_natural;
    

        if( $naturales_ranking->save())
        {
            $result = 1;
            //$request->session()->flash('success' , 'Calificacion enviada correctamente');
        }
        else
        {
            $result = 0;
            //$request->session()->flash('error' , 'Ocurrio un error enviado la calificacion' );
        }


       
         $data = [
           'no_lic_to_calificate'  => $naturales_ranking->no_lic_corredor ,
           'nombre_to_calificate'   =>  $nombre,
           'idnatural'   =>  $idn,
           'resultado'   =>  $result
           
       ];
       
      // return redirect()->route('vercalificacorredor')->with('data', $data); 
         return view('vercalificacorredor')->with('data', $data); 


      
     
     
     //  return redirect()->route('calificacorredor'); 


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function show(Naturales_ranking $naturales_ranking)
    {
        //
       
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function formSubmit(Request $request)
    {
       // dd($request);
      // print_r($request->input('el_no_lic_pn'));
      //  $naturales_ranking = Naturales_ranking::get();
    
      $result = Naturales::select('nombre_idoneidad')->where('no_lic_pn',$request->input('el_no_lic_pn'))->first();
    $nombre = $result->nombre_idoneidad;

      $data = [
        'no_lic_to_calificate'  => $request->input('el_no_lic_pn'),
        'nombre_to_calificate'   =>  $nombre
    ];
    
    
      return view('calificacorredor')->with('data', $data); 

       // print_r($request->input('pista'));
      //  $naturales = Naturales::get();
        
       // $naturales = Naturales::where('nombre_idoneidad','LIKE', '%'.$request->input('pista').'%')->get(); //donde la colummna name sea igual a user
    //     $naturales = Naturales::where('nombre_idoneidad','LIKE', '%'.$request->input('pista').'%')
    //     ->orWhere('no_lic_pn', 'like', '%' . $request->input('pista') . '%')
    //     ->orWhere('status', 'like', '%' . $request->input('pista') . '%')
    //     ->orderBy('nombre_idoneidad', 'desc')
    //     ->get();
    //   //  dd($naturales);
    //   return view('naturales')->with('naturales',$naturales); 
      //  return($naturales);
        //  where('name','LIKE','%'.$variable.'%')
        //print_r($naturales->pluck('nombre_idoneidad'));
       // dd($naturales->pluck('nombre_idoneidad'));
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function verNatural(Request $request)
    {
       // dd($request);
      //  $naturales = Naturales::get();
        $naturales = Naturales::where('id_natural', $request->input('elid'))->first();
   //     dd($naturales);
      //  $adminRole = Role::where('name','admin')->first();

        return view('vernatural')->with('naturales',$naturales); 
     
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function edit(Naturales_ranking $naturales_ranking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Naturales_ranking $naturales_ranking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Naturales  $naturales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Naturales_ranking $naturales_ranking)
    {
        //
    }
}
