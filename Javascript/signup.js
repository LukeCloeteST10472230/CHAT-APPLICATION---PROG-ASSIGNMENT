document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector(".signup form");
    const continueBtn = form.querySelector(".button input");
    const errorText = document.querySelector(".error-text");

    if (!form || !continueBtn) {
        console.error("Required elements not found!");
        return;
    }

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    continueBtn.onclick = () => {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "php/signup.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;
                    if (data === "success") {
                        location.href = "users.php";
                    } else {
                        if (errorText) {
                            errorText.style.display = "block";
                            errorText.textContent = data;
                        } else {
                            alert("Error: " + data);
                        }
                    }
                }
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
    }
});