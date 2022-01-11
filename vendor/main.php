<?php    
    include '../vendor/connect.php';

    
    
    $sql=("SELECT * FROM `courcels` ");
    $result=$connect->query($sql);
    $out=$result->fetch_all(MYSQLI_ASSOC);
   
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            
            $sqlsearch = "SELECT * FROM `courcels` WHERE item_id=".$id;
            
            $result=$connect->query($sqlsearch);
            $arrResult=$result->fetch_all(MYSQLI_ASSOC);
           

        }

        if(isset($_GET['sort'])){
            
            
            $sqlsearch1 = "SELECT * FROM courcels ORDER by asic_consumption DESC";
            
            $result1=$connect->query($sqlsearch1);
            $out=$result1->fetch_all(MYSQLI_ASSOC);
           

        }

        if(isset($_GET['sort1'])){
            
            
            $sqlsearch1 = "SELECT * FROM courcels ORDER by price ";
            
            $result1=$connect->query($sqlsearch1);
            $out=$result1->fetch_all(MYSQLI_ASSOC);
           

        }

        

        
 
 

  
?> 