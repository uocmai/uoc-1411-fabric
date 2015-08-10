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
		var imgElement = document.getElementById('my-image');
		var imgInstance = new fabric.Image(imgElement, {
		  left: 100,
		  top: 100,
		  // angle: 30,
		  opacity: 0.85
		});
		//animating  object imgInstance to 90
		imgInstance.animate('angle', '=-5', {
		  onChange: canvas.renderAll.bind(canvas)
		});
		imgInstance.animate('left', '+=250', {
			onChange: canvas.renderAll.bind(canvas),
			duration: 1000,
			easing: fabric.util.ease.easeOutBounce
		});
		canvas.add(imgInstance);
	});
	</script>
</body>


</html>