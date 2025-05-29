function checkLogin() {
  // uzimamo vrednosti iz forme
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  // proveravamo da li se slazu korisnicko ime i password
  if (
    (username === "test" && password === "test123") ||
    (username === "test2" && password === "test123")
  ) {
    // ako se slazu prikazujemo poruku
    document.getElementById("result").innerHTML = "Dobrodosli na stranicu";
  } else {
    // ako se ne slazu prikazujemo gresku
    document.getElementById("result").innerHTML =
      "Pogresno korisnicko ime ili password";
  }
}
