var cards = document.getElementsByClassName('card');

var itr = 0;
Array.from(cards).map((card, index) => {
    let idx = index;
    card.addEventListener("mouseover", mouseoverEventHandle.bind(null, idx));
    card.addEventListener("mouseout", mouseoutEventHandle.bind(null, idx));
});


function mouseoverEventHandle(idx, event) {
    let id = 'view-details' + idx
    document.getElementById(id).style.display = "flex";
};

function mouseoutEventHandle(idx, event) {
    let id = 'view-details' + idx
    document.getElementById(id).style.display = "none";

};