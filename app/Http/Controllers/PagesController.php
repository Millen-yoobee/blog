<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view("pages/welcome   ");

	}

	public function getAbout() {
		$first = "Millen";
		$last = "Wong";
		$full = $first . " " . $last;
		$emailAddr = "millen@gmail.com";

		$dataarray = [];
		$dataarray["email"] = $emailAddr; 
		$dataarray["fullname"] = $full; 
		// return view("pages.about")->withFullname($full)->withEmail($emailAddr);  
		// 			// . instead of / above 

		return view("pages.about")->withData($dataarray);
	}

	public function getContact() {
		return view("pages/contact");
	}

}