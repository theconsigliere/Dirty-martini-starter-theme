"use strict";function textArray(){for(var e=document.querySelector(".header-hero-text .div-js").innerHTML.split(" "),t=0;t<e.length;t++)e[t]="<h1 class='gsap-h1'><span class='hidetext'>"+e[t]+"</span></h1>";var r=e.join(" ");console.log(r),document.querySelector(".header-hero-text .div-js").innerHTML=r}textArray();
//# sourceMappingURL=hero-min.js.map