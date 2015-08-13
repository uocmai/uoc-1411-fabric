<!DOCTYPE html>    
<head>
    <meta charset="utf-8">
    <title>fabric.js-simple text display</title>
	<script src="js/fabric.js" ></script>
 </head>
<body>
	<!-- A canvas tag is required or Fabric.js doesn't know where to draw. -->
	<canvas id="c" style="border:1px solid black;" ></canvas>
	<img src="../images/cat.jpg" id="my-image" style="display: none">
	<img src="../images/Dau-Tay_4.jpg" id="my-dautay" style="display: none">
	<script>
	var canvas = new fabric.Canvas('c');
		canvas.setWidth(500);
		canvas.setHeight(350);
		var imgElement = document.getElementById('my-image');
		var imgInstance = new fabric.Image(imgElement, {
		  left: 100,
		  top: 100,
		 //  angle: 30,
		  opacity: 0.85
		});
		var dautayElement = document.getElementById('my-dautay');
		var dautay = new fabric.Image(dautayElement, {
		  left: 100,
		  top: 100,
		 //  angle: 30,
		  opacity: 0.85
		});
		 var hi = new fabric.Text('Hello Pé Dâu Tây', {
			left: canvas.getWidth() / 2,
			top: canvas.getHeight() / 2,
			fill: 'red',			
		});
		var circle = new fabric.Circle({
		  left: 100,
		  top: 100,
		  radius: 50
		});
		circle.setGradient('fill', {
		  x1: -circle.width / 2,
		  y1: 0,
		  x2: circle.width / 2,
		  y2: 0,
		  colorStops: {
			0: "red",
			0.2: "orange",
			0.4: "yellow",
			0.6: "green",
			0.8: "blue",
			1: "purple"
		  }
		});
		canvas.add(imgInstance);
		canvas.add(dautay);
		canvas.add(hi);
		// canvas.add(circle);
	</script>
</body>
</html>