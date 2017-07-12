//header resize

function headerResize() {
  window.onscroll = function() {
    var header = document.getElementById("branding");
    var title = document.getElementById("title");
    var nav = document.getElementById("site-navigation");
    var content = document.getElementById("content");
    var subTitleOne = document.getElementById("subtitle-one");
    var subTitleTwo = document.getElementById("subtitle-two");
     if (window.pageYOffset > 100) {
        header.classList.add("smaller");
        title.classList.add("title-move");
        nav.classList.add("relative");
        content.classList.add("relative");
        subTitleOne.classList.add("hidden");
        subTitleTwo.classList.add("hidden");
     } else {
        header.classList.remove("smaller");
        title.classList.remove("title-move");
        nav.classList.remove("relative");
        content.classList.remove("relative");
        subTitleOne.classList.remove("hidden");
        subTitleTwo.classList.remove("hidden");
     }
   }
 };

headerResize();
