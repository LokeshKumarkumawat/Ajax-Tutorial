document.getElementById("btnajax").addEventListener("click", makerequest);
let n = document.getElementById("name-id");
let r = document.getElementById("roll-id");
function makerequest() {
  console.log("Button Clicked");
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "data.json", true);
  xhr.responseType = "json";
  xhr.onload = () => {
    if (xhr.status === 200) {
      console.log(xhr.response);
      console.log(xhr.response.name);
      console.log(xhr.response.roll);
      n.innerText = xhr.response.name;
      r.innerText = xhr.response.roll;
    } else {
      console.log("Problem Occured");
    }
  };

  xhr.send();
}

// function makerequest() {
//   console.log("Button Clicked");
//   const xhr = new XMLHttpRequest();
//   xhr.open("GET", "data.json", true);
//   xhr.onload = () => {
//     if (xhr.status === 200) {
//       console.log(xhr.response);
//       let obj = JSON.parse(xhr.response);
//       console.log(obj);
//       console.log(obj.name);
//       console.log(obj.roll);
//       n.innerText = obj.name;
//       r.innerText = obj.roll;
//     } else {
//       console.log("Problem Occured");
//     }
//   };
//   xhr.send();
// }
