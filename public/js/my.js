window.onload = function () {

    document.addEventListener('change', e => {
        if (e.target.matches('select.select-box')) {
            filterByProductType(e.target.value);
        }
    });
    document.addEventListener('click', e => {
        if (e.target.matches('button.select-product')) {
            getProductByID(e.target.value);
        }
        if (e.target.matches('button.update-product')) {
            updateProductByID(e.target.value);
        }
        if (e.target.matches('button.buy-product')) {
            buyProductByID(e.target.value);
        }
    });
}

function buyProductByID(id) {
    alert('product purchased');
}

function getProductByID(id) {
    window.location = "/product/" + id;
}

function updateProductByID(id) {
    window.location = "/product/" + id + "/edit";
}

async function filterByProductType(id) {
    if (id == 0) window.location = "/products/"
    else {
        try {
            const response = await axios.get('/filter',
                {params: {producttype: id}}
            );

            var filter = document.getElementById("productlist");
            filter.innerHTML = response.data;
            var pagination = document.getElementById("pagination");
            pagination.innerHTML = "<br><br>";

        } catch (error) {
            console.error(error);
        }
    }
}