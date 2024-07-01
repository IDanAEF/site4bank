/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/es6/blocks/forms.js":
/*!************************************!*\
  !*** ./assets/es6/blocks/forms.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const forms = () => {
  async function postData(url, data) {
    let res = await fetch(url, {
      method: "POST",
      body: data
    });
    return await res.text();
  }
  try {
    const formChecks = document.querySelectorAll('.form-checks');
    formChecks.forEach(field => {
      const checks = field.querySelectorAll('.form-checks-item input');
      checks.forEach(input => {
        input.addEventListener('change', () => {
          input.parentElement.classList.toggle('active');
        });
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
  try {
    const ajaxForms = document.querySelectorAll('.form');
    ajaxForms.forEach(form => {
      form.addEventListener('submit', e => {
        e.preventDefault();
        const formData = new FormData(form),
          successModal = document.querySelector('.modal__success[data-name="' + form.getAttribute('data-success') + '"]');
        postData(form.action, formData).then(res => {
          successModal.classList.add('active');
        });
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (forms);

/***/ }),

/***/ "./assets/es6/blocks/mask.js":
/*!***********************************!*\
  !*** ./assets/es6/blocks/mask.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const mask = selector => {
  let setCursorPosition = (pos, elem) => {
    elem.focus();
    if (elem.setSelectionRange) {
      elem.setSelectionRange(pos, pos);
    } else if (elem.createTextRange) {
      let range = elem.createTextRange();
      range.collapse(true);
      range.moveEnd('character', pos);
      range.moveStart('character', pos);
      range.select();
    }
  };
  function createMask(event) {
    let matrix = '+7 (___) ___-__-__',
      i = 0,
      def = matrix.replace(/\D/g, ''),
      val = this.value.replace(/\D/g, '');
    if (def.length >= val.length) {
      val = def;
    }
    this.value = matrix.replace(/./g, function (a) {
      return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? '' : a;
    });
    if (event.type === 'blur') {
      if (this.value.length == 2) {
        this.value = '';
      }
    } else {
      setCursorPosition(this.value.length, this);
    }
  }
  let inputs = document.querySelectorAll(selector);
  inputs.forEach(input => {
    input.addEventListener('input', createMask);
    input.addEventListener('focus', createMask);
    input.addEventListener('blur', createMask);
  });
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (mask);

/***/ }),

/***/ "./assets/es6/blocks/other.js":
/*!************************************!*\
  !*** ./assets/es6/blocks/other.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const other = () => {
  const hideScroll = () => {
    document.querySelector('body').classList.add('fixed');
    document.querySelector('html').classList.add('fixed');
  };
  const showScroll = () => {
    document.querySelector('body').classList.remove('fixed');
    document.querySelector('html').classList.remove('fixed');
  };
  const returnHeight = () => {
    return window.innerWidth <= 600 ? window.innerHeight / 1.05 : window.innerHeight / 1.2;
  };
  const setAnim = mass => {
    mass.forEach(item => {
      if (returnHeight() + window.scrollY >= item.getBoundingClientRect().y + window.scrollY) {
        item.classList.add('anim');
      }
    });
  };
  function setCookie(name, value, hours) {
    var expires;
    if (hours || hours === 0) {
      var date = new Date();
      date.setTime(date.getTime() + hours * 60 * 60 * 1000);
      expires = "; expires=" + date.toGMTString();
    } else {
      expires = "";
    }
    document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
  }
  async function postData(url, data) {
    let res = await fetch(url, {
      method: "POST",
      body: data
    });
    return await res.text();
  }
  try {
    const cookiesModal = document.querySelector('.modal__cookie');
    if (cookiesModal) {
      setTimeout(() => cookiesModal.classList.add('active'), 2000);
      cookiesModal.querySelector('button').addEventListener('click', () => {
        setCookie('cookie_agree', 1, 1000);
        cookiesModal.classList.remove('active');
      });
    }
  } catch (e) {
    console.log(e.stack);
  }
  try {
    //elem-text animate
    const targetElem = document.querySelectorAll('.elem_animate'),
      targetText = document.querySelectorAll('.text_animate');
    targetText.forEach(item => {
      let textCont = item.textContent.trim(),
        newInner = '',
        transit = 0;
      for (let i = 0; i < textCont.length; i++) {
        newInner += `<i class="or" style="transition: 0.4s all ${transit.toFixed(2)}s">${textCont[i]}</i>`;
        transit += 0.03;
      }
      item.innerHTML = newInner;
    });
    setAnim(targetElem);
    setAnim(targetText);
    window.addEventListener('scroll', () => {
      setAnim(targetElem);
      setAnim(targetText);
    });
  } catch (e) {
    console.log(e.stack);
  }
  try {
    const bodyClickContent = document.querySelectorAll('.body-click-content'),
      bodyClickTarget = document.querySelectorAll('.body-click-target');
    document.body.addEventListener('click', e => {
      if (e.target.classList.contains('body-click-target') || e.target.classList.contains('body-click-close')) {
        if (e.target.getAttribute('data-content')) document.querySelector('.body-click-content[data-content="' + e.target.getAttribute('data-content') + '"]').classList.toggle('active');else if (e.target.nextElementSibling.classList.contains('body-click-content')) e.target.nextElementSibling.classList.toggle('active');else e.target.parentElement.classList.remove('active');
        !e.target.classList.contains('not-active') ? e.target.classList.toggle('active') : '';
      } else if (!e.target.closest('.body-click-content')) {
        bodyClickContent.forEach(item => !item.classList.contains('not-global') ? item.classList.remove('active') : '');
        bodyClickTarget.forEach(item => !item.classList.contains('not-active') && !item.classList.contains('not-global') ? item.classList.remove('active') : '');
      }
    });
  } catch (e) {
    console.log(e.stack);
  }
  try {
    const ajaxElems = document.querySelectorAll('.ajax-elems');
    ajaxElems.forEach(field => {
      const ajaxBtn = field.querySelector('.ajax-elems-btn'),
        ajaxList = field.querySelector('.ajax-elems-list'),
        ajaxVis = +field.getAttribute('data-vis'),
        ajaxBlock = +field.getAttribute('data-block');
      let ajaxType = field.getAttribute('data-type'),
        page = ajaxBtn ? +(ajaxBtn.getAttribute('data-page') || 1) : 1,
        animates,
        scrollSetted = false;
      const addList = () => {
        ajaxBtn && ajaxBtn.classList.add('loading');
        const formData = new FormData();
        formData.append('page', page);
        formData.append('block', ajaxBlock);
        formData.append('vis', ajaxVis);
        if (ajaxType) formData.append('type', ajaxType);
        postData('/ajax/elems.php', formData).then(res => {
          ajaxBtn && ajaxBtn.classList.remove('loading');
          ajaxList.innerHTML += res;
          if (ajaxBtn && ajaxList.querySelectorAll('.ajax-elems-item').length < page * ajaxVis) ajaxBtn.remove();
          if (ajaxList.querySelector('.elem_animate')) {
            animates = ajaxList.querySelectorAll('.elem_animate');
            setAnim(animates);
            if (!scrollSetted) {
              window.addEventListener('scroll', () => setAnim(animates));
              scrollSetted = true;
            }
          }
        });
      };
      if (field.classList.contains('init')) addList();
      ajaxBtn && ajaxBtn.addEventListener('click', () => {
        page++;
        addList();
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
  try {
    const lightboxes = document.querySelectorAll('.lightbox-field');
    lightboxes.forEach(field => {
      const lightboxItems = field.querySelectorAll('.lightbox-item');
      let lightbox = new FsLightbox();
      lightbox.props.sources = [];
      lightboxItems.forEach((item, i) => {
        lightbox.props.sources.push(item.href);
        item.addEventListener('click', e => {
          e.preventDefault();
          lightbox.open(i);
        });
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (other);

/***/ }),

/***/ "./assets/es6/blocks/scrolling.js":
/*!****************************************!*\
  !*** ./assets/es6/blocks/scrolling.js ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const scrolling = () => {
  try {
    const links = document.querySelectorAll('[href^="#"]'),
      speed = 0.15;
    const goingTo = hash => {
      let widthTop = document.documentElement.scrollTop,
        toBlock = document.querySelector(hash).getBoundingClientRect().top - 150,
        start = null;
      requestAnimationFrame(step);
      function step(time) {
        if (start === null) {
          start = time;
        }
        let progress = time - start,
          r = toBlock < 0 ? Math.max(widthTop - progress / speed, widthTop + toBlock) : Math.min(widthTop + progress / speed, widthTop + toBlock);
        document.documentElement.scrollTo(0, r);
        if (r != widthTop + toBlock) {
          requestAnimationFrame(step);
        } else {
          //location.hash = hash;
        }
      }
    };
    if (window.location.hash) goingTo(window.location.hash);
    links.forEach(link => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        goingTo(this.hash);
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (scrolling);

/***/ }),

/***/ "./assets/es6/blocks/sliderSimple.js":
/*!*******************************************!*\
  !*** ./assets/es6/blocks/sliderSimple.js ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
const sliderSimple = () => {
  try {
    const sliderField = document.querySelectorAll('.slider');
    sliderField.forEach(slider => {
      let sliderTrack = slider.querySelector('.slider-track'),
        sliderList = slider.querySelector('.slider-list'),
        slides = slider.querySelectorAll('.slide'),
        slideWidth = 0,
        slideRight = slider.querySelector('.right'),
        slideLeft = slider.querySelector('.left'),
        slideIndex = 0,
        slidesCount = slides.length;
      const getVisCount = () => {
        if (window.innerWidth <= 576 && slider.getAttribute('data-mob-vis')) {
          return +slider.getAttribute('data-mob-vis');
        } else if (window.innerWidth <= 768 && slider.getAttribute('data-tablet-vis')) {
          return +slider.getAttribute('data-tablet-vis');
        } else if (window.innerWidth <= 992 && slider.getAttribute('data-large-vis')) {
          return +slider.getAttribute('data-large-vis');
        } else if (window.innerWidth <= 1200 && slider.getAttribute('data-lap-vis')) {
          return +slider.getAttribute('data-lap-vis');
        } else if (slider.getAttribute('data-pc-vis')) {
          return +slider.getAttribute('data-pc-vis');
        }
        return 1;
      };
      const slide = () => {
        sliderTrack.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
      };
      const moveRight = () => {
        slideIndex + getVisCount() >= slidesCount ? slideIndex = 0 : slideIndex++;
        slide();
      };
      const moveLeft = () => {
        slideIndex <= 0 ? slideIndex = slidesCount - getVisCount() : slideIndex--;
        slide();
      };
      const setSlideWidth = () => {
        //slideWidth = slides[0].offsetWidth + +window.getComputedStyle(sliderTrack).gridColumnGap.replace('px', '');
        slideWidth = slides[0].offsetWidth + +window.getComputedStyle(slides[0]).marginRight.replace('px', '');
      };
      sliderTrack.style.transition = 'transform 0.5s ease 0s';
      setSlideWidth();
      let startPos = 0;
      sliderList.addEventListener('touchstart', e => {
        startPos = e.changedTouches[0].screenX;
      });
      sliderList.addEventListener('touchend', e => {
        if (startPos - e.changedTouches[0].screenX > 50) {
          moveRight();
        } else if (startPos - e.changedTouches[0].screenX < -50) {
          moveLeft();
        }
      });
      document.body.addEventListener('click', e => {
        if (e.target == slideRight) moveRight();
        if (e.target == slideLeft) moveLeft();
      });
      window.addEventListener("resize", () => {
        setSlideWidth();
      });
    });
  } catch (e) {
    console.log(e.stack);
  }
};
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (sliderSimple);

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!****************************!*\
  !*** ./assets/es6/main.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blocks_mask__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blocks/mask */ "./assets/es6/blocks/mask.js");
/* harmony import */ var _blocks_scrolling__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./blocks/scrolling */ "./assets/es6/blocks/scrolling.js");
/* harmony import */ var _blocks_forms__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./blocks/forms */ "./assets/es6/blocks/forms.js");
/* harmony import */ var _blocks_sliderSimple__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./blocks/sliderSimple */ "./assets/es6/blocks/sliderSimple.js");
/* harmony import */ var _blocks_other__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./blocks/other */ "./assets/es6/blocks/other.js");





'use strict';
window.addEventListener('DOMContentLoaded', () => {
  (0,_blocks_mask__WEBPACK_IMPORTED_MODULE_0__["default"])('input[type="tel"]');
  (0,_blocks_scrolling__WEBPACK_IMPORTED_MODULE_1__["default"])();
  (0,_blocks_forms__WEBPACK_IMPORTED_MODULE_2__["default"])();
  (0,_blocks_sliderSimple__WEBPACK_IMPORTED_MODULE_3__["default"])();
  (0,_blocks_other__WEBPACK_IMPORTED_MODULE_4__["default"])();
});
/******/ })()
;
//# sourceMappingURL=script.js.map