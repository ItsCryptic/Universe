const { app, BrowserWindow } = require("electron");
const path = require("path");

const createWindow = () => {
    const win = new BrowserWindow({
        width: 600,
        height: 800,
        webPreferences: {
            preload: path.join('app/scripts', "preload.js")
        }
    })
    win.loadFile("app/index.html");
}

app.whenReady().then(() => {  
    createWindow()
})

app.on('window-all-closed', () => {
    if (process.platform !== 'darwin') app.quit()
  })

  app.on('activate', () => {
    if (BrowserWindow.getAllWindows().length === 0) 
        createWindow()
  })