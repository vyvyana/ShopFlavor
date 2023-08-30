<?php
    require'./connect.php';

    if(isset($_POST['btn-reg'])){
    
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $hobbys = $_POST['hobby'];
        $hobby = "";
        foreach($hobbys as $row){
            $hobby .= $row . ",";
        }
        $national = $_POST['national'];
        $note = $_POST['note'];
        
        if(!empty($id)&&!empty($fullname)&&!empty($email)&&!empty($gender)&&!empty($hobby)&&!empty($national)&&!empty($note)){
            $sql = "INSERT INTO `users` (`idUser`,`fullname`,`email`,`gender`,`hobby`,`national`,`note`)VALUES('$id','$fullname','$email','$gender','$hobby','$national','$note')";
            if($conn->query($sql)==true){
                echo "them du lieu thanh cong";
            }else{
                echo "loi !!! ";
            }
        }
        else{
            echo "Ban chua nhap du du lieu !!!";
        }

    }
?>