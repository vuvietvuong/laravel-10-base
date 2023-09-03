<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('pages.dashboard');
    }
    public function basicInput() {
        return view('pages.basic-input');
    }
    public function formInput() {
        return view('pages.form-input');
    }
    public function verticalForm() {
        return view('pages.vertical-form');
    }
    public function horizontalForm() {
        return view('pages.horizontal-form');
    }
    public function table() {
        return view('pages.table');
    }
    public function scroll() {
        return view('pages.scrollbar');
    }
    public function findNotFound() {
        return view('pages.404');
    }
    public function maintaince() {
        return view('pages.maintaince');
    }
    public function profile() {
        return view('pages.profile');
    }
    public function notification() {
        return view('pages.notification');
    }
    public function connect() {
        return view('pages.connect');
    }
    public function listGroup() {
        return view('pages.list-group');
    }
    public function modal() {
        return view('pages.modal');
    }
    public function dropdown() {
        return view('pages.dropdown');
    }
    public function carouse() {
        return view('pages.carouse');
    }
    public function collapse() {
        return view('pages.collapse');
    }
    public function button() {
        return view('pages.button');
    }
    public function badge() {
        return view('pages.badge');
    }
    public function alert() {
        return view('pages.alert');
    }
    public function accordion() {
        return view('pages.accordion');
    }
    public function card() {
        return view('pages.card');
    }
    public function pagination() {
        return view('pages.pagination');
    }
    public function progress() {
        return view('pages.progress');
    }
    public function spinner() {
        return view('pages.spinner');
    }
    public function toast() {
        return view('pages.toast');
    }
    public function tooltip() {
        return view('pages.tooltip');
    }
    public function typography() {
        return view('pages.typography');
    }
    public function offcanvas() {
        return view('pages.offcanvas');
    }
    public function tabpill() {
        return view('pages.tab-pill');
    }
}
