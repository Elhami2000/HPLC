function shfaqPopUp() {
    var popUp = document.createElement("div");
    popUp.style.position = "fixed";
    popUp.style.top = "50%";
    popUp.style.left = "50%";
    popUp.style.transform = "translate(-50%, -50%)";
    popUp.style.backgroundColor = "white";
    popUp.style.padding = "20px";
    popUp.style.border = "1px solid black";

    var tekstit = document.createElement("p");
    tekstit.innerHTML = "A jeni të sigurt që dëshironi të dilni?";
    popUp.appendChild(tekstit);

    var butoniDil = document.createElement("button");
    butoniDil.innerHTML = "Dil";
    butoniDil.addEventListener("click", function () {

        // Vendosni kodin tuaj për t'u ekzekutuar kur përdoruesi klikon butonin "Dil"
        var direktoria = "index.html"; // Vendosni direktorinë tuaj këtu
        window.location.href = direktoria;

    });
    popUp.appendChild(butoniDil);

    var butoniCancel = document.createElement("button");
    butoniCancel.innerHTML = "Cancel";
    butoniCancel.addEventListener("click", function () {
        popUp.style.display = "none";
    });
    popUp.appendChild(butoniCancel);

    document.body.appendChild(popUp);
}
