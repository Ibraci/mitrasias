<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rdanusha\LaravelElasticEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Mail\SendEmailStudents;

// use GuzzleHttp\Psr7\Request;

class CommunicationsController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function email()
    {
        return view('pages.communications.email');
    }

    public function emailSend(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'email_subject' => 'required|min:3',
            'email_message' => 'required|min:5'
        ]);

        $data = array(
            'email' => $request->email,
            'emailSubject' => $request->email_subject,
            'emailMessage' => $request->email_message
        );

        Mail::to($data['email'])->send(new SendEmailStudents($contact));

        return redirect('/communications/email');
    }

    public function sms()
    {
        return view('pages.communications.sms');
    }

    public function smsSend(Request $request)
    {
        $this->validate($request, [
            'sms' => 'required|numeric|min:10',
            'sms_message' => 'required|min:5'
        ]);

        $phone = $request->sms;
        $text = $request->sms_message;

        $request = new Request('GET', 'http://bhashsms.com/api/sendmsg.php?user=shashi2&pass=123&sender=MITRAS&phone='.$phone.'&text='.$text.'&priority=ndnd&stype=normal', [
            'query' => [
                'sms' => 'phone',
                'sms_message' => 'text',
            ]
        ]);
        $response = $client->send($request, ['timeout' => 2]);
        // dd($response);

        return redirect('/communications/sms');
    }


}
