<!DOCTYPE html>
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
             <b> Name:</b>
			<input type="text" id="name"><br><br>
		
		    <b> F_Name: </b> 
			<input type="text" id="fname"><br><br>
		
		    <b>Phone#: </b>
			<input type="text" id="num"><br><br>
		
		    <b>Address: </b>
		    <textarea id="address" >   </textarea><br><br>
		
			<button  onclick="insert()" > display </button>
            <button  id="submitReq" > ajax </button>
			
			<p id="demo" ></p>
			<p id="demo1" ></p>
			<p id="demo2" ></p>
			<p id="demo3" ></p>
        <script>
				
				
				let nameArr = new Array();
				let fnameArr = new Array();
				let phoneNoArr = new Array();
				let addressArr = new Array();
				
			function insert()
			{
			    
				let name, fname, phoneNo, address;
				
				name = document.getElementById("name").value;
				fname = document.getElementById("fname").value;
				phoneNo = document.getElementById("num").value;
				address = document.getElementById("address").value;
				
			
			     nameArr.push(name);
				 fnameArr.push(fname);
				 phoneNoArr.push(phoneNo);
				 addressArr.push(address);
				 
				 document.getElementById("demo").innerHTML = nameArr;
				 document.getElementById("demo1").innerHTML = fnameArr;
				 document.getElementById("demo2").innerHTML = phoneNoArr;
				 document.getElementById("demo3").innerHTML = addressArr;
				 
			 } 
			 $("#submitReq").click(function(){
				 
				$.ajax({
					  method: "POST",
					  url: "abc.php",
					  data: { name: nameArr, f_name: fnameArr, number: phoneNoArr, address:addressArr }
					})
					  .done(function( data ) 
					  {
						  
						$("#displayData").html(data);
						
					  });
		    });
		</script>
		
</body>
</html>
            
			
			
			
			
			
			
			