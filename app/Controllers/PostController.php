<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
// use App\Models\PostModel;
use CodeIgniter\Controller;
use Config\View;

class PostController extends BaseController
{
    public function index()
    {
        return View('index');
    }

    public function add(){
      $file = $this->request->getFile('image');
      $fileName = $file->getRandomName();
      $file->move('upload/avatar', $fileName);
      
      $rules =  ['image' => 'uploaded[file]|max_size[file,2048]|is_image[file]|mime_in[file,image/jpg,iamge/jpeg,image/png]'];

         if(! $this->validate($rules)){
            $postModel = new PostModel();
            $datas = [
                'title' => $this->request->getPost('title'),
                'category' => $this->request->getPost('category'),
                'body' => $this->request->getPost('body'),
                'image' => $fileName,
                'created_at' => date('Y-m-d H:i:s')
            ];
            $postModel->save($datas);
            return $this->response->setJSON([
                'error' => false,
                'datas' =>['success']
            ]);
        }elseif ($this->validate($rules)){
                $dd = $data['validation'] = $this->validator;
            
                return $this->response->setJSON([
                    'error' => false,
                    'message' =>['error']
                ]);

            };
    }   
    public function getdata(){
        $db = new PostModel;
        $database = $db->findAll();
            return $this->response->setJSON([
                'error' => false,
                'message' =>$database
            ]);
        }   
        public function show($id = null){
            $db = new PostModel;
            $post = $db->find($id);
            return $this->response->setJSON([
                'error' => false,
                'message' =>$post
            ]);
        } 
        public function update(){
            $id = $this->request->getPost('id');
            $file = $this->request->getFile('image');
            $fileName = $file->getFilename();
          

            if($file != ''){
                $fileName = $file->getRandomName();
                $file->move('upload/avatar', $fileName);
                if($this->request->getPost('old_image') != ''){
                    unlink('upload/avatar/'.$this->request->getPost('old_image'));
                }
            }else{
                $fileName = $this->request->getPost('old_image');
                }
                $datas = [
                    'title' => $this->request->getPost('title'),
                    'category' => $this->request->getPost('category'),
                    'body' => $this->request->getPost('body'),
                    'image' => $fileName,
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                 $postModel = new PostModel();
            $postModel->update($id,$datas);

            return $this->response->setJSON([
                'error' => false,
                'message' =>$datas
            ]);
               
            }
            public function delete($id = null){
                $db = new PostModel;
                $post = $db->find($id);
                $db->delete($id);

                // unlink('upload/avatar'. $post['image']);

                return $this->response->setJSON([
                    'error' => false,
                    'message' =>$post
                ]);
            } 
         
}
