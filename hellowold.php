<!DOCTYPE html>    
<head>
    <meta charset="utf-8">
    <title>fabric.js-simple text display</title>
	
	<!-- Get version 1.1.0 of Fabric.js from CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.1.0/fabric.all.min.js" ></script>
 
	<!-- Get the highest 1.X version of jQuery from CDN. Required for ready() function. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
 
<body>
		<!-- A canvas tag is required or 
			 Fabric.js doesn't know where to draw. -->
		<canvas id="c" style="border:1px solid black;" ></canvas>
</body>
 
<script>
	// Place script tags at the bottom of the page.
	// That way progressive page rendering and 
	// downloads are not blocked.
 
	// Run only when HTML is loaded and 
	// DOM properly initialized (courtesy jquery)
	$(function () {
		
		// Obtain a canvas drawing surface from fabric.js
		var canvas = new fabric.Canvas('c');
 
		// Create a text object. 
		// Does not display it-the canvas doesn't 
		// know about it yet.
		var hi = new fabric.Text('hello, world.', {
			left: canvas.getWidth() / 2,
			top: canvas.getHeight() / 2		
		});
	
		// Attach it to the canvas object, then (re)display
		// the canvas.	
		canvas.add(hi);
				
	});
</script>
		
</head>
 
 
</html>