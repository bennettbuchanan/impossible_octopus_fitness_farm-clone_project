var replyButton = document.querySelector('.statuscontentcontainer');
var replyPost = document.querySelectorAll('.replypost');

// Add click event listener to parent div
replyButton.addEventListener("click",function(e) {
	// e.target was the clicked element
  	if (e.target.matches("a.replyLink")) {
  	// store this particular link in a variable
  	var thisReply = e.target.dataset.tag;

  		// call changeReply function
		changeReply();

		function changeReply() {
			// Store the corresponding indexed replyPost in a variable
		    var replyForm = replyPost[thisReply].style;
		    // Change the display property based on the predefined style
		   	if (replyForm.display == '' || replyForm.display == 'none') {
		   	      replyForm.display = 'block';
	   	    } else {
		   	      replyForm.display = 'none';
	        }
		}
	}
});