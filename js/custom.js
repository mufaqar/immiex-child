
function makeDivFixedUntilFooter(className, scrollPosition, footerId) {
    var elements = document.getElementsByClassName(className);
    var footer = document.getElementById(footerId);

    if (elements.length === 0) {
      console.warn("No elements found with class '" + className + "'.");
      return;
    }
    
    if (!footer) {
      console.warn("Footer with id '" + footerId + "' not found.");
      return;
    }

    window.addEventListener("scroll", function() {
      var footerOffsetTop = footer.offsetTop;
      
      for (var i = 0; i < elements.length; i++) {
        var element = elements[i];
        var elementHeight = element.offsetHeight;

        if (window.scrollY > scrollPosition && window.scrollY + elementHeight < footerOffsetTop) {
          element.classList.add("fixed");
        } else {
          element.classList.remove("fixed");
        }
      }
    });
  }

  // Call the function with the desired class, scroll position, and footer ID
  document.addEventListener("DOMContentLoaded", function() {
    makeDivFixedUntilFooter("sidebar_content", 500, "footer-1");
  });