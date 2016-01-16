<?php
class CommentController extends SiteController{
    private $table_name='yorum';



    public function index(){

        $column=array('yorumpk','webadresi','yorum','eposta','adsoyad');
        $data=$this->model->Retriewe($this->table_name,$column);
        include "view/comments.php";
    }

    public function CreateAction(){
        $recipe=$this->model->View('liste');

        if(isset($_POST['comment-add-btn'])){
            $comment_date=date('Y-m-d , H:m:s');
            $ip=$this->get_client_ip();
            $data=array('yorumpk'=>'',
                'webadresi'=>$_POST['website'],
                'yemekfk'=>$_POST['recipe'],
                'yorum'=>$_POST['comment'],
                'puan'=>$_POST['point'],
                'ipadresi'=>$ip,
                'zaman'=>$comment_date,
                'eposta'=>$_POST['email'],
                'adsoyad'=>$_POST['adsoyad'],
                'aktif'=>''

            );
            $result=$this->model->Create($this->table_name,$data);
            $message=$this->alert($result,'create');
        }

        include "view/comment_create.php";
        }

    public function UpdateAction(){

        $id = array('yorumpk' => $_GET['id']);
        $yemek_id=array('yno'=>$_GET['id']);
        $recipe=$this->model->View('liste',$yemek_id);
        $comment = $this->model->View($this->table_name, $id);
        $comment = array_values($comment[0]);

        if(isset($_POST['comment-update-btn'])) {
            $comment_date=date('Y-m-d , H:m:s');

            $data=array(
                'yorumpk'=>$_POST['yorumpk'],
                'yorum'=>$_POST['comment'],
                'puan'=>$_POST['point'],
                'zaman'=>$comment_date,
                'adsoyad'=>$_POST['adsoyad'],
                'aktif'=>''

            );
            $result = $this->model->Update($this->table_name, $data);
            $message=$this->alert($result,'update');
            $this->index();
        }
        include 'view/comment_update.php';
    }
    public function DeleteAction(){
        $id=array('yorumpk'=>$_GET['id']);
        $result=$this->model->Delete($this->table_name,$id);
        $message=$this->alert($result,'delete');
        echo $message;
        $this->index();
    }
}

?>