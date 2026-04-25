/**
 * ===================
 *    serch todo list
 * ==================
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
 * ===================
 *    Add Todo List
 * ==================
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

        const todoInput = document.querySelector(".todo-input");

        fetch("/todos", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                todo: todoInput.value
            })
        })
            .then(async (res) => {
                const data = await res.json();

                if (!res.ok) {
                    throw new Error(data.message || "Something went wrong");
                }

                return data;
            })
            .then((data) => {
                todoInput.value = "";
                toastr.success(data.message);
            })
            .catch((error) => {
                toastr.error(error.message);
            });

    });

});


/**
 * ===================
 *   Delete Todo List
 * ==================
 */
document.addEventListener("click", function (e) {
    const btn = e.target.closest(".delete");
    if (!btn) return;

    const id = btn.dataset.id;

    fetch(`/todos/${id}`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            _method: "DELETE"
        })
    })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                toastr.success(data.message);
                btn.closest("tr").remove();
            } else {
                toastr.error("Delete failed!");
            }
        })
        .catch(err => console.error(err));
});


/**
 * ===================
 *   Update Todo List
 * ==================
 */
document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector(".todo-form-edit");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        let todo = document.querySelector(".edit-input").value;

        let id = form.dataset.id;

        fetch(`/todos/${id}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                todo: todo,
                _method: "PUT"
            })
        })
            .then(res => res.json())
            .then((data) => {
                if (data.success) {
                    toastr.success(data.message);
                } else {
                    toastr.success(data.message);
                }
            })
            .catch(err => console.error(err));
    });

});



/*
 * ===================
 *   Pagination Todo list
 * ==================
 */
document.addEventListener("click", function (e) {

    const link = e.target.closest("#pagination a");
    if (!link) return;

    e.preventDefault();

    fetch(link.href)
        .then(res => res.text())
        .then(html => {

            const doc = new DOMParser().parseFromString(html, "text/html");

            document.getElementById("todo-results").innerHTML =
                doc.getElementById("todo-results").innerHTML;

            document.querySelector(".pagination-wrapper").innerHTML =
                doc.querySelector(".pagination-wrapper").innerHTML;

        });

});
