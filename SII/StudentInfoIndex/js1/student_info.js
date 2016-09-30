function setUpdateAction() {
document.frmUser.action = "edit_student_info.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "#";
document.frmUser.submit();
}
}