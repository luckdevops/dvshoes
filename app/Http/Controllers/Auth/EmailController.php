<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Mail;
use DB;
use Carbon\Carbon;
use DateTime;
use Auth;

class EmailController extends Controller
{
    public function validaEmail($token_validacao)
    {
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Bahia');

        $checked = DB::table('users')
                    ->where('token_validation', $token_validacao)
                    ->first();

        if(!is_null($checked)){
            $fim = Carbon::Now();
            $ini = date('Y-m-d H:i:s', strtotime($checked->created_at));
            //dd($fim." - ".$ini);
            $verifica_horario = $fim->diff($ini)->format('%H:%I:%S');
            if($verifica_horario > "00:60:00"){
                return redirect('validaemail')->with('message-expire-validation-email', 'Desculpe, seu link de validação expirou. Você terá que pedir um novo link.');
            }

            $result = DB::table('users')
                    ->where('id', $checked->id)
                    ->update(['status' => 1, 'updated_at' => date('Y-m-d H:i:s')]);

            if($result){
                return redirect('validaemail')->with('message-success-validation-email', 'Validação realizada com sucesso. Por favor, realize o login para continuar.');
            }
        }

        return response()->json([
            'status' => false,
            'msg' => 'Inválida validação.'
        ], 401);
    }
}
