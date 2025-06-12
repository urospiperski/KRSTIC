let sviAlbumi = [];

fetch('Katalog.txt')
    .then(response => response.text())
    .then(data => {
        let redovi = data.trim().split('\n');
        redovi.forEach(red => {
            let podaci = red.split('|');
            sviAlbumi.push(podaci);
        });
        prikaziTabelu(sviAlbumi);
    });

function prikaziTabelu(podaci) {
    let tbody = document.getElementById("teloTabele");
    tbody.innerHTML = "";
    podaci.forEach(album => {
        let red = `<tr>
            <td>${album[0]}</td>
            <td>${album[1]}</td>
            <td>${album[2]}</td>
            <td>${album[3]}</td>
            <td>${album[4]}</td>
            <td><img src="${album[5]}" alt="${album[0]}"></td>
        </tr>`;
        tbody.innerHTML += red;
    });
}

function filtriraj() {
    let izvodjac = document.getElementById("izvodjac").value.toLowerCase();
    let nazivAlbuma = document.getElementById("nazivAlbuma").value.toLowerCase();
    let zanr = document.getElementById("zanr").value.toLowerCase();
    let godina = document.getElementById("godina").value;
    let izdavackaKuca = document.getElementById("izdavackaKuca").value.toLowerCase();

    let filtrirani = sviAlbumi.filter(album => {
        let prikazi = true;

        if (izvodjac && !album[0].toLowerCase().includes(izvodjac)) prikazi = false;
        if (nazivAlbuma && !album[1].toLowerCase().includes(nazivAlbuma)) prikazi = false;
        if (zanr && album[2].toLowerCase() !== zanr) prikazi = false;
        if (godina && album[3] !== godina) prikazi = false;
        if (izdavackaKuca && !album[4].toLowerCase().includes(izdavackaKuca)) prikazi = false;

        return prikazi;
    });

    prikaziTabelu(filtrirani);
}