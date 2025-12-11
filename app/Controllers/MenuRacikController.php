<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MenuRacikController extends BaseController
{
	public function index()
	{
		 $data['title'] = 'Menu Kopi Joss';

		return view('menuraciksendiri', $data);
	}
}

