webpackJsonp(["app/js/courseset-manage/cover/index"],[function(n,e,t){"use strict";function a(n){return n&&n.__esModule?n:{default:n}}function o(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}var r=function(){function n(n,e){for(var t=0;t<e.length;t++){var a=e[t];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(n,a.key,a)}}return function(e,t,a){return t&&n(e.prototype,t),a&&n(e,a),e}}(),u=t("0f84c916401868c4758e"),c=a(u),i=t("b334fd7e4c5a19234db2"),f=a(i),l=function(){function n(){o(this,n),this.init()}return r(n,[{key:"init",value:function(){new c.default({element:"#upload-picture-btn",onUploadSuccess:function(n,e){var t=$("#upload-picture-btn").data("gotoUrl");(0,f.default)("success",Translator.trans("上传成功！"),1),document.location.href=t}})}}]),n}();new l}]);