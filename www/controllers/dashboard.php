<?php
/**
 * 
 */
class Dashboard extends Controller
{
	function __construct()
	{
		parent::__construct();
		Auth::handleLogin();
		//Tao link toi javascript cua dashboard
		$this->view->js = array('dashboard/js/default.js');
	}

	function index()
	{
		$this->view->render('dashboard/index');
	}

	function logout()
	{
		Session::destroy();
		header('location: ../login');
		exit();
	}

	// xhk la viet tat cua xml http request
	function xhrInsert()
	{
		$this->model->xhrInsert();
	}

	function xhrGetListings()
	{
		$this->model->xhrGetListings();
	}

	function xhrDeleteListing()
	{
		$this->model->xhrDeleteListing();
	}

}
