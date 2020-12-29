<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function meowsup()
	{
		return view('meows-up');
	}

	public function artikelhome()
	{
		return view('artikel-home');
	}

	public function tutorial()
	{
		return view('tutorial');
	}

	public function tipsntrik()
	{
		return view('tipsntrik');
	}

	public function donasi()
	{
		return view('donasi');
	}

	public function petshopjp()
	{
		return view('petshop-jp');
	}

	public function petshopjt()
	{
		return view('petshop-jt');
	}

	public function petshopjb()
	{
		return view('petshop-jb');
	}

	public function petshopju()
	{
		return view('petshop-ju');
	}

	public function petshopjs()
	{
		return view('petshop-js');
	}

	public function petshopbk()
	{
		return view('petshop-bk');
	}

	public function mauadopsi()
	{
		return view('mau-adopsi');
	}

	//--------------------------------------------------------------------

}
