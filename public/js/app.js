/**
 *  Search Todo
 */

let timer;
document.addEventListener("DOMContentLoaded", function () {
    const search = document.getElementById("search");

    if (!search) return;

    search.addEventListener("input", function () {
        clearTimeout(timer);

        timer = setTimeout(() => {
            fetch(`?search=${this.value}`)
                .then(res => res.text())
                .then(html => {
                    document.getElementById("todo-results").innerHTML =
                        new DOMParser()
                            .parseFromString(html, "text/html")
                            .querySelector("#todo-results").innerHTML;
                });
        }, 300);
    });
});


/**
 * Add Todo
 */
document.addEventListener("DOMContentLoaded", function () {

    if (document.querySelector(".success-message")) {
        document.querySelector(".success-message").style = 'display: none';
    }
    const form = document.querySelector(".todo-form-add");

    if (!form) {
        return;
    }

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        let todo = document.querySelector(".todo-input").value;

        fetch("/todos", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ todo })
        })
            .then(res => res.json())
            .then((data) => {
                document.querySelector(".todo-input").value = "";
                document.querySelector(".success-message").style = 'display: block'
                document.querySelector(".success-message").innerText = data.message;

                setTimeout(() => {
                    document.querySelector(".success-message").style = 'display: none';
                }, 3000)
            });

    });

});