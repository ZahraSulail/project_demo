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
              <h1>SEU University</h1>
             </div>
         </div>
	     
         <div id="content">
           <h2>
             Search:
              </h2>
			  
			  <div>
              <form action="search.php" method="post" >
               <table width="558" border="0">
                 <tr>
                   <td width="82">Level ID</td>
                   <td width="466"><input name="Level" type="text" size="50"  id="Level"/></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><input   type="submit"  value="Send" />
                   <input  type="reset"   value="Reset"/></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td>
                   </td>
                   </tr>
                   </table>
                   </form>
                   <br/>
                  
				   <?php
		
				$mysqli=mysqli_connect("localhost","root","","project");
				if (mysqli_connect_errno()) 
				{
							printf("Connect failed: %s\n", mysqli_connect_error());
							exit();
				}
				else {
				  if(isset($_POST['Level']))
				
				   {
						$Level=$_POST['Level'];
						$sql="select * from course where LevelID='$Level'";
						$res=mysqli_query($mysqli,$sql);
					    if($res)
						{
								echo " <table border=1>";
								echo "<tr><td width=120>CourseCode</td><td width=120>Course</td>";
								  echo "<td width=120>Description</td><td width=120>Hours</td></tr>";
										
								while($newArray=mysqli_fetch_array($res,MYSQLI_ASSOC)) 
								{
								  echo "<tr><td width=120>".$newArray['CourseCode']."
					                    </td><td width=120>".$newArray['Course']."</td>";
								  echo "<td width=120>".$newArray['Description']."
					                    </td><td width=120>".$newArray['Hours']."</td></tr>";
							   }
						       echo "</table>";
		               }
				     else
						 printf("Could not retrieve any levels: %s\n",mysqli_error($mysqli));
				   }
				mysqli_close($mysqli);
			}
		
			?>
          
           <p>&nbsp;</p>
           
              <p>&nbsp;</p>
	          <p>&nbsp;</p>
           
              <p>&nbsp;</p>
        
        </div>	
</div>

<div id="footer">

	<p>Copyright © 2015 All Rights Reserved </p>
</div>

</body>
</html>
