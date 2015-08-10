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
		fabric.Image.fromURL('../images/cat.jpg', function(img) {
			// add filter
			img.filters.push(
					new fabric.Image.filters.Sepia(),
					//So let's try to create an image that's both sepia and bright.
					new fabric.Image.filters.Brightness({ brightness: 20 })
					);
			img.set({ left: 120, top: 120,angle: 30,stroke : 'back',fill: 'blue' });
			// apply filters and re-render canvas when done
			img.applyFilters(canvas.renderAll.bind(canvas));

			// add image onto canvas
			canvas.add(img);
		});
	});
	</script>
</body>


</html>