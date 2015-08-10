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
	<!-- A canvas tag is required or Fabric.js doesn't know where to draw. -->
	<canvas id="c" style="border:1px solid black;" ></canvas>
		<script>
	$(function () {
	// reference canvas element (with id="c")
		var canvasEl = document.getElementById('c');
		// get 2d context to draw on (the "bitmap" mentioned earlier)
		var ctx = canvasEl.getContext('2d');
		// set fill color of context
		ctx.fillStyle = 'red';
		// create rectangle at a 100,100 point, with 20x20 dimensions
		ctx.fillRect(100, 100, 20, 20);
		// create a wrapper around native canvas element (with id="c")
		var canvas = new fabric.Canvas('c');
		// create a rectangle object
		var rect = new fabric.Rect({
		  left: 100,
		  top: 100,
		  fill: 'red',
		  width: 50,
		  height: 50,
		  // stroke: 'rgba(100,200,200,0.5)',
		  // strokeWidth: 10,
		});
		// "add" rectangle onto canvas
		canvas.add(rect);
		// erase entire canvas area
		/* ctx.clearRect(0, 0, canvasEl.width, canvasEl.height);
		ctx.fillRect(20, 50, 20, 20);
		//draw rectangle at new locaction
		rect.set({ left: 20, top: 50 });
		canvas.renderAll(); */
		//chage rectangle's properties
		rect.set('fill', 'red');
		rect.set({ strokeWidth: 5, stroke: 'rgba(100,200,200,0.5)' });
		rect.set('angle', 60).set('flipY', true);
	});
	</script>
</body>


</html>