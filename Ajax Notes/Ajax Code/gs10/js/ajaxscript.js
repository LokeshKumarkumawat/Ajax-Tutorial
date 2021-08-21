document.getElementById("btnajax").addEventListener("click", makerequest);
let t = document.getElementById("title");
let b = document.getElementById("body");
function makerequest() {
  console.log("Button Clicked");
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "https://jsonplaceholder.typicode.com/posts/3", true);
  xhr.responseType = "json";
  xhr.onload = () => {
    if (xhr.status === 200) {
      console.log(xhr.response);
      console.log(xhr.response.userId);
      console.log(xhr.response.id);
      console.log(xhr.response.title);
      console.log(xhr.response.body);
      t.innerText = xhr.response.title;
      b.innerText = xhr.response.body;
    } else {
      console.log("Problem Occured");
    }
  };

  xhr.send();
}
