console.log('HI');

function navChange() {
  var x = document.getElementById("navigation");
  console.log(x);
  if (x.className === "nav-list") {
      x.className += " responsive";
  } else {
      x.className = "nav-list";
  }
}


