var link = document.getElementById("link");





for( var i = 0; i < link.length; i++) {
   
    link[i].addEventListener("click", () => {
        var current = 
        document.getElementsByClassName("active");

       
            current[0].className = 
            current[0].className.replace("active", "");
        
        this.className += "active";
    });

}