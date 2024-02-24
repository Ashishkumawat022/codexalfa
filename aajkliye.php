<?PHP

if(isset($_POST['submit']))
    {
{
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
        $user_id=$_SESSION['id'];   
        $sql="insert into contact (name,email,message,user_id,status)
        values('$name','$email','$message','$user_id','1')";
        $qex=mysql_query($sql); 
        if(!$qex)
        {
            die("Contact information  is not Added".mysql_error());     
        }   
        $msgsec="Contact information is Added";
    }
}
?>