webpackJsonp(["app/js/pay/success-redirect/index"],[function(t,n){"use strict";function e(t){c.find(".js-countdown").text(t),--t>0?setTimeout(function(){e(t)},1e3):window.location.href=c.attr("data-url")}var c=$(".js-turn");e(3)}]);