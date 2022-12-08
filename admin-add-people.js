document.querySelector(".change_photo_btn_doc").addEventListener("change", function (e) {
    if (e.target.files.length == 0) {
        return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#image_preview_doc").innerText = file.name;
    document.querySelector("#image_preview_doc").src = url;
});
document.querySelector(".change_photo_btn_patient").addEventListener("change", function (e) {
    if (e.target.files.length == 0) {
        return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#image_preview_patient").innerText = file.name;
    document.querySelector("#image_preview_patient").src = url;
});
document.querySelector(".change_photo_btn_receptionist").addEventListener("change", function (e) {
    if (e.target.files.length == 0) {
        return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#image_preview_receptionist").innerText = file.name;
    document.querySelector("#image_preview_receptionist").src = url;
});
document.querySelector(".change_photo_btn_admin").addEventListener("change", function (e) {
    if (e.target.files.length == 0) {
        return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#image_preview_admin").innerText = file.name;
    document.querySelector("#image_preview_admin").src = url;
});
document.querySelector(".change_photo_btn_department").addEventListener("change", function (e) {
    if (e.target.files.length == 0) {
        return;
    }
    let file = e.target.files[0];
    let url = URL.createObjectURL(file);
    document.querySelector("#image_preview_department").innerText = file.name;
    document.querySelector("#image_preview_department").src = url;
});

function show_doctor(){

    doc=document.getElementById("add_doctor").style.display="block"
    patient=document.getElementById("add_patient").style.display="none"
    receptionist=document.getElementById("add_receptionist").style.display="none"
    department=document.getElementById("add_department").style.display="none"
    admin=document.getElementById("add_admin").style.display="none"
}

function show_patient(){

    doc=document.getElementById("add_doctor").style.display="none"
    patient=document.getElementById("add_patient").style.display="block"
    receptionist=document.getElementById("add_receptionist").style.display="none"
    department=document.getElementById("add_department").style.display="none"
    admin=document.getElementById("add_admin").style.display="none"
}

function show_receptionist(){
    doc=document.getElementById("add_doctor").style.display="none"
    patient=document.getElementById("add_patient").style.display="none"
    receptionist=document.getElementById("add_receptionist").style.display="block"
    department=document.getElementById("add_department").style.display="none"
    admin=document.getElementById("add_admin").style.display="none"
}
function show_department(){
    doc=document.getElementById("add_doctor").style.display="none"
    patient=document.getElementById("add_patient").style.display="none"
    receptionist=document.getElementById("add_receptionist").style.display="none"
    department=document.getElementById("add_department").style.display="block"
    admin=document.getElementById("add_admin").style.display="none"
}
function show_admin(){
    doc=document.getElementById("add_doctor").style.display="none"
    patient=document.getElementById("add_patient").style.display="none"
    receptionist=document.getElementById("add_receptionist").style.display="none"
    department=document.getElementById("add_department").style.display="none"
    admin=document.getElementById("add_admin").style.display="block"
}