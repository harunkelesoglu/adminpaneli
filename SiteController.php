<?php

include 'CRUD.php';


class SiteController{
    private $table='gonderen';
    public $model;
    public $email;
    private $username;
    private $pass;

    public function __construct($email,$username,$pass){
        session_start();
        $this->model=new CRUD();
        $this->email=$email;
        $this->username=$username;
        $this->pass=$pass;

    }

    public function register()
    {
    if($this->user_control($this->email)){
        $this->email=trim($this->email,"'");
    $data=array('gonderenno'=>'',
                'goneposta'=>$this->email,
                'takmaisim'=>$this->username,
                'sifre'=>$this->pass);
    $result=$this->model->Create($this->table,$data);
        $message=$this->alert($result,'register');
        return $message;
    }else{
        return "Bu hesapta bir kullanıcı zaten var.";
    }


}

    public function login(){

        $this->email="'".$this->email."'";

        $column=array("goneposta"=>$this->email);
        $result=$this->model->View($this->table,$column);
        if($this->email=="'".$result[0]['goneposta']."'"){
            if($this->pass==$result[0]['sifre']) {
                $_SESSION['user'] = $result[0]['takmaisim'];
                $this->redirect("../profile");

            }else{
                return $result[0]['goneposta']." için girilen parola yanlış.";
            }

        }else{
            return $this->email." sisteme kayıtlı değil.";
        }



    }
    public function password_hash($password){
        return password_hash($password,PASSWORD_DEFAULT);

    }


    public function user_control($email){
        $this->email="'".$this->email."'";
        $column=array("goneposta"=>$this->email);
        $result=$this->model->View($this->table,$column);
        $result=("'".$result[0]['goneposta']."'"==$this->email) ? false : true ;
        return $result;

    }

    public function redirect($url){
       header("Location:$url");
    }


    public function is_loggedin()
    {
        if(isset($_SESSION['user']))
        {
            return true;
        }
    }


    public function logout()
    {
        if($_GET['logout']) {
            session_destroy();
            unset($_SESSION['user']);
            $this->redirect('profile');
        }else{
            return true;
        }
    }
   public  function get_client_ip() {
        $ipaddress = '';
        if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

   public function alert($_result,$type){
       $alert_type= ($_result==1) ? "success" : "danger";
        switch($type){
            case 'create':
                $message=($_result==1) ? "<strong>Başarılı!<strong> Kayıt eklendi" : "<strong>Uyarı!<strong> Kayıt eklenemedi.";
                $alert= ' <div data-toggle="notify" data-onload data-message="'.$message.'" data-options="{&quot;status&quot;:&quot;'.$alert_type.'&quot;, &quot;pos&quot;:&quot;top-right&quot;}" class="hidden-xs"></div>';
                break;
            case 'update':
                $message=($_result==1) ? "<strong>Başarılı!<strong> Bilgiler güncellendi" : "<strong>Uyarı!<strong> Güncelleme işlemi başarısız.";
                $alert= ' <div data-toggle="notify" data-onload data-message="'.$message.'" data-options="{&quot;status&quot;:&quot;'.$alert_type.'&quot;, &quot;pos&quot;:&quot;top-right&quot;}" class="hidden-xs"></div>';
                break;
            case 'delete':
                $message=($_result==1) ? "<strong>Başarılı!<strong> Kayıt silindi" : "<strong>Uyarı!<strong> Kayıt silinemedi";
                $alert= ' <div data-toggle="notify" data-onload data-message="'.$message.'" data-options="{&quot;status&quot;:&quot;'.$alert_type.'&quot;, &quot;pos&quot;:&quot;top-right&quot;}" class="hidden-xs"></div>';
                break;
            case 'register':
                $alert=($_result==1) ? "<strong>Başarılı!<strong> Kayıt bilgilerinizle sisteme giriş yapabilirsiniz." : "<strong>Uyarı!<strong> Kayıt sırasında bir hata meydana geldi.Lütfen tekrar deneyin";
                break;

            default:
                break;
        }
            return $alert;
    }



}
$site_controller=new SiteController();
