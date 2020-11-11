<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\StoreEmailRequest;
use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function index()
    {

        $emails = Email::paginate(10);
        return view('admin.emails', ['emails' => $emails]);
    }

    public function store(StoreEmailRequest $request)
    {
        $input = $request->all();

        try {
            $email = new Email();
            $email->email = $input['email'];
            $email->category_id = $input['category_id'];
            $email->save();
            return redirect()->back()->withSuccess('Успешно се пријавивте!');
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors('Се случи грешка, обидете се повторно!');
        }
    }
}
