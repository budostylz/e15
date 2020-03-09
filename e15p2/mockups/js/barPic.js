
var ShowPicClass = (function () {

    //hide image
    $('#placePic').hide();

    function showPic(obj) {
        try {
            //console.log('obj.types', obj.types.indexOf('bar'));
            //send to server and return url

            let checkBar = obj.types.indexOf('bar');
            $('#placeType').val(checkBar);


            if (obj.photos) {
                $('#placePic').show();
                //console.log('inside showPic', obj.photos[0].getUrl());
                //console.log(obj)
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










