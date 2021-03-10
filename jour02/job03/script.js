

    var compt = 0;
    var button = document.getElementById("button");
    button.addEventListener("click", function addone() {
        document.getElementById("compteur").textContent = ++compt;
    });
