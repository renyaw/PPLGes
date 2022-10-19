function getXMLHTTPRequest() {
  if (window.XMLHttpRequest) {
    return new XMLHttpRequest();
  } else {
    // code for old IE browsers
    return new ActiveXObject('Microsoft.XMLHTTP');
  }

}

// Fungsi urlAjax
function callAjax(url, inner) {
  var xmlhttp = getXMLHTTPRequest();
  xmlhttp.open('GET', url, true);
  xmlhttp.onreadystatechange = function () {
    document.getElementById(inner).innerHTML = '<img src="images/ajax_loader.png"/>';
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById(inner).innerHTML = xmlhttp.responseText;
    }
    return false;
  };
  xmlhttp.send(null);
}

function showPKL(angkatan) {
  var inner = 'detail_pkl';
  var url = 'get_pkl.php?id=' + angkatan;
  if (angkatan == '') {
    document.getElementById(inner).innerHTML = '';
  } else {
    callAjax(url, inner);
  }
}
function showPKLbelum(angkatan) {
  var inner = 'detail_pkl2';
  var url = 'get_pklbelum.php?id=' + angkatan;
  if (angkatan == '') {
    document.getElementById(inner).innerHTML = '';
  } else {
    callAjax(url, inner);
  }
}
function showHeader(angkatan) {
  var inner = 'detail_header';
  var url = 'get_headerpkl.php?id=' + angkatan;
  if (angkatan == '') {
    document.getElementById(inner).innerHTML = '';
  } else {
    callAjax(url, inner);
  }
}