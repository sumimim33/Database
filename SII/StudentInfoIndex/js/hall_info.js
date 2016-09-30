function edithallinfo()
           {
               document.frmUserHall.action = "edit_hall_info.php";
              document.frmUserHall.submit();
            }
function deletehallinfo () {

            if(confirm("Are you sure want to delete these Hall info?")) {
             document.frmUserHall.action = "delete_hall_info.php";
              document.frmUserHall.submit();
               }
           }


           