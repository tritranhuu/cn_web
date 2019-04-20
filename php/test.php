<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/cart.css">
<link rel="stylesheet" type="text/css" href="../styles/cart_responsive.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>


<script>
var items = []
for (i=0; i<=localStorage.length-1; i++)  
    {  
        var key = localStorage.key(i);  
        items.push(key);
	}
	$.ajax({
    url: 'test.php',
    type: 'post',
    data: {items: items},
    success: function(response){
    }
	});
</script>