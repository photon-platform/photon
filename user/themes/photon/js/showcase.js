let currentSlide = 0

const slideContainer = document.querySelector('.showcase')

let slideCount = slideContainer.childElementCount
console.log("slideCount: " + slideCount)

TweenMax.to(`.showcase > article`, 1, {
  autoAlpha: 0
})

TweenMax.to(`.showcase > article:nth-child(${ currentSlide + 1 })`, 1, {
  autoAlpha: 1
})

// var color = window.getComputedStyle(
// 	slideContainer, ':before'
// ).getPropertyValue('color')
// console.log(color);

var btn = document.createElement('BUTTON');
var t = document.createTextNode('<');
btn.classList.add("prev");
_addEventListener('click', btn, prev);
btn.appendChild(t);

// slideContainer.insertAdjacentElement('afterbegin', btn);

var btn = document.createElement('BUTTON');
var t = document.createTextNode('>');
btn.classList.add("next");
_addEventListener('click', btn, next);
btn.appendChild(t);

// slideContainer.insertAdjacentElement('beforeend', btn);

var Key = {
  LEFT: 37,
  UP: 38,
  RIGHT: 39,
  DOWN: 40
};

function handleKeyboardEvent(evt) {
  if (!evt) {
    evt = window.event;
  } // for old IE compatible
  var keycode = evt.keyCode || evt.which; // also for cross-browser compatible

  console.log(keycode);

  switch (keycode) {
    case Key.LEFT:
      prev();
      break;
    case Key.UP:
      break;
    case Key.RIGHT:
      next();
      break;
    case Key.DOWN:
      break;
    default:
  }
}

function _addEventListener(evt, element, fn) {
  if (window.addEventListener) {
    element.addEventListener(evt, fn, false);
  } else {
    element.attachEvent('on' + evt, fn);
  }
}

_addEventListener('keydown', document, handleKeyboardEvent);

function prev() {

  TweenMax.to(`.showcase > article:nth-child(${ currentSlide + 1 })`, 1, {
    autoAlpha: 0
  })

  currentSlide = ((currentSlide - 1) % slideCount) ;

  TweenMax.to(`.showcase > article:nth-child(${ currentSlide + 1 })`, 1, {
    autoAlpha: 1
  })

  console.log(currentSlide)

}

function next() {

  TweenMax.to(`.showcase > article:nth-child(${ currentSlide + 1 })`, 1, {
    autoAlpha: 0
  })

  currentSlide = ((currentSlide + 1) % slideCount) ;

  TweenMax.to(`.showcase > article:nth-child(${ currentSlide + 1 })`, 1, {
    autoAlpha: 1
  })

  console.log(currentSlide)

}

setTimeout(autoNext, 5000)
function autoNext() {
  next()
  setTimeout(autoNext, 5000)
}
