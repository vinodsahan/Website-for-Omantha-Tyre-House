let carts = document.querySelectorAll( '.add-cart' );

let products = [
    {
        name: 'ASUS ROG STRIX SCAR III',
        brand: 'Asus',
        price: 185000,
        inCart: 0
    },
    {
        name: 'ASUS ZENBOOK 15 ',
        brand: 'Asus',
        price: 253000,
        inCart: 0
    },
    {
        name: 'ROG ZEPHYRUS M',
        brand: 'Asus',
        price:  128500,
        inCart: 0
    },
    {
        name: 'ASUS ZENBOOK DUO™ ',
        brand: 'Asus',
        price: 185000,
        inCart: 0
    },
]

for ( let i = 0; i < carts.length; i++ )
{
    carts[i].addEventListener( 'click', () =>
    {
        cartNumbers( products[i] );
        totalCost(products[i]);
    }
    )
}
function onLoadCartNumbers()
{
    let productNumbers = localStorage.getItem( 'cartNumbers' );

    if ( productNumbers )
    {
        document.querySelector( '.cart span' ).textContent = productNumbers;
    }
}

function cartNumbers(product)
{
    let productNumbers = localStorage.getItem( 'cartNumbers' );

    productNumbers = parseInt( productNumbers );
    
    if ( productNumbers )
    {
        localStorage.setItem( 'cartNumbers', productNumbers + 1 );
        document.querySelector( '.cart span' ).textContent =productNumbers + 1;
    }
    else
    {
        localStorage.setItem( 'cartNumbers', 1 );
        document.querySelector( '.cart span' ).textContent = 1;
    }

    setItems( product );
}

function setItems(product )
{
    let cartItems = localStorage.getItem( 'productsInCart' );
    cartItems = JSON.parse( cartItems );

    if ( cartItems != null )
    {
        if ( cartItems[product.brand] += undefined )
        {
            cartItems = {
                ...cartItems,
            [product.brand]:product
            }
        }
        cartItems[product.brand].inCart += 1;
    }
    else
    {
        product.inCart = 1;
        cartItems = {
            [product.brand]:product
        }
    }
   
    localStorage.setItem( "productsInCart", JSON.stringify ( cartItems ) );
}

function totalCost()
{
    let cartCost = localStorage.getItem( 'totalCost' );
    
    if ( cartCost != null )
    {
        cartCost = parseInt( cartCost );
        localStorage.setItem("totalCost",cartCost + product.price);
    }
    else
    {
        localStorage.setItem( "totalCost", product.price ); 
    }

   
}
function displayCart()
{
    let cartItems = localStorage.getItem( "productsInCart" );
    cartItems = JSON.parse( cartItems );
    let productContainer = document.querySelector( ".products" );
    let cartCost = localStorage.getItem( 'totalCost' );

    console.log(cartItems);
    if ( cartItems && productContainer )
    {
        productContainer.innerHTML = '';
        Object.values( cartItems ).map( item => {
            productContainer.innerHTML += `
            <div class="products">
                <ion-icon name="close-circle"></ion-icon>
                <img src="../assets//img/lap/${item.brand}.png">
                <span>${item.name}</span>
                <div class="price">${item.price}</div>
                <div class="quantity">
                <ion-icon name="caret-back-circle"></ion-icon>
                <span>${item.inCart}</span>
                <ion-icon name="caret-forward-outline"></ion-icon>
            </div>
            <div class="total">
                ${item.inCart * item.price}.00
            </div>
            `
        } );
        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class ="basketTotalTitle">
                    Basket Total
                </h4>
                <h4 class ="basketTotal">
                    $${cartCost},00
                </h4>

        `
    }
}
 

onLoadCartNumbers();
displayCart();