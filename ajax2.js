var provinsi = document.forms.form.provinsi;
var kabupaten = document.forms.form.kabupaten;

provinsi.onchange = function () {
    var xhr = new XMLHttpRequest();

    xhr.open("GET", "get_kabupaten.php?id=" + provinsi.value);

    xhr.onload = function () {
        kabupaten.innerHTML = xhr.responseText;
    };

    xhr.send();
};
