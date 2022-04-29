<?php

namespace App\Http\Controllers;

use App\Http\EmailRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $emailRepository;

    public function __construct()
    {
        $this->middleware('auth');
        $this->emailRepository = new EmailRepository();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home')
            ->with('mails', $this->emailRepository->getMails());
    }
}
