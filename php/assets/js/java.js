var likeButton = document.querySelector("#like_button");
var nextbutton = document.querySelector(".next_button");
var likedResult = document.querySelector(".liked");
var removePage = document.querySelector(".container");
var count = 0;
var liked = "";


likeButton.addEventListener("click", function() {
    liked = liked + imageCollection[count].alt + ", ";
    if(image.getAttribute("src") == imageCollection[count].source && count < 3){
        count++;
        nameOfCharacter.innerHTML = imageCollection[count].alt;
        image.src = imageCollection[count].source;
        image.alt = imageCollection[count].alt;
    }
    else{
        likedResult.classList.remove("white");
        dislikedResult.classList.remove("white");
        end.classList.remove("white");
        removePage.remove();
        likedResult.innerHTML = "Liked: " + liked.substring(0, liked.length-2);
       
    }
});

