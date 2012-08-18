//////////////////////////////////////////////////////////
//DOM INDEPENDENT FUNCTIONS
//////////////////////////////////////////////////////////
//To fit a given frame (given size) in a window to the center, automatically adjusting for the aspect ratio
function FrameFit(biasX,biasY,frameWidth,frameHeight,winWidth,winHeight)
{
	var Height=winHeight - biasY;
	var Width=winWidth - biasX;

	var Aspect=Width/Height;
	var aspect=frameWidth/frameHeight;

	if(Aspect<=aspect)
	{
		width=Width;
		height=(frameHeight/frameWidth)*Width;
	}
	else
	{
		height=Height;
		width=(frameWidth/frameHeight)*Height;
	}
	var y=((Height-height)/2) + biasY;
	var x=((Width-width)/2) + biasX;
	return{
		'x':x,
		'y':y,
		'width':width,
		'height':height
	};
}
////////////////////////////
var a=0.0;
$(window).ready(function() {
///////////////////////////////////////////////////////
//DOM manipulation functions
	function Resize_DOM(){
		// var setting=FrameFit(0.0,180.0,388,373,$(window).width(),$(window).height());
		var width=$('.IMAGE').width();
		var height=$('.IMAGE').height();
		// alert(width);
		// alert(height);
		var setting=FrameFit(0.0,180.0,width,height,$(window).width(),$(window).height()-50);
		$('.IMAGE').height(setting.height);
		$('.IMAGE').width(setting.width);
		$('.IMAGE').css('top',setting.y);
		$('.IMAGE').css('left',setting.x);

		// $('.Parent > div').css('width',width/4);
		$('.Parent > div').css('height',setting.height);
		$('.Bar').css('z-index',10);

		$('.Options_Bar').height(setting.height);
		$('.Options_Bar').width(setting.width);
		$('.Options_Bar').css('top',setting.y);
		$('.Options_Bar').css('left',setting.x);

		$('.About').css('top',(height*0.1));
		$('.HowTo').css('top',(height*0.1));

		// $('.Live').css('bottom','-45%');
	}

	$('.IMAGE').load(function(){
		Resize_DOM();
	});
	

	$(window).resize(function(){
		Resize_DOM();
	});
////////////////////////////////////////////////////
});