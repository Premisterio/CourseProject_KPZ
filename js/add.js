function addToCart(itemName, itemPrice) {
    let cartWindow = document.getElementById('cart-window');

    let newItem = document.createElement('div');
    newItem.classList.add('cart-item');

    let nameElement = document.createElement('p');
    nameElement.textContent = itemName;
    newItem.appendChild(nameElement);

    let priceElement = document.createElement('p');
    priceElement.textContent = "Ціна: " + itemPrice;
    newItem.appendChild(priceElement);

    cartWindow.appendChild(newItem);
}
