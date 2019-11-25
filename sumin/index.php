<html>
	<head>
		<title>Sumin1020</title>
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script>
		

			$(document).ready(function(){

				$("#talk" ).on( "keydown", function(event) {

    					if(event.which == 13) {

						var talk = document.getElementById("talk");
						$('#chat').append(`<div class="chat_user">
        					&nbsp;&nbsp; <h5 style="margin:0;">You&nbsp;&nbsp;&nbsp;&nbsp;</h5><br>
        					<span style="float:left"> &nbsp; </span>

        					<span class="bubble"><span></span>&nbsp;`+talk.value+`</span><br><br><br>`);
						chat()
						talk.value = "";
					}
      	
				});
			});


			function chat(){

        			$.ajax({

            				url:'./chat.php',
					type: 'post',
					async : false,
					data: 'data='+$('#talk').val(),
            				success:function(data){

               					$('#chat').append(`<div class="chat_sumin">
       						 &nbsp;&nbsp; <h5 style="margin:0;">&nbsp;&nbsp;Sumin1020</h5><br>
        					<span style="float:left"> &nbsp; </span>

        					<span class="bubble"><span class="milk_simi_icon_1"></span>&nbsp;`+data+`</span><br><br><br>`);

						$(document).scrollTop($('#chat').height());
         				}
       				})
				.done(function(data) {
        				
					console.log("View data before callback: " + data);
    				});


   			}
		</script>

		<link rel="stylesheet" href="./css/chat.css">
	</head>
	<body>
		<div class="t-bar">
			<div class="t-container" align="center">
				<span><img src="./image/sumin.JPG" width="25pt"></span>
				<span style="text-align:center;">Sumin1020</span>
			</div>
		</div>

		<div style="margin: 0px 171.5px; min-width:570pX;">

			<div id="chat" style="padding-top: 52px; background-color: white; height:auto; overflow:hidden;min-height: 670px;">

				
				
				<div class="input-bar">                        
                 			<div class="text text-r" style="background:whitesmoke !important">
                        			<input class="mytext" placeholder="Type a message" id="talk" type="text">

                    			</div> 
                		</div>
			</div>

		</div>
	</body>
</head>
