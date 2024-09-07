function toggleSidebar() {
  let header = document.getElementById("header");
  const sidebar = document.getElementById('sidebar');
  const body = document.body;
  sidebar.classList.toggle('open');
  body.classList.toggle('sidebar-open');
  const headerContainer = document.getElementById('header-container');
  const mainContentContainer = document.getElementById('main-content-container');
  if (sidebar.style.left === "-200px") {
    sidebar.style.left = "0";
    headerContainer.style.marginLeft = "200px";
    mainContentContainer.style.marginLeft = "200px";
  } else {
    sidebar.style.left = "-200px";
    headerContainer.style.marginLeft = "0";
    mainContentContainer.style.marginLeft = "0";
  }
  window.addEventListener("scroll", function() {
    if (window.scrollY > 200) {
      header.style.height = "50px";
    } else {
      header.style.height = "60px";
    }
  });

  
}