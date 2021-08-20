alert('Hi');
$("#isbn").click(function (e) {
    e.preventDefault();
    $('.divEan').hide();
    $('#issnDiv').hide();
    $('#isbnDiv').show();
});
$("#issn").click(function (e) {
    e.preventDefault();
    $('#issnDiv').show();
    $('#isbnDiv').hide();
    $('.divEan').hide();

});