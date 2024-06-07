function countDigits(n) {
    let count = 0;
    let x = Number(n);
    while (x !== 0) {
        x = Math.floor(n / 10);
        count++;
    }
    if (count !== 10) {
        alert("Invalid Mobile Number: 10 digits")
    }
    return count;
}
function validateReg() {
    if (form["fname"].value == "" || form["fmail"].value == "" || form["fnum"].value == "" || 
        form["fpass"].value == "" || form["cpass"].value == "") {
        alert("All fileds are required");
        return false;
    }

    if (form["fpass"].value != form["cpass"].value) {
        alert("Passwords do not match");
        return false;
    }

    if(countDigits(form["fnum"].value) !== 10) {
        return false;
    }
}