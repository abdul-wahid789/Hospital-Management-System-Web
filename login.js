
function show_doctor() {

    doc = document.getElementById("add_doctor").style.display = "block"
    patient = document.getElementById("add_patient").style.display = "none"
    receptionist = document.getElementById("add_receptionist").style.display = "none"
    nurse = document.getElementById("add_nurse").style.display = "none"
    admin = document.getElementById("add_admin").style.display = "none"
    pharmacist = document.getElementById("add_pharmacist").style.display = "none"
}

function show_patient() {
    doc = document.getElementById("add_doctor").style.display = "none"
    patient = document.getElementById("add_patient").style.display = "block"
    receptionist = document.getElementById("add_receptionist").style.display = "none"
    nurse = document.getElementById("add_nurse").style.display = "none"
    admin = document.getElementById("add_admin").style.display = "none"
    pharmacist = document.getElementById("add_pharmacist").style.display = "none"
}

function show_receptionist() {
    doc = document.getElementById("add_doctor").style.display = "none"
    patient = document.getElementById("add_patient").style.display = "none"
    receptionist = document.getElementById("add_receptionist").style.display = "block"
    nurse = document.getElementById("add_nurse").style.display = "none"
    admin = document.getElementById("add_admin").style.display = "none"
    pharmacist = document.getElementById("add_pharmacist").style.display = "none"
}

function show_nurse() {
    doc = document.getElementById("add_doctor").style.display = "none"
    patient = document.getElementById("add_patient").style.display = "none"
    receptionist = document.getElementById("add_receptionist").style.display = "none"
    nurse = document.getElementById("add_nurse").style.display = "block"
    admin = document.getElementById("add_admin").style.display = "none"
    pharmacist = document.getElementById("add_pharmacist").style.display = "none"
}
function show_admin() {
    doc = document.getElementById("add_doctor").style.display = "none"
    patient = document.getElementById("add_patient").style.display = "none"
    receptionist = document.getElementById("add_receptionist").style.display = "none"
    nurse = document.getElementById("add_nurse").style.display = "none"
    admin = document.getElementById("add_admin").style.display = "block"
    pharmacist = document.getElementById("add_pharmacist").style.display = "none"
}
function show_pharmacist() {
    doc = document.getElementById("add_doctor").style.display = "none"
    patient = document.getElementById("add_patient").style.display = "none"
    receptionist = document.getElementById("add_receptionist").style.display = "none"
    nurse = document.getElementById("add_nurse").style.display = "none"
    admin = document.getElementById("add_admin").style.display = "none"
    pharmacist = document.getElementById("add_pharmacist").style.display = "block"
}