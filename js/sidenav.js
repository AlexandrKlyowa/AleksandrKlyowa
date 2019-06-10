let sidenavOpened = false;

function openNav() {
  document.getElementById("sidenav-menu").style.width = "200px";
  document.getElementById("main-container").style.marginLeft = "200px";
}

function closeNav() {
  document.getElementById("sidenav-menu").style.width = "0px";
  document.getElementById("main-container").style.marginLeft = "0px";
}

function openOrCloseNav() {
  if (sidenavOpened) {
    closeNav();
    sidenavOpened = false;
  } else {
    openNav();
    sidenavOpened = true;
  }
}