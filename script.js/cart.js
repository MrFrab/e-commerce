/*let carts = document.querySelectorAll('.add-cart');

let products = [
    {
    name: 'Aluminium_w',
    tag: 'Dunk High Aluminium',
    prize: 190,
    inCart:0
    }
]



for(let i=0; i<carts.length; i++){
    carts[i].addEventListener('click', ()=>{
        cartNumbers(products[i]);
    })
}

function onLoadCartNumbers(){
    let productNumbers=localStorage.getItem('cartNumbers');
    
    if(productNumbers){
        document.querySelector('#carrello span').textContent= " "+productNumbers;
    }
}


function cartNumbers(product) {
    console.log("The product clicked is ", product);
    let productNumbers=localStorage.getItem('cartNumbers');

    productNumbers=parseInt(productNumbers);

    if(productNumbers){
        localStorage.setItem('cartNumbers', productNumbers+1);
        document.querySelector('#carrello span').textContent = productNumbers+1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('#carrello span').textContent = 1;
    }
}

onLoadCartNumbers();*/
