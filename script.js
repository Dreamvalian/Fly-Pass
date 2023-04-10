const container = document.querySelector(".container"),
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


// const editButton = document.getElementById("editButton");
// const editModal = document.getElementById("editWines");
// const closeButton = document.querySelector(".btn-close");

// editButton.addEventListener("click", () => {
//     editModal.style.display = "block";
// });

// closeButton.addEventListener("click", () => {
//     editModal.style.display = "none";
// });

// window.onclick = function (event) {
//     if (event.target == modal) {
//         editModal.style.display = 'none';
//     }
// }