/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************!*\
  !*** ./resources/js/components/MultiStep.js ***!
  \**********************************************/
//DOM elements
var DOMstrings = {
  stepsBtnClass: 'multisteps-form__progress-btn',
  stepsBtns: document.querySelectorAll(".multisteps-form__progress-btn"),
  stepsBar: document.querySelector('.multisteps-form__progress'),
  stepsForm: document.querySelector('.multisteps-form__form'),
  stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
  stepFormPanelClass: 'multisteps-form__panel',
  stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
  stepPrevBtnClass: 'js-btn-prev',
  stepNextBtnClass: 'js-btn-next'
}; //remove class from a set of items

var removeClasses = function removeClasses(elemSet, className) {
  elemSet.forEach(function (elem) {
    elem.classList.remove(className);
  });
}; //return exect parent node of the element


var findParent = function findParent(elem, parentClass) {
  var currentNode = elem;

  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }

  return currentNode;
}; //get active button step number


var getActiveStep = function getActiveStep(elem) {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
}; //set all steps before clicked (and clicked too) to active


var setActiveStep = function setActiveStep(activeStepNum) {
  //remove active state from all the state
  removeClasses(DOMstrings.stepsBtns, 'js-active'); //set picked items to active

  DOMstrings.stepsBtns.forEach(function (elem, index) {
    if (index <= activeStepNum) {
      elem.classList.add('js-active');
    }
  });
}; //get active panel


var getActivePanel = function getActivePanel() {
  var activePanel;
  DOMstrings.stepFormPanels.forEach(function (elem) {
    if (elem.classList.contains('js-active')) {
      activePanel = elem;
    }
  });
  return activePanel;
}; //open active panel (and close unactive panels)


var setActivePanel = function setActivePanel(activePanelNum) {
  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, 'js-active'); //show active panel

  DOMstrings.stepFormPanels.forEach(function (elem, index) {
    if (index === activePanelNum) {
      elem.classList.add('js-active');
      setFormHeight(elem);
    }
  });
}; //set form height equal to current panel height


var formHeight = function formHeight(activePanel) {
  var activePanelHeight = activePanel.offsetHeight;
  DOMstrings.stepsForm.style.height = "".concat(activePanelHeight, "px");
};

var setFormHeight = function setFormHeight() {
  var activePanel = getActivePanel();
  formHeight(activePanel);
}; //STEPS BAR CLICK FUNCTION


DOMstrings.stepsBar.addEventListener('click', function (e) {
  //check if click target is a step button
  var eventTarget = e.target;

  if (!eventTarget.classList.contains("".concat(DOMstrings.stepsBtnClass))) {
    return;
  } //get active button step number


  var activeStep = getActiveStep(eventTarget); //set all steps before clicked (and clicked too) to active

  setActiveStep(activeStep); //open active panel

  setActivePanel(activeStep);
}); //PREV/NEXT BTNS CLICK

DOMstrings.stepsForm.addEventListener('click', function (e) {
  var eventTarget = e.target; //check if we clicked on `PREV` or NEXT` buttons

  if (!(eventTarget.classList.contains("".concat(DOMstrings.stepPrevBtnClass)) || eventTarget.classList.contains("".concat(DOMstrings.stepNextBtnClass)))) {
    return;
  } //find active panel


  var activePanel = findParent(eventTarget, "".concat(DOMstrings.stepFormPanelClass));
  var activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel); //set active step and active panel onclick

  if (eventTarget.classList.contains("".concat(DOMstrings.stepPrevBtnClass))) {
    activePanelNum--;
  } else {
    activePanelNum++;
  }

  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
}); //SETTING PROPER FORM HEIGHT ONLOAD

window.addEventListener('load', setFormHeight, false); //SETTING PROPER FORM HEIGHT ONRESIZE

window.addEventListener('resize', setFormHeight, false);
window.addEventListener('click', setFormHeight, false);

var setAnimationType = function setAnimationType(newType) {
  DOMstrings.stepFormPanels.forEach(function (elem) {
    elem.dataset.animation = newType;
  });
}; //   //selector onchange - changing animation
//   const animationSelect = document.querySelector('.pick-animation__select');
//   animationSelect.addEventListener('change', () => {
//     const newAnimationType = animationSelect.value;
//     setAnimationType(newAnimationType);
//   });
/******/ })()
;