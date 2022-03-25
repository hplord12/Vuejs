(function ($) {
    console.log("111111");
    new Vue({
        el: '#app',

        data: {
            hello: 'Hello World, Again!',
            names: [
                {firstname: 'John', lastname:'Doe'},
                {firstname: 'Jane', lastname:'Jones'},
                {firstname: 'Will ', lastname:'Smith'}
            ]
        }
    })
  })(jQuery);