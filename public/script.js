function addToCart (){
    alert("Item added to cart");
}

function removeItem (){
    if (confirm("Do u want to remove this item from cart?")) {
        alert("Item removed from cart");
    }else{
        alert("Item not removed from cart");
    }
}