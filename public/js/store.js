
// Fetch and display products
document.addEventListener('DOMContentLoaded', () => {
    fetch('http://localhost:3000/products')
        .then(response => response.json())
        .then(products => {
            displayProducts('laptops', products.filter(product => product.category === 'laptop'));
            displayProducts('desktops', products.filter(product => product.category === 'desktop'));
            displayProducts('harddrives', products.filter(product => product.category === 'hard drive'));
            displayProducts('network', products.filter(product => product.category === 'network equipment'));
        })
        .catch(error => console.error('Error fetching products:', error));
});

function displayProducts(containerId, products) {
    const container = document.getElementById(containerId);
    container.innerHTML = ''; // Clear any existing content

    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.className = 'col-lg-3 col-md-6 mb-4';
        productCard.innerHTML = `
            <div class="card">
                <img src="${product.image}" class="card-img-top" alt="${product.name}">
                <div class="card-body">
                    <h5 class="card-title">${product.name}</h5>
                    <p class="card-text">${product.description}</p>
                    <p class="card-text text-primary">$${product.price.toFixed(2)}</p>
                    <a href="#" class="btn btn-primary">Buy Now</a>
                </div>
            </div>
        `;
        container.appendChild(productCard);
    });
}
