function showSuggestion(str) {
  if (str.length == 0) {
    document.getElementById("output").innerHTML = "";
  } else {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("output").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "suggest.php?q=" + str, true);
    xmlhttp.send();
  }
}
