function saveCartItems(cartItems) {
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}
function getCartItems() {
    return JSON.parse(localStorage.getItem('cartItems')) || [];
}
function displayCartItems() {
    const cartItemsContainer = document.getElementById('cart-items');
    const totalPriceElement = document.getElementById('total-price');
    const cartItems = getCartItems(); 

    let totalPrice = 0;

    cartItems.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.innerHTML = `
            <div>
                <span>${item.name}</span>
                <span>Price: ₹${item.price.toFixed(2)}</span>
            </div>
            <button class="remove-item" data-name="${item.name}">Remove</button>
        `;
        cartItemsContainer.appendChild(cartItem);

        totalPrice += item.price;
    });

    totalPriceElement.textContent = `Total: ₹${totalPrice.toFixed(2)}`;
}
function removeCartItem(event) {
    if (event.target.classList.contains('remove-item')) {
        const itemName = event.target.dataset.name;
        let cartItems = getCartItems();

        cartItems = cartItems.filter(item => item.name !== itemName);
        saveCartItems(cartItems); 

        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';
        displayCartItems();
    }
}

document.addEventListener('click', removeCartItem);

document.getElementById('checkout-button').addEventListener('click', function() {
    const cartItems = getCartItems(); 
    localStorage.setItem('checkoutCartItems', JSON.stringify(cartItems)); 
    window.location.href = 'checkout.html'; 
});
displayCartItems();