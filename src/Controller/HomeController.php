<?php
namespace Src\Controller;

use Src\Core\Controller;

class HomeController extends Controller{
    public function index() {
       $ModelUser = $this->model("UserModel");
       echo $ModelUser->GetUser();
        $data = [
            'title' => 'Welcome to Study English',
            'name' => 'John'
        ];
        $this->view('Client', 'index', $data);
    }

    public function detail($id) {
        echo "Detail of ID: $id";
    }
}
