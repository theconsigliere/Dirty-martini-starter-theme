// GSAP

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event) {
  console.log("DOM loaded");

  // wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener(
    "load",
    function(e) {
      let hideText = CSSRulePlugin.getRule(".hidetext:before");
      let tl = new TimelineMax({});

      tl.set(hideText, {
        height: "100px"
      });

      tl.to(hideText, 1.3, { height: "0px", ease: Power4.easeOut }, 0.15);
    },
    false
  );
});
