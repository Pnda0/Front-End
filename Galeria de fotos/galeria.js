const search = document.querySelector(".search-box input"),
      images = document.querySelectorAll(".image-box");

search.addEventListener("keyup", e =>{
    if (e.key == "Enter"){
        let searcValue = search.value,
            value = searcValue.toLowerCase();
            images.forEach(image =>{
                if(value === image.dataset.name){
                    return image.style.display = "block";
                }
                image.style.display = "none";
            });
    }
});

search.addEventListener("keyup", () =>{
    if(search.value != "") return;

    images.forEach(image => {
        image.style.display= "block";
    })
})