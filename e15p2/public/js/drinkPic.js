


//integrate in DrinkClass
let drinkResult = $('#drinkResult option:selected').text();
let drinkUrl = $('#drinkUrl').val();
console.log(drinkResult, drinkUrl);

if (drinkResult.length > 0) {

    $('#drinkPic').prop('src', drinkUrl);
    $('#drinkResult').show();
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
            $('#drinkResult').empty();

            if (result.length > 0) {

                $('#drinkResult').show();


            } else {
                $('#drinkResult').hide();
                $('#drinkResults').hide();

                $('#drinkName').text('');
                $('#drinkPic').prop('src', '');
                //$('#drinkPic').hide();
                //$('#numberOfDrinksDiv').hide();
            }


            $.each(result, function (index, o) {

                //console.log(index, o);

                if (index == 0) {

                    $('#drinkResult').append(
                        $('<option></option>').val('intro').html('Select a Drink')
                    );

                    $('#drinkResult').append(
                        $('<option></option>').val(o.strDrink).html(o.strDrink).attr('url', o.strDrinkThumb)
                    );

                } else {

                    $('#drinkResult').append(
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

$('#drinkResult').change(function (e) {

    let drinkName = $(this).val();
    let drinkUrl = $('option:selected', this).attr('url');

    console.log(drinkName, drinkUrl);

    $('#drinkUrl').val(drinkUrl);
    $('#drinkName').text(drinkName);
    $('#drinkPic').prop('src', drinkUrl);
    $('#drinkResults').show();

});








