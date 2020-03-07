


var ShowPicClass = (function () {

    function showPic(obj) {
        try {


            //send to server and return url
            if (obj.photos) {

                console.log('inside showPic', obj.photos[0].getUrl());
                console.log(obj)
                let barName = obj.name;
                let barUrl = obj.photos[0].getUrl();
                $('#barName').text(barName);
                $('#placePic').prop('src', barUrl);


            }






        }
        catch (e) {
            console.log(e);
        }
    }


    return {

        init: function (obj) {
            showPic(obj);


        }
    };

}());










