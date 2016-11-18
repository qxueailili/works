var add1=document.getElementById("count1");
var add2=document.getElementById("count2");
var num = document.getElementById("count");
// num.innerHTML=1;
add1.onclick=function count(){
  num.innerHTML=parseInt(num.innerHTML)+1;
};
add2.onclick=function count(){
  	 num.innerHTML--;
  	 if (num.innerHTML<1) {
  	 		 num.innerHTML=1;
  	 };
}
