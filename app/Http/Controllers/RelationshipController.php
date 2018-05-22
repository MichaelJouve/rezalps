<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Relationship extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        Relationship::create([
            'receiver_id' => $request->input('receiver_id_invisible'),
            'sender_id' => Auth::id(),
        ]);

        return view('{id}/', ['id' => $request->input('receiver_id_invisible')]);
    }

    public function destroy(Request $request)
    {
        $receiver = $request->input('receiver_id_invisible');
        $sender = Auth::id();
        $following = Relationship::where('receiver_id', $receiver)->where('sender_id', $sender)->firstOrFail();

        Relationship::destroy([
            $following->id,
        ]);

        return view('{id}/', ['id' => $request->input('receiver_id_invisible')]);
    }

}
