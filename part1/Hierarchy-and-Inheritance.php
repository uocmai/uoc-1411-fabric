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
		fabric.Object.prototype.getAngleInRadiansMaiuoc = function() {
		  return this.getAngle() / 180 * Math.PI;
		};
		var rect = new fabric.Rect({ angle: 45 });
		console.log(rect);
		var a = rect.getAngleInRadiansMaiuoc(); // 0.785...
		console.log(a);

	});
	</script>
</body>


</html>