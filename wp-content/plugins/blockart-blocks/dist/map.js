(()=>{"use strict";function t(r){return t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},t(r)}function r(t,r){(null==r||r>t.length)&&(r=t.length);for(var e=0,n=new Array(r);e<r;e++)n[e]=t[e];return n}var e,n,o,a,i;e=window.blockartUtils,n=e.$$,o=e.domReady,a=e.parseHTML,i=e.toArray,o((function(){var e=i(n(".blockart-map[data-map]"));if(e.length&&"object"===("undefined"==typeof google?"undefined":t(google))&&"object"===t(google.maps)){var o,l,u,f,c=function(t,e){var n="undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(!n){if(Array.isArray(t)||(n=function(t,e){if(t){if("string"==typeof t)return r(t,e);var n=Object.prototype.toString.call(t).slice(8,-1);return"Object"===n&&t.constructor&&(n=t.constructor.name),"Map"===n||"Set"===n?Array.from(t):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(t,e):void 0}}(t))||e&&t&&"number"==typeof t.length){n&&(t=n);var o=0,a=function(){};return{s:a,n:function(){return o>=t.length?{done:!0}:{done:!1,value:t[o++]}},e:function(t){throw t},f:a}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,l=!0,u=!1;return{s:function(){n=n.call(t)},n:function(){var t=n.next();return l=t.done,t},e:function(t){u=!0,i=t},f:function(){try{l||null==n.return||n.return()}finally{if(u)throw i}}}}(e);try{for(c.s();!(o=c.n()).done;){var m,y,d=o.value,s=null===(m=window)||void 0===m?void 0:m[null===(y=d.dataset)||void 0===y?void 0:y.map],p=new google.maps.Map(d,s.map);if(s.marker){s.marker.map=p;var b=new google.maps.Marker(s.marker);s.markerIcon&&b.setIcon((l=s.markerIcon,void 0,void 0,u=a(l,1),f=(new XMLSerializer).serializeToString(u),"data:image/svg+xml;base64,".concat(btoa(f))))}}}catch(t){c.e(t)}finally{c.f()}}}))})();