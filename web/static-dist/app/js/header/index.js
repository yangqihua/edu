webpackJsonp(["app/js/header/index"],[function(o,n,e){"use strict";function i(o){return o&&o.__esModule?o:{default:o}}var t=e("d684b1eba6c0b776a43a"),c=i(t),a=$(".js-switch-pc"),l=$(".js-switch-mobile");a.length&&a.on("click",function(){c.default.set("PCVersion",1),window.location.reload()}),l.length&&l.on("click",function(){c.default.remove("PCVersion"),window.location.reload()}),$(".js-back").click(function(){1!==history.length?history.go(-1):location.href="/"})}]);