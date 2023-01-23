<?php

namespace App\Controllers;
use App\Models\Topics;

class Home extends BaseController
{
    private $topic;

    public function __construct() {
        helper('form');
        helper('url');
        $this->topic = new Topics();
        }
        public function index()
    {
        // show topics list
         return view('Home', ['homeTopic' => $this->topic->paginate(3),
        'pager' => $this->topic->pager
    ]);
    }
    public function delete($id) {
        if ($this->topic->delete($id)) {
            echo view('Home', ['message' => 'Topic Successfully Deleted']);
        } else {
                echo 'Error';
            }
        }
    }
