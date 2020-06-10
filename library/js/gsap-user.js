gsap.registerPlugin(ScrollTrigger)

// Homepage

// Title section h4

// gsap.from('.sub_title__container h4', {
//     scrollTrigger: {
//         trigger: '.title-section',
//         start: 'top center',
//         // markers: true
//     },
//     y: '200%',
//     ease: "power1.inOut"
// })


// New Timeline

var tl = gsap.timeline();


// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event) {
  
    window.addEventListener("load", function(){
      
        // place your code here

        // HERO TEXTSIDE IMAGE SIDE

        // make hero visible after everything is loaded
        gsap.to(
            '#hero-textside-imageside', {
                duration: 0,
                visibility:"visible",
            })
            
            
        // animate Hero Image
        tl.from('.js_hero__imageside', {
            duration: 1.2,
            x: '100%',
            ease: Power3.easeOut
        }).from('.js_hero__imageside_image', {
            duration: 2,
            scale: 1.6,
            ease: Power3.easeOut,
            delay: -1.2
        }, "start")

        // Content Animation
        tl.from(['.js_textside__sub_title', '.js_textside__title', '.js_textside__desc'], {
            duration: .8,
            y: 44,
            opacity: 0,
            ease: Power3.easeOut,
            delay: .2,
            stagger: .15
        }, "start" )
        .to('.js_textside__button', {
            opacity: 1,
            duration: .2,
            ease: Power3.easeOut,
            delay: 0
        })
    });
    
  });