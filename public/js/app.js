var navBarEl=document.querySelector(".nav__bar"),hamburgerEl=document.querySelector(".nav__bar__hamburger__menu"),hamburgerElContainer=document.querySelector(".hamburger__container"),navEl=document.querySelector(".nav"),navMenuEl=document.querySelector(".nav__menu"),talkBtnEl=document.querySelector(".talk__info__btn"),talkDivEl=document.querySelector(".talk__info"),spanEl=document.querySelector(".span"),modalEl=document.querySelector(".modal__section"),closeModalTrigger=document.querySelector(".close"),headerButtonEl=document.querySelector(".header__btn"),contentWrapEl=document.querySelector(".content__wrap"),portfolioImgInfoEl=document.querySelector(".portfolio__img__info"),portfolioImgInfo1El=document.querySelector(".portfolio__img__info1"),portfolioImgInfo2El=document.querySelector(".portfolio__img__info2");function scrollEffect(){window.addEventListener("scroll",function(){50<window.scrollY?(navBarEl.classList.add("sticky"),contentWrapEl.classList.remove("shift"),navEl.classList.remove("is-open"),hamburgerEl.classList.remove("is-open")):window.scrollY<50&&navBarEl.classList.remove("sticky")})}function showMenu(){hamburgerElContainer.addEventListener("click",function(){navEl.classList.toggle("is-open"),contentWrapEl.classList.toggle("shift"),hamburgerEl.classList.toggle("is-open")})}function collapseMenu(){window.addEventListener("click",function(e){e.target===navEl&&(navEl.classList.remove("is-open"),hamburgerEl.classList.remove("is-open"),contentWrapEl.classList.remove("shift"))})}function showImgInfo(){console.log(portfolioImgInfoEl),portfolioImgInfoEl.style.opacity=1}scrollEffect(),showMenu(),collapseMenu(),portfolioImgInfoEl.addEventListener("onclick",showImgInfo()),talkBtnEl.onclick=function(){modalEl.classList.add("open")},closeModalTrigger.onclick=function(){modalEl.classList.remove("open")},headerButtonEl.onclick=function(){modalEl.classList.add("open")},window.onclick=function(e){e.target===modalEl&&modalEl.classList.remove("open")};var sliderImages=document.querySelectorAll(".testimonial__slide"),arrowLeft=document.querySelector(".testimonial__arrow__left"),arrowRight=document.querySelector(".testimonial__arrow__right"),current=0;function reset(){for(var e=0;e<sliderImages.length;e++)sliderImages[e].style.display="none"}function starSlide(){reset(),sliderImages[0].style.display="block"}function slideLeft(){reset(),sliderImages[current-1].style.display="block",current--}function slideRight(){reset(),sliderImages[current+1].style.display="block",current++}arrowLeft.addEventListener("click",function(){0===current&&(current=sliderImages.length),slideLeft()}),arrowRight.addEventListener("click",function(){current===sliderImages.length-1&&(current=-1),slideRight()}),starSlide();