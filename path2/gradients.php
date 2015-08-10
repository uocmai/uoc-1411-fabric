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
		var canvas = new fabric.Canvas('c');
		/* canvas.setWidth(500);
		canvas.setHeight(350); */
		var hi = new fabric.Text('hello, world.', {
			left: canvas.getWidth() / 2,
			top: canvas.getHeight() / 2,
			fill: 'red',			
		});
		var circle = new fabric.Circle({
			left: 100,
			top: 100,
			radius: 50
		});
		/* circle.setGradient('fill', {
		  x1: -circle.width / 2,
		  y1: 0,
		  x2: circle.width / 2,
		  y2: 0,
		  colorStops: {
			0: "red",
			1: "blue"
		  }
		}); */
		canvas.add(circle);
		//canvas.add(hi);
		
	});
	</script>
</body>


</html>