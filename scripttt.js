let menu=document.querySelector("#bars");
let navbar= document.querySelector(".navbarr");


let section=document.querySelectorAll('section');
let navlinks=document.querySelectorAll('header .navbarr a');








menu.onclick=()=>{

    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

}



window.onscroll=()=>{

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    section.forEach(sec=>{
      let top=window.scrollY;
      let height= sec.offsetHeight;
      let offset= sec.offsetTop - 150;
      let id= sec.getAttribute('id');
      if(top=>offset && top< offset+height){
        navlinks.forEach(links=>{
          links.classList.remove('active');
          let navlinks=document.querySelector('header .navbarr a[href*='+id+']').classList.add('active');


        });

      };


    });


}

document.querySelector('#search-icon').onclick=()=>{
document.querySelector('#search-form').classList.toggle('active');

}


document.querySelector('#close').onclick=()=>{
    document.querySelector('#search-form').classList.remove('active');
       
    }



// var swiper = new Swiper(".home-slider", {
//       spaceBetween: 30,
//        centeredSlides: true,
//        autoplay: {
//          delay: 2500,
//          disableOnInteraction: false,
//        },
//        pagination: {
//          el: ".swiper-pagination",
//          clickable: true,
//        },
//      loop:true,
//      });

