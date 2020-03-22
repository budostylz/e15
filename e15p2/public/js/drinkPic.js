


//integrate in DrinkClass
let favoriteDrink = $('#favoriteDrink option:selected').text();
let drinkUrl = $('#drinkUrl').val();
//console.log(favoriteDrink, drinkUrl);

if (favoriteDrink.length > 0) {

    $('#drinkPic').prop('src', drinkUrl);
    $('#favoriteDrink').show();
    $('#drinkResults').show();

}

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

            //console.log(obj, userInput);
            //console.log('obj', obj)
            //console.log('userInput', userInput)
            var fuse = new Fuse(obj, options);
            var result = fuse.search(userInput);
            $('#favoriteDrink').empty();

            if (result.length > 0) {

                $('#favoriteDrink').show();


            } else {
                $('#favoriteDrink').hide();
                $('#drinkResults').hide();

                $('#drinkName').text('');
                $('#drinkPic').prop('src', '');
                //$('#drinkPic').hide();
                //$('#numberOfDrinksDiv').hide();
            }


            $.each(result, function (index, o) {

                //console.log(index, o);

                if (index == 0) {

                    $('#favoriteDrink').append(
                        $('<option></option>').val('intro').html('Select a Drink')
                    );

                    $('#favoriteDrink').append(
                        $('<option></option>').val(o.strDrink).html(o.strDrink).attr('url', o.strDrinkThumb)
                    );

                } else {

                    $('#favoriteDrink').append(
                        $('<option></option>').val(o.strDrink).html(o.strDrink).attr('url', o.strDrinkThumb)
                    );

                }



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
    DrinkClass.init(menu.drinks, userInput);
});

$('#favoriteDrink').change(function (e) {

    let drinkName = $(this).val();
    let drinkUrl = $('option:selected', this).attr('url');

    console.log(drinkName, drinkUrl);

    $('#drinkUrl').val(drinkUrl);
    $('#drinkName').text(drinkName);
    $('#drinkPic').prop('src', drinkUrl);
    $('#drinkResults').show();

});








