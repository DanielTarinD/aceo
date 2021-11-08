<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Models\User;

use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;

class UsuariosController extends Controller
{


    public function index()
    {
        $usuarios_totales = User::count();

        return view('usuarios.index')->with(compact('usuarios_totales'));
    }



    public function perfil() {

        $perfil = Auth::user();

        return view('auth.profile')->with(compact('perfil'));
    }


    public function updatePerfil(Request $request) {


        if($request->hasFile('file')){
            $avatar = $request->file('file');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300, 300)->save(storage_path('app/public/avatars/' . $filename ) );

            $affected = User::find(auth()->user()->id)->update(['avatar'=> $filename]);
        }

        if($request->password != ""){
            $affected = User::find(auth()->user()->id)->update(['password'=> Hash::make($request->password)]);
            return redirect()->route('logout');
        }

        return redirect()->route('perfil');

    }


    public function destroy($id)
    {

        if(auth()->user()->hasRole('Administrador')){
            $user = User::find($id);

            if($user->avatar != "default.jpg"){
                Storage::delete('public/avatars/'.$user->avatar);
            }

            $user->delete();
            return "Usuario Eliminado Correctamente.";
        }else{
            return "No tiene Permisos Suficientes.";
        }


    }


    public function getUsuarios(Request $request)
    {
            $data = User::with('area')->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('avatar', function (User $data) {
                    $url = asset('storage/avatars/'.$data->avatar);
                    return '<img src='.$url.' class="rounded h-30px" />';
                })
                ->addColumn('action', function(User $data){
                    //$actionBtn =  "<a href='/usuarios/".$data->id."/edit' class='btn btn-xs btn-warning w-60px me-1' id='info' data-id='".$data->id."'>Act.</a>";
                    $actionBtn = "<a href='#' class='btn btn-xs btn-danger w-60px me-1' id='borrar' data-id='".$data->id."'>Borrar</a>";

                    if($data->active){
                        $actionBtn .= "<a href='#' class='btn btn-xs btn-gray w-60px me-1' id='habilitar' data-id='".$data->id."'>Desact.</a>";
                    }else{
                        $actionBtn .= "<a href='#' class='btn btn-xs btn-primary w-60px me-1' id='habilitar' data-id='".$data->id."'>Act.</a>";
                    }

                    return $actionBtn;
                })
                ->rawColumns(['action','avatar'])
                ->make(true);

    }


    public function desactivar($id)
    {


        $user = User::find($id);

        if($user->active){
            $user->update(['active'=> '0']);

            return "Usuario Desactivado";
        }else{
            $user->update(['active'=> '1']);

            return "Usuario Activado";
        }
    }



}
