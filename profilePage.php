<!DOCTYPE html>

<head>
	<title>SProfile Page</title>
        	<meta charset='UTF-8'>
		
	<link rel='stylesheet' href='style.css'>
	
	<style>
		.tabrow {
		    text-align: center;
		    list-style: none;
		    margin: 200px 0 20px;
		    padding: 0;
		    line-height: 24px;
		    height: 26px;
		    overflow: hidden;
		    font-size: 12px;
		    font-family: verdana;
		    position: relative;
		}
		.tabrow li {
		    border: 1px solid #AAA;
		    background: #D1D1D1;
		    background: -o-linear-gradient(top, #ECECEC 50%, #D1D1D1 100%);
		    background: -ms-linear-gradient(top, #ECECEC 50%, #D1D1D1 100%);
		    background: -moz-linear-gradient(top, #ECECEC 50%, #D1D1D1 100%);
		    background: -webkit-linear-gradient(top, #ECECEC 50%, #D1D1D1 100%);
		    background: linear-gradient(top, #ECECEC 50%, #D1D1D1 100%);
		    display: inline-block;
		    position: relative;
		    z-index: 0;
		    border-top-left-radius: 6px;
		    border-top-right-radius: 6px;
		    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.4), inset 0 1px 0 #FFF;
		    text-shadow: 0 1px #FFF;
		    margin: 0 -5px;
		    padding: 0 20px;
		}
		.tabrow a {
			  color: #555;
			  text-decoration: none;
		}
		.tabrow li.selected {
		    background: #FFF;
		    color: #333;
		    z-index: 2;
		    border-bottom-color: #FFF;
		}
		.tabrow:before {
		    position: absolute;
		    content: " ";
		    width: 100%;
		    bottom: 0;
		    left: 0;
		    border-bottom: 1px solid #AAA;
		    z-index: 1;
		}
		.tabrow li:before,
		.tabrow li:after {
		    border: 1px solid #AAA;
		    position: absolute;
		    bottom: -1px;
		    width: 5px;
		    height: 5px;
		    content: " ";
		}
		.tabrow li:before {
		    left: -6px;
		    border-bottom-right-radius: 6px;
		    border-width: 0 1px 1px 0;
		    box-shadow: 2px 2px 0 #D1D1D1;
		}
		.tabrow li:after {
		    right: -6px;
		    border-bottom-left-radius: 6px;
		    border-width: 0 0 1px 1px;
		    box-shadow: -2px 2px 0 #D1D1D1;
		}
		.tabrow li.selected:before {
		    box-shadow: 2px 2px 0 #FFF;
		}
		.tabrow li.selected:after {
		    box-shadow: -2px 2px 0 #FFF;
		}
	</style>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>
		$(function() {
			$("li").click(function(e) {
			  e.preventDefault();
			  $("li").removeClass("selected");
			  $(this).addClass("selected");
			});
		});
	</script>
</head>  
<body>

	<ul class="tabrow">
	    <li><a href="index.php?" target="_self">Index</a></li>
	    <li><a href="welcome.php">Welcome</a></li>
            <li><a href="profilePage.php" target="_self">Profile</a></li>
	    <li class="selected"><a href="#">Sit amet</a></li>
	</ul>
	
        <h2    You are now on the Profile Page </h2><br>
        your name and password should have been Posted to this page <br>  <br>
        your name is  <?php echo  $_SESSION['name'] ;?> <br> 
        your password is  <?php echo  $_SESSION['password'] ;?> <br> 
        
        <?php
        echo  $_SESSION['name'] ;
        echo  $_SESSION['password'] ; ?> <br>
</body>

</html>