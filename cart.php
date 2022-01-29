<script>
$(document).ready(function(){
  $('.addToCartButton').on("click", function() {
        $('.mycart i').addClass('cart_rotate');
        setTimeout(function() {
            $('.animated').remove();
            $('.mycart i').removeClass('cart_rotate');
        }, 1000);
    });
  $("#quantityAmount").click(function(){
    $("#List" ).show( "slow" );
  });
  var q=0;
  $("#List input").click(function(){
    $("#List" ).hide( "slow" );
  });
});
</script>


<!-- <script>
$(document).ready(function(){
  $("#quantityAmount").click(function(){
    $("#List").toggle();
  });
  var q=0;
  $("#List input").click(function(){
    q++;
    // if(q<2){
    $("#List").toggle();
    // }
  });
});
$(document).ready(function(){
var Bill=0;
var tbody=document.querySelector("tbody");
function addtocart(productPrice,productName){
  var ProductPrice=productPrice;
  var ProductName=productName;
  alert(ProductPrice+ProductName);
  tbody.innerHTML+=
  `<tr>
      <td>1</td>
      <td>${ProductName}</td>
      <td>${ProductPrice}</td>
      <td>aaa</td>
    </tr>
  `;
  Bill=productPrice+Bill;
    document.getElementById("quantityAmount").value =Bill ;
}
    $('.addToCartButton').on("click", function() {
        $('.mycart i').addClass('cart_rotate');
        setTimeout(function() {
            $('.animated').remove();
            $('.mycart i').removeClass('cart_rotate');
        }, 1000);
    })
});</script> -->