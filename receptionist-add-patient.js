document.querySelector(".change_photo_btn_patient").addEventListener("change", function (e) {
    if (e.target.files.length == 0) {
        return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#image_preview_patient").innerText = file.name;
    document.querySelector("#image_preview_patient").src = url;
});
// image show in div