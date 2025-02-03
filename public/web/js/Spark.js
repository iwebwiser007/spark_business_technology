// Slick Slider Js script for Project-with-spark

$(".join-techno").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  infinite: true,
  swipe: true,
  swipeToSlide: true,
  draggable: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 6000,
  touchMove: false,
  vertical: false,
  pauseOnHover: true,
  cssEase: "linear",
  adaptiveHeight: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slidesToShow: 3,
      },
    },
  ],
});

// Slick Slider Js script for Partner-story

$(".partner-company").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  infinite: true,
  swipe: true,
  swipeToSlide: true,
  draggable: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 8000,
  touchMove: false,
  vertical: false,
  pauseOnHover: true,
  cssEase: "linear",
  adaptiveHeight: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slidesToShow: 3,
      },
    },
  ],
});

// window.onload = function () {
//   if (window.innerWidth < 991) {
//   }
// };

if (window.matchMedia("(min-width: 768px)").matches) {
  window.onscroll = function () {
    let currentScrollPos = window.pageYOffset;
    let navbarElement = document.getElementById("ScrollHeader");

    if (currentScrollPos === 0) {
      if (navbarElement) {
        navbarElement.style.top = "55px";
        navbarElement.style.transition = "all 0.5s ease-in";
      }
    } else {
      if (navbarElement) {
        navbarElement.style.top = "0px";
        navbarElement.style.transition = "all 0.5s ease-in";
      }
    }
  };
}

// Header hover dropdown show js

$(".navbar-nav li").hover(function () {
  var isHovered = $(this).is(":hover");
  if (isHovered) {
    $(this).children("ul").stop().slideDown(300);
  } else {
    $(this).children("ul").stop().slideUp(300);
  }
});

// Function to show the loading tab
function showLoadingTab() {
  document.getElementById("loading-tab").style.display = "grid";
}

// Function to hide the loading tab
function hideLoadingTab() {
  document.getElementById("loading-tab").style.display = "none";
}

// Attach the showLoadingTab function to the onload event of the window
window.onload = function () {
  hideLoadingTab(); // Initially hide the loading tab
  showLoadingTab(); // Show the loading tab when the page starts loading
};

// You can simulate some delay to hide the loading tab after a few seconds
setTimeout(function () {
  hideLoadingTab();
}, 2000); // Change 2000 to your desired delay in millisecond


// ========================================
// index page heading animation 
// ========================================


// document.addEventListener("DOMContentLoaded", function () {
    
   
function checkScreenSize() {
    
    const headings = document.querySelectorAll('.splt');
    
    const expertiseImg = document.querySelector('.expertise-img-anime');
    
    let tabBtn1 = document.querySelector('.tab-btn1-anime');
    let tabBtn2 = document.querySelector('.tab-btn2-anime');
    let tabBtn3 = document.querySelector('.tab-btn3-anime');
    let tabBtn4 = document.querySelector('.tab-btn4-anime');
    let tabBtn5 = document.querySelector('.tab-btn5-anime');
    let tabBtn6 = document.querySelector('.tab-btn6-anime');
    
    let tabPaneContent1 = document.querySelector('.tab-pane-content1');
    let tabPaneContent2 = document.querySelector('.tab-pane-content2');
    let tabPaneContent3 = document.querySelector('.tab-pane-content3');
    let tabPaneContent4 = document.querySelector('.tab-pane-content4');
    let tabPaneContent5 = document.querySelector('.tab-pane-content5');
    let tabPaneContent6 = document.querySelector('.tab-pane-content6');
  
    
    let clientSuccessCard1 = document.querySelector('.client-success-card1');
    let clientSuccessCard2 = document.querySelector('.client-success-card2');
    
    if (window.innerWidth < 768) {
      headings.forEach(heading => {
        heading.classList.remove('splt');
      });
      
      expertiseImg.classList.remove('expertise-img-anime');
      
      tabBtn1.classList.remove('tab-btn1-anime');
      tabBtn2.classList.remove('tab-btn2-anime');
      tabBtn3.classList.remove('tab-btn3-anime');
      tabBtn4.classList.remove('tab-btn4-anime');
      tabBtn5.classList.remove('tab-btn5-anime');
      tabBtn6.classList.remove('tab-btn6-anime');
      
      tabPaneContent1.classList.remove('tab-pane-content1');
      tabPaneContent2.classList.remove('tab-pane-content2');
      tabPaneContent3.classList.remove('tab-pane-content3');
      tabPaneContent4.classList.remove('tab-pane-content4');
      tabPaneContent5.classList.remove('tab-pane-content5');
      tabPaneContent6.classList.remove('tab-pane-content6');
      
      clientSuccessCard1.classList.remove('client-success-card1');
      clientSuccessCard2.classList.remove('client-success-card2');

    } else {
      headings.forEach(heading => {
        heading.classList.add('splt');
      });
      
      
      expertiseImg.classList.add('expertise-img-anime');
      
      tabBtn1.classList.add('tab-btn1-anime');
      tabBtn2.classList.add('tab-btn2-anime');
      tabBtn3.classList.add('tab-btn3-anime');
      tabBtn4.classList.add('tab-btn4-anime');
      tabBtn5.classList.add('tab-btn5-anime');
      tabBtn6.classList.add('tab-btn6-anime');
      
      tabPaneContent1.classList.add('tab-pane-content1');
      tabPaneContent2.classList.add('tab-pane-content2');
      tabPaneContent3.classList.add('tab-pane-content3');
      tabPaneContent4.classList.add('tab-pane-content4');
      tabPaneContent5.classList.add('tab-pane-content5');
      tabPaneContent6.classList.add('tab-pane-content6');
      
      clientSuccessCard1.classList.add('client-success-card1');
      clientSuccessCard2.classList.add('client-success-card2');
      
    }
  }

  
  checkScreenSize();

 
  window.addEventListener("resize", checkScreenSize);
    
    
    
    
var myText = new SplitType("#split-heading", { types: "chars" });

splt({});

var tl = gsap.timeline();

tl.from("#split-heading .char", {
      y: 100,
      opacity: 0,
      stagger: 0.02,
      duration: 0.3,
      delay: .5,
    });

  tl.to("#split-heading", {
        delay: .2,
        color: "white",
        backgroundColor:"black",
      });


tl.from("#i1 .char",{
  y:50,
  opacity:0,
  duration:.4,
  stagger:.15,
  ease: "circ.out",
  scrollTrigger:{
    trigger:"#i1 .char",
    start:"top 70%",
    end:"top 55%",
    scrub:"2",
    once:"true"
  }
})



tl.from("#i2 .char",{
  y:50,
  opacity:0,
  duration:.4,
  stagger:.15,
  ease: "circ.out",
  scrollTrigger:{
    trigger:"#i2 .char",
    start:"top 70%",
    end:"top 55%",
    scrub:"2",
    once:"true"
  }
})



// tl.from(".expertise-img-anime",{
//     x:250,
//     opacity:0,
//     scrollTrigger:{
//         trigger:".expertise-img",
//         scroller:"body",
//         start: "top 60%",
//         end:"top 25%",
//         scrub:2,
//          once:"true"
//     }
    
// })



tl.from("#i3 .char",{
  y:50,
  opacity:0,
  duration:.4,
  stagger:.15,
  ease: "circ.out",
  scrollTrigger:{
    trigger:"#i3 .char",
    start:"top 70%",
    end:"top 55%",
    scrub:"2",
    once:"true"
  }
})


tl.from("#i4 .char",{
  y:50,
  opacity:0,
  duration:.4,
  stagger:.15,
  ease: "circ.out",
  scrollTrigger:{
    trigger:"#i4 .char",
    start:"top 70%",
    end:"top 55%",
    scrub:"2",
    once:"true"
  }
})


tl.from(".tab-btn1-anime", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn1-anime",
    scroller: "body",
    start: "top 80%",
    once:true
  },
});

tl.from(".tab-btn2-anime", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn2-anime",
    scroller: "body",
    start: "top 80%",
     once:true
  },
});

tl.from(".tab-btn3-anime", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn3-anime",
    scroller: "body",
    start: "top 80%",
    once:true
  },
});

tl.from(".tab-btn4-anime", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn4-anime",
    scroller: "body",
    start: "top 80%",
    once:true
  },
});

tl.from(".tab-btn5-anime", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn5-anime",
    scroller: "body",
    start: "top 80%",
    once:true
  },
});

tl.from(".tab-btn6-anime", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn6-anime",
    scroller: "body",
    start: "top 80%",
    once:true
  },
});




tl.from(".tab-pane-content1", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn1",
    scroller: "body",
    start: "top 75%",
    once:true
  },
});

tl.from(".tab-pane-content2", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn2",
    scroller: "body",
    start: "top 75%",
    once:true
  },
});

tl.from(".tab-pane-content3", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn3",
    scroller: "body",
    start: "top 75%",
    once:true
  },
});

tl.from(".tab-pane-content4", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn4",
    scroller: "body",
    start: "top 75%",
    once:true
  },
});

tl.from(".tab-pane-content5", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn5",
    scroller: "body",
    start: "top 75%",
    once:true
  },
});

tl.from(".tab-pane-content6", {
  opacity: 0,
  x: 400,
  scrollTrigger: {
    trigger: ".tab-btn6",
    scroller: "body",
    start: "top 75%",
    once:true
  },
});




tl.from(".client-success-card1",{
    x:-250,
    opacity:0,
    scrollTrigger:{
        trigger:".client-success-card1",
        scroller:"body",
        start: "top 60%",
        end:"top 25%",
        scrub:2,
         once:"true"
    }
    
})



tl.from(".client-success-card2",{
    x:250,
    opacity:0,
    scrollTrigger:{
        trigger:".client-success-card2",
        scroller:"body",
        start: "top 60%",
        end:"top 25%",
        scrub:2,
         once:"true"
    }
    
})


// about page animation start

var tl_2 = gsap.timeline();

tl_2.from(".About-banner-gallery .banner-img",{
    opacity:0,
    scale:0,
    stagger:.4,
    scrollTrigger:{
        trigger:".About-banner-gallery",
        scroller:"body",
        scrub:2,
        start:"top 60%",
        end:"top",
        once:"true"
    }
})

// about page animation end

// contact page animation start

var tl_3 = gsap.timeline();

tl_2.from(".projects-badges .project-badge",{
    opacity:0,
    scale:0,
    stagger:1,
  ease: "elastic.out(2,1)",
    scrollTrigger:{
        trigger:".projects-badges .project-badge",
        scroller:"body",
        scrub:2,
        start:"top 70%",
         end:"top 40%",
        once:"true"
    }
})

// contact page animation end

// });


function arrow1(){
  var arrowImage = document.querySelector('.tab-arrow1');
  arrowImage.classList.toggle('rotate');
}

function arrow2(){
  var arrowImage = document.querySelector('.tab-arrow2');
  arrowImage.classList.toggle('rotate');
}

function arrow3(){
  var arrowImage = document.querySelector('.tab-arrow3');
  arrowImage.classList.toggle('rotate');
}

function arrow4(){
  var arrowImage = document.querySelector('.tab-arrow4');
  arrowImage.classList.toggle('rotate');
}

function arrow5(){
  var arrowImage = document.querySelector('.tab-arrow5');
  arrowImage.classList.toggle('rotate');
}

function arrow6(){
  var arrowImage = document.querySelector('.tab-arrow6');
  arrowImage.classList.toggle('rotate');
}