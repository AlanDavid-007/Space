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
         return view('Home', [
            'homeTopic' => $this->topic->paginate(3),
            'pager' => $this->topic->pager
    ]);
    }
    public function delete($id) {
        if ($this->topic->delete($id)) {
            return view('Alert', [
                'message' => 'Topic Successfully Deleted',
                'title' => 'Delete'
            ]);
        } else {
                echo 'Error';
            }
        }
        public function store() {
            if ($this->topic->save($this->request->getPost())) {
                return view('Alert', [
                'message' => 'Topic Successfully added',
                'title' => 'Add'
            ]);
            } else {
                    echo 'Error';
                }
            }
            public function edit($id) {
              return view('Form', [
                'topic' => $this->topic->find($id),
                'title' => 'Edit',
            ]);
                }
            
                public function update() {
                    if ($this->topic->save($this->request->getPost())) {
                        return view('Alert', [
                            'title' => 'Edit',
                            'message' => 'Topic Successfully edited',
                        ]);
                    };
                }
    }
