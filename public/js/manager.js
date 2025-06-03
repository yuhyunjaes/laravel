document.querySelectorAll(".item").forEach((items) => {
    items.addEventListener("dragstart", (event) => {
        event.dataTransfer.setData(
            "item",
            event.target.querySelector(".item_id").innerText
        );
    });
});

function over(event) {
    event.preventDefault();
}

function drop(event) {
    let data_switch = false;

    event.preventDefault();

    const item = event.dataTransfer.getData("item");

    const token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    fetch("http://localhost/laravel/deleteuser", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token,
        },
        body: JSON.stringify({ id: item }),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.message === true) {
                document.querySelectorAll(".item_id").forEach((items) => { 
                    if (items.innerText === item) {
                        items.parentElement.remove();
                    }
                });
            }
        })
        .catch((error) => {
            alert("삭제 실패");
        });
}
