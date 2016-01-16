<?php
class CategoryController extends SiteController{
    private $table_name='cesidi';


    public function index(){
        $c_result=$this->model->View($this->table_name);
        include "view/category.php";


    }
    public function CreateAction(){

        if(isset($_POST['category-add-btn'])) {
            $data = array(
                'ycesitno' => '',
                'ycesitisim' => $_POST['ycesitisim'],
                'seoismi' => $_POST['seoismi']
            );

            $result=$this->model->Create($this->table_name,$data);
            $message=$this->alert($result,'create');
        }
        include "view/category_create.php";




    }
    public function UpdateAction(){

        $id = array('ycesitno' =>  $_GET['id']);
        $data = $this->model->View($this->table_name, $id);


        $data = array_values($data[0]);
        if(isset($_POST['category-update-btn'])){
            $update = array(
                'ycesitno' => $_POST['ycesitno'],
                'ycesitisim' => $_POST['ycesitisim'],
                'seoismi' => $_POST['seoismi']

            );
            $result=$this->model->Update($this->table_name, $update);
            $message=$this->alert($result,'update');

            $this->index();

        }
        include "view/category_update.php";

    }
    public function DeleteAction(){

        $id=array('ycesitno'=>$_GET['id']);

        $result=$this->model->Delete($this->table_name,$id);
        $message=$this->alert($result,'delete');
        echo $message;
        $this->index();

    }


}