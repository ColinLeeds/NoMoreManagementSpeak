<!doctype html>
<html><!-- InstanceBegin template="/Templates/StandardPage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>No More Management Speak</title>
<link rel="stylesheet" href="css/styles.css"/>
<script src="Scripts/scripts.js">
	</script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-47739050-1', 'nomoremanagementspeak.com');
	  ga('send', 'pageview');
	</script>
    
    <div class="container">
    
        <div class="content header">
          <!--<img src="../images/NMMS_Small.png" alt="NMMS logo" class="LogoImage"/>-->
          <table class="headerFormat">
          <tr>
          <td>
          	<div class="logo">
            	NMMS
            </div>
            </td>
            <td>
            &nbsp;&nbsp;<b>No More Management Speak!</b>
            </td>
            </tr>
          </table>
        </div>
        
        <div>
            &nbsp;
        </div>
        
        <div class="MenuBar">
          <a href="index.html">Home</a>
          <a href="PageFromTemplate.htm">Phrases</a>
          <a href="PageFromTemplate.htm">Thesaurus</a>
          <a href="PageFromTemplate.htm">Discussion</a>
          <a href="contact.html">Contact Us</a>
        </div>
        
        <div>
            &nbsp;
        </div>
        
        <!-- InstanceBeginEditable name="Page Content" -->
         <div class="content" style="height:150px">
         <p>
         <br>
        <?php
        	$userName=filter_input(INPUT_POST, "userName");
            print "<h1 class=\"leftMargin\">Hello $userName</h1>";
        ?>
        </p>
        </div>
		<!-- InstanceEndEditable -->
    
    </div>

</body>
<!-- InstanceEnd --></html>
