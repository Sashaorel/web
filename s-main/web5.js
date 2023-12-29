document.addEventListener('DOMContentLoaded', function () {
    var contentDiv = document.querySelector('.content');
    var colors = ['#9370DB', '#808080', '#FFE4E1', '#E6E6FA']; 
    var currentIndex = 0;

    document.querySelector('.clickss').addEventListener('click', function(event) {
        event.preventDefault();
        contentDiv.style.backgroundColor = colors[currentIndex];
        currentIndex = (currentIndex + 1) % colors.length;
    });
});