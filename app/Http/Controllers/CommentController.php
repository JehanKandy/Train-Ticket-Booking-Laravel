<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Egulias\EmailValidator\Warning\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comments::all();
        return view('comments.index')->with('comments', $comments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comments = $request->all();
        $request->validate([
            'comment' => 'required',
        ]);
        Comments::create($comments);

        return redirect("/comments");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comments = Comments::find($id);
        return view('comments.show')->with('comments', $comments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comments = Comments::find($id);
        return view('comments.edit')->with('comments', $comments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comments=Comments::find($id);

        $comments->update([
            "add_user" =>$request->add_user,
            "comment" =>$request->comment,
        ]);

        return redirect("/comments");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comments = Comments::find($id);
        $comments->delete();
        return back();
    }
}
