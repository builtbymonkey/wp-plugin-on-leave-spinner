try {
	window.addEventListener("beforeunload", function(e) {
		var loadSpinnerContainer = document.createElement("div");
		var loadSpinner = document.createElement("div");
		loadSpinnerContainer.classList.add("spinner-container");
		loadSpinner.classList.add("spinner");
		loadSpinnerContainer.appendChild(loadSpinner);
		document.body.appendChild(loadSpinnerContainer);
		// Make the element fully transparent.
		loadSpinnerContainer.style.opacity = 0;
		// Make sure the initial state is applied.
		window.getComputedStyle(loadSpinnerContainer).opacity;
		// Fade it in.
		loadSpinnerContainer.style.opacity = 1;
	});
} catch(e) {}
