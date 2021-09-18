var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML = myObj;
        console.log(myObj);
    }
};
xmlhttp.open("GET", "http://devb/projects/github/php-starter/starter/api/note", true);
xmlhttp.send();
