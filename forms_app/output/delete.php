<? 
//connect to mysql
//change user and password to your mySQL name and password
mysql_connect("mysqlv107","cgrcredit","CGRwebdesign1"); 
	
//select which database you want to edit
mysql_select_db("cgrapps"); 

//If cmd has not been initialized
if(!isset($cmd)) 
{
   //display all the news
   $result = mysql_query("select * from loan order by id DESC"); 
   
   //run the while loop that grabs all the news scripts
   while($r=mysql_fetch_array($result)) 
   { 
      //grab the title and the ID of the news
      $id=$r["id"];//take out the title
      $appName=$r["appName"];//take out the id
     
	 //make the title a link
      echo "<a href='delete.php?cmd=delete&id=$id'>$appName - Delete</a>";
      echo "<br>";
    }
}
?>
<?
if($_GET["cmd"]=="delete")
{
    $sql = "DELETE FROM loan WHERE id=$id";
    $result = mysql_query($sql);
    echo "Application deleted!";
	echo "<br>";
	echo "Click <a href='loan_output.php'>here</a> to go back";
}
?>

