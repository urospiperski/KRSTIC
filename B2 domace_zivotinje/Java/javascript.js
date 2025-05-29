function funk1(x){
    switch(x){
        case 1: document.getElementById("zvuk").src = "./Source/Zvuci/cow.mp3"; break;
        case 2: document.getElementById("zvuk").src = "./Source/Zvuci/sheep.mp3"; break;
        case 3: document.getElementById("zvuk").src = "./Source/Zvuci/goat.mp3"; break;
        case 4: document.getElementById("zvuk").src = "./Source/Zvuci/pig.mp3"; break;
        case 5: document.getElementById("zvuk").src = "./Source/Zvuci/chicken.mp3"; break;
    }
    zvuk.play();
}


  function myFunction() {
    window.open("Cow.html");
  }

  function myFunction1() {
    window.open("Sheep.html"); 
  }

  function myFunction2() {
    window.open("Goat.html");
  }

  function myFunction3() {
    window.open("Pig.html");
  }

  function myFunction4() {
    window.open("Chicken.html");
  }