/*---------------- Search System ------------------*/

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

jQuery(function($){
    var search_terms = getParameterByName('search');
    $.ajax({
        type: 'GET',
        url: 'https://bz752zb39ev6j6gtsearchnew.joq.al/search?term=' + search_terms
        }).done(function(response) {
            if(response == '') {
                $('.loading_text').html('Nuk u gjend asnj&euml; e dh&eumln&euml;!');
            }
            else
            {
                try {
                    response = JSON.parse(response);
                    var HTML_result = '';
                    for(var i = 0; i < response.length; i++) {

                        HTML_result += '<div class="box-template1"><div class="box-temp-photo1"> <a href=" '+response[i]['link']+' "><img src=" '+response[i]['image']+' "></a></div><div class="box-temp-text1"><a href=" '+response[i]['link']+' "><div class="cnt_title"> '+response[i]['title']+' </div></a><div class="date_post_tdn"> '+response[i]['post_date']+' </div></div><div class="clear"></div> </div>';

                    }
                    $('.loading_search').fadeOut();
                    $('.search_results').html(HTML_result);
                } catch(e) {
                    console.log(e);
                    $('.loading_text').html('Di&ccedilka shkoi gabim. Ju lutem provoni p&euml;rs&euml;ri!');
                }

            }
            
        }).fail(function(error){
            console.warn(error.statusText);
            $('.loading_text').html('Di&ccedilka shkoi gabim. Ju lutem provoni p&euml;rs&euml;ri!');
        })
});





