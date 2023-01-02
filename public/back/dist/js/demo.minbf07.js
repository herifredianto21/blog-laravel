/*!
* Tabler v1.0.0-beta16 (https://tabler.io)
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
*/
!function(t){"function"==typeof define&&define.amd?define(t):t()}((function(){"use strict";function t(t,r){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var r=null==t?null:"undefined"!=typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(null==r)return;var n,o,a=[],l=!0,i=!1;try{for(r=r.call(t);!(l=(n=r.next()).done)&&(a.push(n.value),!e||a.length!==e);l=!0);}catch(t){i=!0,o=t}finally{try{l||null==r.return||r.return()}finally{if(i)throw o}}return a}(t,r)||function(t,r){if(!t)return;if("string"==typeof t)return e(t,r);var n=Object.prototype.toString.call(t).slice(8,-1);"Object"===n&&t.constructor&&(n=t.constructor.name);if("Map"===n||"Set"===n)return Array.from(t);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return e(t,r)}(t,r)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function e(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}for(var r={"menu-position":{localStorage:"tablerMenuPosition",default:"top"},"menu-behavior":{localStorage:"tablerMenuBehavior",default:"sticky"},"container-layout":{localStorage:"tablerContainerLayout",default:"boxed"}},n={},o=0,a=Object.entries(r);o<a.length;o++){var l=t(a[o],2),i=l[0],c=l[1],u=localStorage.getItem(c.localStorage);n[i]=u||c.default}!function(){for(var t=window.location.search.substring(1).split("&"),e=0;e<t.length;e++){var o=t[e].split("="),a=o[0],l=o[1];r[a]&&(localStorage.setItem(r[a].localStorage,l),n[a]=l)}}();var f=document.querySelector("#offcanvasSettings");f&&(f.addEventListener("submit",(function(e){e.preventDefault(),function(e){for(var o=0,a=Object.entries(r);o<a.length;o++){var l=t(a[o],2),i=l[0],c=l[1],u=e.querySelector('[name="settings-'.concat(i,'"]:checked')).value;localStorage.setItem(c.localStorage,u),n[i]=u}window.dispatchEvent(new Event("resize")),new bootstrap.Offcanvas(e).hide()}(f)})),function(e){for(var o=0,a=Object.entries(r);o<a.length;o++){var l=t(a[o],2),i=l[0];l[1];var c=e.querySelector('[name="settings-'.concat(i,'"][value="').concat(n[i],'"]'));c&&(c.checked=!0)}}(f))}));