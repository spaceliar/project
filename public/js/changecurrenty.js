var xx = document.getElementsByClassName("product-old-price").length;
for (var i = 0; i < xx; i++) {
	var price = document.getElementsByClassName("product-old-price")[i].innerHTML;
	console.log(price);
	document.getElementsByClassName("product-old-price")[i].innerHTML = formatNumber(price);
}
function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}
	