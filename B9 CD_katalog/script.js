const searchForm = document.querySelector("form");
const searchInput = document.querySelectorAll("form input, form select");
const tableRows = document.querySelectorAll("table tbody tr");

searchForm.addEventListener("submit", (event) => {
  event.preventDefault();
  const searchData = getSearchData();
  filterTable(searchData);
});

searchInput.forEach((input) => {
  input.addEventListener("input", () => {
    const searchData = getSearchData();
    filterTable(searchData);
  });
});

function getSearchData() {
  return {
    izvodjac: document.getElementById("izvodjac").value.toLowerCase(),
    nazivAlbuma: document.getElementById("nazivAlbuma").value.toLowerCase(),
    zanr: document.getElementById("zanr").value.toLowerCase(),
    godinaIzdanja: document.getElementById("godinaIzdanja").value.toLowerCase(),
    izdavackaKuca: document.getElementById("izdavackaKuca").value.toLowerCase(),
  };
}

function filterTable(searchData) {
  tableRows.forEach((row) => {
    const izvodjac = row.querySelector(".izvodjac").textContent.toLowerCase();
    const nazivAlbuma = row
      .querySelector(".naziv_albuma")
      .textContent.toLowerCase();
    const zanr = row.querySelector(".zanr").textContent.toLowerCase();
    const godinaIzdanja = row
      .querySelector(".godina_izdavanja")
      .textContent.toLowerCase();
    const izdavackaKuca = row
      .querySelector(".izdavacka_kuca")
      .textContent.toLowerCase();

    if (
      izvodjac.includes(searchData.izvodjac) &&
      nazivAlbuma.includes(searchData.nazivAlbuma) &&
      (zanr.includes(searchData.zanr) || searchData.zanr === "") &&
      (godinaIzdanja.includes(searchData.godinaIzdanja) ||
        searchData.godinaIzdanja === "") &&
      izdavackaKuca.includes(searchData.izdavackaKuca)
    ) {
      row.style.display = "";
    } else {
      row.style.display = "none";
    }
  });
}
