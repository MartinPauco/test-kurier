<?php
namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{

    public function logout()
    {
        try
        {
            Session::flush();
            $success = true;
            $message = 'Boli ste úspešne odhlásený';
        } catch (\Illuminate\Database\QueryException $ex)
        {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

}
