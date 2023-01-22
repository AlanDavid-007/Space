<?php

namespace App\Controllers;
use App\Models\Topics;

class Home extends BaseController
{
    // Verificar add request
        public function index()
    {
        // show topics list
        helper('url');
        $topics = new Topics();
        $data['topics'] = $topics->orderBy('id', 'DESC')->findAll();
        return view('Home', $data);
    }

    // add topics form
    public function create(){
        return view('Home');
    }
 
    // insert data
    public function store() {
        $topics = new Topics();
        $data = [
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
        ];
        $topics->insert($data);
        return $this->response->redirect(site_url('Home'));
    }
    // show single topic
    public function singleTopic($id = null){
        $topics = new Topics();
        $data['topic_obj'] = $topics->where('id', $id)->first();
        return view('Home', $data);
    }
    // update topic data
    public function update(){
        $topics = new Topics();
        $id = $this->request->getVar('id');
        $data = [
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description'),
        ];
        $topics->update($id, $data);
        return $this->response->redirect(site_url('Home'));
    }
 
    // delete topic
    public function delete($id = null){
        $topics = new Topics();
        $data['topic'] = $topics->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('Home'));
    }    
}
