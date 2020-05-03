const cards = document.querySelectorAll(".card");

Array.from(cards).map((card, index) => {
    let idx = index;
    card.addEventListener("mouseover", mouseoverEventHandle.bind(null, card));
    card.addEventListener("mouseout", mouseoutEventHandle.bind(null, card));
});

function mouseoverEventHandle(card, event) {
    let span = card.getElementsByClassName("view-details")[0];
    span.style.opacity = "1";
}

function mouseoutEventHandle(card, event) {
    let span = card.getElementsByClassName("view-details")[0];
    span.style.opacity = "0";
}
