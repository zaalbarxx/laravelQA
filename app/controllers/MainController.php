<?php
class MainController extends BaseController {
	protected $layout = 'layouts.master';
	public function index()
	{
		$this->layout->content = View::make('page.index');
	}
	}