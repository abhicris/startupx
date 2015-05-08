

<?php 
//	session_destroy();
include("db1.php");




function gettestinomialscontent()
{


 
				$arr1=array();
$cmd="select * from testinomials";
 $result=mysql_query($cmd);
   $rc=mysql_num_rows($result);
             while($row=mysql_fetch_array($result))
                                               {
                                                                    array_push($arr1,$row);
                                                              
                                         

                                               }
                                        
                                               					return $arr1;
}





function distinctvalues($factor)
{



$factorarray=array();
                                $cmd="SELECT distinct ($factor) from painting";   

                                $result=mysql_query($cmd);

                              while($row=mysql_fetch_array($result))
                                             {
                                                array_push($factorarray,$row);
                                        

                                        }


return $factorarray;


}



function getpaintingdetailsbymaterial($pmat)
{
			$arr1=array();
$cmd="select * from painting where painting_material='$pmat'";
 $result=mysql_query($cmd);
   $rc=mysql_num_rows($result);
             while($row=mysql_fetch_array($result))
                                               {
                                                                    array_push($arr1,$row);
                                                              
                                         

                                               }
                                         print_r($arr1);
                                               					return $arr1;



}


function getpaintingbydimn($dimn)
{

			$arr1=array();
$cmd="select * from painting where dimension='$dimn'";
 $result=mysql_query($cmd);
   $rc=mysql_num_rows($result);
             while($row=mysql_fetch_array($result))
                                               {
                                                                    array_push($arr1,$row);
                                                              
                                         

                                               }
                      
                                               					return $arr1;




}



function getpaintingselected($pname)
{

			$arr1=array();
$cmd="select * from painting where title='$pname'";
 $result=mysql_query($cmd);
   $rc=mysql_num_rows($result);
             while($row=mysql_fetch_array($result))
                                               {
                                                                    array_push($arr1,$row);
                                                              
                                         

                                               }
                
                                               					return $arr1;




}


function getpaintingdetails($catname){

				$arr1=array();
$cmd="select * from painting where category='$catname'";
 $result=mysql_query($cmd);
   $rc=mysql_num_rows($result);
             while($row=mysql_fetch_array($result))
                                               {
                                                                    array_push($arr1,$row);
                                                              
                                         

                                               }
                                      
                                               					return $arr1;






}


function loginuser($username,$password)

{



$cmd="select * from customer where (email='$username' and password='$password' )";
$result=mysql_query($cmd);
$c=mysql_num_rows($result);


if($c==1)
{
while($row=mysql_fetch_array($result))
{

//$phone=$row['phone'];
$email=$row['email'];
$name=$row['name'];
$address=$row['address'];
$phone=$row['phone'];
}




$_SESSION['phone']=$phone;
$_SESSION['email']=$email;
$_SESSION['name']=$name;
$_SESSION['address']=$address;


}

else 
{

$msg='username/password do not  matches !please try again';

return $msg;

}








}
?>