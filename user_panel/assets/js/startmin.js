var url = '//mycms.dev/ajaxrequest/';

$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});

String.prototype.linkClean = function() {
    var x;
    var y;
    var word;
    var stop_word;
    var regex_str;
    var regex;
    var cleansed_string = this.valueOf();
    var stop_words = ["I","a","about","an","are","as","at","be","by","for","from","how","in","is","it","of","on","or","that","the","this","to","was","what","when","where","who","will","with","the"];

         
    // Split out all the individual words in the phrase
    words = cleansed_string.match(/[^\s]+|\s+[^\s+]$/g)
 
    // Review all the words
    for(x=0; x < words.length; x++) {
        // For each word, check all the stop words
        for(y=0; y < stop_words.length; y++) {
            // Get the current word
            word = words[x].replace(/\s+|[^a-z]+/ig, "");   // Trim the word and remove non-alpha
             
            // Get the stop word
            stop_word = stop_words[y];
             
            // If the word matches the stop word, remove it from the keywords
            if(word.toLowerCase() == stop_word) {
                // Build the regex
                regex_str = "^\\s*"+stop_word+"\\s*$";      // Only word
                regex_str += "|^\\s*"+stop_word+"\\s+";     // First word
                regex_str += "|\\s+"+stop_word+"\\s*$";     // Last word
                regex_str += "|\\s+"+stop_word+"\\s+";      // Word somewhere in the middle
                regex = new RegExp(regex_str, "ig");
             
                // Remove the word from the keywords
                cleansed_string = cleansed_string.replace(regex, " ");
            }
        }
    }
    if(cleansed_string.length > 10) cleansed_string = cleansed_string.substring(0,32);
    return cleansed_string.replace(/^\s+|\s+$/g, "").replace(/\s+/g, '-').toLowerCase();
}


$(document).ready(function(){
    $('#loading').fadeOut();
    $('.addpage').click(function(){
        $('#addpage')[0].reset();
    });
    $('#taber > h3').click(function(){
        $('#taber > div').slideToggle();
    });
    $('#addpage input[name="title"]').keyup(function(){
        var str = $(this).val();
        if(str.length !== 0){
            str = str.linkClean();
            $('#addpage input[name="slug"]').val(str);
        }
    });
    $('#addpage input[name="slug"]').keyup(function(){
        var str = $(this).val();
        if(str.length !== 0){
            str = str.linkClean();
            $(this).val(str);
        }
    });
    $('form').submit(function(){
         $('#loading').fadeIn();
         request('addpage','addpage',function(d){
            if(d == true){
                $('#addpage').modal('hide');
                location.reload();
            }
         });
         
         return false;
    });
})


function request(form,link,callback,reload=false){
  $("#loading").fadeIn();
  var form1 = new FormData($("#"+form)[0]);
  var getlink = url+link;
  $.ajax({
            url: getlink,
            data: form1,
            type: "POST",
            /*dataType:'text',*/
            dataType:'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(data) {
            console.log(data.status);
            $("#loading").fadeOut();
        if(data.status){
                if(reload=='true'){
                  location.reload();
                }
                $("#"+form).trigger("reset");
                callback(true);
             }
              else{
                $("#msg").html(data.msg);
                $("#msg").removeClass('alert-success');
                $("#msg").addClass('alert-danger');
                $("#msg").slideDown();
                callback(false);
              }

          },error: function(xhr,err){

               $("#loading").fadeOut();
               console.log("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
               console.log("responseText: "+xhr.responseText);
               callback(false);
          }

  });
}