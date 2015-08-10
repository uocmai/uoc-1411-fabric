<!DOCTYPE html>    
<head>
    <meta charset="utf-8">
    <title>fabric.js-simple text display</title>
	
	<!-- Get version 1.1.0 of Fabric.js from CDN -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.1.0/fabric.all.min.js" ></script>
 
	<!-- Get the highest 1.X version of jQuery from CDN. Required for ready() function. -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
 </head>

<body>
<canvas id="c" style="border:1px solid black;" ></canvas>
<script type="text/javascript">
	$(function () {
		var canvasEl = document.getElementById('c');
		// get 2d context to draw on (the "bitmap" mentioned earlier)
		//var ctx = canvasEl.getContext('2d');
		var canvas = new fabric.Canvas('c');
		var circle = new fabric.Circle({
		radius: 20, fill: 'green', left: 100, top: 100
		});
		var triangle = new fabric.Triangle({
		width: 20, height: 30, fill: 'blue', left: 50, top: 50
		});

		canvas.add(circle, triangle);
	});
</script>
</body>