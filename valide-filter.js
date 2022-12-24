const form = document.getElementById('filter-form');
const min = document.getElementById('min');
const max = document.getElementById('max');


//Event listener
form.addEventListener('submit', function(e) {

    let allError = 0;
    allError += isEmpty([min, max]);

    if (allError != 0)
        e.preventDefault();

});

function isEmpty(inputArr) {

    let error = 0;
    inputArr.forEach(function (input) {
        const formControl = input.parentElement;

        if (input.value.trim() === '') {
            input.className = 'form-control border-warning';
            let small = formControl.querySelector('small');
            small.style.visibility = "visible";
            ++error;

        } else {
            input.className = 'form-control';
            let small = formControl.querySelector('small');
            small.style.visibility = "hidden";

        }


    });
    return error;

}