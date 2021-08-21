document.getElementById("btnajax").addEventListener("click", makerequest);

// function makerequest() {
//   console.log("Button Clicked");
//   const xhr = new XMLHttpRequest();
//   console.log("before Open", xhr.readyState);
//   xhr.open("GET", "data.txt", true);
//   console.log("After Open", xhr.readyState);
//   xhr.onreadystatechange = () => {
//     console.log("readyState", xhr.readyState);
//     if (xhr.readyState === XMLHttpRequest.DONE) {
//       if (xhr.status === 200) {
//         console.log(xhr);
//         console.log(xhr.responseText);
//       } else {
//         console.log("Problem Ocuured");
//       }
//     }
//   };
//   xhr.send();
// }

function makerequest() {
  console.log("Button Clicked");
  const xhr = new XMLHttpRequest();
  if (xhr.readyState === 0) {
    console.log("Open Method Not Yet Called 0");
  }
  xhr.open("GET", "data.txt", true);
  if (xhr.readyState === 1) {
    console.log("Open Method Called 1");
  }

  xhr.onreadystatechange = () => {
    if (xhr.readyState === 2) {
      console.log("Response Header 2");
    }
    if (xhr.readyState === 3) {
      console.log("Loding... 3");
    }
    if (xhr.readyState === 4) {
      console.log("Done 4");
    }
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        console.log(xhr);
        console.log(xhr.responseText);
      } else {
        console.log("Problem Ocuured");
      }
    }
  };
  xhr.send();
}
