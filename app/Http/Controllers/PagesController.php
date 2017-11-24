<?php 
	namespace App\Http\Controllers;
	//use namespace App;


	class PagesController extends Controller
	{
		public function victimsMessage()
		{
			return view('pages.victim_messages');
		}
	}

?>