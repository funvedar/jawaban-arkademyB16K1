function usernameCheck(username) {
    let hurufKecil = /^[a-z]{5,7}$/;
    if(username.match(hurufKecil)) {
        return true;
    } return false;
}

function passwordCheck(password) {
    let validasi = "^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@]).{9}$";
    if(password.match(validasi)) {
        return true;
    } return false;
}