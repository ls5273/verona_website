/*
@ASSESSME.USERID: ls5273
@ASSESSME.AUTHOR: Lana Sorak
@ASSESSME.ANALYZE: YES
*/

function validateForm() {
    let nameField = document.getElementById("name");
    let commentField = document.getElementById("comment");

    let name = nameField.value.trim();
    let comment = commentField.value.trim();

    let valid = true;

    
    if (name === "" || !isNaN(name)) {
        nameField.style.backgroundColor = "#ffdddd";
        if (name === "") {
            alert("Please enter you name!");
        }
        else {
            alert("Name can not be number!");
        }
        valid = false;
    }
    else {
        nameField.style.backgroundColor = "white";
    }
    
    if (comment === "") {
        commentField.style.backgroundColor = "#ffdddd";
        alert("Please enter a comment!");
        valid = false;
    }
    else {
        commentField.style.backgroundColor = "white";
    }

    return valid;
}