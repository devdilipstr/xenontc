const lead= document.querySelector(".leadop");
var max = lead.textContent;
var counter = 1;
while(counter<=max){
    var opframe1 = ".op"+counter+"1";
    var opframe2 = ".op"+counter+"2";
    var opframe3 = ".op"+counter+"3";
    var opframe4 = ".op"+counter+"4";
    const op1   = document.querySelector(opframe1);
    const op2   =document.querySelector(opframe2);
    const op3   =document.querySelector(opframe3);
    const op4   =document.querySelector(opframe4);
    
    var array = [op1,op2,op3,op4];
    var randomlist = Math.floor(Math.random() * 2);
    var randomli = Math.floor(Math.random() * 2);
    console.log(array);
    var i = 0;
    console.log(array);
    if(randomli == 0){
        randomli = -1;
                 
     }else{
                 
     }
     var random_array  = array[randomlist];
     random_array.style.order  = randomli;
     counter++;     
}
