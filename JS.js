var i = 0; //start point
var images = [];
var time = 3000;

//image list
images[0] = '\images/sugar.png';
images[1] = '\images/jaeroar.png';
images[2] = '\images/cap.png';
images[3] = '\images/amanda.png';

//change image

function changeImg(){
	document.slide.src = images[i];
	
	if(i<images.length - 1){
	 i++;
	 }else {
	 i = 0;
	}
	
	setTimeout("changeImg()", time);
	
}

//begins to change image after image has loaded
window.onload = changeImg;