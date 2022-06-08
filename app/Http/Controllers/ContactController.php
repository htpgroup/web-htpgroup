<?php

namespace App\Http\Controllers;

use App\Dictionaries\MenuData;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Rules\Crm\MobileVN;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __construct()
    {
        //its just a dummy data object.

        // Sharing is caring
        View::share('view_menu_id', MenuData::CONTACT);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $getIsdone = $request->get('is_done');
        $data = ['is_done' => $getIsdone];

        return view('home-htp.contact.index', $data);
    }

    /*
     * Store contact
     *
     * @return \Illuminate\Http\Response
     * */
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            //'phone' => 'required|digits:10|numeric',
            ////'phone' => ['required', new MobileVN()],
            'subject' => 'required',
            //'message' => 'required',
            'content' => 'required',
        ]);

        $input = $request->all();
        $modelCheckContact = Contact::query()
            ->where('email', $input['email'])
            ->first();

        if ($modelCheckContact == false) {
            $modelContact = new Contact();
            $modelContact->user_id = 1;
            $modelContact->phone = $input['phone'];
            $modelContact->email = $input['email'];
            $modelContact->first_name = $input['name'];

            $modelContact->save();
        }

        $adminEmail = 'dungpx@htpgroup.com.vn';
        //$adminEmail = 'support@htpgroup.com.vn';
        $arrAdminEmail = [
            'tech@htpgroup.com.vn',
            'support@htpgroup.com.vn',
            'dungpx@htpgroup.com.vn'
        ];
        $mailTitle = 'Website - ' . $input['company'] . ' - ' . $input['email'] . ' ' . $input['phone'] . ' - ' . $input['subject'];
        //  Send mail to admin
        foreach ($arrAdminEmail as $adminValueEmail) {
            \Mail::send('emails.contactMail', array(
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'subject' => $input['subject'],
                'content' => $input['content'],
            ), function ($message) use ($request, $adminEmail, $adminValueEmail, $mailTitle) {
                $message->from($request->email);
                $message->to($adminValueEmail, 'Admin')->subject($mailTitle);
            });
        }

        $data = ['is_done' => true, 'send_job' => true];

        //Success Page
        return redirect()->route('HomePay.contactWebPay', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function question()
    {
        //
        return view('home-htp.contact.question');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function questionList()
    {
        //
        return view('home-htp.contact.question-list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        //
        return view('home-htp.page.contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        //
        return view('home-htp.page.about');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        //
        return view('home-htp.home.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileHome()
    {
        //
        return view('home-htp.profile.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileEdit()
    {
        //

        return view('home-htp.page.profile');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileDetail()
    {
        //
        return view('home-htp.profile.home');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
