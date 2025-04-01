<?php


namespace App\Tools;

use App\Models\Paciente;
use App\Models\User;
use Illuminate\Support\Str;

trait ToolsTrait
{

    public static function deleted()
    {
        return response()->json(['status' => 'successful', 'message' => 'Recurso borrado'], ResponseCodes::ACCEPTED);
    }


    public function getHistorialCodigo(Paciente $item, User $user)
    {
        return strtoupper('HM-' . $user->id . $item->id . Str::random(6));
    }

    public function getSolicitudCreditoCodigo(CreditoConvocatorias $convocatoria, User $user)
    {
        return strtoupper('SC-' . $user->id . $convocatoria->id . Str::random(6));
    }
}
