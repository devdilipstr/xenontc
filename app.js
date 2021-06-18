const obj = document.querySelector('.obj');
const img = document.querySelector('.img');
const main = document.querySelector('.main');
const comp = document.querySelector('.comp');
const body=  document.querySelector('body');
const  submitbtn = document.querySelector('.submitbtn');

var serial=  0;

obj.addEventListener("click", ()=>{
    serial++;
    
    const newdiv = document.createElement("div");
    newdiv.setAttribute("class","row justify-content-center align-content-center m-4 p-4 ");
    newdiv.style.backgroundColor="#f2f2f2";
    newdiv.style.borderRadius="10px";
    
    newdiv.style.justifyContent="space-around";
    
    main.appendChild(newdiv);
    var serialnum= document.createElement("p");
    serialnum.setAttribute("class","lead");
    serialnum.textContent= serial;
    newdiv.appendChild(serialnum);
    serialnum.setAttribute("value",serial);
    
    const serialinputnum= document.createElement("input");
    serialinputnum.setAttribute("type","text");
    serialinputnum.setAttribute("name","serialnum");
    serialinputnum.setAttribute("value",serial);
    newdiv.appendChild(serialinputnum);
    serialinputnum.style.display="none";
    console.log(serialinputnum.getAttribute("value"));

    console.log(serialnum.getAttribute("value"));
    const inputq = document.createElement("input");
    inputq.setAttribute("class","form-control ");
    inputq.setAttribute("type","text");
    inputq.setAttribute("name","inputq"+ serial);
    inputq.setAttribute("placeholder","Enter the question");
    newdiv.appendChild(inputq);
   
    const inputc = document.createElement("input");
    inputc.setAttribute("class","form-control");
    inputc.setAttribute("type","text");
    inputc.setAttribute("name","inputc"+ serial);
    inputc.setAttribute("placeholder","Enter the correct answer");
    newdiv.appendChild(inputc);
const inputw1 = document.createElement("input");
    inputw1.setAttribute("class","form-control");
    inputw1.setAttribute("type","text");
    inputw1.setAttribute("name","inputw1" + serial);
    inputw1.setAttribute("placeholder","Enter the Wrong answer");
    newdiv.appendChild(inputw1);
    const inputw2 = document.createElement("input");
    inputw2.setAttribute("class","form-control");
    inputw2.setAttribute("name","inputw2" + serial);
    inputw2.setAttribute("type","text");
    inputw2.setAttribute("placeholder","Enter the Wrong answer");
    newdiv.appendChild(inputw2);
    const inputw3 = document.createElement("input");
    inputw3.setAttribute("class","form-control");
    inputw3.setAttribute("name","inputw3" + serial);
    inputw3.setAttribute("type","text");
    inputw3.setAttribute("placeholder","Enter the Wrong answer");
    newdiv.appendChild(inputw3);
    const type = document.createElement("input");
    type.setAttribute("name","type" + serial);
    type.setAttribute("type","text");
    type.setAttribute("value","1");
    type.setAttribute("name","type" + serial);
    type.style.display="none";
    newdiv.appendChild(type);


        
})

img.addEventListener("click", ()=>{
    serial++;
    const newdiv = document.createElement("div");
    newdiv.setAttribute("class","row justify-content-center align-content-center m-3 p-4");
    newdiv.style.backgroundColor="#f2f2f2";
    newdiv.style.borderRadius="10px";

    newdiv.style.justifyContent="space-around";
    var serialnum= document.createElement("p");
    serialnum.setAttribute("class","lead");
    serialnum.textContent= serial;
    newdiv.appendChild(serialnum);
    serialnum.setAttribute("value",serial);
    console.log(serialnum.getAttribute("value"));

    main.appendChild(newdiv);
    const image = document.createElement("input");
    image.setAttribute("class","form-control ");
    image.setAttribute("type","file");
    image.setAttribute("name","img"+serial);
    image.setAttribute("placeholder","Enter the question");
    newdiv.appendChild(image);
    
    
    const serialinputnum= document.createElement("input");
    serialinputnum.setAttribute("type","text");
    serialinputnum.setAttribute("name","serialnum");
    serialinputnum.setAttribute("value",serial);
    newdiv.appendChild(serialinputnum);
    serialinputnum.style.display="none";
    console.log(serialinputnum.getAttribute("value"));

    const inputq = document.createElement("input");
    inputq.setAttribute("class","form-control ");
    inputq.setAttribute("type","text");
    inputq.setAttribute("name","inputq"+ serial);
    inputq.setAttribute("placeholder","Enter the question");
    newdiv.appendChild(inputq);

    const inputc = document.createElement("input");
    inputc.setAttribute("class","form-control");
    inputc.setAttribute("name","inputc"+ serial);
    inputc.setAttribute("type","text");
    inputc.setAttribute("placeholder","Enter the correct answer");
    newdiv.appendChild(inputc);
const inputw1 = document.createElement("input");
    inputw1.setAttribute("name","inputw1" + serial);
    inputw1.setAttribute("class","form-control");
    inputw1.setAttribute("name","inputw1" + serial);
    inputw1.setAttribute("type","text");
    inputw1.setAttribute("placeholder","Enter the Wrong answer");
    newdiv.appendChild(inputw1);
    const inputw2 = document.createElement("input");
    inputw2.setAttribute("class","form-control");
    inputw2.setAttribute("name","inputw2" + serial);
    inputw2.setAttribute("type","text");
    inputw2.setAttribute("placeholder","Enter the Wrong answer");
    newdiv.appendChild(inputw2);
    const inputw3 = document.createElement("input");
    inputw3.setAttribute("class","form-control");
    inputw3.setAttribute("type","text");
    inputw3.setAttribute("name","inputw3" + serial);
    inputw3.setAttribute("placeholder","Enter the Wrong answer");
    newdiv.appendChild(inputw3);
    const type = document.createElement("input");
    type.setAttribute("name","type" + serial);
    type.setAttribute("type","text");
    type.setAttribute("name","type" + serial);
    type.setAttribute("value","2");
    type.style.display="none";
    newdiv.appendChild(type);


    
    
})

comp.addEventListener("click", ()=>{
    serial++;
    const newdiv = document.createElement("div");
    newdiv.setAttribute("class","row justify-content-center align-content-center m-3 p-4");
    newdiv.style.backgroundColor="#f2f2f2";
    newdiv.style.borderRadius="10px";

    newdiv.style.justifyContent="space-around";
    var serialnum= document.createElement("p");
    serialnum.setAttribute("class","lead");
    serialnum.textContent= serial;
    serialnum.setAttribute("name","serialnum");
    serialnum.setAttribute("value",serial);
    console.log(serialnum.getAttribute("value"));
    

    const serialinputnum= document.createElement("input");
    serialinputnum.setAttribute("type","text");
    serialinputnum.setAttribute("name","serialnum");
    serialinputnum.setAttribute("value",serial);
    newdiv.appendChild(serialinputnum);
    serialinputnum.style.display="none";
    console.log(serialinputnum.getAttribute("value"));
    newdiv.appendChild(serialnum);
    main.appendChild(newdiv);   
    
    const inputq = document.createElement("input");
    inputq.setAttribute("class","form-control ");
    inputq.setAttribute("type","text");
    inputq.setAttribute("name","inputq"+ serial);
    inputq.setAttribute("placeholder","Enter the question");
    newdiv.appendChild(inputq);  

    const inputc = document.createElement("input");
    inputc.setAttribute("class","form-control");
    inputc.setAttribute("name","inputc"+ serial);
    inputc.setAttribute("type","text");
    inputc.setAttribute("placeholder","Enter the correct answer");
    newdiv.appendChild(inputc);
    inputc.style.display="none";
    
    const inputw1 = document.createElement("input");
    inputw1.setAttribute("name","inputw1" + serial);
    inputw1.setAttribute("class","form-control");
    inputw1.setAttribute("name","inputw1" + serial);
    inputw1.setAttribute("type","text");
    inputw1.setAttribute("placeholder","Enter the Wrong answer");
    newdiv.appendChild(inputw1);
    inputw1.style.display="none";
    const inputw2 = document.createElement("input");
    inputw2.setAttribute("class","form-control");
    inputw2.setAttribute("name","inputw2" + serial);
    inputw2.setAttribute("type","text");
    inputw2.setAttribute("placeholder","Enter the Wrong answer");
    inputw2.style.display="none";
    newdiv.appendChild(inputw2);
    const inputw3 = document.createElement("input");
    inputw3.setAttribute("class","form-control");
    inputw3.setAttribute("type","text");
    inputw3.setAttribute("name","inputw3" + serial);
    inputw3.setAttribute("placeholder","Enter the Wrong answer");
    inputw3.style.display="none";
    newdiv.appendChild(inputw3);
    
    const type = document.createElement("input");
    type.setAttribute("name","type" + serial);
    type.setAttribute("type","text");
    type.setAttribute("name","type" + serial);
    type.setAttribute("value","3");
    type.style.display="none";
    newdiv.appendChild(type);
    

    
    })