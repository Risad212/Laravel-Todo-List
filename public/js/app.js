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