!(function () {
  var t, e;
  ((t = function () {
    !(function t() {
      for (
        var e = document.querySelectorAll("img.lazyestload"), r = e.length;
        r--;

      ) {
        var n = window.innerHeight,
          a = e[r].getBoundingClientRect(),
          i = a.top - n,
          o = a.bottom;
        if (i <= 100 && o >= -100) {
          if (
            (e[r].getAttribute("data-src") &&
              (e[r].src = e[r].getAttribute("data-src")),
            e[r].getAttribute("data-srcset") &&
              (e[r].srcset = e[r].getAttribute("data-srcset")),
            "PICTURE" === e[r].parentElement.tagName)
          )
            for (
              var s = e[r].parentElement.querySelectorAll("source"),
                c = s.length;
              c--;

            )
              s[c].srcset = s[c].getAttribute("data-srcset");
          e[r].addEventListener("load", function () {
            this.classList.remove("lazyestload");
          });
        }
      }
    })();
  }),
  window.addEventListener("scroll", function () {
    clearTimeout(e), (e = setTimeout(t, 200));
  }),
  t)();
})(),
  window.addEventListener("error", function (t) {
    t.preventDefault();
  }),
  window.addEventListener("warn", function (t) {
    t.preventDefault();
  }),
  (console.error = function () {}),
  (console.warn = function () {});