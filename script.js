function GetGoods()
{
    $.ajax({
        type: "POST",
        url: "API/GetGoods.php",
        data: '',
        cache: false,
        success: function(html) {
           $('.card-menu').html(html);
        }
        });
}

function AddGoods()
{
    
    var name = $('#name').val();
    var dataString='name='+name;
    $.ajax({
        type: "POST",
        url: "API/AddGoods.php",
        data: dataString,
        cache: false,
        success: function(html) {
            $('#exampleModal').modal('toggle');
            setTimeout(
                function() 
                {
                    GetGoods();
                  //do something special
                }, 2000);
            
        }
    });

}