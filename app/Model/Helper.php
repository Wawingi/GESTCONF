<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    //Mover proposta ou sugestão
    public static function getMunicipio($id)
    {
        switch($id){
            case 1:return "Belas";break;
            case 2:return "Cacuaco";break;
            case 3:return "Cazenga";break;
            case 4:return "Icolo e Bengo";break;
            case 5:return "Kilamba Kiaxi";break;
            case 6:return "Luanda";break;
            case 7:return "Quiçama";break;
            case 8:return "Talatona";break;
            case 9:return "Viana";break;
            case 10:return "Geral";break;
        }
    }

    public static function generateQRCode($pasta,$nome,$id_pessoa){
        $file=public_path('images/'.$pasta.'/'.$nome.'_'.$id_pessoa.'.png');
        return \QRCode::text($id_pessoa)->setOutfile($file)->setSize(5)->png();
    }
           
}
