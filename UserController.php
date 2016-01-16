<?php
class UserController extends SiteController{
    private $table_name='gonderen';

    public function index(){

        $column=array('gonderenno','gonisim','gonsoyad','goneposta','takmaisim','yemeksayisi');
        $data=$this->model->Retriewe($this->table_name,$column);
        include "view/users.php";
    }

    public function CreateAction(){

        if(isset($_POST['users-add-btn'])){

            $data=array('gonderenno'=>'',
                'gonisim'=>$_POST['gonisim'],
                'gonsoyad'=>$_POST['gonsoyad'],
                'goneposta'=>$_POST['goneposta'],
                'gonadres'=>$_POST['gonadres'],
                'takmaisim'=>$_POST['takmaisim'],
                'sifre'=>$_POST['sifre']

            );
            $result=$this->model->Create($this->table_name,$data);
            $message=$this->alert($result,'create');
        }
        include "view/users_create.php";
    }

    public function UpdateAction(){

        $id = array('gonderenno' => $_GET['id']);
        $users = $this->model->View($this->table_name, $id);
        $users = array_values($users[0]);
        if(isset($_POST['users-update-btn'])) {
            $data=array('gonderenno'=>$_POST['gonderenno'],
                'gonisim'=>$_POST['gonisim'],
                'gonsoyad'=>$_POST['gonsoyad'],
                'goneposta'=>$_POST['goneposta'],
                'gonadres'=>$_POST['gonadres'],
                'sifre'=>$_POST['sifre'],
                'yemeksayisi'=>''


            );
            $result=$this->model->Update($this->table_name,$data);
            $message=$this->alert($result,'update');
           $this->index();
        }
        include 'view/users_update.php';
    }
    public function DeleteAction(){
        $id=array('gonderenno'=>$_GET['id']);
        $result=$this->model->Delete($this->table_name,$id);
        $message=$this->alert($result,'delete');
        echo $message;
        $this->index();
    }
}

?>