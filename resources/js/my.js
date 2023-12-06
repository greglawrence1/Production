//https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch
//https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods
//https://developer.mozilla.org/en-US/docs/Web/HTTP/Status

window.onload = function() {
    document.addEventListener('change', e => {    
        if (e.target.matches('select.select-box')) {
            //example for dropdown list event
        }
    });   
    document.addEventListener('click', e => {
        if (e.target.matches('button.select-product')) {
            getProductByID(e.target.value);
        }
        if (e.target.matches('button.edit-product')) {
            //example for button click event
        }
        
    });
}

function  getProductByID(id) {
    window.location= "/product/"+id;
}


//example of what an axios async function might look like (axios is a node package)
async function  filterByProductType(id) {
    try{
        const response = await axios.get('/search',
            {params: {producttype:id}}
        );
        
        var filter = document.getElementById("productlist");
        filter.innerHTML = response.data;
                
    }
    catch (error) {
        console.error(error);
    }
}

