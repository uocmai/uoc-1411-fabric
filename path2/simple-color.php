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
		canvas.setWidth(600);
		canvas.setHeight(400);
		// canvas.selection = false; // disable group selection
		var customColor = new fabric.Color('#D12121');
		var hi = new fabric.Text('hello, world.', {
			left: canvas.getWidth() / 2,
			top: canvas.getHeight() / 2,
			fill: 'red',			
		});
		
		var rect = new fabric.Rect({
		  left: 100,
		  top: 100,
		  fill: 'red',
		  width: 150,
		  height: 150,
		  // stroke: 'rgba(100,200,200,0.5)',
		  // strokeWidth: 10,
		});
		// rect.set('selectable', false); // make object unselectable
		//var custonColor2 = new fabric.Color('rgb(100,0,100)');
		var rect2 = new fabric.Rect({
		  left: 300,
		  top: 300,
		  fill: 'red',
		  width: 100,
		  height: 100,
		});
		// console.log(a);
		canvas.add(rect);
		canvas.add(rect2);
		canvas.add(hi);
		
	});
	</script>
</body>


</html>