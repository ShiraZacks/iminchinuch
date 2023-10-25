// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
	document.getElementById("smallScreen").classList.toggle("show");
}


/**
 * Details/summary HTML element
 * Only open one element at a time
 */
function details() {
	// Fetch all the details element.
	const details = document.querySelectorAll("details");

	// Add the onclick listeners.
	details.forEach((targetDetail) => {
		targetDetail.addEventListener("click", () => {
			// Close all the details that are not targetDetail.
			details.forEach((detail) => {
				if (detail !== targetDetail) {
					detail.removeAttribute("open");
				}
			});
		});
	});
};

details();
/*
this.parentElement.removeAttribute('open');  this will close the details panel and scroll to the top of it instead of losing your spot
this.parentElement.scrollIntoView();*/