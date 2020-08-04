<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OcorrenciaExport;
use App\Exports\JornalistaExport;
use App\Models\Provincia;

class ExportController extends Controller
{
    public function ocorrencias(){

    	 return Excel::download(new OcorrenciaExport, 'ocorrencias.xlsx');
    }

      public function jornalistas(){

    	 return Excel::download(new JornalistaExport, 'jornalistas.xlsx');
    }

    public function estatisticas(){
        $provincias = Provincia::all();
                 $mc              = Provincia::find(1);
            $assaltos_mc     = $mc->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_mc    = $mc->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_mc     = $mc->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_mc    = $mc->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_mc   = $mc->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_mc      = $mc->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_mc    = $mc->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();




        
              $m         =Provincia::find(2);
            $assaltos_m     = $m->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_m    = $m->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_m     = $m->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_m    = $m->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_m   = $m->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_m      = $m->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_m    = $m->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $g              =Provincia::find(3);
            $assaltos_g     = $g->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_g    = $g->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_g     = $g->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_g    = $g->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_g   = $g->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_g      = $g->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_g    = $g->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();
            $i              =Provincia::find(4);
            $assaltos_i     = $i->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_i    = $i->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_i     = $i->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_i    = $i->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_i   = $i->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_i      = $i->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_i    = $i->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $ma             =Provincia::find(5);
            $assaltos_ma     = $ma->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_ma    = $ma->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_ma     = $ma->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_ma    = $ma->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_ma   = $ma->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_ma      = $ma->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_ma    = $ma->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $b              =Provincia::find(6);
            $assaltos_b     = $b->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_b    = $b->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_b     = $b->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_b   = $b->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_b  = $b->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_b     = $b->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_b   = $b->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $t              =Provincia::find(7);
            $assaltos_t     = $t->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_t    = $t->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_t     = $t->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_t   = $t->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_t  = $t->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_t     = $t->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_t   = $t->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $z             = Provincia::find(8);
            $assaltos_z    = $z->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_z   = $z->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_z    = $z->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_z   = $z->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_z  = $z->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_z     = $z->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_z   = $z->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();
            $na              =Provincia::find(9);
            $assaltos_na    = $na->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_na    = $na->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_na    = $na->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_na    = $na->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_na   = $na->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_na      = $na->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_na    = $na->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();


            $n              =Provincia::find(10);
            $assaltos_n     = $n->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_n    = $n->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_n    = $n->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_n    = $n->ocorrencias->where('nivel','Deteções')->count();
            $legislacoes_n   = $n->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_n      = $n->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_n    = $n->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();

            $c              =Provincia::find(11);
            $assaltos_c     = $c->ocorrencias->where('nivel','Assalto')->count();
            $agressoes_c    = $c->ocorrencias->where('nivel','Agressões físicas')->count();
            $censuras_c    =  $c->ocorrencias->where('nivel','Censuras')->count();
            $detencoes_c    = $c->ocorrencias->where('nivel','Detenções')->count();
            $legislacoes_c   = $c->ocorrencias->where('nivel','Legislações')->count();
            $ameacas_c      = $c->ocorrencias->where('nivel','Ameaças')->count();
            $violacoes_c    = $c->ocorrencias->where('nivel','Violações públicas da liberdade de expressão')->count();
    
    	return \PDF::loadView('admin.ocorrencias.estatisticas',compact(
            'provincias',
          'assaltos_mc','agressoes_mc','censuras_mc','detencoes_mc','legislacoes_mc','ameacas_mc','violacoes_mc',
          'assaltos_m','agressoes_m','censuras_m','detencoes_m','legislacoes_m','ameacas_m','violacoes_m',
          'assaltos_g','agressoes_g','censuras_g','detencoes_g','legislacoes_g','ameacas_g','violacoes_g',
          'assaltos_i','agressoes_i','censuras_i','detencoes_i','legislacoes_i','ameacas_i','violacoes_i',
          'assaltos_ma','agressoes_ma','censuras_ma','detencoes_ma','legislacoes_ma','ameacas_ma','violacoes_ma',
          'assaltos_b','agressoes_b','censuras_b','detencoes_b','legislacoes_b','ameacas_b','violacoes_b',
          'assaltos_t','agressoes_t','censuras_t','detencoes_t','legislacoes_t','ameacas_t','violacoes_t',
          'assaltos_z','agressoes_z','censuras_z','detencoes_z','legislacoes_z','ameacas_z','violacoes_z',
          'assaltos_na','agressoes_na','censuras_na','detencoes_na','legislacoes_na','ameacas_na','violacoes_na',
          'assaltos_n','agressoes_n','censuras_n','detencoes_n','legislacoes_n','ameacas_n','violacoes_n',
          'assaltos_c','agressoes_c','censuras_c','detencoes_c','legislacoes_c','ameacas_c','violacoes_c'
        ))
                  ->stream(); 
    }
}
