//funktion f�r att se s� f�rsta �r valt innan n�sta dropdown kan v�ljas
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

//Borde finnas en funktion som undo .disable n�r man tagit bort ett alternativ. Tid fanns ej
function removeAllSelected() {
    
};


//skulle blivit en funktion f�r att se till att alla tre v�rden �r valda...
$('select[name="productList"]').on('select', function () {
    $('input[name="order"]').removeAttr('disabled');
});

//funktion f�r att se s� andra �r valt innan n�sta dropdown kan v�ljas
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