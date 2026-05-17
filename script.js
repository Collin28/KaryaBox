setTimeout(() => {

    let error = document.getElementById("error-message");

    if (error) {
        error.style.transition = "0.5s";
        error.style.opacity = "0";

        setTimeout(() => {
            error.style.display = "none";
        }, 500);
    }

}, 3000);