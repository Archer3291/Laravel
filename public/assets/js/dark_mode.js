// Función para cambiar el modo y guardar el estado en el localStorage
function toggleDarkMode() {
    const html = document.documentElement;
    html.classList.toggle("dark");

    // Guardar el estado de modo oscuro en el localStorage
    const isDarkModeEnabled = html.classList.contains("dark");
    localStorage.setItem("darkMode", isDarkModeEnabled);

    // Mostrar u ocultar los botones según el modo activo
    darkModeButton.hidden = isDarkModeEnabled;
    lightModeButton.hidden = !isDarkModeEnabled;
}

// Obtener los botones y agregar el evento de clic
const darkModeButton = document.getElementById("darkModeButton");
const lightModeButton = document.getElementById("lightModeButton");

darkModeButton.addEventListener("click", toggleDarkMode);
lightModeButton.addEventListener("click", toggleDarkMode);

// Comprobar y aplicar el estado del modo oscuro al cargar la página
const isDarkModeEnabled = JSON.parse(localStorage.getItem("darkMode"));
if (isDarkModeEnabled) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

// Mostrar el botón correspondiente según el estado del modo oscuro
darkModeButton.hidden = isDarkModeEnabled;
lightModeButton.hidden = !isDarkModeEnabled;



const fileInput = document.getElementById('fileInput');
const previewImage = document.getElementById('previewImage');

fileInput.addEventListener('change', function (event) {
    const selectedFile = event.target.files[ 0 ];

    if (selectedFile) {
        const reader = new FileReader();
        reader.onload = function () {
            previewImage.src = reader.result;
        };
        reader.readAsDataURL(selectedFile);
    } else {
        previewImage.src = '#';
    }
});