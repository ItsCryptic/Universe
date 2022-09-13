let exec = require("child_process").exec;
let os = require("os");

function addFlatpak() {
    exec("flatpak remote-add --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo");
}

function addSnap() {
    if (os.type().toString().includes("Fedora") || os.type().toString().includes("Red Hat")) {
        exec("sudo dnf install snapd");
    }
    if (os.type().toString().includes()) {
        
    }
}