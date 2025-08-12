<?php

namespace App\Http\Controllers;
use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email',
            'msg' => 'required|string',
        ]);

        Feedback::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'message' => $request->msg,
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('user/feedbacks', compact('feedbacks'));
    }
    public function adminIndex()
{
    $feedbacks = Feedback::latest()->paginate(20); // paginated
    return view('admin/feedbacks', compact('feedbacks'));
}

}
