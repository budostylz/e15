


//console.log('menu', menu.drinks)
//load api object to session storage
//DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic');
//DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic');



var DrinkClass = (function () {




    function getOptions(obj) {
        try {

            //console.log(obj);

            $.each(obj, function (index, o) {

                //console.log(index, o);
                $('#drinkResult').append(
                    $('<option></option>').val(o.strDrink).html(o.strDrink).attr('url', o.strDrinkThumb)
                );

            });

            /*
            //console.log('obj', obj)
            //console.log('userInput', userInput)
            var fuse = new Fuse(obj, options);
            var result = fuse.search(userInput);
            $('#drinkResult').empty();

            if (result.length > 0) {

                $('#drinkResult').show();


            } else {
                $('#drinkResult').hide();
                $('#drinkName').text('');
                $('#drinkPic').prop('src', '');
                $('#drinkPic').hide();
                $('#numberOfDrinksDiv').hide();
            }


            

            */


        }
        catch (e) {
            console.log(e);
            //alert('Network is a Bit Slow. \nReload Page to Get Your Drink.');
        }
    }


    return {

        init: function (obj) {
            getOptions(obj);


        }
    };

}());

//drivers
DrinkClass.init(menu.drinks);



$('#drinkResult').change(function (e) {

    /*let drinkName = $(this).val();
    let drinkUrl = $('option:selected', this).attr('url');

    console.log(drinkName, drinkUrl);

    $('#drinkName').text(drinkName);
    $('#drinkPic').prop('src', drinkUrl);
    $('#drinkPic').show();
    $('#numberOfDrinksDiv').show();*/


});

$('#numberOfDrinks').change(function () {

    //console.log(true);
    //let drinkQuantity = $(this).val();
    //console.log(drinkQuantity);


});







