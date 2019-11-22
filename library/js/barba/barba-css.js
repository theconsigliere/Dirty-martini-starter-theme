!(function(t, i) {
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = i())
    : "function" == typeof define && define.amd
    ? define(i)
    : ((t = t || self).barbaCss = i());
})(this, function() {
  var t = "2.1.13";
  return new ((function() {
    function i() {
      (this.name = "@barba/css"),
        (this.version = t),
        (this.prefix = "barba"),
        (this.callbacks = {}),
        (this.t = !1);
    }
    var n = i.prototype;
    return (
      (n.install = function(t) {
        (this.logger = new t.Logger(this.name)),
          this.logger.info(this.version),
          (this.barba = t),
          (this.i = this.i.bind(this)),
          (this.s = this.s.bind(this)),
          (this.h = this.h.bind(this));
      }),
      (n.init = function() {
        this.barba.hooks.before(this.o, this),
          this.barba.hooks.beforeOnce(this.o, this),
          this.barba.hooks.beforeOnce(this.u, this),
          this.barba.hooks.afterOnce(this.m, this),
          this.barba.hooks.beforeLeave(this.P, this),
          this.barba.hooks.afterLeave(this.v, this),
          this.barba.hooks.beforeEnter(this.l, this),
          this.barba.hooks.afterEnter(this.p, this),
          (this.barba.transitions.once = this.i),
          (this.barba.transitions.leave = this.s),
          (this.barba.transitions.enter = this.h),
          this.barba.transitions.store.all.unshift({
            name: "barba",
            once: function() {},
            leave: function() {},
            enter: function() {}
          }),
          this.barba.transitions.store.update();
      }),
      (n.start = function(t, i) {
        try {
          var n = this;
          return (
            n.add(t, i),
            Promise.resolve(n.barba.helpers.nextTick()).then(function() {
              return (
                n.add(t, i + "-active"),
                Promise.resolve(n.barba.helpers.nextTick()).then(function() {})
              );
            })
          );
        } catch (t) {
          return Promise.reject(t);
        }
      }),
      (n.next = function(t, i) {
        try {
          var n = this;
          return (
            (n.t = n.g(t)),
            Promise.resolve(
              n.t
                ? new Promise(function(r) {
                    try {
                      return (
                        (n.cb = r),
                        (n.callbacks[i] = r),
                        t.addEventListener("transitionend", r, !1),
                        Promise.resolve(n.barba.helpers.nextTick()).then(
                          function() {
                            return (
                              n.remove(t, i),
                              n.add(t, i + "-to"),
                              Promise.resolve(
                                n.barba.helpers.nextTick()
                              ).then(function() {})
                            );
                          }
                        )
                      );
                    } catch (t) {
                      return Promise.reject(t);
                    }
                  })
                : (n.remove(t, i),
                  Promise.resolve(n.barba.helpers.nextTick()).then(function() {
                    return (
                      n.add(t, i + "-to"),
                      Promise.resolve(
                        n.barba.helpers.nextTick()
                      ).then(function() {})
                    );
                  }))
            )
          );
        } catch (t) {
          return Promise.reject(t);
        }
      }),
      (n.end = function(t, i) {
        try {
          return (
            this.remove(t, i + "-to"),
            this.remove(t, i + "-active"),
            t.removeEventListener("transitionend", this.callbacks[i]),
            (this.t = !1),
            Promise.resolve()
          );
        } catch (t) {
          return Promise.reject(t);
        }
      }),
      (n.add = function(t, i) {
        t.classList.add(this.prefix + "-" + i);
      }),
      (n.remove = function(t, i) {
        t.classList.remove(this.prefix + "-" + i);
      }),
      (n.o = function(t, i) {
        this.prefix = i.name || "barba";
      }),
      (n.g = function(t) {
        return "0s" !== getComputedStyle(t).transitionDuration;
      }),
      (n.u = function(t) {
        return this.start(t.next.container, "once");
      }),
      (n.i = function(t, i) {
        try {
          var n = this;
          return Promise.resolve(n.barba.hooks.do("once", t, i)).then(
            function() {
              return n.next(t.next.container, "once");
            }
          );
        } catch (t) {
          return Promise.reject(t);
        }
      }),
      (n.m = function(t) {
        return this.end(t.next.container, "once");
      }),
      (n.P = function(t) {
        return this.start(t.current.container, "leave");
      }),
      (n.s = function(t, i) {
        try {
          var n = this;
          return Promise.resolve(n.barba.hooks.do("leave", t, i)).then(
            function() {
              return n.next(t.current.container, "leave");
            }
          );
        } catch (t) {
          return Promise.reject(t);
        }
      }),
      (n.v = function(t) {
        return (
          this.end(t.current.container, "leave"),
          this.barba.transitions.remove(t),
          Promise.resolve()
        );
      }),
      (n.l = function(t) {
        return 1 === this.barba.history.size
          ? Promise.resolve()
          : this.start(t.next.container, "enter");
      }),
      (n.h = function(t, i) {
        try {
          var n = this;
          return Promise.resolve(n.barba.hooks.do("enter", t, i)).then(
            function() {
              return n.next(t.next.container, "enter");
            }
          );
        } catch (t) {
          return Promise.reject(t);
        }
      }),
      (n.p = function(t) {
        return 1 === this.barba.history.size
          ? Promise.resolve()
          : this.end(t.next.container, "enter");
      }),
      i
    );
  })())();
});
//# sourceMappingURL=barba-css.umd.js.map
