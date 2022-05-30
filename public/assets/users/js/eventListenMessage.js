/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************************!*\
  !*** ./resources/assets/users/js/eventListenMessage.js ***!
  \*********************************************************/
Echo["private"]("test-channel").listen('MessageCreateEvent', function (e) {
  console.log(e);
});
/******/ })()
;