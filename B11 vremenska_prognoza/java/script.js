function setIframeSource() {
  let theSelect = document.getElementById("location");
  let theIframe = document.getElementById("myIframe");
  let theUrl;

  theUrl = theSelect.options[theSelect.selectedIndex].value;
  theIframe.src = theUrl;

  let optionText1 =
    theSelect.options[theSelect.selectedIndex].text.toLowerCase();
  window.open(
    "./gradovi/" + optionText1 + ".html",
    "_blank",
    "height=500, width=500"
  );
}
