<!DOCTYPE	html>	
<html>	
<head>	
<link	rel="stylesheet"	href="jquery.mobile-1.4.4.min.css">	
<script	src="jquery-1.11.1.js"></script>	
<script	src="jquery.mobile-1.4.4.min.js"></script>
<script	src="jquery.mobile.theme-1.4.4.min.css"></script>
<!--script	src="jquery.mobile.theme-1.4.4.css"></script-->
<!--script type = "text/javascript" src="cordova.js"></script-->
<script>
function syncAjax(u){
			var obj = $.ajax(
					{url:u,
					async: false
					}
				);
			return $.parseJSON(obj.responseText);

					}

function saveData(){
	var name = $("#name").val();
	var number = $("#number").val();
	var booking_time = $("#booking_time").val();
	var task = $("#task").val();
	var attendant = $("#attendant").val();
	var address = $("#address").val();
	
	var u = "js_php.php?cmd=1&name=" 
				+ name + "&number="
				+number + "&booking_number=" 
				+ booking_time + "&task=" 
				+ task+ "&attendant="
				+ attendant + "&address=" 
				+ address;
				alert(u);
				var r = syncAjax(u);
				//location.reload();
}


</script>	
</head>	

<body>	
<div	data-role="page"	id="pageone">	
		<div	data-role="header">	
				<h1>styleAPP</h1>	
		</div>	
		<div role="main"	class="ui-content" data-theme= "b">
		<form	method="post"	action="demoform.asp">	
		<div	data-role="fieldcontain">	
				<label	for="name">First name:</label>	
				<input	type="text"	name="name"	id="name">	
				<label	for="number"> Number:</label>	
				<input	type="text"	name="number"	id="number">
				<label	for="booking_time"> booking_time:</label>	
				<input	type="text"	name="booking_time"	id="booking_time">
				<label	for="task"> task:</label>	
				<input	type="text"	name="task"	id="task"><br>
				<label	for="task"> Attendant:</label>
				<select name="attendant" id = "attendant">
				<option value="">Select a person:</option>
				<option value="Peter Griffin">Peter Griffin</option>
				<option value="Lois Griffin">Lois Griffin</option>
				<option value="Glenn Quagmire">Glenn Quagmire</option>
				<option value="Joseph Swanson">Joseph Swanson</option></select>
				<label	for="Address:">Address:</label>	
				<input	type="text"	name="address"	id="address">
				<label	for=" "> </label>
				<a	href="#" class="ui-btn ui-btn-b" onClick="saveData()" align = "center">Reserve</a>	
				</div>	
                </form>	
				
				<!-- ButtonGroup Which Contains the menu  -->
				<label	for=" "> </label>	
				<div data-role="controlgroup"	data-type="horizontal" class= "ui-btn" align = "center" >		
				<a	href="gallery.html" data-role="button" data-icon= "home">View Gallery</a>	
				<a	onClick="popUp" data-role="button" data-icon= "home">View Appointment</a>	
				<a	href="#" data-role="button" data-icon= "home">Contact Salon</a>	
				</div><br>	
				
		</div>	
		<div	data-role="footer">	
				<h1>styleAPP: Make a reservation with our salon today, at the comfort of your home!!!</h1>	
		</div>	
</div>		
</body>	
</html>	