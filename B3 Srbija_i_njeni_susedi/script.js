function himna(zemlja) {
  switch (zemlja) {
    case "madjarska":
      document.getElementById("zvuk").src = "sounds/madjarska.mp3";
      break;
    case "hrvatska":
      document.getElementById("zvuk").src = "sounds/hrvatska.mp3";
      break;
    case "bih":
      document.getElementById("zvuk").src = "sounds/bosna.mp3";
      break;
    case "crnagora":
      document.getElementById("zvuk").src = "sounds/crnagora.mp3";
      break;
    case "albania":
      document.getElementById("zvuk").src = "sounds/albanija.mp3";
      break;
    case "makedonija":
      document.getElementById("zvuk").src = "sounds/makedonija.mp3";
      break;
    case "bugarska":
      document.getElementById("zvuk").src = "sounds/bugarska.mp3";
      break;
    case "romania":
      document.getElementById("zvuk").src = "sounds/rumunija.mp3";
      break;
    case "serbia":
      document.getElementById("zvuk").src = "sounds/srbija.mp3";
      break;
  }
  zvuk.play();
}
