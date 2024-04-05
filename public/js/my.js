
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

  function magnify(imgID, zoom) {
    var img, glass, w, h, bw;
    img = document.getElementById(imgID);
  
    glass = document.createElement("DIV");
    glass.setAttribute("class", "img-magnifier-glass");
  
   
    img.parentElement.insertBefore(glass, img);
  
   
    glass.style.backgroundImage = "url('" + img.src + "')";
    glass.style.backgroundRepeat = "no-repeat";
    glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
    bw = 3;
    w = glass.offsetWidth / 2;
    h = glass.offsetHeight / 2;

    glass.addEventListener("mousemove", moveMagnifier);
    img.addEventListener("mousemove", moveMagnifier);
  
    glass.addEventListener("touchmove", moveMagnifier);
    img.addEventListener("touchmove", moveMagnifier);
    function moveMagnifier(e) {
      var pos, x, y;
      e.preventDefault();
      pos = getCursorPos(e);
      x = pos.x;
      y = pos.y;
      if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
      if (x < w / zoom) {x = w / zoom;}
      if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
      if (y < h / zoom) {y = h / zoom;}
      glass.style.left = (x - w) + "px";
      glass.style.top = (y - h) + "px";
      glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
    }
  
    function getCursorPos(e) {
      var a, x = 0, y = 0;
      e = e || window.event;
      a = img.getBoundingClientRect();
      x = e.pageX - a.left;
      y = e.pageY - a.top;
      x = x - window.pageXOffset;
      y = y - window.pageYOffset;
      return {x : x, y : y};
    }
  }