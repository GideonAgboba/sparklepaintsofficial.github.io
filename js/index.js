
<script>
 inames =[]
 idect =[]
 iqtyp =[]
 iprice =[]

 function addItem(){
 	inames.push(document.getElementById('pname').value)
 	idect.push(document.getElementById('pdect').value)
 	iqtyp.push(document.getElementById('pqty').value)
 	iprice.push(document.getElementById('price').value)

 	displayCart()

 }

 function displayCart(){


 	cartdata = '<table class"red"><tr><th>Product Name</th><th>Description</th><th>Quantity</th><th>Price</th><th>Total</th></tr';

 	total = 0;

 	for(i= 0; i<names.length; i++){
 		  total += iqtyp[i] * iprice[i]
 		  cartdata += "<tr><td>" + inames[i] + "</td><td>" + idect[i] + "</td><td>" + iqtyp[i] + "</td><td>" + iprice[i] + "</td><td>" + iqtyp[i] * iprice[i] + "</td></td><button onclick='delElement('+i+')' class='btn red text-white'>Delete item</button></td><tr>"
 	}


 	cartdata +='<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'


 	document.getElementById('cart').innerHTML = cartdata
 }



 function delElement(a){
 	inames.splice(a,1);
 	idect.splice(a,1)
 	iqtyp.splice(a,1)
 	iprice.splice9(a,1)
 	displayCart()
 }
