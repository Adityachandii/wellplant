<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request) {
        $notifications = Notification::where('buyerId', $request->session()->get('loginId'))
                        ->orderBy('isRead')
                        ->get();
        $isEmpty = count($notifications) == 0;

        return view('buyer.notifications', ['notifications' => $notifications, 'isEmpty' => $isEmpty]);
    }

    public function insert(Request $request) {
        // $notifications = Notification::where('buyerId', $buyerId)->get();

        // return view('notifications', ['notifications' => $notifications]);
    }


}
