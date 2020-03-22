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

    function entry(obj, userInput, tag) {
        try {

            if (tag == 0) {
                let favoriteDrink = $('#favoriteDrink option:selected').text();
                let drinkUrl = $('#drinkUrl').val();
                console.log(favoriteDrink, drinkUrl);

                if (favoriteDrink.length > 0) {

                    $('#drinkPic').prop('src', drinkUrl);
                    $('#favoriteDrink').show();
                    $('#drinkResults').show();

                } else if (favoriteDrink == 'Select a Drink') {
                    $('#drinkPic').hide();
                }

            } else if (tag == 1) {
                getOptions(obj, userInput);
            }

        }
        catch (e) {
            console.log('entry', e)
        }
    }

    function getOptions(obj, userInput) {
        try {

            var fuse = new Fuse(obj, options);
            var result = fuse.search(userInput);
            $('#favoriteDrink').empty();

            if (result.length > 0) {

                $('#favoriteDrink').show();


            } else {

                $('#favoriteDrink').hide();
                $('#drinkResults').hide();
                $('#numberOfDrinks').val('');
                $('#drinkPic').prop('src', '');

            }


            $.each(result, function (index, o) {
                if (index == 0) {

                    $('#favoriteDrink').append(
                        $('<option></option>').val('Select a Drink').html('Select a Drink')
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
            console.log('getOptions', e);
        }
    }


    return {

        init: function (obj, userInput, tag) {
            entry(obj, userInput, tag);


        }
    };

}());

DrinkClass.init(null, null, 0);

$('#getDrink').keyup(function (e) {
    let userInput = $(this).val();
    DrinkClass.init(menu.drinks, userInput, 1);
});

$('#favoriteDrink').change(function (e) {

    let drinkName = $(this).val();
    let drinkUrl = $('option:selected', this).attr('url');


    $('#drinkUrl').val(drinkUrl);
    $('#drinkName').text(drinkName);
    $('#drinkPic').prop('src', drinkUrl);
    $('#drinkResults').show();

});








