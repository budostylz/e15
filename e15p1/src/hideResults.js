
import $ from 'jquery';

var results = (function () {

    let palindrome_result = $('#palindrome').text().length;
    let vowel_count_result = $('#vowelcount').text().length;
    let letter_shift_result = $('#lettershift').text().length;
    let userInput = $("input[name='userInput']");
    let resultDisplay = $('.resultDisplay');

    function control_results_by_page_load() {

        try {

            (palindrome_result > 0 || vowel_count_result > 0 || letter_shift_result > 0)
                ? resultDisplay.show()
                : resultDisplay.hide();
        }
        catch (e) {
            console.log(e);
        }

    }


    function control_results_by_typing() {

        try {

            userInput.keyup(function () {
                resultDisplay.hide();
            });


        }
        catch (e) {
            console.log(e);
        }

    }

    return {
        init_results: function () {
            control_results_by_page_load();
            control_results_by_typing();
        }
    };


}());


//results namespace
results.init_results();



