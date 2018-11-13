<?php

       $pk='';
        
        $con = mysqli_connect("localhost","root","","arbab");
        
        $s = "select * from cmt where status='$pk'";
        if($con){
            $r=mysqli_query($con,$s);
            $f=mysqli_num_rows($r);
            echo $f;
        }




?>