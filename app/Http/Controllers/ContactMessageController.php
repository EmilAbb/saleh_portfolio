<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index()
    {
        $models = ContactMessage::all();
        return view('admin.messages.index',compact('models'));
    }


    public function destroy($id)
    {
        $contactMessage = ContactMessage::where('id', $id)->firstOrFail();
        $contactMessage->delete();

        return redirect()->back();
    }
}
