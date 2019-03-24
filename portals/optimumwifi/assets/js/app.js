/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__app_scss__ = __webpack_require__(1);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__app_scss___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__app_scss__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__index_html__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__index_html___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__index_html__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__login_html__ = __webpack_require__(3);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__login_html___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__login_html__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__help_html__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__help_html___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_3__help_html__);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__error_html__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__error_html___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4__error_html__);


 // easiest way to get webpack to serve it




var app = new Vue({
  el: '#myApp',
  data: {
    inlineError: false,
    pageError: false,
    isLoginError: false,
    isLoading: false,
    loadingMessage: '',
    pageTitle: '',
    mso: ''
  },
  created: function created() {
    // do this when page is loaded
  },
  mounted: function mounted() {
    var btns = document.querySelectorAll('.cw-expansion-panel__btn');
    // Ugh. IE doesn't support NodeList.forEach()
    // btns.forEach((el) => {
    //   el.addEventListener('click', this.handleClick);
    // });
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener('click', this.handleAccordionClick);
    }

    // Check which MSO they clicked
    this.mso = this.getQueryVariable('mso') || 'spectrum';

    // Setup to hide focus outlines for mouse users
    // Always start with focus hidden
    document.body.classList.add('cw-hide-focus');
    document.addEventListener('keydown', this.showFocusHandler_);
  },
  methods: {
    showFocusHandler_: function showFocusHandler_(evt) {
      document.body.classList.remove('cw-hide-focus');
      document.removeEventListener('keydown', this.showFocusHandler_);
      document.addEventListener('click', this.hideFocusHandler_);
    },
    hideFocusHandler_: function hideFocusHandler_(evt) {
      // If it is a "legit" move and not autoscroll from key navigation, like arrow keys or tabs
      // Also, an ENTER key on a button actually emits a MouseClick, so we have to differentiate by comparing `clientX/Y`
      if (evt.type !== 'mousemove' && evt.clientX !== 0 && evt.clientY !== 0 || evt.movementX || evt.movementY) {
        document.body.classList.add('cw-hide-focus');
        document.removeEventListener('click', this.hideFocusHandler_);
        document.addEventListener('keydown', this.showFocusHandler_);
      }
    },
    getQueryVariable: function getQueryVariable(variable) {
      var query = window.location.search.substring(1);
      var vars = query.split('&');
      for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (pair[0] === variable) {
          return pair[1];
        }
      }
      return false;
    },
    validate: function validate(id) {
      var input = document.getElementById(id);

      if (input.value.trim() === '') {
        input.classList.add('cw-form-control--danger');
        input.setAttribute('aria-invalid', 'true');
        var msg = id === 'username-input' ? 'Please enter your username.' : 'Please enter your password.';
        var err = document.getElementById(id + '-error');
        err.innerHTML = msg;
      } else {
        input.classList.remove('cw-form-control--danger');
        input.setAttribute('aria-invalid', 'false');
        var _err = document.getElementById(id + '-error');
        _err.innerHTML = '';
      }

      // If there is an inline error
      if (document.getElementsByClassName('cw-form-control--danger').length) {
        this.inlineError = true;
      } else {
        this.inlineError = false;
      }
    },
    signIn: function signIn(evt) {
    // window.alert('signin');
      var alert = document.getElementById('login-error');
      var alertMsg = document.getElementById('login-error__msg');
      
      this.validate('username-input');
      this.validate('password-input');
      
      // If there are inline errors
      if (this.inlineError) {
        this.pageError = true;
        alertMsg.innerHTML = '';
        alertMsg.innerHTML = 'Please correct the following errors.';

        // Have to wait for the alert to render before focusing
        setTimeout(function () {
          alert.focus();
        }, 0);
      } else {
        this.openModal();
        //setTimeout(this.submitError, 5000);
      }
    },
    submitError: function submitError() {
      this.closeModal();
      var username = document.getElementById('username-input').value.trim();

      if (username === 'error_page') {
        window.location = '/error.html';
      } else {
        var alert = document.getElementById('login-error');
        var alertMsg = document.getElementById('login-error__msg');
        var msg = 'The info you entered doesn\'t match our records. Please try again.';
        if (username === 'unknown') {
          msg = 'We\'re sorry, something didn\'t work quite right. Please try again.';
        }

        this.pageError = true;
        alertMsg.innerHTML = '';
        alertMsg.innerHTML = msg;

        // Have to wait for the alert to render before focusing
        setTimeout(function () {
          alert.focus();
        }, 0);
      }
    },
    openModal: function openModal() {
      var status = document.getElementById('modal-label');
      status.innerHTML = 'Signing you in...';
      document.body.classList.add('cw-modal-scroll-lock');
      var modal = document.getElementById('modal');
      modal.classList.add('cw-modal-open');
      document.forms[0].submit();
    },
    closeModal: function closeModal() {
      var status = document.getElementById('modal-label');
      status.innerHTML = '';
      document.body.classList.remove('cw-modal-scroll-lock');
      var modal = document.getElementById('modal');
      modal.classList.remove('cw-modal-open');
    },
    handleAccordionClick: function handleAccordionClick(evt) {
      var panel = evt.target.parentNode.parentNode;
      this.togglePanel(panel);
    },
    togglePanel: function togglePanel(panel) {

      // Identify existing expanded panel
      var expanded = document.querySelectorAll('.cw-expansion-panel.expanded')[0];

      if (expanded) {
        this.collapsePanel(expanded);
      }

      // If they clicked a new panel
      if (panel !== expanded) {
        this.expandPanel(panel);
      }
    },
    expandPanel: function expandPanel(panel) {
      var trigger = panel.getElementsByClassName('cw-expansion-panel__btn')[0];
      panel.classList.toggle('expanded', true);
      trigger.setAttribute('aria-expanded', 'true');
    },
    collapsePanel: function collapsePanel(panel) {
      var trigger = panel.getElementsByClassName('cw-expansion-panel__btn')[0];
      panel.classList.toggle('expanded', false);
      trigger.setAttribute('aria-expanded', 'false');
    }
  }
});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "index.html";

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "login.html";

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "help.html";

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "error.html";

/***/ })
/******/ ]);