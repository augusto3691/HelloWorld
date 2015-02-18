// Initialize your app
var myApp = new Framework7({
    swipePanel: 'left'
});

// Export selectors engine
var $$ = Dom7;



// Add view
var mainView = myApp.addView('.view-main', {
    dynamicNavbar: true
});