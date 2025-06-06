function klikniZivotinju(ime) {
    const id = `audio${ime.charAt(0).toUpperCase() + ime.slice(1)}`;
    const audio = document.getElementById(id);
    if (audio) {
        audio.currentTime = 0;
        audio.play().catch(e => {
            console.warn("Zvuk nije pušten:", e);
        });
    }
    window.open(`zivotinje/${ime}.html`);
}