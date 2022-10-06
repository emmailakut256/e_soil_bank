<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Copouns;

use DateTime;
use Carbon\Carbon;
use DateTimeZone;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->user()->Role==0) {
            return redirect()->route('Dashboard');
        } else {

            // dd($request->email);
            // return redirect()->route('site.Dashboard.Client_index');

            $employees_voucopo = DB::select('select * from copoun');
            foreach ($employees_voucopo as $values) {
                if ($values->user_id == auth()->user()->id){

                    $current_time = Carbon::now(new DateTimeZone('EAT'));
                    $employees_voud =  DB::table('copoun')->where('user_id',auth()->user()->id)->first()->expiry_date;
                    if ($employees_voud >= $current_time) {
                        // dd('its beyound');
                        $employees = DB::table('land')->get();
                        $employees = DB::select('select * from nutrients');
                        $employees_vouc = DB::select('select * from tokens');
                        $employee = auth()->user()->id;
                        $employees_voucs=Copouns::where('user_id','=',$employee)->get()->count();
                        
                        // dd($employees_vouc); after copoun purchase
                        return view('site.Purchase.index1', compact('employees','employees_voucs'));
                        // ->withEmployees_voucs($employees_voucs);
                    }else{
                        return redirect()->route('site.Dashboard.Client_index');
                    }
                    


                }else{
                    return redirect()->route('site.Dashboard.Client_index');
                   
                }
                
            }

           
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
