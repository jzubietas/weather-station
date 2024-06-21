<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Suscriptores;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return abort(404);
    }
    
    public function suscriptores(Request $request)
    {
        if (view()->exists("suscriptores")) {
            return view("suscriptores");
        }
        return abort(404);
    }

    public function claveapp(Request $request)
    {
        if (view()->exists("claveapp")) {
            return view("claveapp");
        }
        return abort(404);
    }

    public function adduser(Request $request)
    {
        if (view()->exists("adduser")) {
            return view("adduser");
        }
        return abort(404);
    }

    public function ndealer(Request $request)
    {
        if (view()->exists("ndealer")) {
            return view("ndealer");
        }
        return abort(404);
    }

    public function ldealer(Request $request)
    {
        if (view()->exists("ldealer")) {
            return view("ldealer");
        }
        return abort(404);
    }

    public function versionApp(Request $request)
    {
        if (view()->exists("versionApp")) {
            return view("versionApp");
        }
        return abort(404);
    }

    public function luploaders(Request $request)
    {
        if (view()->exists("luploaders")) {
            return view("luploaders");
        }
        return abort(404);
    }

    public function nuploader(Request $request)
    {
        if (view()->exists("nuploader")) {
            return view("nuploader");
        }
        return abort(404);
    }
    
    
    

    public function root()
    {
        return view('index');
    }
    
    public function suscriptoreslist()
    {
        $cacheKey = 'suscriptores_list';
        $datos = Cache::remember($cacheKey, 60, function() {
            return Suscriptores::whereIn('status', [0, 1])->get();
        });

        return Datatables::of($datos)
            ->addIndexColumn()
            /*->addColumn('codigo', function ($datos) {
                return '
                    <img src="' . URL::asset('assets/images/products/img-1.png') . '" alt="" height="40">
                    <p class="d-inline-block align-middle mb-0">
                        <a href="" class="d-inline-block align-middle mb-0 product-name">Bata Shoes</a>
                        <br>
                        <span class="text-muted font-13">size-08 (Model 2020)</span>
                    </p>';
            })
            ->editColumn('nombre', function ($datos) {
                return '<span class="badge badge-soft-warning">' . e($datos->nombre) . '</span>';
            })
            ->editColumn('status', function ($datos) {
                return '<span class="badge badge-soft-success">' . e($datos->status) . '</span>';
            })
            ->addColumn('roku', function ($datos) {
                return '
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                    </ul>';
            })*/
            /*->addColumn('android', function ($datos) {
                return '
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-success"></i></li>
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-pink"></i></li>
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-info"></i></li>
                        <li class="list-inline-item align-middle"><i class="fas fa-circle text-warning"></i></li>
                    </ul>';
            })*/
            ->addColumn('action', function ($datos) {
                return '
                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'mobilenumber' => ['required'],
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->mobilenumber = $request->get('mobilenumber');

        if ($request->file('avatar')) {
            if(@file_exists(public_path(Auth::user()->avatar))){
                @unlink(public_path(Auth::user()->avatar));
            }
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/images/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar = '/images/' . $avatarName;
        }

        $user->update();
        if ($user) {
            Session::flash('message', 'User Details Updated successfully!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "User Details Updated successfully!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Something went wrong!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Something went wrong!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Password updated successfully!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Password updated successfully!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Something went wrong!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Something went wrong!"
                ], 200); // Status code here
            }
        }
    }
}
