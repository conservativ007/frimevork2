<?php
  namespace Project\Controllers;
  use \Core\Controller;

  class PageController extends Controller{
    private $pages;

    public function __construct(){
      $this->pages = [
    		1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
    		2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
    		3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
    	];
    }

    public function show($num){
      $num = $num['show'];
      $this->title = $this->pages[$num]['title'];

      return $this->render('page/show', [
        'header' => 'Pages',
        'num' => $num,
        'pages' => $this->pages,
      ]);
    }

  }
