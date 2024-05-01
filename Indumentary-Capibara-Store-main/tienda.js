const btnCart = document.querySelector('.container-cart-icon');
const containerCartProducts = document.querySelector('.container-cart-products');
const cartInfo = document.querySelector('.cart-product');
const rowProduct = document.querySelector('.row-product');
const productList = document.querySelector('.container_items');
let allProductos = [];
const valorTotal = document.querySelector('.total-pagar');
const countProduct = document.querySelector('#contador-productos');

btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle('hidden-cart');
});

productList.addEventListener('click', e =>{
    if(e.target.classList.contains('btn-add-cart')){
        const product = e.target.parentElement;
        const infoProduct = {
            quantity: 1,
            title: product.querySelector('h2').textContent,
            price: product.querySelector('p').textContent,
        };

        const exists = allProductos.some(product => product.title === infoProduct.title);

        if(exists){1
            const products = allProductos.map(product => {
                if(product.title === infoProduct.title){
                    product.quantity++;
                    return product;
                }else{
                    return product;
                }
            });
            allProductos = [...products];
        }else{
            allProductos.push(infoProduct);
        }
        
        showPHP();
    }
});

// Manejador de eventos para el contenedor "container_items2"
const productList2 = document.querySelector('.container_items2');

productList2.addEventListener('click', e => {
    if(e.target.classList.contains('btn-add-cart')){
        const product = e.target.parentElement;
        const infoProduct = {
            quantity: 1,
            title: product.querySelector('h2').textContent,
            price: product.querySelector('p').textContent,
        };

        const exists = allProductos.some(product => product.title === infoProduct.title);

        if(exists){
            const products = allProductos.map(product => {
                if(product.title === infoProduct.title){
                    product.quantity++;
                    return product;
                }else{
                    return product;
                }
            });
            allProductos = [...products];
        }else{
            allProductos.push(infoProduct);
        }
        
        showPHP();
    }
});

// Función para eliminar una unidad de un producto del carrito
function removeProductUnit(title) {
    allProductos.forEach(product => {
        if (product.title === title) {
            product.quantity--;
            if (product.quantity === 0) {
                // Si la cantidad llega a cero, eliminamos el producto del array
                allProductos = allProductos.filter(item => item.title !== title);
            }
            return;
        }
    });
    showPHP();
}

// Manejador de eventos para eliminar una unidad de un producto del carrito
containerCartProducts.addEventListener('click', e => {
    if (e.target.classList.contains('btn-remove-unit')) {
        const title = e.target.dataset.title;
        removeProductUnit(title);
    }
});

// Función para mostrar los productos en HTML
function showPHP() {
    containerCartProducts.innerHTML = ''; // Limpiamos el contenido del contenedor
    
    allProductos.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('cart-product');

        const productInfo = `
            <p>${product.title}</p>
            <p>Precio: ${product.price}</p>
            <p>Cantidad: ${product.quantity}</p>
            <button class="btn-remove-unit" data-title="${product.title}">Eliminar 1 unidad</button>
        `;
        
        productDiv.innerHTML = productInfo;
        containerCartProducts.appendChild(productDiv);
    });

    // Calculamos el valor total
    let total = 0;
    allProductos.forEach(product => {
        total += parseFloat(product.price) * product.quantity;
    });
    valorTotal.textContent = `Total a pagar: ${total.toFixed(2)}`;

    // Actualizamos el contador de productos
    let totalCount = 0;
    allProductos.forEach(product => {
        totalCount += product.quantity;
    });
    countProduct.textContent = totalCount;
}


