<!DOCTYPE HTML>
<html>
	<head>
		<style type="text/css">
			
			span[id^="word"]
				{float:left; margin:3px; padding:3px; border:1px none #999999; color:#333333;}
				
			span[id^="place"]
				{float:left; margin:0px; width: 40px; height: 30px; padding:0px; border:1px solid #999999; color:#333333;}
			
			.pics, .nums
				{clear:both; text-align:center;}
		</style>
		
		<script type="text/javascript">
			//function called when drag starts
			function dragIt(theEvent) {
				//tell the browser what to drag
				theEvent.dataTransfer.setData("Text", theEvent.target.id);
			}

			//function called when element drops
			function dropIt(theEvent) {
				//get a reference to the element being dragged
				var theData = theEvent.dataTransfer.getData("Text");
				
				//get the element
				var theDraggedElement = document.getElementById(theData);

				//add it to the drop element
				theEvent.target.appendChild(theDraggedElement);

				//instruct the browser to allow the drop
				theEvent.preventDefault();
			}
		</script>
	</head>
	<body>
		<div class="pics"  id="place6" ondrop="dropIt(event);" ondragover="event.preventDefault();">
			
			<span draggable="true" ondragstart="dragIt(event);" id="word">
				who
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word2">
				where
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word3">
				when
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word4">
				which
			</span>
			
			<span draggable="true" ondragstart="dragIt(event);" id="word5">
				that
			</span>
		</div>
		
		
		<div class="nums"  id="place6" ondrop="dropIt(event);" ondragover="event.preventDefault();">
			<span id="word">Columbus would never have made it to Asia,</span>
			<span id="place"></span>
			<span id="word">was farther away than he expected, imaging a smaller world.</span>
		</div>
	</body>
</html>