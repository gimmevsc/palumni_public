const navList = document.querySelectorAll(".side-nav-item");
const nav = document.querySelector(".side-navbar");

for(navItem of navList){
    navItem.addEventListener("click",()=>{
        nav.classList.add('side-navbar-hide')
    })
}

function onOutNavClick(element, callback) {
    document.addEventListener('touchstart', function(event) {
        
        if (!element.contains(event.target) && event.target != document.querySelector(".side-navbar-toggler")) {
            callback();
        }
    });
}

onOutNavClick(nav, function() {
    nav.classList.add('side-navbar-hide')
});
const nav_toggle = document.querySelector(".side-navbar-toggler");
nav_toggle.addEventListener('click',()=>{
    nav.classList.remove('side-navbar-hide')
    
})

const turnArrow = (num)=>{
    const arrow = document.getElementById("arrow"+num);
    if(arrow.style.transform === "rotate(180deg)"){
        arrow.style.transform = null
    }else{
        arrow.style.transform = "rotate(180deg)"
    }
    
}
const btns = [1,2,3].map(el=> document.getElementById("footer-btn-"+el));
const isOpen = [0,0,0]
for(let btn in btns){
    btns[btn].addEventListener("click",()=>{
        
        for(let i in btns){
            if(btns[i].id !== btns[btn].id && isOpen[i])btns[i].click()
        }
        isOpen[btn] = !isOpen[btn];
    })
    
}

document.addEventListener('DOMContentLoaded', function() {
  var myCarousel = document.querySelector('#carouselExampleIndicators');
  var carousel = new bootstrap.Carousel(myCarousel, {
      interval: 3000,  // Time between slides in milliseconds
      wrap: true      // Whether the carousel should cycle continuously
  });
  
  // Additional custom JS can go here
});
const remove = (element)=>{
    if(document.querySelector(element).classList.contains('act'))document.querySelector(element).classList.remove('act')
}

// script.js
document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        loop: true, // Enable infinite scrolling
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Enable pagination dots
        },
    });

    window.addEventListener('scroll', ()=>{
        const offset = 250;
        const aboutTop = document.querySelector("#about").offsetTop-offset;
        const contactsTop = document.querySelector('#contacts').offsetTop-offset;
        const profileTop = document.querySelector('#profile').offsetTop-offset;
        const servicesTop = document.querySelector('#services').offsetTop-offset;
        const toolsTop = document.querySelector('#tools').offsetTop-offset;
        const scroll = window.scrollY
       
        
        if(scroll>aboutTop)document.querySelector('.about-element').classList.add("act")
        
        if(scroll <aboutTop )remove('.about-element')
        
        if(scroll > profileTop){
            document.querySelector('.profile-element').classList.add("act");
            remove('.about-element')
        }

        if(scroll < profileTop)remove('.profile-element')
            
        if(scroll > servicesTop){
            document.querySelector('.services-element').classList.add("act");
            remove('.profile-element')
        }

        if(scroll < servicesTop)remove('.services-element')

        if(scroll > contactsTop)remove('.services-element')

        if(scroll > toolsTop)document.querySelector('.tools-element').classList.add("act")

        if(scroll < toolsTop)remove('.tools-element')
        
                
        
        const header = document.getElementById('header');
        if (window.scrollY <=50) {
            header.classList.remove("h-scroll");

        } else {
            header.classList.add("h-scroll");

        }


    });
   
});
 //mobile services

 let start;
 let left;
 let f = document.querySelector(".f");
 let s = document.querySelector(".s");
 let t = document.querySelector(".t");
 const width = s.offsetWidth;
 const fL = 0;
 const sL = (window.innerWidth - width) / 2;
 const tL = +window.getComputedStyle(t).getPropertyValue('left').split("px")[0];
 
 const max_swipe = window.innerWidth/2;
 let isOver =true;
 let direction = '';
 let card ;
 let now = Date.now();
 const findCard = () => {
     let cards = document.querySelectorAll(".card");

     for (card of cards) {
         if (!card.classList.contains("s") &&
             !card.classList.contains("f") &&
             !card.classList.contains("t")) {
             return card
         }
     }
 }
 const reVars = () => {
     f = document.querySelector(".f");
     s = document.querySelector(".s");
     t = document.querySelector(".t");
 }
 function foo(event){
     let diff =Date.now()-now;
     
     if(diff>400){
         isOver = false;
         start = event.touches[0].clientX;

         card = findCard();
         reVars()
     }
     f.style = null
     s.style = null
     t.style = null
     t.style.transitionDuration = null;
     direction = '';
     now = Date.now()
 }
 function boo(event){
    
     if(isOver)return
     

     if(left>=70 && direction === "right"){
         card.classList.add("f")

         f.classList.add("s")
         f.classList.remove("f")

         s.classList.add("t")
         s.classList.remove("s")
        //  t.style.transitionDuration = "0s"
        // t.style.left = "210px"
        
        t.classList.remove("t")
        console.log(t)

     }else if(left<=-70 && direction === "left"){
         f.classList.remove("f")

         s.classList.add("f")
         s.classList.remove("s")

         t.classList.add("s")
         t.classList.remove("t")
        //  t.style.transition = ".4s"
     }else{
        //  f.style.transition = ".4s"
        //  t.style.transition = ".4s"

         card.classList.remove("f")
         card.classList.remove("t")
         card.style.left = 'auto';
         card.style.opacity = 0;
     }
     
    //  s.style.transition = ".4s"
     f.style.left = null;
     f.style.right = null;
     f.style.opacity = null;
     f.style.zIndex = null;
     f.style['filter'] = null
     f.style['transform'] = null;
     f.style.transitionDuration = null;

     s.style.left = null;
     s.style.opacity = null;
     s.style.right = null;
     s.style.zIndex = null;
     s.style['filter'] = null
     s.style['transform'] = null;
     s.style.transitionDuration = null;

     t.style.left = null;
     t.style.opacity = null;
     t.style.right = null;
     t.style.zIndex = null; 
     t.style['filter'] = null
     t.style['transform'] = null;
     t.style.transitionDuration = null;
     
    //  setTimeout(()=>{
    //      f.style.transition = ""
    //      s.style.transition = ""
    //      t.style.transition = ""
         
    //  },400)
     isOver = true
     
 }
 function move(event){
     
     left = event.touches[0].clientX - start;

     if(isOver) return
     if(left>0){
        if(direction === ""){
            direction = 'right'
            
        }
        if(direction === 'right'){
            if(Math.abs(left)>=max_swipe){ boo(event);return}
            card.classList.add("f");
            card.style.left = "0px"
            card.style.opacity = Math.min(1, left/(max_swipe))
           //  f.style.opacity = Math.max(0.5, left/(max_swipe)+0.4)
            t.style.opacity = Math.min(1, (max_swipe)/(Math.abs(left)+max_swipe))
            f.style['transform'] = "scale(1.1)"
            s.style['transform'] = "scale(1.03)"
            f.style.left = `${fL + Math.round(left*0.5)}px`;
            s.style.left = `${sL + Math.round(left*0.5)}px`;
            f.style.zIndex = 5;
            f.style['filter'] = `contrast(0.6)`
            

        }

     }else if(left<0){
        if(direction === ""){
            direction = 'left';
        }
        if(direction=== "left"){
            if(Math.abs(left)>=max_swipe){ boo(event);return}
            card.classList.add('t');
            card.style.right = "0px"
            card.style.opacity = Math.min(1, Math.abs(left)/(max_swipe))
           //  t.style.opacity = Math.max(0.5, Math.abs(left)/(max_swipe)+0.4)
            f.style.opacity = Math.min(1, (max_swipe)/(Math.abs(left)+max_swipe))
            t.style.zIndex = 5;
            t.style['transform'] = "scale(1.1)"
            s.style['transform'] = "scale(1.03)"
            
            t.style.left = `${tL + Math.round(left*0.5)}px`;
            s.style.left = `${sL + Math.round(left*0.5)}px`;
        }
       
     }
     f.style.transitionDuration = '0s';
     s.style.transitionDuration = '0s';
     t.style.transitionDuration = '0s';
    //  s.style.opacity =(max_swipe)/(Math.abs(left)+max_swipe)
     s.style['filter'] = `blur(1px) contrast(${(max_swipe)/(Math.abs(left)+max_swipe)})`
     
     
 }
