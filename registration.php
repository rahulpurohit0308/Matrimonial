<?php
    include_once("db.php");
    if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["gender"]) || empty($_POST["caste"]) || empty($_POST["religion"]) || empty($_POST["occupation"]) || empty($_POST["dob"]) || empty($_POST["city"]) || empty($_POST["state"]) || empty($_POST["country"])){
        header("location:register.php?empty=1");
    }
    else{
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $pass=$_POST["pass"];
        $gender=$_POST["gender"];
        $caste=$_POST["caste"];
        $religion=$_POST["religion"];
        $occupation=$_POST["occupation"];
        $dob=$_POST["dob"];
        $city=$_POST["city"];
        $state=$_POST["state"];
        $country=$_POST["country"];
        $sn=0;
        $rs=mysqli_query($conn,"select MAX(sn) from details");
        if($r=mysqli_fetch_array($rs)){
            $sn=$r[0];
        }
        $sn++;
        $a=array();
        for($i='A';$i<='Z';$i++){
            array_push($a,$i);
            if($i=='Z')
                break;
        }
        for($i='0';$i<='9';$i++){
            array_push($a,$i);
        }
        for($i='a';$i<='z';$i++){
            array_push($a,$i);
            if($i=='z')
                break;
        }
        shuffle($a);
        $code="";
        for($i=0;$i<6;$i++){
            $code=$code.$a[$i];
        }
        $code=$code."_".$sn;
        $target="profile/";
        $target=$target.$code.".jpg";
        if(move_uploaded_file($_FILES["photo"]["tmp_name"],$target)){
            if(mysqli_query($conn,"insert into details values($sn,'$code','$fname','$lname','$email','$pass','$gender','$caste','$religion','$occupation','$dob','$city','$state','$country')")>0){
                header("location:addmoredetails.php?id=".$code);
            }
            else{
                header("location:register.php?again=1");
            }
        }
        else{
            header("location:register.php?img_err=1");
        }
    }
?>