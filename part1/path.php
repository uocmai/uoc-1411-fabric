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
	<img src="../images/cat.jpg" id="my-image" style="display: none">
		<script>
	$(function () {
		var canvas = new fabric.Canvas('c');
		canvas.setWidth(500);
		canvas.setHeight(350)
		var path = new fabric.Path('M 50 50 L 200 0 L 200 300 z');
		 // path.set({ left: 120, top: 120 });
		 path.set({ fill: 'while', stroke: 'green', opacity: 0.5 });
		canvas.add(path);
		
	});
	</script>
</body>


</html>