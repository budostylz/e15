
//reset session storage
sessionStorage.clear();

//load api object to session storage
DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic');
DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic');



var DrinkClass = (function () {

    //set fuse
    var options = {
        shouldSort: true,
        threshold: 0.6,
        location: 0,
        distance: 100,
        maxPatternLength: 32,
        minMatchCharLength: 1,
        keys: ["strDrink"]
    };


    function getOptions(obj, userInput) {
        try {

            //console.log('obj', obj)
            //console.log('userInput', userInput)
            var fuse = new Fuse(obj, options);
            var result = fuse.search(userInput);
            (result.length > 0) ? $('#drinkResult').show() : $('#drinkResult').hide();
            $('#drinkResult').empty();



            $.each(result, function (index, o) {

                $('#drinkResult').append(
                    $('<option></option>').val(o.strDrink).html(o.strDrink).attr('url', o.strDrinkThumb)
                );
            });


        }
        catch (e) {
            console.log(e);
        }
    }


    return {

        init: function (obj, userInput) {
            getOptions(obj, userInput);


        }
    };

}());


$('#getDrink').keyup(function (e) {
    let userInput = $(this).val();
    let drinkData = sessionStorage.getItem('drinkData');
    let obj = JSON.parse(drinkData);
    DrinkClass.init(obj, userInput);
});

$('#drinkResult').change(function (e) {

    let drinkName = $(this).val();
    let drinkUrl = $('option:selected', this).attr('url');

    console.log(drinkName, drinkUrl);

    $('#drinkName').text(drinkName);
    $('#drinkPic').prop('src', drinkUrl);

});







