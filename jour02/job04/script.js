var keylogger = document.getElementById('keylogger');
window.addEventListener("keypress", function zone() {
    var clé = event.key;
    keylogger.value += clé;
})

