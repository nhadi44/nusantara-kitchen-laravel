const uploadInput = document.getElementById("image-upload");
const previewContainer = document.getElementById("preview-container");
const btnRemoveImage = document.getElementById("remove_image");

uploadInput.addEventListener("change", () => {
    const file = uploadInput.files[0];
    if (file) {
        const reader = new FileReader();

        reader.addEventListener("load", () => {
            const previewImage = document.createElement("img");
            previewImage.classList.add("preview-image");
            previewImage.src = reader.result;
            previewContainer.appendChild(previewImage);

            const imageLabel = document.querySelector(".custom-file-label");
            imageLabel.textContent = file.name;
        });

        reader.readAsDataURL(file);
    }
});

btnRemoveImage.addEventListener("click", () => {
    const previewImage = document.querySelector(".preview-image");
    const imageLabel = document.querySelector(".custom-file-label");
    previewContainer.removeChild(previewImage);
    imageLabel.textContent = "Choose file";
    uploadInput.value = "";
});
