$(document).ready(function() {

   $.get('dashboard/xhrGetListings', function(o) {

      for (var i = 0; i < o.length; i++) {
         $('#listInserted').append('<div>' + o[i].text + ' <a class="del" rel="' + o[i].id + '" href="#">func</a> </div>');
      }

      $('.del').click(function() {
         delItem = $(this);
         var id = $(this).attr('rel');;
         // alert(id);
         $.post('dashboard/xhrDeleteListing', {'id' : id}, function (o) {
            // $('#listInserted').append('<div>' + o.text + ' <a class="del" rel="' + o.id + '" href="#">func</a> </div>');
            delItem.parent().remove();
         }, 'json');
         
         return false;
      });

   }, 'json');

   $('#randomInsert').submit(function () {
      var data = $(this).serialize();//Lay gia tri co trong form
      var url = $(this).attr('action');// lay duong dan URL
      $.post(url, data, function (o) {
         $('#listInserted').append('<div>' + o.text + ' <a class="del" rel="' + o.id + '" href="#">func</a> </div>'); 
      }, 'json');

      return false;
   });

   
   
});