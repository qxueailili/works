var address=document.getElementById("address");

function cityAddress(obj){
	var tempp;
	for(var i=0;i<5;i++){
		for(var j=0;j<8;j++){
			tempp=document.getElementById("cityCell_"+i+"_"+j);
			if(tempp==obj){
				address.innerHTML="送至："+obj.innerHTML;
				obj.style.background="#B1191A";
				obj.style.color="#fff";
			}
			else{
				tempp.style.background="#fff";
				tempp.style.color="#666666";
			}
		}
	}
}
function changeValue(obj){
	obj.value=" ";
}
function recoverValue(obj){
	if(obj.value==" "){
		obj.value="移动电源";
	}
}



//轮播图片
var carousel=document.getElementById("imgs");
var button_left=document.getElementById("button_left");
var button_right=document.getElementById("button_right");
var temp=1;
var timer;
slider();
function slider(){
	timer=setInterval(function(){
	if(temp>6){
		temp=1;
	}
	imgs.src="images/"+temp+".jpg";
	photoLink();
	temp++;
 },2500);
	// button_left.style.display="none";
	// button_right.style.display="none";
}

function photoLink(){
	var str;
	for(var i=1;i<7;i++){
		str=document.getElementById("link_"+i);
		if(temp==i){
			str.style.background="#B61B1F";
		}
		else{
			str.style.background="#3E3E3E";
		}
	}
}
function linkHover(obj){
	clearInterval(timer);
	var str;
	for(var i=1;i<7;i++){
		str=document.getElementById("link_"+i);
		if(str==obj){
			imgs.src="images/"+i+".jpg";
			str.style.background="#B61B1F";
			temp=i;
		}
		else{
			str.style.background="#3E3E3E";
		}
		
	}
}

function imgHover(){
	clearInterval(timer);
	button_left.style.display="block";
	button_right.style.display="block";
}
function leftChange(){
	temp--;
	if(temp==0||temp==7){
		temp=6;
	}
	imgs.src="images/"+temp+".jpg";
	photoLink();
	console.log(temp);
}
function rightChange(){
	if(temp==7){
		temp=1;
	}
	imgs.src="images/"+temp+".jpg";
	photoLink();
	temp++;
}
function buttonHover(){
	slider();
	button_left.style.display="none";
	button_right.style.display="none";
}






//第二个轮播
smallCut();
var second_cut=document.getElementById("cut_part");
var index=1;
function smallCut(){
	var time;
	time=setInterval(function(){
		if(index>4){
			index=0;
			second_cut.style.transitionProperty="none";
		}else{
			second_cut.style.transitionProperty="all";
		}
		moveDiv(index);
		index++;
 	},2000);
}

function moveDiv(index){
		second_cut.style.left=-339*index+"px";
		blackLink(index);
		// for(var i=1;i<5;i++){
		// 	if(second_cut.id!="cut_part_"+i){
		// 		document.getElementById("cut_part_"+i).style.display="none";
		// 	}
		// }
		//second_cut.style.display="inline-block";
}
function blackLink(index){
	var str;
	for(var i=0;i<4;i++){
		str=document.getElementById("black_"+i);
		if(index==i){
			str.style.background="#B61B1F";
		}
		else{
			str.style.background="#3E3E3E";
		}
	}
}




//tab切换1

function tabCut(obj){
	var str1=obj.id;
	for(var i=1;i<10;i++){
		var str2=document.getElementsByName("div_"+i)[0];
		var str3=document.getElementsByName("bottom"+i+"_line")[0];
		var str4=document.getElementById("div_"+i);
		var str5=document.getElementsByName("href_"+i)[0];
		if(str1=="div_"+i){
			obj.style.borderLeft="1px solid #c81623";
			obj.style.borderRight="1px solid #c81623";
			obj.style.borderTop="3px solid #c81623";
			str2.style.display="inline-block";
			str3.style.top="34px";
			str5.style.color="#c81623";
		}
		else{
			str4.style.border="none";
			str2.style.display="none";
			str3.style.top="32px";
			str5.style.color="#666666";
		}
	}
	
}





//tab切换2

function tabCutSecond(obj){
	var str1=obj.id;
	for(var i=1;i<10;i++){
		var str2=document.getElementsByName("div2_"+i)[0];
		var str3=document.getElementsByName("down"+i+"_line")[0];
		var str4=document.getElementById("div2_"+i);
		var str5=document.getElementsByName("href2_"+i)[0];
		if(str1=="div2_"+i){
			obj.style.borderLeft="1px solid #c81623";
			obj.style.borderRight="1px solid #c81623";
			obj.style.borderTop="3px solid #c81623";
			str2.style.display="inline-block";
			str3.style.top="34px";
			str5.style.color="#c81623";
		}
		else{
			str4.style.border="none";
			str2.style.display="none";
			str3.style.top="32px";
			str5.style.color="#666666";
		}
	}
	
}