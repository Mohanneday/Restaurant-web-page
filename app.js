function increaseValue() {
    var value = parseInt(document.getElementById('number').innerHTML, 10);
    value = isNaN(value) ? 1 : value;
    value++;
    document.getElementById('number').innerHTML = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').innerHTML, 10);
    value = isNaN(value) ? 1 : value;
    value <= 1 ? value = 1 : '';
    if (value > 1) {
        value--;
    }
    document.getElementById('number').innerHTML = value;
}

function addCart() {
    var value = parseInt(document.getElementById('number').innerHTML, 10);
    var cart = parseInt(document.getElementById('cartcounter').innerHTML, 10);
    var cartcounter = value + cart;
    document.getElementById('cartcounter').innerHTML = cartcounter;


}

function addCartIndex() {
    var value = parseInt(document.getElementById('cartcounter').innerHTML, 10);
    var cartcounter = value + 1;
    document.getElementById('cartcounter').innerHTML = cartcounter;

}



const area = document.getElementById("review_textbox");
const counterOfLitters = document.getElementById("LittersNum");
const textAlert = document.getElementById("ErrorMessage")

var a = 0;
area.addEventListener("input", function() {
    const countLitt = area.value.length;
    a = countLitt;
    counterOfLitters.textContent = countLitt;

});

function revbtn() {

    if (a == 0) {
        textAlert.style.display = "block";

    } else {
        location.reload();
        return false;


    }
}

function hide() {
    document.getElementById("review-f").style.margin = "0px";
}

function showForm() {
    document.getElementById("review-f").style.display = "block";

    setTimeout(50000, hide());
}

function displayReview() {
    document.getElementById("revwbtn").style.backgroundColor = '#f8a601';
    document.getElementById("descbtn").style.backgroundColor = 'white';
    document.getElementById("derscription").style.display = "none";
    document.getElementById("reviewd").style.display = "block";


}

function displaydescription() {
    document.getElementById("descbtn").style.backgroundColor = '#f8a601';
    document.getElementById("revwbtn").style.backgroundColor = 'white';
    document.getElementById("derscription").style.display = "block";
    document.getElementById("reviewd").style.display = "none";


}
