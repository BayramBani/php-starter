async function getData() {

    let response = await fetch('http://devb/projects/github/php-starter/starter/api/note', {method: 'GET'});
    if (response.ok) {
        let json = await response.json();
        console.log(json)
    } else {
        alert("HTTP-Error: " + response.status);
    }
}
getData();




