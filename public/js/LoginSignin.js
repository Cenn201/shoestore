//hiển thị đăng kí thành công
if ('{{ $success }}' != '') {
    setTimeout(function() {
        var alertElement = document.getElementById("success-alert");
        alertElement.style.display = "none";
        alertElement.remove();
    }, 2000); // 1 giây
}
