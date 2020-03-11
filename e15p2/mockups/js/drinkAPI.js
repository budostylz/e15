var DRINKS_API = (function () {

    function calls(url) {
        try {

            //console.log('url:', url);
            let endpoint = url;

            jQuery.ajax({
                url: endpoint,
                method: "GET",
                headers: { "accept": "application/json; odata=verbose" },
                success: success_Func,
                error: error_Func
            });

        }
        catch (e) {
            console.log(e);
        }
    }//calls()

    function success_Func(data) {
        try {

            //console.log(data.drinks, data.drinks.length)

            if (typeof (Storage) !== "undefined") {

                let obj = JSON.stringify(data.drinks);

                if (sessionStorage.length > 0) {
                    //sessionStorage.setItem('drinkData', obj);
                    let drinkData = sessionStorage.getItem('drinkData');
                    obj = JSON.parse(drinkData).concat(data.drinks);
                    obj = _.sortBy(obj, [function (o) { return o.strDrink; }]);
                    //console.log('obj2', obj2);
                    //console.log('concat', obj);

                    obj = JSON.stringify(obj);
                    sessionStorage.setItem('drinkData', obj);

                    drinkData = sessionStorage.getItem('drinkData')
                    obj = JSON.parse(drinkData);

                    //console.log('obj', obj);
                    //console.log('sorted', _.sortBy(JSON.parse(drinkData).concat(data.drinks), [function (o) { return o.strDrink; }]))

                    //console.log(obj)

                } else {
                    sessionStorage.setItem('drinkData', obj);

                }


            } else {
                console.log('storage not supported');
            }

        }
        catch (e) {
            console.log(e);
            alert('Network is a Bit Slow. \nReload Page to Get Your Drink.');

        }
    }

    function error_Func(e) {
        try {
            alert('Network is a Bit Slow. \nReload Page to Get Your Drink.');
            console.log('error', e);
        }
        catch (e) {
            console.log(e);
        }
    }


    return {
        init: function (url) {
            calls(url);
        }
    };


}());





