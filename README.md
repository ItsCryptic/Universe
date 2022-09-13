# Universe

A visually stunning, electron-based app store for Linux. 

# FAQ

# Q: Why do we not make builds for Windows & MacOS?
Simply put, they have their own "universal" stores. Those being the app store and microsoft store respectively.

# Q: Can I make my own fork of this and make it better?

Absolutely! Please make a pull request with changes you may make, and please don't take credit for my work if you decide to use parts of this for your own application.

# Setting up Development enviornment.

Run:
```
npx tailwindcss -i ./src/app/css/tailwind.css -o ./dist/output.css --watch
```
This will start up tailwind development mode. Please use tailwind when doing things within this application, custom CSS is allowed if tailwind cannot be used for a certain component.

Testing Electron:
```
npm run start
```

# Building

Run:
```
npm run make
```
# Testing

Use: https://www.electronjs.org/docs/latest/development/testing/ 

# Todo

Have app respect system theme instead of only using dark mode.

Check to see if flatpak (and flathub is added), if its there display all the apps from flathub.

Check to see if snap is there, if it isnt then dont display, if it is, display it.

Check normal system repositories and display things from there.

Check AUR (if on archlinux) and display things from there.

Check COPR (fedora only) and display things from there (like the apps from the different repos, if the repo isnt added, give the user an option to add it.)

User accounts to remember what apps you have installed in the past (signing in isnt required but should be recommended.). This may also have integration with other services like Discord, GNOME or KDE Accounts.