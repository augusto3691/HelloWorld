// Initialize your app
var myApp = new Framework7({
    swipePanel: 'left'
});

// Export selectors engine
var $$ = Dom7;



$$('form.ajax-submit').on('submitted', function (e) {


    var response = JSON.parse(e.detail.xhr.responseText);
    if ((response.success)) {
//        myapp.viewport('troca viewport');
    } else {
        myApp.alert(response.error.message);
    }

});