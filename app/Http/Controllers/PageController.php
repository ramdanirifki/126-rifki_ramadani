<?php

namespace App\Http\Controllers;

class PageController extends Controller {
    public function loginPage() {
        return view('pages.login');
    }
    public function mainPage() {
        return view('pages.main-page');
    }

	public function detailTransactions() {
		return view('pages.transactions-detail');
	}
}
