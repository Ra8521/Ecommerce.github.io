        // Part of index.php


         $(document).ready(function()
             {$('#para').click(function(){
                  $('.registeration').addClass('vanish');
                  $('.log_in').removeClass('vanish');
            // body...
         })
         
            $('#para2').click(function(){
               $('.registeration').removeClass('vanish');
               $('.log_in').addClass('vanish');
            // body...

            })
         
         }) 











function disable_SUB(){
	document.getElementById("sign_up").disabled=true;
}

	function ActivateButton(){
			document.getElementById("sign_up").disabled=false;
		}

		function Myfunction(){
			var x=document.getElementById("name")
			x.value=x.value.toUpperCase();
			}

			function allLetter(inputtxt)  
      {   
      var letters = /^[A-Za-z]+$/;  
      /* this is way to check all letter in name is alphabet or not
      WAY TO CHECH NUMBER ONLY   var numbers = /^[0-9]+$/ 
      for floating  var decimal=  /^[-+]?[0-9]+\.[0-9]+$/; 
         for letter and number only  var letters = /^[0-9a-zA-Z]+$/;*/
      if(inputtxt.value.match(letters))  
      {  
      /* <?php session_start();
        $_SESSION['x']=5;
         ?>*/
      alert('Your name have accepted :');  
      return true;  
      }  
      else  
      {  
      alert('Please input alphabet characters only for name');  
      return false;  
      }  
      }
