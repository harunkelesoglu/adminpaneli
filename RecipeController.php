<?php

class RecipeController extends SiteController{
    private $table_name='liste';


    public function index(){
        $column=array('yno','yisim','ymalzeme','ygonderen','ygontarih','sayac');
        $data=$this->model->Retriewe($this->table_name,$column);
        include 'view/recipes.php';
    }
    public function CreateAction(){

        $mevsim=$this->model->View('mevsim');
        $cesit=$this->model->View('cesidi');
        if(isset($_POST['recipe-add-btn'])){
            $ygontarih=date('Y-m-d');
            $data=array('yno'=>'',
                'yisim'=>$_POST['yisim'],
                'ymalzeme'=>$_POST['ingredients'],
                'ymevsim'=>$_POST['season'],
                'ycesit'=>$_POST['category'],
                'ygonderen'=>'',
                'ykackisilik'=>$_POST['capacity'],
                'ytarifi'=>$_POST['recipe'],
                'ygontarih'=>$ygontarih,
                'yresmi'=>'',
                'sayac'=>''
            );
            $result=$this->model->Create($this->table_name,$data);
            $message=$this->alert($result,'create');
        }
        include 'view/recipes_create.php';

    }
    public function UpdateAction(){

        $mevsim=$this->model->View('mevsim');
        $cesit=$this->model->View('cesidi');
        $id = array('yno' => $_GET['id']);
        $yemek = $this->model->View($this->table_name, $id);
        $yemek = array_values($yemek[0]);
        if(isset($_POST['action'])){
            $ygontarih=date('Y-m-d');
            $data=array('yno'=>$_POST['yno'],
                'yisim'=>$_POST['yisim'],
                'ymalzeme'=>$_POST['ingredients'],
                'ymevsim'=>$_POST['season'],
                'ycesit'=>$_POST['category'],
                'ygonderen'=>'',
                'ykackisilik'=>$_POST['capacity'],
                'ytarifi'=>$_POST['recipe'],
                'ygontarih'=>$ygontarih,
                'yresmi'=>'',
                'sayac'=>''
            );
            $result=$this->model->Update($this->table_name,$data);
            $message=$this->alert($result,'update');
            $this->index();

        }
        include 'view/recipe_update.php';
    }
    public function DeleteAction(){
        $data=array('yno'=>$_GET['id']);

        $result=$this->model->Delete($this->table_name,$data);
        $message=$this->alert($result,'delete');
        echo $message;
        $this->index();
    }


}