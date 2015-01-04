
<html><head>
<link href="./data/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./data/font-awesome/css/font-awesome.min.css">
<script type="text/javscript" src="jquery.min.js"></script>
<style type="text/css">td, th {padding-top: 8px;
padding-bottom: 8px;
padding-left: 4px;
padding-right: 4px;}select{width:100px}form{margin-bottom: 30px;}ul>li {padding-left: 0px;margin-top: 3px;line-height: 15px;}</style>
<style type="text/css">/* Impor Font */ 
@font-face {  font-family: 'Ruda';  font-style: normal;  font-weight: 400;  src: local('Ruda'), url(./data/XOnvFWI36RNlu_0zaCpNkw.woff) format('woff');}
@font-face { font-family: 'Oswald'; font-style: normal; font-weight: 400;src: local('Oswald Regular'), local('Oswald-Regular'),url(./data/-g5pDUSRgvxvOl5u-a_WHw.woff) format('woff');}
input[type="submit"],input[type="reset"]{padding: 7px 13px;
font-size: 17.5px;
-webkit-border-radius: 6px;
-moz-border-radius: 6px;
border-radius: 6px;
background-color: #1abc9c;
color: #fff;
font-family: Ruda;
border-bottom: 4px solid rgb(84, 158, 26);}
input[type="submit"]{margin-left: 40px;
margin-top: 30px;
margin-right: 40px;}
.tambahedit{padding: 7px 5px;
font-size: 14.5px;
border-radius: 6px;
background-color: rgb(33, 207, 172);
color: #fff;
font-family: Ruda;
overflow: hidden;}
</style>
</head> 
<body>
<div class="luhur">
<div class="luhurkiri">
<a href="../index.php"><h2 style="text-decoration: none;
color: #eaeaea;
font-size: 23px;
padding-left: 17px;padding-top: 2px;float: left;">Tools</h2>
<h2 style="text-decoration: none;
color: rgb(206, 197, 197);
font-size: 25px;;
padding-right: 32px;float: right;"> Blogging</h2>
</a>
</div>
<div class="luhurkanan" style="font-size: 15px;padding: 18px;"><b><?php session_start(); echo $_SESSION['username']; ?> | <a href="logout.php"> <i class="fa fa-sign-out fa-lg"></i> Out</a></b> 

</div>
</div>
 
 
<div class="page-container row-fluid">
 
 <?php if($_SESSION['username']){ ?>
 <div id="na">
<div class="user-info-wrapper">
<div class="profile-wrapper"> <img src="http://icons.iconarchive.com/icons/martz90/circle/512/blogger-icon.png" width="69" height="69"> </div>
<div class="user-info">
<div class="greeting">Welcome</div>
<div class="username"><?php  echo $_SESSION['username']; ?></div>
<div class="status">Status
<div class="status-icon green"></div>
<i class="fa fa-user fa-lg"></i> Member</div>
</div>
</div>
<style type="text/css">
.content a{border-radius: 6px;
background-color: #1abc9c;
color: #fff;
font-family: Ruda;
border-bottom: 4px solid rgb(84, 158, 26);padding:5px;}
</style>
 
<ul class="menu">
<li class="mimiti"><a href="http://localhost/sepeda"><i class="fa fa-home fa-fw"></i> <span>Home</span></a></li>
<li class="item5"><a href="#"><i class="fa fa-suitcase fa-lg"></i> <span>Ridwan Hex</span></a>
<ul class="tongaya" style="display: none;">
    <li class=" "><a href="?page=ridwanhex/pb/index.html" class="locale">Posting Cheat PB</a></li>
    <li class=" "><a href="?page=ridwanhex/ls/index.html" class="locale">Posting Cheat LS</a></li>
    <li class=" "><a href="?page=ridwanhex/inject/index.html" class="locale">Posting Inject</a></li>
    <li class=" "><a href="?page=ridwanhex/ssh/index.html" class="locale">Posting SSH</a></li>
    <li class=" "><a href="?page=ridwanhex/wifi/index.html" class="locale">Posting Wifi Id</a></li>
    <li class=" "><a href="?page=ridwanhex/software/index.html" class="locale">Posting Software</a></li>
	
</ul>
</li>

<li class="item5"><a href="#"><i class="fa fa-suitcase fa-lg"></i> <span>DFCH.NET</span></a>
<ul class="tongaya" style="display: none;">
    <li class=" "><a href="?page=dfch/pb/index.html" class="locale">Posting Cheat PB</a></li>
    <li class=" "><a href="?page=dfch/ls/index.html" class="locale">Posting Cheat LS</a></li>
    <li class=" "><a href="?page=dfch/inject/index.html" class="locale">Posting Inject</a></li>
    <li class=" "><a href="?page=dfch/ssh/index.html" class="locale">Posting SSH</a></li>
    <li class=" "><a href="?page=dfch/wifi/index.html" class="locale">Posting Wifi Id</a></li>
    <li class=" "><a href="?page=dfch/software/index.html" class="locale">Posting Software</a></li>
	
</ul>
</li>
<li class="item5"><a href="#"><i class="fa fa-suitcase fa-lg"></i> <span>Lainnya</span></a>
<ul class="tongaya" style="display: none;">
    <li class=" "><a href="?page=game/index.html" class="locale">Posting Game-Gratiz.Net</a></li>
    <li class=" "><a href="?page=film/index.html" class="locale">Posting Kostip.com</a></li>
    <li class=" "><a href="?page=mp3/index.html" class="locale">Posting mp3</a></li>
	
</ul>
</li>

</ul>
</div>

<div class="content">

    	<?php 	
		include "content.php";
		?>
</div>
<script src="./data/jquery.min(1).js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
<?php }else{
header("Location:../index.php");
}
?>
</body>
</html>    