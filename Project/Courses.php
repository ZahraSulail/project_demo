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
              Courses:
              </h2>
			  
			  <div>
              <form action="Courses.php" method="post" name="add" onsubmit="return (check());">
               <table width="643" border="0">
                 <tr>
                   <td width="122" height="42">Course Code</td>
                   <td width="511"><input name="CourseCode" type="text" size="50" id="CourseCode" /></td>
                 </tr>
                 <tr>
                   <td>Course</td>
                   <td><input name="Course" type="text" size="50"  id="Course"/></td>
                 </tr>
                 <tr>
                   <td>Level ID</td>
                   <td><input name="Level" type="text" size="50"  id="Level"/></td>
                 </tr>
                 
                 <tr>
                   <td width="122" height="42">Description</td>
                   <td width="511"><input name="Description" type="text" size="50" id="Description" /></td>
                 </tr>
                 
                  <tr>
                   <td>Hours</td>
                   <td><input name="Hours" type="text" size="50"  id="Hours"/></td>
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
				if(isset($_POST['CourseCode']))
				
				{
					$id=$_POST['CourseCode'];
					$Course=$_POST['Course'];
					
					$Description=$_POST['Description'];
					$Hours=$_POST['Hours'];
					$LevelID=$_POST['Level'];
					$sql = "INSERT INTO course  values('$id','$Course','$Description','$Hours','$LevelID')";
					
					$res = mysqli_query($mysqli, $sql);
					if ($res === TRUE) {
						echo "A record has been inserted. ";
					}
					else { 
						 prinvtf("Could not insert record: %s\n", mysqli_error($mysqli)); 
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
		     var CourseCode = document.add.CourseCode.value;
			 var Course = document.add.Course.value;
			 
		      if (CourseCode=="" || Course=="") 
		      {
			     window.alert("complete empty fields");
			     document.add.CourseCode.focus() ;
			     return false;
		      }
		   return( true );
	    }
	  </script>  	
        
        </div>	
</div>

<div id="footer">

	<p>Copyright © 2015 All Rights Reserved </p>
</div>

</body>
</html>
