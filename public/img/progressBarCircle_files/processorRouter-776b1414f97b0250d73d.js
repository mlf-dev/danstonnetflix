!function(E){function _(_){for(var e,n,r=_[0],A=_[1],L=_[2],O=0,o=[];O<r.length;O++)n=r[O],T[n]&&o.push(T[n][0]),T[n]=0;for(e in A)Object.prototype.hasOwnProperty.call(A,e)&&(E[e]=A[e]);for(R&&R(_);o.length;)o.shift()();return t.push.apply(t,L||[]),S()}function S(){for(var E,_=0;_<t.length;_++){for(var S=t[_],e=!0,r=1;r<S.length;r++){var A=S[r];0!==T[A]&&(e=!1)}e&&(t.splice(_--,1),E=n(n.s=S[0]))}return E}var e={},T={12:0},t=[];function n(_){if(e[_])return e[_].exports;var S=e[_]={i:_,l:!1,exports:{}};return E[_].call(S.exports,S,S.exports,n),S.l=!0,S.exports}n.e=function(E){var _=[],S=T[E];if(0!==S)if(S)_.push(S[2]);else{var e=new Promise(function(_,e){S=T[E]=[_,e]});_.push(S[2]=e);var t,r=document.createElement("script");r.charset="utf-8",r.timeout=120,n.nc&&r.setAttribute("nonce",n.nc),r.src=function(E){return n.p+"js/"+({}[E]||E)+"-776b1414f97b0250d73d.chunk.js"}(E),t=function(_){r.onerror=r.onload=null,clearTimeout(A);var S=T[E];if(0!==S){if(S){var e=_&&("load"===_.type?"missing":_.type),t=_&&_.target&&_.target.src,n=new Error("Loading chunk "+E+" failed.\n("+e+": "+t+")");n.type=e,n.request=t,S[1](n)}T[E]=void 0}};var A=setTimeout(function(){t({type:"timeout",target:r})},12e4);r.onerror=r.onload=t,document.head.appendChild(r)}return Promise.all(_)},n.m=E,n.c=e,n.d=function(E,_,S){n.o(E,_)||Object.defineProperty(E,_,{enumerable:!0,get:S})},n.r=function(E){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(E,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(E,"__esModule",{value:!0})},n.t=function(E,_){if(1&_&&(E=n(E)),8&_)return E;if(4&_&&"object"==typeof E&&E&&E.__esModule)return E;var S=Object.create(null);if(n.r(S),Object.defineProperty(S,"default",{enumerable:!0,value:E}),2&_&&"string"!=typeof E)for(var e in E)n.d(S,e,function(_){return E[_]}.bind(null,e));return S},n.n=function(E){var _=E&&E.__esModule?function(){return E.default}:function(){return E};return n.d(_,"a",_),_},n.o=function(E,_){return Object.prototype.hasOwnProperty.call(E,_)},n.p="https://static.codepen.io/assets/packs/",n.oe=function(E){throw console.error(E),E};var r=(self||this).webpackJsonp=(self||this).webpackJsonp||[],A=r.push.bind(r);r.push=_,r=r.slice();for(var L=0;L<r.length;L++)_(r[L]);var R=A;t.push([1459,0]),S()}({1459:function(E,_,S){"use strict";S.r(_);var e={};S.r(e),S.d(e,"postMessage",function(){return A}),S.d(e,"run",function(){return L});var T={};S.r(T),S.d(T,"run",function(){return I});var t,n=S(10),r=S.n(n),A=function(E){return new Promise(function(_){t.onmessage=function(E){_(function(E){if(window.__feature_npm_enabled)return E;var _=E.errors,S=E.payload;if(!_)return E;var e=_.filter(function(E){return"error"===E.errorType});return{errors:e,payload:{js:r()({},S.js,{errors:e})}}}(E.data))},t.postMessage(E)})},L=function(E){return new Promise(function(E){return t?E():S.e(17).then(S.t.bind(null,1475,7)).then(function(_){var S=_.default;t=S(),E()})}).then(function(){return A(E.js)})},R=S(304),O=S.n(R),o=S(44),I=function(E){var _=function(E){var _=O()(JSON.stringify(E));return window.__preprocessors_url+"/process/"+_+"?token="+window.__jwt}(E);return Object(o.a)(_,E)},u={BABEL:"babel"},C="js",D="babel",U="preprocessors-service",P=function(E){return Object.keys(E).reduce(function(_,S){var e=function(E){switch(E.contentType){case C:switch(E.syntax){case u.BABEL:case u.NONE:return D;default:return U}default:return U}}(E[S]);return _[e]||(_[e]={}),_[e][S]=E[S],_},{})},c=function(E){var _=P(E);return Object.keys(_).map(function(E){return function(E){switch(E){case D:return e;default:return T}}(E).run(_[E])})},s=function(E){return E.reduce(function(E,_){return E.payload=Object.assign({},E.payload,_.payload),_.success||(E.success=!1,E.errors=_.errors),E},{errors:null,payload:{},success:!0})},a={route:function(E,_){var S=c(E);Promise.all(S).then(s).then(function(S){S.callbackId=E.callbackId,_(S)}).catch(function(E){return console.error("Error processing Pen"),console.error(E),E})}};window.ProcessorRouter=a},44:function(E,_,S){"use strict";(function(E){S.d(_,"c",function(){return R}),S.d(_,"g",function(){return O}),S.d(_,"f",function(){return o}),S.d(_,"e",function(){return I}),S.d(_,"b",function(){return u}),S.d(_,"d",function(){return C}),S.d(_,"a",function(){return D});var e=S(48),T=S.n(e),t=S(134),n=S.n(t),r=S(84),A=function(){},L=function(_,S){return _.set("X-CSRF-Token","test"===E.env.ENV?"csrfToken":document.querySelector('meta[name="csrf-token"]').getAttribute("content")).set("X-Requested-With","XMLHttpRequest").accept("*/*").send(S)},R=function(_,S){"test"===E.env.ENV&&(S.url="https://codepen.test"+S.url);var e=S.dispatch,t=S.getState,n=S.method,R=S.url,O=S.customFailHandler||_.error(e,S),o=S.customFailHandler||_.serverError(e,S),I=S.customFailHandler||_.fail(e,S),u=S.customFailHandler||_.timeout(e,S),C=S.onSuccess||A,D=t().requests,U="".concat(n,"_").concat(R);return!D[U]&&(e(Object(r.b)(U)),function(E){var _=E.method,S=E.url,e=E.params,t=T.a[_](S);return"get"===_?t.query(e):L(t,e)}(S).timeout(12e5).end(function(E,_){return e(Object(r.a)(U)),E?E.timeout?u():E.status?404===E.status&&S.custom404Handler?S.custom404Handler():o(E.response):O(E):200===_.status?C(_.body):I(_)}))},O=function(_,S,e){return"test"===E.env.ENV&&(_="https://codepen.test"+_),L(T.a.post(_),S).end(function(E,_){e(E,_)})},o=function(E){var _;T.a.post(E.url).send((_=E.params,Object.keys(_).map(function(E){return encodeURIComponent(E)+"="+encodeURIComponent(_[E])}).join("&"))).accept("*/*").end(function(_,S){E.onSuccess(_,S)})},I=function(E){T.a.get(E.url).then(function(_){E.onSuccess(_)}).catch(function(_){E.onError&&E.onError(_)})},u=function(E){T.a.get(E.url).use(n()({timeout:1e4})).end(function(_,S){E.onSuccess(S)})},C=function(E,_,S){var e=new FormData;Object.keys(_).forEach(function(E){e.append(E,_[E])}),T.a.post(E).send(e).end(function(E,_){S(E,_)})},D=function(E,_){return new Promise(function(S){var e=new XMLHttpRequest;e.onload=function(){e.status>=200&&e.status<300?S(JSON.parse(e.responseText)):S({error:{message:"Server Error",request:e}})},e.onerror=function(){S({error:{message:"Request Error",request:e}})},e.open("POST",E,!0),e.timeout=3e4,e.setRequestHeader("Content-Type","text/plain; charset=utf-8"),e.send(JSON.stringify(_))})}}).call(this,S(77))},84:function(E,_,S){"use strict";S.d(_,"b",function(){return T}),S.d(_,"a",function(){return t});var e=S(9),T=function(E){return{type:e.a.SEND_REQUEST,payload:{requestKey:E}}},t=function(E){return{type:e.a.RECEIVE_REQUEST,payload:{requestKey:E}}}},9:function(E,_,S){"use strict";_.a={ADD_NEW_FILE:"ADD_NEW_FILE",ADD_NEW_FILES_AND_FOLDERS:"ADD_NEW_FILES_AND_FOLDERS",DUPLICATE_FILE:"DUPLICATE_FILE",UPDATE_NEWEST_FILE:"UPDATE_NEWEST_FILE",UPDATE_FILE_NAME:"UPDATE_FILE_NAME",UPDATE_FILE_CONTENT:"UPDATE_FILE_CONTENT",RESET_FILE_CONTENT:"RESET_FILE_CONTENT",UPDATE_FILE_ERRORS:"UPDATE_FILE_ERRORS",UPDATE_MEDIA_FILES:"UPDATE_MEDIA_FILES",FLUSH_FILES_CONTENT:"FLUSH_FILES_CONTENT",ADD_FILE_ERROR:"ADD_FILE_ERROR",BABEL_ENTRY_FILE_ERROR:"BABEL_ENTRY_FILE_ERROR",CLEAR_FILE_ERRORS:"CLEAR_FILE_ERRORS",SET_FILE_CONTENT_TO_LOADING:"SET_FILE_CONTENT_TO_LOADING",SET_FILE_CONTENT_LOAD_ERROR:"SET_FILE_CONTENT_LOAD_ERROR",UPDATE_DRAGGED_FILE_LOCATION:"UPDATE_DRAGGED_FILE_LOCATION",RECEIVE_FILES_SAVE_SUCCESS:"RECEIVE_FILES_SAVE_SUCCESS",FILE_FINISHED_COMPILING:"FILE_FINISHED_COMPILING",FILE_FINISHED_PROCESSING:"FILE_FINISHED_PROCESSING",FILE_STARTED_PROCESSING:"FILE_STARTED_PROCESSING",RELOAD_OPEN_PROCESSED_FILES:"RELOAD_OPEN_PROCESSED_FILES",DELETE_FILE:"DELETE_FILE",DELETE_FILES:"DELETE_FILES",CREATE_NEW_FILE:"CREATE_NEW_FILE",UPDATE_NEW_FILE_NAME:"UPDATE_NEW_FILE_NAME",CANCEL_NEW_FILE_NAME:"CANCEL_NEW_FILE_NAME",FINISHED_CREATING_NEW_FILE:"FINISHED_CREATING_NEW_FILE",ADD_OPEN_FILE:"ADD_OPEN_FILE",SET_OPEN_FILES:"SET_OPEN_FILES",UPDATE_FILE_DRAGGING_STATE:"UPDATE_FILE_DRAGGING_STATE",UPDATE_FILE_DRAGGING_OVER_STATE:"UPDATE_FILE_DRAGGING_OVER_STATE",MANUAL_FILE_UPLOAD:"MANUAL_FILE_UPLOAD",TOGGLE_FOLDER_OPEN_STATE:"TOGGLE_FOLDER_OPEN_STATE",SET_EDITING:"SET_EDITING",SET_EDITING_WITH_FILE_NAME:"SET_EDITING_WITH_FILE_NAME",SET_RENAMING_FILE:"SET_RENAMING_FILE",SET_SIDEBAR_SELECTED:"SET_SIDEBAR_SELECTED",SET_PROJECT_TITLE_EDITING_STATE:"SET_PROJECT_TITLE_EDITING_STATE",SET_LAYOUT_STATE:"SET_LAYOUT_STATE",SET_RENDERING_FILE:"SET_RENDERING_FILE",TRIGGER_RENDER:"TRIGGER_RENDER",SET_CANCELLED_RENDER:"SET_CANCELLED_RENDER",ADD_GULP_LOG:"ADD_GULP_LOG",SET_GULP_CONSOLE_OPEN_STATE:"SET_GULP_CONSOLE_OPEN_STATE",CLEAR_GULP_CONSOLE:"CLEAR_GULP_CONSOLE",UPDATE_PROCESSING_QUEUE:"UPDATE_PROCESSING_QUEUE",UPDATE_PROCESSING_SAVE_STATUS:"UPDATE_PROCESSING_SAVE_STATUS",CLEAR_ALL_PROCESSING_INDICATORS:"CLEAR_ALL_PROCESSING_INDICATORS",UPDATE_RESOURCE_SEARCH_TYPE:"UPDATE_RESOURCE_SEARCH_TYPE",UPDATE_RESOURCE_SEARCH_TERM:"UPDATE_RESOURCE_SEARCH_TERM",UPDATE_RESURCE_SEARCH_RESULTS:"UPDATE_RESOURCE_SEARCH_RESULTS",TOGGLE_EXTERNAL_RESOURCES:"TOGGLE_EXTERNAL_RESOURCES",TOGGLE_DIALOG:"TOGGLE_DIALOG",CLOSE_THIS_DIALOG:"CLOSE_THIS_DIALOG",CLOSE_ALL_POPUPS:"CLOSE_ALL_POPUPS",SET_PROJECT_DELETE_DIALOG_INPUT:"SET_PROJECT_DELETE_DIALOG_INPUT",OPEN_MODAL:"OPEN_MODAL",CLOSE_ALL_MODALS:"CLOSE_ALL_MODALS",ADD_MESSAGE:"ADD_MESSAGE",CLEAR_MESSAGES:"CLEAR_MESSAGES",RECIEVE_PROJECT_UI_STATE_SAVE_SUCCESS:"RECIEVE_PROJECT_UI_STATE_SAVE_SUCCESS",DEPLOYMENT_IN_PROGRESS:"DEPLOYMENT_IN_PROGRESS",FAILED_TO_DEPLOY:"FAILED_TO_DEPLOY",UPDATE_CNAME_STATUS:"UPDATE_CNAME_STATUS",OPEN_CONTEXT_MENU:"OPEN_CONTEXT_MENU",CLOSE_CONTEXT_MENU:"CLOSE_CONTEXT_MENU",UPDATE_EXPORT_STATUS:"UPDATE_EXPORT_STATUS",RECEIVE_PROJECT_SAVE_SUCCESS:"RECEIVE_PROJECT_SAVE_SUCCESS",RECEIVE_PROJECT_SAVE_FAILURE:"RECEIVE_PROJECT_SAVE_FAILURE",RECEIVE_UPLOADS_SAVE_SUCCESS:"RECEIVE_UPLOADS_SAVE_SUCCESS",ROLLBACK_STATE:"ROLLBACK_STATE",ROLLBACK_UPLOAD_STATE:"ROLLBACK_UPLOAD_STATE",RECEIVE_PROJECT_DELETE_SUCCESS:"RECEIVE_PROJECT_DELETE_SUCCESS",RECEIVE_PROJECT_DELETE_FAILURE:"RECEIVE_PROJECT_DELETE_FAILURE",RECIEVE_SMS_SUCCESS:"RECIEVE_SMS_SUCCESS",RECIEVE_SMS_FAILURE:"RECIEVE_SMS_FAILURE",UPDATE_PROJECT:"UPDATE_PROJECT",UPDATE_PROJECT_EDITOR_SETTINGS:"UPDATE_PROJECT_EDITOR_SETTINGS",UPDATE_PROJECT_USER:"UPDATE_PROJECT_USER",UPDATE_PROCESSED_PROJECT:"UPDATE_PROCESSED_PROJECT",UPDATE_USER_TEAM:"UPDATE_USER_TEAM",UPDATE_READONLY:"UPDATE_READONLY",UPDATE_OTHER_EDITORS_OPEN:"UPDATE_OTHER_EDITORS_OPEN",RECIEVE_UPDATE_USER_TEAM_FAILURE:"RECIEVE_UPDATE_USER_TEAM_FAILURE",RECEIVE_BOILERPLATES_SUCCESS:"RECEIVE_BOILERPLATES_SUCCESS",RECEIVE_BOILERPLATES_FAILURE:"RECEIVE_BOILERPLATES_FAILURE",RECEIVE_CLONE_SUCCESS:"RECEIVE_CLONE_SUCCESS",RECEIVE_CLONE_FAILURE:"RECEIVE_CLONE_FAILURE",UPDATE_FILE_SAVE_QUEUE:"UPDATE_FILE_SAVE_QUEUE",UPDATE_PROJECT_UPLOADS_QUEUE:"UPDATE_PROJECT_UPLOADS_QUEUE",UPDATE_PROJECT_DEPLOY_STATUS:"UPDATE_PROJECT_DEPLOY_STATUS",UPDATE_SCREENSHOT_STATUS:"UPDATE_SCREENSHOT_STATUS",UPDATE_PROJECT_UPLOADS_STATE:"UPDATE_PROJECT_UPLOADS_STATE",UPLOADS_PROCESS_COMPLETE:"UPLOADS_PROCESS_COMPLETE",RECEIVE_GLOBAL_ASSETS_SUCCESS:"RECEIVE_GLOBAL_ASSETS_SUCCESS",RECEIVE_GLOBAL_ASSETS_FAILURE:"RECEIVE_GLOBAL_ASSETS_FAILURE",UPDATE_ASSET_SEARCH:"UPDATE_ASSET_SEARCH",ADD_ASSET_TO_UPLOAD_QUEUE:"ADD_ASSET_TO_UPLOAD_QUEUE",REMOVE_ASSET_FROM_UPLOAD_QUEUE:"REMOVE_ASSET_FROM_UPLOAD_QUEUE",RECEIVE_GLOBAL_ASSET_UPLOAD_SUCCESS:"RECEIVE_GLOBAL_ASSET_UPLOAD_SUCCESS",RECEIVE_GLOBAL_ASSET_UPLOAD_FAILURE:"RECEIVE_GLOBAL_ASSET_UPLOAD_FAILURE",RECEIVE_GLOBAL_ASSET_DELETE_FAILURE:"RECEIVE_GLOBAL_ASSET_DELETE_FAILURE",ADD_GLOBAL_ASSET_DATA_TO_LIST:"ADD_GLOBAL_ASSET_DATA_TO_LIST",REMOVE_GLOBAL_ASSET_DATA_FROM_LIST:"REMOVE_GLOBAL_ASSET_DATA_FROM_LIST",UPDATE_ASSET_AFTER_SUCCESSFUL_UPLOAD:"UPDATE_ASSET_AFTER_SUCCESSFUL_UPLOAD",RECEIVED_PHOTOS:"RECEIVED_PHOTOS",UPDATE_FILE_SEARCH:"UPDATE_FILE_SEARCH",SET_FILE_SEARCH:"SET_FILE_SEARCH",UPDATE_FILES_ACTIVE_FILE:"UPDATE_FILES_ACTIVE_FILE",SET_SPINNING_STATE:"SET_SPINNING_STATE",SEND_REQUEST:"SEND_REQUEST",RECEIVE_REQUEST:"RECEIVE_REQUEST",USER_HAS_LOGGED_OUT:"USER_HAS_LOGGED_OUT"}}});
//# sourceMappingURL=processorRouter-776b1414f97b0250d73d.js.map