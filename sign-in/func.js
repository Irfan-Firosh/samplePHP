function validateReg() {

    let form = document.forms["rform"];

    if (form["fname"].value == "" || form["fmail"].value == "" || form["fnum"].value == "" || 
        form["fpass"].value == "" || form["cpass"].value == "") {
            alert("All fileds are required");
            return false;
        }
    if (!form["fmail"].value.includes("@")) {
        alert("Please enter a vaild email");
        return false;
    }

    if (form["fpass"].value != form["cpass"].value) {
        alert("Passwords do not match");
        return false;
    }
}