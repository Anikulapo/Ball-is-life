const cartIcon = document.querySelector(".cart-item");
const cart = document.querySelector(".cart1");
const cartClose = document.querySelector("#cart-close");

// Toggle cart visibility
cartIcon.addEventListener("click", () => cart.classList.add("active"));
cartClose.addEventListener("click", () => cart.classList.remove("active"));

const addCartButtons = document.querySelectorAll(".cart.add-cart");
addCartButtons.forEach(button => {
    button.addEventListener("click", event => {
        const productBox = event.target.closest(".product-box"); 
        if (productBox) {
            addToCart(productBox);
        }
    });
});

const cartContent = document.querySelector(".cart-content");

const addToCart = productBox => {
    const productImgSrc = productBox.querySelector(".product").src;
    const productTitle = productBox.querySelector(".product-title").textContent;
    const productPrice = productBox.querySelector(".price").textContent;

    const cartItems = cartContent.querySelectorAll(".cart-product-title");
    for (let item of cartItems) {
        if (item.textContent === productTitle) {
            alert("This item is already in your cart.");
            return;
        }
    }

    const cartBox = document.createElement("div");
    cartBox.classList.add("cart-box");
    cartBox.innerHTML = `
        <img src="${productImgSrc}" alt="" class="prod">
        <div class="cart-detail">
            <h2 class="cart-product-title">${productTitle}</h2>
            <h2 class="cart-price">${productPrice}</h2>
            <div class="cart-quantity">
                <button class="decrement">-</button>
                <span class="number">1</span>
                <button class="increment">+</button>
            </div>
        </div>
        <img src="images/delete-1487-svgrepo-com.svg" alt="" class="cart-remove">
    `;
    cartContent.appendChild(cartBox);

    // Remove item from cart
    cartBox.querySelector(".cart-remove").addEventListener("click", () => {
        cartBox.remove();
        updateTotalPrice();
    });

    // Update quantity
    const quantityButtons = cartBox.querySelectorAll(".cart-quantity button");
    quantityButtons.forEach(button => {
        button.addEventListener("click", event => {
            const numberElement = cartBox.querySelector(".number");
            let quantity = parseInt(numberElement.textContent);

            if (event.target.classList.contains("decrement") && quantity > 1) {
                quantity--;
            } else if (event.target.classList.contains("increment")) {
                quantity++;
            }
            numberElement.textContent = quantity;
            updateTotalPrice();
        });
    });

    updateTotalPrice();
};

const updateTotalPrice = () => {
    const totalPriceElement = document.querySelector(".total-price");
    const cartBoxes = cartContent.querySelectorAll(".cart-box");
    let total = 0;

    cartBoxes.forEach(cartBox => {
        const priceElement = cartBox.querySelector(".cart-price");
        const quantityElement = cartBox.querySelector(".number");
        const price = parseFloat(priceElement.textContent.replace("$", ""));
        const quantity = parseInt(quantityElement.textContent);
        total += price * quantity;
    });

    totalPriceElement.textContent = `$${total.toFixed(2)}`;
};

const updateCartCount = (count) => {
    const cartCountElement = document.querySelector(".cart-item-count");
    if (count === 0) {
        cartCountElement.style.visibility = "hidden";
    } else {
        cartCountElement.style.visibility = "visible";
        cartCountElement.textContent = count;
    }
};

const buyNowButton = document.querySelector(".btn-buy");
buyNowButton.addEventListener("click", () => {
    const cartBoxes = cartContent.querySelectorAll(".cart-box");
    if (cartBoxes.length === 0) {
        alert("Your cart is empty. Please add items to your cart before Clicking Buy");
        return;
    }

    cartBoxes.forEach(cartBox => cartBox.remove());
    updateCartCount(0);
    updateTotalPrice();

    // Delay alert for smoother UX
    setTimeout(() => alert("Thank you for your purchase!"), 300);
});
