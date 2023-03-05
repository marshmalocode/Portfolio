/* dark-Mode*/
function toggleDarkMode() {
    var body = document.getElementsByTagName("body")[0];
    var button = document.getElementById("dark-mode-toggle");
    var icon = document.getElementById("toggle-icon");
    if (body.classList.contains("dark-mode")) {
    body.classList.remove("dark-mode");
    button.setAttribute("aria-pressed", "false");
    icon.classList.remove("moon-icon");
    icon.classList.add("sun-icon");
    button.querySelector(".on-off-switch").classList.remove("on");
    } else {
    body.classList.add("dark-mode");
    button.setAttribute("aria-pressed", "true");
    icon.classList.remove("sun-icon");
    icon.classList.add("moon-icon");
    button.querySelector(".on-off-switch").classList.add("on");
    }
}
/* menu burger*/
