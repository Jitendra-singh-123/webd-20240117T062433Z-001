let elem=document.getElementById('click');
console.log(elem);

let elemclass=document.getElementsByClassName('container');
console.log(elemclass);
elemclass[0].style.background='yellow';

console.log(elemclass[0].innerHTML);

console.log(elemclass[0].innerText);
// tn=document.getElementsByTagName('button');
// console.log(tn);
tn=document.getElementsByTagName('div');
console.log(tn);

createdElement=document.createElement('p');
createdElement.innerHTML="This is added paragraph";
tn[0].appendChild(createdElement);

createdElement2=document.createElement('b');
createdElement2.innerHTML="This is created bold";
tn[0].replaceChild(createdElement2,createdElement);
// tn[0].removeChild(createdElement2)  -->removes elements;

console.log(document.location);
console.log(document.title);

selector=document.querySelector('.container');
console.log(selector);

selectorall=document.querySelectorAll('.container');
console.log(selectorall);

function clicked(){
    console.log("Click button was clicked");
    alert("You are not allowed");
}

window.onload=function(){
    console.log("The document was loaded");
}

// firstContainer.addEventListener('click',function(){
//     console.log("cliked on container");
// })

// firstContainer.addEventListener('mouseover',function(){
//     console.log("mouse on container");
// })

// firstContainer.addEventListener('mouseout',function(){
//     console.log("mouse out of container");
// })

// firstContainer.addEventListener('mouseup',function(){
//     console.log("mouse up when clicked on container");
// })

// firstContainer.addEventListener('mousedown',function(){
//     console.log("mouse down when clicked on container");
// })


// click.addEventListener('click',function(){
//      document.querySelectorAll('.container')[1].innerHTML="<b> We have clicked</b>"
//      console.log("cliked on container");
//  })

let prevHTML=document.querySelectorAll('.container')[1].innerHTML;

firstContainer.addEventListener('mouseup',function(){
    document.querySelectorAll('.container')[1].innerHTML=prevHTML;
    console.log("mouse up when clicked on container");
})

firstContainer.addEventListener('mousedown',function(){
    document.querySelectorAll('.container')[1].innerHTML="<b> We have clicked</b>";

    console.log("mouse down when clicked on container");
})

