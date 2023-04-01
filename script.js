const container = document.querySelector(".container"),
    pwFields = document.querySelectorAll(".password"),
    signUp = document.querySelector(".signup-link"),
    login = document.querySelector(".login-link");

signUp.addEventListener("click", () => {
    container.classList.add("active");
});
login.addEventListener("click", () => {
    container.classList.remove("active");
});

// const searchForm = document.getElementById("search-form");

// searchForm.addEventListener("submit", (event) => {
//     event.preventDefault();
// });