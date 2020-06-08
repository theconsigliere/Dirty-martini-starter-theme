gsap.registerPlugin(ScrollTrigger)

// Homepage

// Title section h4

gsap.from('.sub_title__container h4', {
    scrollTrigger: {
        trigger: '.title-section',
        start: 'top center',
        // markers: true
    },
    y: '200%',
    ease: "power1.inOut"
})