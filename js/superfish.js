!(function (e, s) {
    "use strict";
    var t = (function () {
        var t = { bcClass: "sf-breadcrumb", menuClass: "sf-js-enabled", anchorClass: "sf-with-ul", menuArrowClass: "sf-arrows" },
            n = (function () {
                var t = /iPhone|iPad|iPod/i.test(navigator.userAgent);
                return (
                    t &&
                        e(s).load(function () {
                            e("body").children().on("click", e.noop);
                        }),
                    t
                );
            })(),
            o = (function () {
                var e = document.documentElement.style;
                return "behavior" in e && "fill" in e && /iemobile/i.test(navigator.userAgent);
            })(),
            i = function (e, s) {
                var n = t.menuClass;
                s.cssArrows && (n += " " + t.menuArrowClass), e.toggleClass(n);
            },
            r = function (s, n) {
                return s
                    .find("li." + n.pathClass)
                    .slice(0, n.pathLevels)
                    .addClass(n.hoverClass + " " + t.bcClass)
                    .filter(function () {
                        return e(this).children(n.popUpSelector).hide().show().length;
                    })
                    .removeClass(n.pathClass);
            },
            a = function (e) {
                e.children("a").toggleClass(t.anchorClass);
            },
            l = function (e) {
                var s = e.css("ms-touch-action");
                (s = "pan-y" === s ? "auto" : "pan-y"), e.css("ms-touch-action", s);
            },
            h = function (s, t) {
                var i = "li:has(" + t.popUpSelector + ")";
                e.fn.hoverIntent && !t.disableHI ? s.hoverIntent(u, p, i) : s.on("mouseenter.superfish", i, u).on("mouseleave.superfish", i, p);
                var r = "MSPointerDown.superfish";
                n || (r += " touchend.superfish"), o && (r += " mousedown.superfish"), s.on("focusin.superfish", "li", u).on("focusout.superfish", "li", p).on(r, "a", t, f);
            },
            f = function (s) {
                var t = e(this),
                    n = t.siblings(s.data.popUpSelector);
                n.length > 0 && n.is(":hidden") && (t.one("click.superfish", !1), "MSPointerDown" === s.type ? t.trigger("focus") : e.proxy(u, t.parent("li"))());
            },
            u = function () {
                var s = e(this),
                    t = v(s);
                clearTimeout(t.sfTimer), s.siblings().superfish("hide").end().superfish("show");
            },
            p = function () {
                var s = e(this),
                    t = v(s);
                n ? e.proxy(c, s, t)() : (clearTimeout(t.sfTimer), (t.sfTimer = setTimeout(e.proxy(c, s, t), t.delay)));
            },
            c = function (s) {
                (s.retainPath = e.inArray(this[0], s.$path) > -1), this.superfish("hide"), this.parents("." + s.hoverClass).length || (s.onIdle.call(d(this)), s.$path.length && e.proxy(u, s.$path)());
            },
            d = function (e) {
                return e.closest("." + t.menuClass);
            },
            v = function (e) {
                return d(e).data("sf-options");
            },
            m = function () {
                if (e(s).width() > 767 && e.fn.superfish.defaults.fakeBg) {
                    var t = e(e.fn.superfish.defaults.fakeBgLimiter),
                        n = e(".sub-menu"),
                        o = e(t).offset(),
                        i = o.left,
                        r = e(n).offset().left,
                        a = e(t).width();
                    e(".fake-bg").css({ left: i - r, width: a });
                }
            };
        return {
            hide: function (s) {
                if (this.length) {
                    var t = this,
                        n = v(t);
                    if (!n) return this;
                    var o = n.retainPath === !0 ? n.$path : "",
                        i = t
                            .find("li." + n.hoverClass)
                            .add(this)
                            .not(o)
                            .removeClass(n.hoverClass)
                            .children(n.popUpSelector),
                        r = n.speedOut;
                    s && (i.show(), (r = 0)),
                        (n.retainPath = !1),
                        n.onBeforeHide.call(i),
                        i.children("li").css({ opacity: 0 }),
                        i.stop(!0, !0).animate(n.animationOut, {
                            duration: r,
                            complete: function () {
                                var s = e(this);
                                n.onHide.call(s);
                            },
                        });
                }
                return this;
            },
            show: function () {
                var s = v(this);
                if (!s) return this;
                var t = this.addClass(s.hoverClass),
                    n = t.children(s.popUpSelector);
                return (
                    s.onBeforeShow.call(n),
                    n.stop(!0, !0).animate(s.animation, {
                        duration: s.speed,
                        step: function () {
                            "none" != e(this).css("display") && m();
                        },
                        complete: function () {
                            s.onShow.call(n), n.children("li").animate({ opacity: 1 }, "normal");
                        },
                    }),
                    this
                );
            },
            destroy: function () {
                return this.each(function () {
                    var s,
                        n = e(this),
                        o = n.data("sf-options");
                    return o
                        ? ((s = n.find(o.popUpSelector).parent("li")),
                          clearTimeout(o.sfTimer),
                          i(n, o),
                          a(s),
                          l(n),
                          n.off(".superfish").off(".hoverIntent"),
                          s.children(o.popUpSelector).attr("style", function (e, s) {
                              return s.replace(/display[^;]+;?/g, "");
                          }),
                          o.$path.removeClass(o.hoverClass + " " + t.bcClass).addClass(o.pathClass),
                          n.find("." + o.hoverClass).removeClass(o.hoverClass),
                          o.onDestroy.call(n),
                          void n.removeData("sf-options"))
                        : !1;
                });
            },
            init: function (n) {
                return (
                    e.fn.superfish.defaults.fakeBg && (e(s).on("resize", m), e(s).on("orientationchange", m), e(".sub-menu").prepend('<div class="fake-bg"></div>'), m()),
                    this.each(function () {
                        var s = e(this);
                        if (s.data("sf-options")) return !1;
                        var o = e.extend({}, e.fn.superfish.defaults, n),
                            f = s.find(o.popUpSelector).parent("li");
                        (o.$path = r(s, o)), s.data("sf-options", o), i(s, o), a(f), l(s), h(s, o), f.not("." + t.bcClass).superfish("hide", !0), o.onInit.call(this);
                    })
                );
            },
        };
    })();
    (e.fn.superfish = function (s) {
        return t[s] ? t[s].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof s && s ? e.error("Method " + s + " does not exist on jQuery.fn.superfish") : t.init.apply(this, arguments);
    }),
        (e.fn.superfish.defaults = {
            popUpSelector: "ul,.sf-mega",
            hoverClass: "sfHover",
            pathClass: "overrideThisToUse",
            fakeBg: !1,
            fakeBgLimiter: ".page",
            pathLevels: 1,
            delay: 600,
            animation: { opacity: "show" },
            animationOut: { opacity: "hide" },
            speed: "fast",
            speedOut: "fast",
            cssArrows: !0,
            disableHI: !1,
            onInit: e.noop,
            onBeforeShow: e.noop,
            onShow: e.noop,
            onBeforeHide: e.noop,
            onHide: e.noop,
            onIdle: e.noop,
            onDestroy: e.noop,
        }),
        e.fn.extend({ hideSuperfishUl: t.hide, showSuperfishUl: t.show });
})(jQuery, window);
