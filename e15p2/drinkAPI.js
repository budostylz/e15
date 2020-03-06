var DRINKS_API = (function () {

    function calls(url) {
        try {

            console.log('url:', url);
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

            console.log('success', data)

        }
        catch (e) {
            console.log(e);
        }
    }

    function error_Func(e) {
        try {
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

DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Alcoholic');

DRINKS_API.init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?a=Non_Alcoholic');




