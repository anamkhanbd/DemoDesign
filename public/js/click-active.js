const select = document.querySelectorAll("li");

// Loop through each li element and add a click event listener to it
select.forEach(function(li) {
    li.addEventListener("click", function() {
        // Remove "active" class from all li elements
        select.forEach(function(item) {
            item.classList.remove("active");
        });

        // Add "active" class to the clicked li element
        li.classList.add("active");
    });
});