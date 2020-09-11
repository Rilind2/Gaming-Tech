function changeForm(form) {
    let crud = document.querySelectorAll("form>div");
    if (form == 0) {
        crud[0].classList.remove("hidden");
        crud[0].classList.add("form-style");
        crud[1].classList.add("hidden");
        crud[1].classList.remove("form-style");
    } else {
        crud[1].classList.remove("hidden");
        crud[1].classList.add("form-style");
        crud[0].classList.add("hidden");
        crud[0].classList.remove("form-style");
    }
}

function validate(form) {
    let darts = document.querySelectorAll("input");
    if (form == 0 && darts[0].value == "" && darts[1].value == "") {
        alert("Shtypni te dhenat tuaja");
    } else if (form == 1 && darts[4].value == "" && darts[5].value == "" && darts[6].value == "") {
        alert("Mbushni te dhenat per tu regjistruar");
    } else if (form == 0 && darts[0].value == "" && darts[1].value != "") {
        alert("Shtypni emrin e perdoruesit");
    }else if (form == 0 && darts[0].value != "" && darts[1].value == "") {
        alert("Shtypni Paswordin Tuaj");
    }
}