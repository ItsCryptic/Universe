var os = require("os");

if (os.type().toString().includes("arch")) {
  document.getElementById("if-arch").style.visibility = "hidden";
} else {
  document.getElementById("if-arch").style.visibility = "visible";
}

if (os.type().toString().includes("fedora")) {
  document.getElementById("if-fedora").style.visibility = "hidden";
} else {
  document.getElementById("if-fedora").style.visibility = "visible";
}
