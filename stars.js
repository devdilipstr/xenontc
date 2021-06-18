const star1  = document.querySelector('.star1');
const star2  = document.querySelector('.star2');
const star3  = document.querySelector('.star3');
const star4  = document.querySelector('.star4');
const star5  = document.querySelector('.star5');
const star1img  = document.querySelector('.star1img');
const star2img  = document.querySelector('.star2img');
const star3img  = document.querySelector('.star3img');
const star4img  = document.querySelector('.star4img');
const star5img  = document.querySelector('.star5img');
const rate  = document.querySelector('.rate');
var toggle=  0;
star1.addEventListener("click" ,()=>{
      
    if(toggle==1){
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/unselectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/unselectstar.png");
      star3img.removeAttribute("src");
      star3img.setAttribute("src","team/unselectstar.png");
      star4img.removeAttribute("src");
      star4img.setAttribute("src","team/unselectstar.png");
      star5img.removeAttribute("src");
      star5img.setAttribute("src","team/unselectstar.png");
      rate.setAttribute("value","0");
    
      toggle= 0;  
    }else{
        star1img.setAttribute("src","team/selectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/unselectstar.png");
      star3img.removeAttribute("src");
      star3img.setAttribute("src","team/unselectstar.png");
      star4img.removeAttribute("src");
      star4img.setAttribute("src","team/unselectstar.png");
      star5img.removeAttribute("src");
      star5img.setAttribute("src","team/unselectstar.png");
      rate.setAttribute("value","1");
      toggle= 1;
    }
    
})
var toggle1=  0;
star2.addEventListener("click" ,()=>{
      
    if(toggle1==1){
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/unselectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/unselectstar.png");
      rate.setAttribute("value","0");

      toggle1= 0;  
    }else{
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/selectstar.png");
      star2img.removeAttribute("src");
      rate.setAttribute("value","0");
      star2img.setAttribute("src","team/selectstar.png");
      rate.setAttribute("value","2");
      
      toggle1= 1;
    }
    
})
var toggle2=  0;
star3.addEventListener("click" ,()=>{
      
    if(toggle2==1){
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/unselectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/unselectstar.png");
      star3img.removeAttribute("src");
      star3img.setAttribute("src","team/unselectstar.png");
      rate.setAttribute("value","0");

      toggle2= 0;  
    }else{
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/selectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/selectstar.png");
      star3img.removeAttribute("src");
      star3img.setAttribute("src","team/selectstar.png");
      rate.setAttribute("value","3");

      toggle2= 1;
    }
    
})
var toggle3=  0;
star4.addEventListener("click" ,()=>{
      
    if(toggle3==1){
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/unselectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/unselectstar.png");
      star3img.removeAttribute("src");
      star3img.setAttribute("src","team/unselectstar.png");
      star4img.removeAttribute("src");
      star4img.setAttribute("src","team/unselectstar.png");
      rate.setAttribute("value","0");

      toggle3= 0;  
    }else{
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/selectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/selectstar.png");
      star3img.removeAttribute("src");
      star3img.setAttribute("src","team/selectstar.png");
      star4img.removeAttribute("src");
      star4img.setAttribute("src","team/selectstar.png");
      rate.setAttribute("value","4");

      toggle3= 1;
    }
    
})
var toggle4=  0;
star5.addEventListener("click" ,()=>{
      
    if(toggle4==1){
        star1img.removeAttribute("src");
      star1img.setAttribute("src","team/unselectstar.png");
      star2img.removeAttribute("src");
      star2img.setAttribute("src","team/unselectstar.png");
      star3img.removeAttribute("src");
      star3img.setAttribute("src","team/unselectstar.png");
      star4img.removeAttribute("src");
      star4img.setAttribute("src","team/unselectstar.png");
      star5img.removeAttribute("src");
      star5img.setAttribute("src","team/unselectstar.png");
      rate.setAttribute("value","0");
     
      toggle4= 0;  
    }else{
        star1img.setAttribute("src","team/selectstar.png");
        star2img.removeAttribute("src");
        star2img.setAttribute("src","team/selectstar.png");
        star3img.removeAttribute("src");
        star3img.setAttribute("src","team/selectstar.png");
        star4img.removeAttribute("src");
        star4img.setAttribute("src","team/selectstar.png");
        star5img.removeAttribute("src");
        star5img.setAttribute("src","team/selectstar.png");
        rate.setAttribute("value","5");
       
        toggle4= 1;
    }
    
})
