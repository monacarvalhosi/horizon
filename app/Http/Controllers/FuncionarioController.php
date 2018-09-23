<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Funcionario;
use App\Setor;
use App\Cargo;

class FuncionarioController extends Controller
{
    public function create()
    {
          $cargos = DB::table("wtg_cargo")->get();
        view()->share('cargos',$cargos);
        $setores = DB::table("wtg_setor")->get();
        view()->share('setores',$setores);
    	//$setores = Setor::pluck('set_nome', 'setor_id');
    	//dd('caralhooooooo');
        return view('funcionario',$cargos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
*/
    public function store(Request $request)
    {
    		
    	  $date=date_create($request->input('data_nas'));
        	$format = date_format($date,'Y-m-d H:i');
        	
        	//dd($request->all());

        	$date2=date_create($request->input('data_cont'));
        	$format2 = date_format($date2,'Y-m-d H:i');
        	
            
            $setor = DB::table('wtg_funcionario')->insert(
            ['fun_nome' => $request->input('fun_nome'),
            'fun_salario' => $request->input('salario'),
            'fun_data_nascimento' => $format,
            'fun_data_contratacao' => $format2,
            'cargo_id' => $request->input('cargo_id'),
            'setor_id' => $request->input('setor_id')]
            );
       
            return redirect('home');
    }

   
}
