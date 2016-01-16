<?php
class ProfileController extends SiteController{
    private $table_name='gonderen';
    public function index(){


        // Widget Profil İnformation
        $select = array('takmaisim' => "'".$_SESSION['user']."'");
        $users = $this->model->View($this->table_name, $select);
        $users = array_values($users[0]);
        
     
        if(isset($_POST['users-update-btn'])) {
            $data = array('gonderenno' => $_POST['gonderenno'],
                'gonisim' => $_POST['gonisim'],
                'gonsoyad' => $_POST['gonsoyad'],
                'goneposta' => $_POST['goneposta'],
                'gonadres' => $_POST['gonadres'],
                'takmaisim' => $_POST['takmaisim'],
                'sifre' => $_POST['sifre'],
                'yemeksayisi' => '');

            $result=$this->model->Update($this->table_name,$data);
            $message=$this->alert($result,'update');

        }




        include 'view/profile.php';
    }
}