function container2_visible() {
    div_1 = document.getElementById("container_information_1").style.display = "none";
    div_2 = document.getElementById("container_information_2").style.display = "block";

}
function container1_visible() {
    div_1 = document.getElementById("container_information_1").style.display = "block";
    div_2 = document.getElementById("container_information_2").style.display = "none";
}

document.querySelector(".change_photo_btn").addEventListener("change", function (e) {
    if (e.target.files.length == 0) {
        return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#image_preview").innerText = file.name;
    document.querySelector("#image_preview").src = url;
});

