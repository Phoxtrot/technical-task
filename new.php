<?php
// Complete the function below, The function is a recursive function
// that print all even numbers from 1 to 100.

function recurse($num) {
	//complete the function, write your code inside here
	for ($i=2; $i <= $num; $i++) { 
	 	if ($i%2==0) {
	 		echo($i);
	 	}
	 } 
}

recurse(100);


// What will be the result of this laravel route command below,
// Share your conclusion

Route('login/24', function($id){
	
	echo $id;
	//It will output an too few argument error
	// To output 24, the route may be rewritten as login/{id} and login/24 can be input in the browser 
	
	
});

//?>

<!-- Write a simple javascript function to change the color of paragraph when user clicks the "Change Color" button. -->

<div>
	function change_color() { 
  document.getElementById("paragraph").style.color = 'blue';
}
	<p id="paragraph" style="color:pink" >This is just a test chill out.</p>
	<button>Change Color</button>

</div>
