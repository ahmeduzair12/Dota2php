function generateAlphabets() {
    var alpha = document.querySelector('#alphabets');
    for( var i = 65; i < 91; i++) {
        var c =  String.fromCharCode(i);
        alpha.innerHTML = alpha.innerHTML + `<a class="individual-alphabet" href="/herolist.php?alphabet=`+ c +`&type=str">`
                            + c +
                            `</div>`;
    }
}


function getHero(character) {
    
}