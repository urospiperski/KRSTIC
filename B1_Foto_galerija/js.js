function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    expandImg.src = imgs.src;
    imgText.data = imgs.name;
    expandImg.parentElement.style.display = "block";
  }
          function myFunction(img) {
            document.getElementById("expandedImg").src = img.src;
            document.getElementById("imgtext").data = img.name;
        }
        const descriptions = {
  "ruby.png": "Ruby je dinamičan, objektno-orijentisan programski jezik poznat po svojoj jednostavnosti i eleganciji.",
  "csharp.webp": "C# je moderan objektno-orijentisan jezik razvijen od strane Microsoft-a, najčešće korišćen za .NET aplikacije.",
  "c++.png": "C++ je snažan jezik koji kombinuje proceduralno i objektno-orijentisano programiranje.",
  "golang.png": "Go (ili Golang) je programski jezik koji je razvio Google, poznat po brzini i jednostavnosti paralelnog programiranja.",
  "java.png": "Java je široko korišćen jezik koji omogućava razvoj prenosivih i skalabilnih aplikacija.",
  "javascript.webp": "JavaScript je najpoznatiji jezik za razvoj dinamičnih web stranica i aplikacija u pregledaču.",
  "php.png": "PHP je skriptni jezik često korišćen za razvoj dinamičnih web sajtova i server-side programiranje.",
  "python.png": "Python je jednostavan i čitljiv jezik, idealan za početnike, nauku o podacima, web razvoj i automatizaciju.",
  "r.png": "R je jezik i okruženje za statističku obradu podataka i vizualizaciju.",
  "swift.png": "Swift je moderan programski jezik koji je Apple razvio za iOS i macOS aplikacije."
};

function myFunction(img) {
  const mainImg = document.getElementById("expandedImg");
  const textBox = document.getElementById("imgtext");
  mainImg.src = img.src;
  const fileName = img.src.split("/").pop();
  textBox.textContent = descriptions[fileName] || "Opis nije dostupan.";
}
