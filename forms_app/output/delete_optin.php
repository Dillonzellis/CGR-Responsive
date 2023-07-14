<? 
//connect to mysql
//change user and password to your mySQL name and password
mysql_connect("mysqlv14","cgrcredit","CGRwebdesign1"); 
	
//select which database you want to edit
mysql_select_db("cgrapps"); 

//If cmd has not been initialized
if(!isset($cmd)) 
{
   //display all the news
   $result = mysql_query("select * from optin order by id DESC"); 
   
   //run the while loop that grabs all the news scripts
   while($r=mysql_fetch_array($result)) 
   { 
      //grab the title and the ID of the news
      $id=$r["id"];//take out the title
      $name=$r["name"];//take out the id
     
	 //make the title a link
      echo "<font size='2' face='Arial, Helvetica, sans-serif'><a href='delete_optin.php?cmd=delete&id=$id'>$name - Delete</a></font>";
      echo "<br>";
    }
}
?>
<?
if($_GET["cmd"]=="delete")
{
    $sql = "DELETE FROM optin WHERE id=$id";
    $result = mysql_query($sql);
    echo "<font size='2' face='Arial, Helvetica, sans-serif'>Application deleted!</font>";
	echo "<br>";
	echo "<font size='2' face='Arial, Helvetica, sans-serif'>Click <a href='optin.php'>here</a> to go back</font>";
}
?>

