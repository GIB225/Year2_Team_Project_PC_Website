<?php
$id=$_SESSION['User_ID'];
$template= "TemplateProductBasket.php";
$items="";

$sqlBas = "SELECT * FROM OrderP WHERE User_ID=$id and Order_Status='Basket'";
if ($resultBas=mysqli_query($conn,$sqlBas)) {
    $rowcount=mysqli_num_rows($resultBas);
    if($rowcount==1){
    $RowBas=mysqli_fetch_array($resultBas);
         $idOrder=$RowBas['Order_ID'];
        
        echo '<input type="hidden" name="idor" value="'.$idOrder.'" />';
        
        $sqlOrder = "SELECT * FROM Linked_Order_and_Products WHERE Order_ID=$idOrder";
        $resultBasPr=mysqli_query($conn,$sqlOrder);
        $rowcount2=mysqli_num_rows($resultBasPr);
        if($rowcount2>0){
        //echo "Good!";
            
            $i=-1;
            $ArrayCollectionBasketDic=[];
            
            while($row = mysqli_fetch_array($resultBasPr)) {
                $i++;
                  //$items=  $row['Product_ID'];
                
                 $ArrayCollectionBasketDic= $ArrayCollectionBasketDic + array($row['Product_ID']=>$row['Amount_Product']);
                 if($i==0){ $items=$items."Product_ID='".$row['Product_ID']."'";}else{
                    $items=$items." OR Product_ID='".$row['Product_ID']."'";
                 }
            }  
           // echo $items;
             $query=mysqli_query($conn,"SELECT * FROM Product WHERE ".$items."");
        }else{
        echo "Basket is empty";
        }
        
        
        
      //echo "yes";
    }else{
    echo "Something is wrong!";
    }
}else{
echo "Currently empty";
}

?>
