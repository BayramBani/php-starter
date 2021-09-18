<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('forms.contact');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required',
      'body' => 'required',
    ]);
    Message::create($request->all());

    Mail::to('bayram.bani@gmail.com')
      ->send(new \App\Mail\Message($request->all()));

    return redirect()->route('messages.index')->with('ok','sent !');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Message $message
   * @return \Illuminate\Http\Response
   */
  public function show(Message $message)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Message $message
   * @return \Illuminate\Http\Response
   */
  public function edit(Message $message)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request $request
   * @param  \App\Models\Message $message
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Message $message)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Message $message
   * @return \Illuminate\Http\Response
   */
  public function destroy(Message $message)
  {
    //
  }
}
