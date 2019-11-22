"use strict";function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}!function(e,t){"object"==("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).barba=t()}(void 0,(function(){function e(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function t(t,r,n){return r&&e(t.prototype,r),n&&e(t,n),t}function r(){return(r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var n in r)Object.prototype.hasOwnProperty.call(r,n)&&(e[n]=r[n])}return e}).apply(this,arguments)}function n(e,t){e.prototype=Object.create(t.prototype),e.prototype.constructor=e,e.__proto__=t}function o(e){return(o=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function i(e,t){return(i=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function s(e,t,r){return(s=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(e){return!1}}()?Reflect.construct:function(e,t,r){var n=[null];n.push.apply(n,t);var o=new(Function.bind.apply(e,n));return r&&i(o,r.prototype),o}).apply(null,arguments)}function a(e){var t="function"==typeof Map?new Map:void 0;return(a=function(e){if(null===e||-1===Function.toString.call(e).indexOf("[native code]"))return e;if("function"!=typeof e)throw new TypeError("Super expression must either be null or a function");if(void 0!==t){if(t.has(e))return t.get(e);t.set(e,r)}function r(){return s(e,arguments,o(this).constructor)}return r.prototype=Object.create(e.prototype,{constructor:{value:r,enumerable:!1,writable:!0,configurable:!0}}),i(r,e)})(e)}function u(e,t){try{var r=e()}catch(e){return t(e)}return r&&r.then?r.then(void 0,t):r}"undefined"!=typeof Symbol&&(Symbol.iterator||(Symbol.iterator=Symbol("Symbol.iterator"))),"undefined"!=typeof Symbol&&(Symbol.asyncIterator||(Symbol.asyncIterator=Symbol("Symbol.asyncIterator")));var c,h="2.8.0";!function(e){e[e.off=0]="off",e[e.error=1]="error",e[e.warning=2]="warning",e[e.info=3]="info",e[e.debug=4]="debug"}(c||(c={}));var f=c.off,l=function(){function e(e){this.t=e}e.getLevel=function(){return f},e.setLevel=function(e){return f=c[e]};var t=e.prototype;return t.error=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];this.i(console.error,c.error,t)},t.warn=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];this.i(console.warn,c.warning,t)},t.info=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];this.i(console.info,c.info,t)},t.debug=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];this.i(console.log,c.debug,t)},t.i=function(t,r,n){r<=e.getLevel()&&t.apply(console,["["+this.t+"] "].concat(n))},e}(),p=function e(t,r,n){return t instanceof RegExp?function(e,t){if(!t)return e;var r=e.source.match(/\((?!\?)/g);if(r)for(var n=0;n<r.length;n++)t.push({name:n,prefix:null,delimiter:null,optional:!1,repeat:!1,pattern:null});return e}(t,r):Array.isArray(t)?function(t,r,n){for(var o=[],i=0;i<t.length;i++)o.push(e(t[i],r,n).source);return new RegExp("(?:"+o.join("|")+")",x(n))}(t,r,n):function(e,t,r){return k(w(e,r),t,r)}(t,r,n)},d=w,v=b,m=k,g="/",y=new RegExp(["(\\\\.)","(?:\\:(\\w+)(?:\\(((?:\\\\.|[^\\\\()])+)\\))?|\\(((?:\\\\.|[^\\\\()])+)\\))([+*?])?"].join("|"),"g");function w(e,t){for(var r,n=[],o=0,i=0,s="",a=t&&t.delimiter||g,u=t&&t.whitelist||void 0,c=!1;null!==(r=y.exec(e));){var h=r[0],f=r[1],l=r.index;if(s+=e.slice(i,l),i=l+h.length,f)s+=f[1],c=!0;else{var p="",d=r[2],v=r[3],m=r[4],w=r[5];if(!c&&s.length){var b=s.length-1,x=s[b];(!u||u.indexOf(x)>-1)&&(p=x,s=s.slice(0,b))}s&&(n.push(s),s="",c=!1);var k=v||m,A=p||a;n.push({name:d||o++,prefix:p,delimiter:A,optional:"?"===w||"*"===w,repeat:"+"===w||"*"===w,pattern:k?E(k):"[^"+P(A===a?A:A+a)+"]+?"})}}return(s||i<e.length)&&n.push(s+e.substr(i)),n}function b(e){for(var t=new Array(e.length),r=0;r<e.length;r++)"object"==_typeof(e[r])&&(t[r]=new RegExp("^(?:"+e[r].pattern+")$"));return function(r,n){for(var o="",i=n&&n.encode||encodeURIComponent,s=0;s<e.length;s++){var a=e[s];if("string"!=typeof a){var u,c=r?r[a.name]:void 0;if(Array.isArray(c)){if(!a.repeat)throw new TypeError('Expected "'+a.name+'" to not repeat, but got array');if(0===c.length){if(a.optional)continue;throw new TypeError('Expected "'+a.name+'" to not be empty')}for(var h=0;h<c.length;h++){if(u=i(c[h],a),!t[s].test(u))throw new TypeError('Expected all "'+a.name+'" to match "'+a.pattern+'"');o+=(0===h?a.prefix:a.delimiter)+u}}else if("string"!=typeof c&&"number"!=typeof c&&"boolean"!=typeof c){if(!a.optional)throw new TypeError('Expected "'+a.name+'" to be '+(a.repeat?"an array":"a string"))}else{if(u=i(String(c),a),!t[s].test(u))throw new TypeError('Expected "'+a.name+'" to match "'+a.pattern+'", but got "'+u+'"');o+=a.prefix+u}}else o+=a}return o}}function P(e){return e.replace(/([.+*?=^!:${}()[\]|\/\\])/g,"\\$1")}function E(e){return e.replace(/([=!:$\/()])/g,"\\$1")}function x(e){return e&&e.sensitive?"":"i"}function k(e,t,r){for(var n=(r=r||{}).strict,o=!1!==r.start,i=!1!==r.end,s=r.delimiter||g,a=[].concat(r.endsWith||[]).map(P).concat("$").join("|"),u=o?"^":"",c=0;c<e.length;c++){var h=e[c];if("string"==typeof h)u+=P(h);else{var f=h.repeat?"(?:"+h.pattern+")(?:"+P(h.delimiter)+"(?:"+h.pattern+"))*":h.pattern;t&&t.push(h),u+=h.optional?h.prefix?"(?:"+P(h.prefix)+"("+f+"))?":"("+f+")?":P(h.prefix)+"("+f+")"}}if(i)n||(u+="(?:"+P(s)+")?"),u+="$"===a?"$":"(?="+a+")";else{var l=e[e.length-1],p="string"==typeof l?l[l.length-1]===s:void 0===l;n||(u+="(?:"+P(s)+"(?="+a+"))?"),p||(u+="(?="+P(s)+"|"+a+")")}return new RegExp(u,x(r))}p.parse=d,p.compile=function(e,t){return b(w(e,t))},p.tokensToFunction=v,p.tokensToRegExp=m;var A={container:"container",namespace:"namespace",prefix:"data-barba",prevent:"prevent",wrapper:"wrapper"},S=new(function(){function e(){this.o=A,this.u=new DOMParser}var t=e.prototype;return t.toString=function(e){return e.outerHTML},t.toDocument=function(e){return this.u.parseFromString(e,"text/html")},t.toElement=function(e){var t=document.createElement("div");return t.innerHTML=e,t},t.getHtml=function(e){return void 0===e&&(e=document),this.toString(e.documentElement)},t.getWrapper=function(e){return void 0===e&&(e=document),e.querySelector("["+this.o.prefix+'="'+this.o.wrapper+'"]')},t.getContainer=function(e){return void 0===e&&(e=document),e.querySelector("["+this.o.prefix+'="'+this.o.container+'"]')},t.removeContainer=function(e){document.body.contains(e)&&e.parentNode.removeChild(e)},t.addContainer=function(e,t){var r=this.getContainer();r?this.s(e,r):t.appendChild(e)},t.getNamespace=function(e){void 0===e&&(e=document);var t=e.querySelector("["+this.o.prefix+"-"+this.o.namespace+"]");return t?t.getAttribute(this.o.prefix+"-"+this.o.namespace):null},t.getHref=function(e){if(e.tagName&&"a"===e.tagName.toLowerCase()){if("string"==typeof e.href)return e.href;var t=e.getAttribute("href")||e.getAttribute("xlink:href");if(t)return this.resolveUrl(t.baseVal||t)}return null},t.resolveUrl=function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];var n=t.length;if(0===n)throw new Error("resolveUrl requires at least one argument; got none.");var o=document.createElement("base");if(o.href=arguments[0],1===n)return o.href;var i=document.getElementsByTagName("head")[0];i.insertBefore(o,i.firstChild);for(var s,a=document.createElement("a"),u=1;u<n;u++)a.href=arguments[u],o.href=s=a.href;return i.removeChild(o),s},t.s=function(e,t){t.parentNode.insertBefore(e,t.nextSibling)},e}()),j=new(function(){function e(){this.h=[]}var n=e.prototype;return n.init=function(e,t){var r={index:0,ns:t,scroll:{x:window.scrollX,y:window.scrollY},url:e};this.h.push(r),window.history&&window.history.replaceState(r,"",r.url)},n.add=function(e,t,r,n){void 0===r&&(r=null),void 0===n&&(n=!0);var o={index:r||this.size,ns:t,scroll:{x:window.scrollX,y:window.scrollY},url:e};this.h.push(o),n&&window.history&&window.history.pushState(o,"",o.url)},n.remove=function(){this.h.pop()},n.clear=function(){this.h=[]},n.update=function(e){var t=r({},this.current,{},e);this.current=t,window.history&&window.history.replaceState(t,"",t.url)},n.cancel=function(){this.remove(),window.history&&window.history.back()},n.get=function(e){return this.h[e]},n.getDirection=function(e){var t="popstate";return e<this.current.index?t="back":e>this.current.index&&(t="forward"),t},t(e,[{key:"current",get:function(){return this.h[this.h.length-1]},set:function(e){this.h[this.h.length-1]=e}},{key:"previous",get:function(){return this.h.length<2?null:this.h[this.h.length-2]}},{key:"size",get:function(){return this.h.length}}]),e}()),O=function(e,t){try{var r=function(){if(!t.next.html)return Promise.resolve(e).then((function(e){var r=t.next;if(e){var n=S.toElement(e);r.namespace=S.getNamespace(n),r.container=S.getContainer(n),r.html=e,j.update({ns:r.namespace});var o=S.toDocument(e);document.title=o.title}}))}();return Promise.resolve(r&&r.then?r.then((function(){})):void 0)}catch(e){return Promise.reject(e)}},R=p,L={update:O,nextTick:function(){return new Promise((function(e){window.requestAnimationFrame(e)}))},pathToRegexp:R},T=function(){return window.location.origin},q=function(e){return void 0===e&&(e=window.location.href),H(e).port},H=function(e){var t,r=e.match(/:\d+/);if(null===r)/^http/.test(e)&&(t=80),/^https/.test(e)&&(t=443);else{var n=r[0].substring(1);t=parseInt(n,10)}var o,i=e.replace(T(),""),s={},a=i.indexOf("#");a>=0&&(o=i.slice(a+1),i=i.slice(0,a));var u=i.indexOf("?");return u>=0&&(s=M(i.slice(u+1)),i=i.slice(0,u)),{hash:o,path:i,port:t,query:s}},M=function(e){return e.split("&").reduce((function(e,t){var r=t.split("=");return e[r[0]]=r[1],e}),{})},_=function(e){return void 0===e&&(e=window.location.href),e.replace(/(\/#.*|\/|#.*)$/,"")},N={getHref:function(){return window.location.href},getOrigin:T,getPort:q,getPath:function(e){return void 0===e&&(e=window.location.href),H(e).path},parse:H,parseQuery:M,clean:_};function C(e,t,r){return void 0===t&&(t=2e3),new Promise((function(n,o){var i=new XMLHttpRequest;i.onreadystatechange=function(){if(i.readyState===XMLHttpRequest.DONE)if(200===i.status)n(i.responseText);else if(i.status){var t={status:i.status,statusText:i.statusText};r(e,t),o(t)}},i.ontimeout=function(){var n=new Error("Timeout error ["+t+"]");r(e,n),o(n)},i.onerror=function(){var t=new Error("Fetch error");r(e,t),o(t)},i.open("GET",e),i.timeout=t,i.setRequestHeader("Accept","text/html,application/xhtml+xml,application/xml"),i.setRequestHeader("x-barba","yes"),i.send()}))}var D=function(e){return!!e&&("object"==_typeof(e)||"function"==typeof e)&&"function"==typeof e.then};function B(e,t){return void 0===t&&(t={}),function(){for(var r=arguments.length,n=new Array(r),o=0;o<r;o++)n[o]=arguments[o];var i=!1,s=new Promise((function(r,o){t.async=function(){return i=!0,function(e,t){e?o(e):r(t)}};var s=e.apply(t,n);i||(D(s)?s.then(r,o):r(s))}));return s}}var I=new(function(e){function t(){var t;return(t=e.call(this)||this).logger=new l("@barba/core"),t.all=["ready","page","reset","currentAdded","currentRemoved","nextAdded","nextRemoved","beforeOnce","once","afterOnce","before","beforeLeave","leave","afterLeave","beforeEnter","enter","afterEnter","after"],t.registered=new Map,t.init(),t}n(t,e);var r=t.prototype;return r.init=function(){var e=this;this.registered.clear(),this.all.forEach((function(t){e[t]||(e[t]=function(r,n){void 0===n&&(n={}),e.registered.has(t)||e.registered.set(t,new Set),e.registered.get(t).add({ctx:n,fn:r})})}))},r.do=function(e){for(var t=this,r=arguments.length,n=new Array(r>1?r-1:0),o=1;o<r;o++)n[o-1]=arguments[o];if(this.registered.has(e)){var i=Promise.resolve();return this.registered.get(e).forEach((function(e){i=i.then((function(){return B(e.fn,e.ctx).apply(void 0,n)}))})),i.catch((function(r){t.logger.debug("Hook error ["+e+"]"),t.logger.error(r)}))}return Promise.resolve()},r.clear=function(){var e=this;this.all.forEach((function(t){delete e[t]})),this.init()},r.help=function(){this.logger.info("Available hooks: "+this.all.join(","));var e=[];this.registered.forEach((function(t,r){return e.push(r)})),this.logger.info("Registered hooks: "+e.join(","))},t}((function(){}))),$=function(){function e(e){if(this.v=[],"boolean"==typeof e)this.l=e;else{var t=Array.isArray(e)?e:[e];this.v=t.map((function(e){return R(e)}))}}return e.prototype.checkHref=function(e){if("boolean"==typeof this.l)return this.l;var t=H(e).path;return this.v.some((function(e){return null!==e.exec(t)}))},e}(),F=function(e){function t(t){var r;return(r=e.call(this,t)||this).h=new Map,r}n(t,e);var o=t.prototype;return o.set=function(e,t,r){return this.checkHref(e)||this.h.set(e,{action:r,request:t}),{action:r,request:t}},o.get=function(e){return this.h.get(e)},o.getRequest=function(e){return this.h.get(e).request},o.getAction=function(e){return this.h.get(e).action},o.has=function(e){return this.h.has(e)},o.delete=function(e){return this.h.delete(e)},o.update=function(e,t){var n=r({},this.h.get(e),{},t);return this.h.set(e,n),n},t}($),U=function(){return!window.history.pushState},W=function(e){return!e.el||!e.href},K=function(e){var t=e.event;return t.which>1||t.metaKey||t.ctrlKey||t.shiftKey||t.altKey},X=function(e){var t=e.el;return t.hasAttribute("target")&&"_blank"===t.target},z=function(e){var t=e.el;return void 0!==t.protocol&&window.location.protocol!==t.protocol||void 0!==t.hostname&&window.location.hostname!==t.hostname},Y=function(e){var t=e.el;return void 0!==t.port&&q()!==q(t.href)},G=function(e){var t=e.el;return t.getAttribute&&"string"==typeof t.getAttribute("download")},Q=function(e){return e.el.hasAttribute(A.prefix+"-"+A.prevent)},V=function(e){return Boolean(e.el.closest("["+A.prefix+"-"+A.prevent+'="all"]'))},J=function(e){var t=e.href;return _(t)===_()&&q(t)===q()},Z=function(e){function t(t){var r;return(r=e.call(this,t)||this).suite=[],r.tests=new Map,r.init(),r}n(t,e);var r=t.prototype;return r.init=function(){this.add("pushState",U),this.add("exists",W),this.add("newTab",K),this.add("blank",X),this.add("corsDomain",z),this.add("corsPort",Y),this.add("download",G),this.add("preventSelf",Q),this.add("preventAll",V),this.add("sameUrl",J,!1)},r.add=function(e,t,r){void 0===r&&(r=!0),this.tests.set(e,t),r&&this.suite.push(e)},r.run=function(e,t,r,n){return this.tests.get(e)({el:t,event:r,href:n})},r.checkLink=function(e,t,r){var n=this;return this.suite.some((function(o){return n.run(o,e,t,r)}))},t}($),ee=function(e){function t(r,n){var o;void 0===n&&(n="Barba error");for(var i=arguments.length,s=new Array(i>2?i-2:0),a=2;a<i;a++)s[a-2]=arguments[a];return(o=e.call.apply(e,[this].concat(s))||this).error=r,o.label=n,Error.captureStackTrace&&Error.captureStackTrace(function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(o),t),o.name="BarbaError",o}return n(t,e),t}(a(Error)),te=function(){function e(e){void 0===e&&(e=[]),this.logger=new l("@barba/core"),this.all=[],this.once=[],this.m=[{name:"namespace",type:"strings"},{name:"custom",type:"function"}],e&&(this.all=this.all.concat(e)),this.update()}var t=e.prototype;return t.add=function(e,t){switch(e){case"rule":this.m.splice(t.position||0,0,t.value);break;case"transition":default:this.all.push(t)}this.update()},t.resolve=function(e,t){var r=this;void 0===t&&(t={});var n=t.once?this.once:this.all;n=n.filter(t.self?function(e){return e.name&&"self"===e.name}:function(e){return!e.name||"self"!==e.name});var o=new Map,i=n.find((function(n){var i=!0,s={};return!(!t.self||"self"!==n.name)||(r.m.reverse().forEach((function(t){i&&(i=r.p(n,t,e,s),n.from&&n.to&&(i=r.p(n,t,e,s,"from")&&r.p(n,t,e,s,"to")),n.from&&!n.to&&(i=r.p(n,t,e,s,"from")),!n.from&&n.to&&(i=r.p(n,t,e,s,"to")))})),o.set(n,s),i)})),s=o.get(i),a=[];if(a.push(t.once?"once":"page"),t.self&&a.push("self"),s){var u,c=[i];Object.keys(s).length>0&&c.push(s),(u=this.logger).info.apply(u,["Transition found ["+a.join(",")+"]"].concat(c))}else this.logger.info("No transition found ["+a.join(",")+"]");return i},t.update=function(){var e=this;this.all=this.all.map((function(t){return e.P(t)})).sort((function(e,t){return e.priority-t.priority})).reverse().map((function(e){return delete e.priority,e})),this.once=this.all.filter((function(e){return void 0!==e.once}))},t.p=function(e,t,r,n,o){var i=!0,s=!1,a=e,u=t.name,c=u,h=u,f=u,l=o?a[o]:a,p="to"===o?r.next:r.current;if(o?l&&l[u]:l[u]){switch(t.type){case"strings":default:var d=Array.isArray(l[c])?l[c]:[l[c]];p[c]&&-1!==d.indexOf(p[c])&&(s=!0),-1===d.indexOf(p[c])&&(i=!1);break;case"object":var v=Array.isArray(l[h])?l[h]:[l[h]];p[h]&&(p[h].name&&-1!==v.indexOf(p[h].name)&&(s=!0),-1===v.indexOf(p[h].name)&&(i=!1));break;case"function":l[f](r)?s=!0:i=!1}s&&(o?(n[o]=n[o]||{},n[o][u]=a[o][u]):n[u]=a[u])}return i},t.g=function(e,t,r){var n=0;return(e[t]||e.from&&e.from[t]||e.to&&e.to[t])&&(n+=Math.pow(10,r),e.from&&e.from[t]&&(n+=1),e.to&&e.to[t]&&(n+=2)),n},t.P=function(e){var t=this;e.priority=0;var r=0;return this.m.forEach((function(n,o){r+=t.g(e,n.name,o+1)})),e.priority=r,e},e}(),re=function(){function e(e){void 0===e&&(e=[]),this.logger=new l("@barba/core"),this.k=!1,this.store=new te(e)}var r=e.prototype;return r.get=function(e,t){return this.store.resolve(e,t)},r.doOnce=function(e){var t=e.data,r=e.transition;try{var n=function(){o.k=!1},o=this,i=r||{};o.k=!0;var s=u((function(){return Promise.resolve(o.A("beforeOnce",t,i)).then((function(){return Promise.resolve(o.once(t,i)).then((function(){return Promise.resolve(o.A("afterOnce",t,i)).then((function(){}))}))}))}),(function(e){o.k=!1,o.logger.debug("Transition error [before/after/once]"),o.logger.error(e)}));return Promise.resolve(s&&s.then?s.then(n):n())}catch(e){return Promise.reject(e)}},r.doPage=function(e){var t=e.data,r=e.transition,n=e.page,o=e.wrapper;try{var i=function(e){if(s)return e;a.k=!1},s=!1,a=this,c=r||{},h=!0===c.sync||!1;a.k=!0;var f=u((function(){function e(){return Promise.resolve(a.A("before",t,c)).then((function(){var e=!1;function r(r){return e?r:Promise.resolve(a.remove(t)).then((function(){return Promise.resolve(a.A("after",t,c)).then((function(){}))}))}var i=function(){if(h)return u((function(){return Promise.resolve(a.add(t,o)).then((function(){return Promise.resolve(a.A("beforeLeave",t,c)).then((function(){return Promise.resolve(a.A("beforeEnter",t,c)).then((function(){return Promise.resolve(Promise.all([a.leave(t,c),a.enter(t,c)])).then((function(){return Promise.resolve(a.A("afterLeave",t,c)).then((function(){return Promise.resolve(a.A("afterEnter",t,c)).then((function(){}))}))}))}))}))}))}),(function(e){throw new ee(e,"Transition error [sync]")}));var r=function(r){return e?r:u((function(){var e=function(){if(!1!==i)return Promise.resolve(a.add(t,o)).then((function(){return Promise.resolve(a.A("beforeEnter",t,c)).then((function(){return Promise.resolve(a.enter(t,c,i)).then((function(){return Promise.resolve(a.A("afterEnter",t,c)).then((function(){}))}))}))}))}();if(e&&e.then)return e.then((function(){}))}),(function(e){throw new ee(e,"Transition error [before/after/enter]")}))},i=!1,s=u((function(){return Promise.resolve(a.A("beforeLeave",t,c)).then((function(){return Promise.resolve(Promise.all([a.leave(t,c),O(n,t)]).then((function(e){return e[0]}))).then((function(e){return i=e,Promise.resolve(a.A("afterLeave",t,c)).then((function(){}))}))}))}),(function(e){throw new ee(e,"Transition error [before/after/leave]")}));return s&&s.then?s.then(r):r(s)}();return i&&i.then?i.then(r):r(i)}))}var r=function(){if(h)return Promise.resolve(O(n,t)).then((function(){}))}();return r&&r.then?r.then(e):e()}),(function(e){if(a.k=!1,e.name&&"BarbaError"===e.name)throw a.logger.debug(e.label),a.logger.error(e.error),e;throw a.logger.debug("Transition error [page]"),a.logger.error(e),e}));return Promise.resolve(f&&f.then?f.then(i):i(f))}catch(e){return Promise.reject(e)}},r.once=function(e,t){try{return Promise.resolve(I.do("once",e,t)).then((function(){return t.once?B(t.once,t)(e):Promise.resolve()}))}catch(e){return Promise.reject(e)}},r.leave=function(e,t){try{return Promise.resolve(I.do("leave",e,t)).then((function(){return t.leave?B(t.leave,t)(e):Promise.resolve()}))}catch(e){return Promise.reject(e)}},r.enter=function(e,t,r){try{return Promise.resolve(I.do("enter",e,t)).then((function(){return t.enter?B(t.enter,t)(e,r):Promise.resolve()}))}catch(e){return Promise.reject(e)}},r.add=function(e,t){try{return S.addContainer(e.next.container,t),I.do("nextAdded",e),Promise.resolve()}catch(e){return Promise.reject(e)}},r.remove=function(e){try{return S.removeContainer(e.current.container),I.do("currentRemoved",e),Promise.resolve()}catch(e){return Promise.reject(e)}},r.A=function(e,t,r){try{return Promise.resolve(I.do(e,t,r)).then((function(){return r[e]?B(r[e],r)(t):Promise.resolve()}))}catch(e){return Promise.reject(e)}},t(e,[{key:"isRunning",get:function(){return this.k},set:function(e){this.k=e}},{key:"hasOnce",get:function(){return this.store.once.length>0}},{key:"hasSelf",get:function(){return this.store.all.some((function(e){return"self"===e.name}))}},{key:"shouldWait",get:function(){return this.store.all.some((function(e){return e.to&&!e.to.route||e.sync}))}}]),e}(),ne=function(){function e(e){var t=this;this.names=["beforeLeave","afterLeave","beforeEnter","afterEnter"],this.byNamespace=new Map,0!==e.length&&(e.forEach((function(e){t.byNamespace.set(e.namespace,e)})),this.names.forEach((function(e){I[e](t.R(e))})))}return e.prototype.R=function(e){var t=this;return function(r){var n=e.match(/enter/i)?r.next:r.current,o=t.byNamespace.get(n.namespace);return o&&o[e]?B(o[e],o)(r):Promise.resolve()}},e}();Element.prototype.matches||(Element.prototype.matches=Element.prototype.msMatchesSelector||Element.prototype.webkitMatchesSelector),Element.prototype.closest||(Element.prototype.closest=function(e){var t=this;do{if(t.matches(e))return t;t=t.parentElement||t.parentNode}while(null!==t&&1===t.nodeType);return null});var oe={container:void 0,html:void 0,namespace:void 0,url:{hash:void 0,href:void 0,path:void 0,port:void 0,query:{}}};return new(function(){function e(){this.version=h,this.schemaPage=oe,this.Logger=l,this.logger=new l("@barba/core"),this.plugins=[],this.hooks=I,this.dom=S,this.helpers=L,this.history=j,this.request=C,this.url=N}var n=e.prototype;return n.use=function(e,t){var r=this.plugins;r.indexOf(e)>-1?this.logger.warn("Plugin ["+e.name+"] already installed."):"function"==typeof e.install?(e.install(this,t),r.push(e)):this.logger.warn("Plugin ["+e.name+'] has no "install" method.')},n.init=function(e){var t=void 0===e?{}:e,n=t.transitions,o=void 0===n?[]:n,i=t.views,s=void 0===i?[]:i,a=t.schema,u=void 0===a?A:a,c=t.requestError,h=t.timeout,f=void 0===h?2e3:h,p=t.cacheIgnore,d=void 0!==p&&p,v=t.prefetchIgnore,m=void 0!==v&&v,g=t.preventRunning,y=void 0!==g&&g,w=t.prevent,b=void 0===w?null:w,P=t.debug,E=t.logLevel;if(l.setLevel(!0===(void 0!==P&&P)?"debug":void 0===E?"off":E),this.logger.info(this.version),Object.keys(u).forEach((function(e){A[e]&&(A[e]=u[e])})),this.O=c,this.timeout=f,this.cacheIgnore=d,this.prefetchIgnore=m,this.preventRunning=y,this.T=this.dom.getWrapper(),!this.T)throw new Error("[@barba/core] No Barba wrapper found");this.T.setAttribute("aria-live","polite"),this.S();var x=this.data.current;if(!x.container)throw new Error("[@barba/core] No Barba container found");if(this.cache=new F(d),this.prevent=new Z(m),this.transitions=new re(o),this.views=new ne(s),null!==b){if("function"!=typeof b)throw new Error("[@barba/core] Prevent should be a function");this.prevent.add("preventCustom",b)}this.history.init(x.url.href,x.namespace),this.j=this.j.bind(this),this.M=this.M.bind(this),this.L=this.L.bind(this),this.$(),this.plugins.forEach((function(e){return e.init()}));var k=this.data;k.trigger="barba",k.next=k.current,k.current=r({},this.schemaPage),this.hooks.do("ready",k),this.once(k),this.S()},n.destroy=function(){this.S(),this.q(),this.history.clear(),this.hooks.clear(),this.plugins=[]},n.force=function(e){window.location.assign(e)},n.go=function(e,t,r){var n;if(void 0===t&&(t="barba"),this.transitions.isRunning)this.force(e);else if(!(n="popstate"===t?this.history.current&&this.url.getPath(this.history.current.url)===this.url.getPath(e):this.prevent.run("sameUrl",null,null,e))||this.transitions.hasSelf){if("popstate"===t){var o=r.state;null===o?this.history.add(e,"tmp",null,!1):(t=this.history.getDirection(o.index),this.history.add(e,o.ns,o.index,!1))}else this.history.add(e,"tmp");return r&&(r.stopPropagation(),r.preventDefault()),this.page(e,t,n)}},n.once=function(e){try{var t=this;return Promise.resolve(t.hooks.do("beforeEnter",e)).then((function(){function r(){return Promise.resolve(t.hooks.do("afterEnter",e)).then((function(){}))}var n=function(){if(t.transitions.hasOnce){var r=t.transitions.get(e,{once:!0});return Promise.resolve(t.transitions.doOnce({transition:r,data:e})).then((function(){}))}}();return n&&n.then?n.then(r):r()}))}catch(e){return Promise.reject(e)}},n.page=function(e,t,n){try{var o=function(){var e=i.data;return Promise.resolve(i.hooks.do("page",e)).then((function(){var t=u((function(){var t=i.transitions.get(e,{once:!1,self:n});return Promise.resolve(i.transitions.doPage({data:e,page:s,transition:t,wrapper:i.T})).then((function(){i.S()}))}),(function(){0===l.getLevel()&&i.force(e.current.url.href)}));if(t&&t.then)return t.then((function(){}))}))},i=this;i.data.next.url=r({href:e},i.url.parse(e)),i.data.trigger=t;var s=i.cache.has(e)?i.cache.update(e,{action:"click"}).request:i.cache.set(e,i.request(e,i.timeout,i.onRequestError.bind(i,t)),"click").request,a=function(){if(i.transitions.shouldWait)return Promise.resolve(O(s,i.data)).then((function(){}))}();return Promise.resolve(a&&a.then?a.then(o):o())}catch(e){return Promise.reject(e)}},n.onRequestError=function(e){this.transitions.isRunning=!1;for(var t=arguments.length,r=new Array(t>1?t-1:0),n=1;n<t;n++)r[n-1]=arguments[n];var o=r[0],i=r[1],s=this.cache.getAction(o);return this.cache.delete(o),!(this.O&&!1===this.O(e,s,o,i)||("click"===s&&this.force(o),1))},n.prefetch=function(e){var t=this;this.cache.has(e)||this.cache.set(e,this.request(e,this.timeout,this.onRequestError.bind(this,"barba")).catch((function(e){t.logger.error(e)})),"prefetch")},n.$=function(){!0!==this.prefetchIgnore&&(document.addEventListener("mouseover",this.j),document.addEventListener("touchstart",this.j)),document.addEventListener("click",this.M),window.addEventListener("popstate",this.L)},n.q=function(){!0!==this.prefetchIgnore&&(document.removeEventListener("mouseover",this.j),document.removeEventListener("touchstart",this.j)),document.removeEventListener("click",this.M),window.removeEventListener("popstate",this.L)},n.j=function(e){var t=this,r=this.B(e);if(r){var n=this.dom.getHref(r);this.prevent.checkHref(n)||this.cache.has(n)||this.cache.set(n,this.request(n,this.timeout,this.onRequestError.bind(this,r)).catch((function(e){t.logger.error(e)})),"enter")}},n.M=function(e){var t=this.B(e);if(t)return this.transitions.isRunning&&this.preventRunning?(e.preventDefault(),void e.stopPropagation()):void this.go(this.dom.getHref(t),t,e)},n.L=function(e){this.go(this.url.getHref(),"popstate",e)},n.B=function(e){for(var t=e.target;t&&!this.dom.getHref(t);)t=t.parentNode;if(t&&!this.prevent.checkLink(t,e,this.dom.getHref(t)))return t},n.S=function(){var e=this.url.getHref(),t={container:this.dom.getContainer(),html:this.dom.getHtml(),namespace:this.dom.getNamespace(),url:r({href:e},this.url.parse(e))};this.D={current:t,next:r({},this.schemaPage),trigger:void 0},this.hooks.do("reset",this.data)},t(e,[{key:"data",get:function(){return this.D}},{key:"wrapper",get:function(){return this.T}}]),e}())}));
//# sourceMappingURL=barba-min.js.map