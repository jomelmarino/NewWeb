
window.onload = function() {
    var historyLink = document.querySelector('a[href="#table-data"]');
    
    var gradesLink = document.querySelector('a[href="#view-grade"]');
    
    var viewGradesSection = document.querySelector('#currentSemester');


    var historySection = document.querySelector('#lastSemester');

    historyLink.addEventListener('click', function() {
        viewGradesSection.style.display = 'none';
        historySection.style.display = 'block';
    });

    gradesLink.addEventListener('click', function() {
        historySection.style.display = 'none';
        viewGradesSection.style.display = 'block';
    });
};


