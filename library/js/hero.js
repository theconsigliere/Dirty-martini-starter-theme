// Turning hero text into  individual words

function textArray() {
  let TextSplit = document.querySelector(".header-hero-text .div-js").innerHTML;

  let str = TextSplit.split(" ");

  for (var i = 0; i < str.length; i++) {
    str[i] =
      "<h1 class='gsap-h1'><span class='hidetext'>" + str[i] + "</span></h1>";
  }

  let joined = str.join(" ");

  console.log(joined);

  document.querySelector(".header-hero-text .div-js").innerHTML = joined;
}

textArray();
