<?php
class userClass
{
/* User Login */
public function userLogin($usernameEmail,$password)
{
    try
        {
         $db = getDB();
				 $hash_password= md5($password);; /*Password encryption */
				 $stmt = $db->prepare("SELECT * FROM sales_login WHERE username=:username AND password=:hash_password");
				 $stmt->bindParam("username",$usernameEmail);
				 $stmt->bindParam("hash_password",$hash_password);
				 $stmt->execute();
				 $count=$stmt->rowCount();
				 $data=$stmt->fetch(PDO::FETCH_OBJ);
				 $db = null;
				 if($count!=0)
				 {
					
					$_SESSION['loggedin'] = true;
					$_SESSION['uid']=$data->role; /*Storing user session value*/
					$_SESSION['id']=$data->id;
					/*inserting into log*/
				
					return 	 $data;
				}
				else
				{
						return 	$data;
				
					
				}
		}
			catch(PDOException $e)
			{
				echo '{"error":{"text":'. $e->getMessage() .'}}';
			}
}

/* User Registration */








}
?>
