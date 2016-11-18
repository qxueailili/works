// header.js
  $(".deliver").hover(function(){    //地址及小尖括号
    $(".location").css({
     "display":"block" 
    })        
    $(".xiaoyuhao").css({
      "transform":"rotate(270deg)"
    })
  },function(){
    $(".location").css({
     "display":"none" 
    })
    $(".xiaoyuhao").css({
      "transform":"rotate(90deg)"
    })
  })

  $(".mydang").hover(function(){        //我的当当
    $(".xiaoyuhao").css({
      "transform":"rotate(90deg)"
    })
    $(".mydangdang").css({
      "display":"block"
    })
  },function(){
    $(".xiaoyuhao").css({
      "transform":"rotate(270deg)"
    })
    $(".mydangdang").css({
      "display":"none"
    })
  })


  $(".deliver").hover(function(){
    $(".div1").css({
      "background-color":"#ccc"
    })
  },function(){
    $(".div1").css({
      "background-color":"#F1F1F1"
    })
  })



$(document).ready(function(){
  $(".car").hover(function(){
    $(".car").css({
      "background-color":"white"
    })
  },function(){
    $(".car").css({
      "background-color":"#ff2832"
    })
  })



 
    
}) 