var loadFile = function(event) {
	var image = document.getElementById('PhotoOutput');
	image.src = URL.createObjectURL(event.target.files[0]);
};