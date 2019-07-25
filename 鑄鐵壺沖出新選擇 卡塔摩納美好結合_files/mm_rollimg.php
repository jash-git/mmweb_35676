if(navigator.appVersion.indexOf("MSIE 6")!=-1){
    document.write('<div id="mm_rollimg" style="position: absolute; top: 70px;">');
    document.write('<div align="center" style="position: absolute; top: 300px; left: 15px;">');
    document.write('<a href="#" onClick="mm_changimg(0); return false;" style="background-color: #ffffff; padding: 0px 3px 0px 3px; color: #000000; text-decoration: none;">1</a> ');
    document.write('<a href="#" onClick="mm_changimg(1); return false;" style="background-color: #ffffff; padding: 0px 3px 0px 3px; color: #000000; text-decoration: none;">2</a> ');
    document.write('<a href="#" onClick="mm_changimg(2); return false;" style="background-color: #ffffff; padding: 0px 3px 0px 3px; color: #000000; text-decoration: none;">3</a>');
    document.write('</div>');
    document.write('<a id="imgLink" href="http://www.rentalcars.com/zh/country/tw/?affiliateCode=mmwebtw&prefcurrency=twd&adplat=emmmhp&adcamp=hp_tabrightdown" title="租車。最優價格保證" target="_blank"><img id="imgInit" src="http://mmweb.tw/img/mmweb_b1.gif" alt="租車。最優價格保證" border="0"></a>');
    document.write('</div>');
    lastScrollY=0;
    function mm_rollimg(){
	    var varY = document.body.scrollTop;
    	if (varY <= 0){
	    	varY = document.documentElement.scrollTop;
    	}
	    percent=.1*(varY-lastScrollY);
    	if(percent >0 ){
	    	percent=Math.ceil(percent);
    	}else{
    		percent=Math.floor(percent);
	    }
    	var top = parseInt(document.getElementById("mm_rollimg").style.top);
	    document.getElementById("mm_rollimg").style.top = (top += percent) + "px";
    	lastScrollY += percent;
	    if (document.body.clientWidth > 1024){
		    document.getElementById("mm_rollimg").style.left=((document.body.clientWidth/2)+500)+"px";
    	}else{
	    	document.getElementById("mm_rollimg").style.left=(document.body.clientWidth-80)+"px";
    	}
    }
    window.setInterval("mm_rollimg()",1);
}else{
    document.write('<div id="mm_rollimg" style="position: fixed; top: 70px;">');
    document.write('<div align="center" style="position: absolute; top: 300px; left: 15px;">');
    document.write('<a href="#" onClick="mm_changimg(0); return false;" style="background-color: #ffffff; padding: 0px 3px 0px 3px; color: #000000; text-decoration: none;">1</a> ');
    document.write('<a href="#" onClick="mm_changimg(1); return false;" style="background-color: #ffffff; padding: 0px 3px 0px 3px; color: #000000; text-decoration: none;">2</a> ');
    document.write('<a href="#" onClick="mm_changimg(2); return false;" style="background-color: #ffffff; padding: 0px 3px 0px 3px; color: #000000; text-decoration: none;">3</a>');
    document.write('</div>');
    document.write('<a id="imgLink" href="http://www.rentalcars.com/zh/country/tw/?affiliateCode=mmwebtw&prefcurrency=twd&adplat=emmmhp&adcamp=hp_tabrightdown" title="租車。最優價格保證" target="_blank"><img id="imgInit" src="http://mmweb.tw/img/mmweb_b1.gif" alt="租車。最優價格保證" border="0"></a>');
    document.write('</div>');
    function mm_leftimg(){
    	if (document.body.clientWidth > 1024){
	    	document.getElementById("mm_rollimg").style.left=((document.body.clientWidth/2)+500)+"px";
    	}else{
	    	document.getElementById("mm_rollimg").style.left=(document.body.clientWidth-80)+"px";
    	}
    }
    window.setInterval("mm_leftimg()",1);
}

var imgUrl = new Array();
var imgAlt = new Array();
var imgLink = new Array();
var imgTarget = new Array();
var adNum=-1;
var key=0;

imgUrl[0]="http://mmweb.tw/img/mmweb_b1.gif";
imgAlt[0]="租車。最優價格保證";
imgLink[0]="http://www.rentalcars.com/zh/country/tw/?affiliateCode=mmwebtw&prefcurrency=twd&adplat=emmmhp&adcamp=hp_tabrightdown";
imgTarget[0]="_blank";
imgUrl[1]="http://mmweb.tw/img/mmweb_b2.gif";
imgAlt[1]="訂房。安排行程。找我就搞定";
imgLink[1]="http://perfect.mmweb.tw/?ptype=content";
imgTarget[1]="_blank";
imgUrl[2]="http://mmweb.tw/img/mmweb_b3.gif";
imgAlt[2]="優質民宿都在這";
imgLink[2]="http://minsu.mmweb.tw";
imgTarget[2]="_blank";

function mm_changimg(adNum){
    document.getElementById('imgInit').src=imgUrl[adNum];
    document.getElementById('imgInit').alt=imgAlt[adNum];
    if (imgLink.length > 0 && imgLink[adNum].value!=''){
        document.getElementById("imgLink").href = imgLink[adNum];
        document.getElementById("imgLink").target = imgTarget[adNum];
    }
}

function RotateImage(){
    if(imgUrl.length > 0){
        document.getElementById('imgInit').style.filter="blendTrans(duration=2)";
	    if(++adNum >= imgUrl.length){
            adNum=0;
	    }
	    if(key==0){
	        key=1;
	    }else if (document.all){
	        document.getElementById('imgInit').filters.BlendTrans.apply();
	        document.getElementById('imgInit').filters.BlendTrans.play();
	    }
	    document.getElementById('imgInit').src=imgUrl[adNum];
	    document.getElementById('imgInit').alt=imgAlt[adNum];
        if (imgLink.length > 0 && imgLink[adNum].value!=''){
            document.getElementById("imgLink").href = imgLink[adNum];
            document.getElementById("imgLink").target = imgTarget[adNum];
        }
        theTimer=setTimeout("RotateImage()", 7000);
    }
}
RotateImage();