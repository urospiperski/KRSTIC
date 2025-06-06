function klikniZivotinju(ime) {
    const width = 600;
    const height = 400;
    const left = (window.screen.width / 2) - (width / 2);
    const top = (window.screen.height / 2) - (height / 2);
    window.open(
        `zivotinje/${ime}.html`,
        '_blank',
        `width=${width},height=${height},top=${top},left=${left},resizable=yes,scrollbars=yes`
    );
}
function zvuk(ime){
const id = `audio${ime.charAt(0).toUpperCase() + ime.slice(1)}`;
    const audio = document.getElementById(id);
    if (audio) {
        audio.currentTime = 0;
        audio.play().catch(e => {
            console.warn("Zvuk nije pušten:", e);
        });
    }
}