<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RmsSystem;

class RmsController extends Controller
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

    public function edit(Request $request){
        $rms_system = RmsSystem::find(1);
        return view('rms.edit', compact('rms_system'));
    }

    public function update(Request $request){
        $request->validate([
            'service_secret' => 'required',
            'license_key' => 'required',
        ]);
        $rms_system = RmsSystem::find(1);
        $rms_system->service_secret = $request->service_secret;
        $rms_system->license_key = $request->license_key;
        $rms_system->save();
        return redirect("rms/edit")->with('flash_message', '基本情報を更新しました');
    }
}
