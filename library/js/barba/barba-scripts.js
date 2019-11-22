const bodyTag = document.querySelector("body");

barba.use(barbaCss);

barba.init({
  // if you want to change on all pages use a transition if not use a view
  transitions: [
    {
      name: "fade",
      // turns on extra barba on page entry
      once() {},
      beforeEnter({ current, next, trigger }) {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }
    }
  ],
  // if you want to change something on a certain page use a view if not use a transition
  views: [
    {
      // added to container as data-barba-namespace so we know area we want to change
      namespace: "feed",
      //before we enter feed we want to run some code
      beforeEnter() {
        bodyTag.classList.add("feed");
      },
      beforeLeave() {
        bodyTag.classList.remove("feed");
      }
    }
  ]
});
