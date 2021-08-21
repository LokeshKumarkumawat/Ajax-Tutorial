document.getElementById("btnajax").addEventListener("click", makerequest);
let n1 = document.getElementById("name-id1");
let r1 = document.getElementById("roll-id1");
let n2 = document.getElementById("name-id2");
let r2 = document.getElementById("roll-id2");
function makerequest() {
  console.log("Button Clicked");
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "data.xml", true);
  xhr.responseType = "document";
  xhr.onload = () => {
    if (xhr.status === 200) {
      console.log(xhr.response);
      console.log(xhr.response.getElementsByTagName("student"));
      console.log(xhr.response.getElementsByTagName("student")[0]);
      console.log(
        xhr.response
          .getElementsByTagName("student")[0]
          .getElementsByTagName("name")[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[0]
          .getElementsByTagName("name")[0].childNodes[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[0]
          .getElementsByTagName("name")[0].childNodes[0].nodeValue
      );
      n1.innerText = xhr.response
        .getElementsByTagName("student")[0]
        .getElementsByTagName("name")[0].childNodes[0].nodeValue;

      console.log(xhr.response.getElementsByTagName("student")[1]);
      console.log(
        xhr.response
          .getElementsByTagName("student")[1]
          .getElementsByTagName("name")[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[1]
          .getElementsByTagName("name")[0].childNodes[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[1]
          .getElementsByTagName("name")[0].childNodes[0].nodeValue
      );
      n2.innerText = xhr.response
        .getElementsByTagName("student")[1]
        .getElementsByTagName("name")[0].childNodes[0].nodeValue;

      //Roll
      console.log(
        xhr.response
          .getElementsByTagName("student")[0]
          .getElementsByTagName("roll")[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[0]
          .getElementsByTagName("roll")[0].childNodes[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[0]
          .getElementsByTagName("roll")[0].childNodes[0].nodeValue
      );
      r1.innerText = xhr.response
        .getElementsByTagName("student")[0]
        .getElementsByTagName("roll")[0].childNodes[0].nodeValue;

      console.log(
        xhr.response
          .getElementsByTagName("student")[1]
          .getElementsByTagName("roll")[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[1]
          .getElementsByTagName("roll")[0].childNodes[0]
      );
      console.log(
        xhr.response
          .getElementsByTagName("student")[1]
          .getElementsByTagName("roll")[0].childNodes[0].nodeValue
      );
      r2.innerText = xhr.response
        .getElementsByTagName("student")[1]
        .getElementsByTagName("roll")[0].childNodes[0].nodeValue;
    } else {
      console.log("Problem Occured");
    }
  };

  xhr.send();
}
