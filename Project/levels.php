<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<title>SEU Univeristy</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-1" />

	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
      <div>
          <div id="header"><div>
		  
              <table width="100%">
              <tr>
                  <td width="16%" height="16"> <a href="index.html"> Home</a> </td>
                  <td width="16%"> <a href="levels.php"> Levels</a></td>
                  <td width="16%"><a href="courses.php"> Courses</a></td>
                   <td width="16%"><a href="Search.php">Search</a></td>
                  <td width="16%"><a href="about.html"> About</a></td>
                  <td width="16%"><a href="contactus.php"> Contacts Us</a></td>
              </tr>
              </table>
              <h1> SEU University</h1>
             </div>
         </div>
	     
         <div id="content">
           <h2>
             Levels:
              </h2>
			  
			  <div>
              <form action="levels.php" method="post" name="add" onsubmit="return (check());">
               <table width="558" border="0">
                 <tr>
                   <td width="82" height="42">Level ID</td>
                   <td width="466"><input name="LID" type="text" size="50"  placeholder="enter level number"
                   id="lid" /></td>
                 </tr>
                 <tr>
                   <td>Level</td>
                   <td><input name="Level" type="text" size="50"  id="level"/></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><input   type="submit"  value="Send" />
                   <input  type="reset"   value="Reset"/></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><?php
		
			$mysqli=mysqli_connect("localhost","root","","project");
			if (mysqli_connect_errno()) 
			{
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
			}
			else {
				if(isset($_POST['LID']))
				
				{
					$id=$_POST['LID'];
					$level=$_POST['Level'];
					$sql = "INSERT INTO level values('$id','$level')";
					
					$res = mysqli_query($mysqli, $sql);
					if ($res === TRUE) {
						echo "A record has been inserted. ";
					}
					else { 
						 printf("Could not insert record: %s\n", mysqli_error($mysqli)); 
					}
				}
				mysqli_close($mysqli);
			}
		
		?>
        </td>
                 </tr>
               </table>
           </form>
           <p>&nbsp;</p>
    <p>&nbsp;</p>
			
		
        <script type="text/javascript">
         function check(){
		     var lid = document.add.lid.value;
			 var level = document.add.level.value;
			 
		      if (lid=="" || level=="") 
		      {
			     window.alert("complete empty fields");
			     document.add.lid.focus() ;
			     return false;
		      }
		   return( true );
	    }
	  </script>  	
         <p>&nbsp;</p>
           
              <p>&nbsp;</p>
        </div>	
</div>

<div id="footer">

	<p>Copyright © 2015 All Rights Reserved </p>
</div>

</body>
</html>
