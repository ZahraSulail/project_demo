<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
<head>
	<title>Contact Us</title>
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
             Contact Us:
              </h2>
              
		   <div  class="padding:0 0 0 20px" >
              <form action="contactUs.php" name="contact1" method="POST" onsubmit="return (check());">
               <table width="558" border="0" >
                 <tr>
                   <td width="87" height="42">Name:</td>
                   <td width="461"><input type="text" id="name" name="name" 
				       required placeholder="Enter your name"/> 
                   *
				       </td>
                 </tr>
                 <tr>
                   <td>E-Mail</td>
                   <td><input name="email"  id="email" type="text" size="50" 
				        required placeholder="email@domain.com"> 
                   *</td>
                 </tr>
				  <tr>
				  <td> Message:</td>
				  <td>  <textarea id="text" name="message" rows="5" cols="55"
				  placeholder="Enter your message"></textarea> 
				  * </td>
				  </tr>
				 
                 <tr>
                   <td>&nbsp;</td>
                   <td><input   type="submit"  value="Send" />
                   <input  type="reset"   value="Reset"/></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><center>
                   <?php
		     
			if ($_SERVER["REQUEST_METHOD"]=="POST") {
				    
					$name=$_POST["name"];
					$to="mail@domain.com";
					$email=$_POST["email"];
					$message=$_POST["message"];
					$Subject="Student Question";
					$MessageTo=$message."<br />from :".$name."<br />E-Mail:".$email;
					if(!empty($name)&&!empty($email)&&!empty($message) ){
						  print("Message successfully sent"); 
						  header("Refresh: 5;url=contactus.php"); 
						   mail($to,$Subject,$MessageTo);
					}
					else
						 print('complete empty fields');
			     				
			    }
             ?> 
                    </center>
                   </td>
                 </tr>
               </table>
               
           </form>
          
           </div>
           
            <p>&nbsp;</p>
           
              <p>&nbsp;</p>
			
        <script type="text/javascript">
         function check(){
		     var emailID = document.contact1.email.value;
			  atpos = emailID.indexOf("@");
			   dotpos = emailID.lastIndexOf(".");
		      if (atpos < 1 || ( dotpos - atpos < 2 )) 
		      {
			     window.alert("write valid E-Mail");
			     document.contact1.email.focus() ;
			     return false;
		      }
		   return( true );
	    }
	  </script>  	
</div>

<div id="footer">

	<p>Copyright © 2015 All Rights Reserved </p>
</div>

</body>
</html>
