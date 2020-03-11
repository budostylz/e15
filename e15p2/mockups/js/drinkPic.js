//hide drink resuts textbox
$('#getDrinkResult').hide();


//reset session storage
sessionStorage.clear();

//load api object to session storage
DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic');
DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic');

$('#getDrink').keyup(function (e) {

    let userInput = $(this).val();
    let drinkData = sessionStorage.getItem('drinkData')
    let obj = JSON.parse(drinkData);

    //console.log(userInput)

    console.log(

        _.find(obj, function (o) {
            //console.log(o.strDrink.search(userInput) > -1);
            return o.strDrink.search(userInput) > -1
        })


    )


    console.log(obj);
});