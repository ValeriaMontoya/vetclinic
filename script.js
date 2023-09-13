document.addEventListener("DOMContentLoaded", function () {
    const contentTextarea = document.getElementById("content");
    const downloadButton = document.getElementById("downloadButton");

    downloadButton.addEventListener("click", function () {
        const content = contentTextarea.value;

        // Envía el contenido al servidor utilizando una solicitud AJAX
        fetch("save.php", {
            method: "POST",
            body: JSON.stringify({ content: content }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirige al usuario a la página de descarga
                window.location.href = "download.php";
            } else {
                alert("Error al guardar el contenido.");
            }
        });
    });
});

