<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

   <script>
  function clickhere(){
   $.ajax({
  	url:'winfo.php',

  	success:function(result){
  		$("#para").html(result)
  	}
});
};
</script>

</head>
<body>
	<H1>ajax call </H1>

	<button onclick="clickhere()">load from server</button>
	<p id="para">Nepal Nepal Nepal Nepal<br>Nepal Nepal Nepal Nepal</p>
</body>
</html>