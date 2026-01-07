window.vilagosMod = function() {
  document.body.style.backgroundColor = "white";
  document.body.style.color = "black";
  localStorage.setItem("theme", "vilagos");
}

window.sotetMod = function() {
  document.body.style.backgroundColor = "black";
  document.body.style.color = "white";
  localStorage.setItem("theme", "sotet");
}

window.toggleTheme = function() {
  let toggle = document.getElementById("themeToggle");

  if (toggle.checked) {
    sotetMod();
  } else {
    vilagosMod();
  }
}

window.onload = function() {
  let tema = localStorage.getItem("theme");
  let toggle = document.getElementById("themeToggle");

  if (tema === "sotet") {
    toggle.checked = true;
    sotetMod();
  } else {
    toggle.checked = false;
    vilagosMod();
  }
}
