let images = ["images/1.jpeg", "images/2.jpeg","images/3.jpeg", "images/4.jpeg", "images/5.jpeg", "images/6.jpeg", "images/7.jpeg", "images/8.jpeg", "images/9.jpeg", "images/10.jpeg", "images/11.jpeg", "images/12.jpeg", "images/13.jpeg", "images/14.jpeg", "images/15.jpeg", "images/16.jpeg", "images/17.jpeg"]

let imgs = document.querySelectorAll('.photo')
let size = images.length;
let x = Math.floor(size * Math.random());



imgs.forEach(function(img){
    img.src = images[x]
})
