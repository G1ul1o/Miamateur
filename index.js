function changeDisplay(){
    var nav = document.getElementById("nav");
    var header = document.getElementById("header");
    if(nav.style.display == "flex"){
        nav.style="display: none";
        header.style="box-shadow: 10px 0 20px 0 rgba(0,0,0,0.5);";
    }else {
        nav.style="display: flex";
        header.style="box-shadow: none";

    }
    console.log(nav.style);
}

var input = document.querySelector('input');
input.addEventListener('focus', function() {
    input.setAttribute('placeholder', '');
});
input.addEventListener('blur', function() {
    input.setAttribute('placeholder', 'Recherche');
});