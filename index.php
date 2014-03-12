<?php

//if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') || strpos($_SERVER['HTTP_USER_AGENT'], 'iPod')) {
//	if (isset($_REQUEST['page'])) {
//		if($_REQUEST['page'] !="") {
//			if(file_exists("pages/".$_REQUEST['page'].".php")){
//				 ob_start();
//				 include("pages/".$_REQUEST['page'].".php");
//				 $page_content = ob_get_clean();
//			}else{
//				if (file_exists($_REQUEST['page'].".php")) {
//					ob_start();
//					include("pages/".$_REQUEST['page'].".php");
//					$page_content = ob_get_clean();
//				}
//			}
//		}else{
//			echo "<center>Page:".$_REQUEST['page']." does not exist! Please check the url and try again!</center>"; 
//		}
//	}else{
//		header("Location: index.php?page=iphone");
//	}
//	include("pages/");
//}else{
	if (isset($_REQUEST['page'])) {
		if($_REQUEST['page'] !="") {
			if(file_exists("pages/".$_REQUEST['page'].".php")){
				ob_start();
				include("pages/".$_REQUEST['page'].".php");
				$page_content = ob_get_clean();
			}else{
				if (file_exists($_REQUEST['page'].".php")) {
					ob_start();
					include("pages/".$_REQUEST['page'].".php");
					$page_content = ob_get_clean();
				}
			}
		}else{
			echo "<center>Page:".$_REQUEST['page']." does not exist! Please check the url and try again!</center>"; 
		}
	}else{
	header("Location: index.php?page=home");
	}
//	if($_REQUEST['page'] === "home") {
//		$css = "sub.css";
//	}else {
//		$css = "subpages.css";
//	}

$page = $_REQUEST['page'];
include "pages/tplmain.php";
//}
?>