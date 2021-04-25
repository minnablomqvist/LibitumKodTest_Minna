//funktion för att se så första är valt innan nästa dropdown kan väljas
function getSelectedValue(id) {
    var x = document.getElementById('SelectSecond');
    if (x == id.selectedIndex) {
        x.disabled = true;
    }
    else {
        x.disabled = false;
    }
    //Skriv ut vald
    var e = document.getElementById("SelectFirst");
    var result = e.options[e.selectedIndex].text;

    document.getElementById("selectedItem1").innerHTML = result;
};

//Borde finnas en funktion som undo .disable när man tagit bort ett alternativ. Tid fanns ej
function removeAllSelected() {
    
};


//skulle blivit en funktion för att se till att alla tre värden är valda...
$('select[name="productList"]').on('select', function () {
    $('input[name="order"]').removeAttr('disabled');
});

//funktion för att se så andra är valt innan nästa dropdown kan väljas
function secondSelected(id) {
    var y = document.getElementById('SelectThird').disabled = !id.selectedIndex;

    var e = document.getElementById("SelectSecond");
    var result = e.options[e.selectedIndex].text;

    document.getElementById("selectedItem2").innerHTML = result;
};



function showSelectedValue() {
var e = document.getElementById("SelectThird");
var result = e.options[e.selectedIndex].text;

document.getElementById("selectedItem3").innerHTML = result;
};