// Vkládání dat z data.json do html pomocí js

fetch("data.json")
  .then(function (response) {
    return response.json();
  })
  .then(function (data) {
    appendData(data);
  })
  .catch(function (err) {
    console.log("error: " + err);
  });

function appendData(data) {
  let mainContainer = document.getElementById("teams");
  for (let i = 0; i < data.length; i++) {
    let div = document.createElement("tr");
    div.innerHTML =
      "<td>" + data[i].name + "</td> <td> " + data[i].city + "</td>";
    mainContainer.appendChild(div);
  }
}
