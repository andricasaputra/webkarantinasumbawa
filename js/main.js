if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
    
    if (navigator.serviceWorker.controller !== null) {
        navigator.serviceWorker.controller.postMessage({'command': 'trimCaches'});
    }
  });    

}

