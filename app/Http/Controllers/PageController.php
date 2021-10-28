<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\ServiceGroup;
use App\ServiceType;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.homepage.home');
    }

    public function studio() {
        return view('pages.studio.index');
    }

    public function artists() {
        return view('pages.artists.index');
    }

    public function contact() {
        return view('pages.contact.index');
    }

    public function form($id) {
        return view('pages.form.index', compact('id'));
    }

    public function tattoo() {

        // $services = ServiceType::whereHas('serviceGroup', function($q){
        //     $q->where('name', 'tattoo');
        // })->get();

        return view('pages.tattoo.index');
    }
}
