
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
        if (e.target.matches('button.delete-product')){
            deleteProductByID(e.target.value);
        }
        if (e.target.matches('.button')) {
            alert("Email sent");
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

async function deleteProductByID(id) {
    try{
        const response = await axios.delete('/product/' + id);
        if(response.data.msg==='success'){
            alert('Successfully deleted');
            window.location = '/product';
        }
    } catch (error){
        console.error(error);
    }
}

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function openModal() {
    document.getElementById("myModal").style.display = "block";
  }
  
  // Close the Modal
  function closeModal() {
    document.getElementById("myModal").style.display = "none";
  }
  
  var slideIndex1 = 1;
  showSlides(slideIndex1);
  
  // Next/previous controls
  function plusSlides(n) {
    showSlides(slideIndex1 += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex1 = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex1 = 1}
    if (n < 1) {slideIndex1 = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex1-1].style.display = "block";
    dots[slideIndex1-1].className += " active";
    captionText.innerHTML = dots[slideIndex1-1].alt;
  }