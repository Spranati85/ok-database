$(document).on('click','.remove cart',function(){
var id = $(this).val();
$ajax({
  
    method: "POST",
    url: "shopping.php",
    data: {
        "id": id,
        "scope": "delete"
    },
    success: function (response) {

    }
}
    )

});