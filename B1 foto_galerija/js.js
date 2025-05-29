function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.data = imgs.name;
    expandImg.parentElement.style.display = "block";
  }
