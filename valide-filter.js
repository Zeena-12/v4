const form = document.getElementById('filter-form');
const min = document.getElementById('min');
const max = document.getElementById('max');
const check = document.getElementsByClassName('form-check-input');

//Event listener

const ck = parseInt(check.length);
console.log(ck);
form.addEventListener('submit', function(e) {
    e.preventDefault();
    let allError = 0;
    allError += isEmpty([min, max]);
    allError += isCheck(ck);

    if (allError == 0)
        form.submit();

    if (allError != 0)
        e.preventDefault();

});

function isEmpty(inputArr) {

    let error = 0;
    inputArr.forEach(function(input) {
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

function isCheck(input) {
    let error = 0;

    if (input != 0) {
        document.getElementById('empty-category').style.visibility = 'hidden';
    } else {
        document.getElementById('empty-category').style.visibility = 'visible';
        ++error;
    }
    return error;
}