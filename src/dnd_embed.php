<?php
	if(isset($_POST["goPost"])){
		$uploadedImages = $_POST["dragNDropzUploadsJSON"];
		$uploadedFiles = $_POST["dragNDropzFileUploadsJSON"];
		$jsonObject = json_decode($uploadedImages, true);
		$jsonObjectFiles = json_decode($uploadedFiles, true);
		echo "<p>Images:</p>";
		print_r($jsonObject);
		echo "<p>Files:</p>";
		print_r($jsonObjectFiles);
	}else{
?>
		<!DOCTYPE HTML>
		<html>
		<head>
			<title>DragNDropz Embeddable Test</title>
			<script
			  src="https://code.jquery.com/jquery-1.12.4.min.js"
			  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
			  crossorigin="anonymous"></script>
			<script type="text/javascript" src="https://dragndropz.com/scripts/dragndropz_image_iframe.js"></script>
			<script type="text/javascript" src="https://dragndropz.com/scripts/dragndropz_file_iframe.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$("div.dnd").initDragNDropz({
						width: "80%",
						height: "300",
					});
					$("div.dnd2").initDragNDropz({
						width: "300",
						height: "600",
						backgroundImage: "https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/66t7Woj/bright-fire-flame-lines-motion-background_v8sayz3bx__F0000.png",
						backgroundColor: "red",
						glow: true
					});
					
					$("div.dnd3").initDragNDropz({
						width: "500",
						height: "600",
						backgroundColor: "black",
						backgroundImage: "none",
						theme: "dark",
						embedKey: "2BW3CkgyOY6aj9O", // PRO USER Feature --- YOU SET THE LIMITS ON HOW MANY FILES USERS CAN UPLOAD... SINCE I'VE INCLUDED MY EMBED KEY HERE IN THIS SOURCE CODE, IT'S SET TO 1 TO ILLUSTRATE IT WORKS
						galleryId: 27
					});
					
					$("div.dnd4").initFileDragNDropz({
						width: "500",
						height: "600",
						backgroundColor: "#0100b0",
						backgroundImage: "none",
						theme: "dark",
						maxFiles: 1
					});
					
					$("div.dnd5").initFileDragNDropz({
						width: "500",
						height: "600",
						backgroundColor: "green",
						backgroundImage: "none",
						theme: "dark",
						embedKey: "hKW08lVjULh1Ga7", // PRO USER Feature --- YOU SET THE LIMITS ON HOW MANY FILES USERS CAN UPLOAD... SINCE I'VE INCLUDED MY EMBED KEY HERE IN THIS SOURCE CODE, IT'S SET TO 1 TO ILLUSTRATE IT WORKS
						folderId: 7
					});
					
					$(".getValueOfHidden").click(function(e){
						var hiddenInputVal="";
						var hiddenFilesInputVal="";
						e.preventDefault();
						if($(".dragNDropzUploadsJSON").length){
							var hiddenInput = $(".dragNDropzUploadsJSON").last();
							hiddenInputVal=hiddenInput.val();
						}
						
						if($(".dragNDropzFileUploadsJSON").length){
							var hiddenInput = $(".dragNDropzFileUploadsJSON").last();
							hiddenFilesInputVal=hiddenInput.val();
						}
						
						if(hiddenFilesInputVal != "" || hiddenInputVal != ""){
							alert("Images:\n\n" + hiddenInputVal + "\n\nFiles:\n\n" + hiddenFilesInputVal);
						}						
					});
				});
			</script>
		</head>
		<body>
			<form method="POST" enctype="multipart/form-data">
				<div class="dnd"></div>
				<div class="dnd"></div>
				<div class="dnd2"></div>
				<div class="dnd3"></div>
				<div class="dnd4"></div>
				<div class="dnd5"></div>
				<button class="getValueOfHidden">Show Uploaded Files</button>
				<input type="submit" value="GO" name="goPost">
			</form>
		</body>
		</html>
<?php
	}
?>
